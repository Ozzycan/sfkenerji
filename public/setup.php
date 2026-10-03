<?php

echo "<h2>SFK Enerji - Kurulum ve Optimizasyon Sihirbazı</h2>";
echo "<hr>";

// 1. Storage Link (Sembolik Bağlantı) İşlemi
$targetFolder = __DIR__ . '/../storage/app/public';
$linkFolder = __DIR__ . '/storage';

echo "<h3>1. Storage Link Kontrolü</h3>";
if (file_exists($linkFolder) && is_link($linkFolder)) {
    echo "<p style='color: green;'>✅ Storage linki zaten mevcut.</p>";
} else {
    try {
        if(function_exists('symlink')) {
            $success = @symlink($targetFolder, $linkFolder);
            if($success) {
                echo "<p style='color: green;'>✅ Sembolik bağlantı (Storage Link) başarıyla oluşturuldu.</p>";
            } else {
                echo "<p style='color: red;'>❌ Sembolik bağlantı oluşturulamadı (Hosting firmanız 'symlink' fonksiyonunu kısıtlamış olabilir).</p>";
            }
        } else {
            echo "<p style='color: red;'>❌ 'symlink' fonksiyonu sunucuda kapalı. Lütfen hosting firmanızla görüşün.</p>";
        }
    } catch (\Exception $e) {
        echo "<p style='color: red;'>❌ Hata: " . $e->getMessage() . "</p>";
    }
}

// 2. Önbellek (Cache) Temizleme İşlemi
echo "<h3>2. Önbellek (Cache) Temizleme</h3>";
try {
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';

    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    
    // optimize:clear
    $kernel->handle(
        new Symfony\Component\Console\Input\ArrayInput(['command' => 'optimize:clear']),
        new Symfony\Component\Console\Output\BufferedOutput()
    );
    echo "<p style='color: green;'>✅ Tüm önbellek (Cache, Config, Views, Routes) başarıyla temizlendi.</p>";
    
    // Eğer veritabanı ayarlarınız (.env) doğruysa migrate işlemini de deneyebiliriz (İsteğe bağlı - kapalı tutuyorum)
    // $kernel->handle(new Symfony\Component\Console\Input\ArrayInput(['command' => 'migrate', '--force' => true]), new Symfony\Component\Console\Output\BufferedOutput());
    
} catch (\Exception $e) {
    echo "<p style='color: red;'>❌ Önbellek temizleme sırasında bir hata oluştu: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h3 style='color: red;'>⚠️ GÜVENLİK UYARISI ⚠️</h3>";
echo "<p>İşlemler tamamlandı. Güvenliğiniz için lütfen bu sayfayı kapattıktan sonra sunucunuzdaki <b>public/setup.php</b> dosyasını SİLİNİZ!</p>";

?>
