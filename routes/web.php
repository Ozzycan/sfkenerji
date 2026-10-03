<?php

use Illuminate\Support\Facades\Route;

use App\Models\EnergyPackage;
use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;

Route::get('/', function () {
    $packages = EnergyPackage::latest()->get();
    $projects = Project::orderBy('sort_order', 'asc')->get();
    $services = Service::orderBy('sort_order', 'asc')->get();
    
    $settings = SiteSetting::first() ?? new SiteSetting([
        'phone' => '444 28 79',
        'email' => 'info@sfkenerji.com.tr',
        'address' => 'Erzurum, Türkiye',
        'vision_title' => 'Firmamız;',
        'vision_description' => 'Enerji altyapı yatırımları alanında faaliyet göstermek üzere, genç mühendislerden oluşan yeni ve dinamik bir yapılanma ile hizmete başlamıştır. En önemli hedefimiz tüm Türkiye\'de var olarak, enerji yatırımlarında çözüm ortağınız olmaktır.',
        'facebook_link' => 'https://facebook.com/sfkenerji',
        'instagram_link' => 'https://instagram.com/sfkenerji',
        'linkedin_link' => 'https://twitter.com/sfkenerji',
        'metric_1_val' => '15+',
        'metric_1_lbl' => 'Kurulu Güç Kapasitesi',
        'metric_2_val' => '450+',
        'metric_2_lbl' => 'Tamamlanan Proje',
        'metric_3_val' => '%100',
        'metric_3_lbl' => 'Sürdürülebilir Mühendislik',
        'metric_4_val' => '24/7',
        'metric_4_lbl' => 'Aktif İzleme & Destek',
    ]);

    return view('welcome', compact('packages', 'projects', 'services', 'settings'));
});

// Teklif Formu Gönderme Rotası
Route::post('/send-quote', function (\Illuminate\Http\Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:50',
        'email' => 'required|email|max:255',
        'interest' => 'nullable|string|max:255',
        'message' => 'nullable|string'
    ]);

    // HTML Şablon - Firmaya Giden
    $adminHtml = '
    <div style="font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <div style="background-color: #0f172a; padding: 20px; text-align: center;">
            <h2 style="color: #ffffff; margin: 0; font-weight: 600;">Yeni Teklif Talebi</h2>
        </div>
        <div style="padding: 30px; background-color: #f8fafc;">
            <p style="font-size: 15px; margin-bottom: 25px; color: #475569;">Web siteniz üzerinden yeni bir teklif talebi geldi. Detaylar aşağıdadır:</p>
            
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 25px; background: #fff; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0;">
                <tr>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #e2e8f0; font-weight: 600; width: 130px; color: #0f172a;">İsim / Firma:</td>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #e2e8f0; color: #334155;">' . htmlspecialchars($data['name']) . '</td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #e2e8f0; font-weight: 600; color: #0f172a;">Telefon:</td>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #e2e8f0;"><a href="tel:' . htmlspecialchars($data['phone']) . '" style="color: #2563eb; text-decoration: none; font-weight: 500;">' . htmlspecialchars($data['phone']) . '</a></td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #e2e8f0; font-weight: 600; color: #0f172a;">E-posta:</td>
                    <td style="padding: 12px 15px; border-bottom: 1px solid #e2e8f0;"><a href="mailto:' . htmlspecialchars($data['email']) . '" style="color: #2563eb; text-decoration: none; font-weight: 500;">' . htmlspecialchars($data['email']) . '</a></td>
                </tr>
                <tr>
                    <td style="padding: 12px 15px; font-weight: 600; color: #0f172a;">İlgilenilen:</td>
                    <td style="padding: 12px 15px; color: #334155;">' . htmlspecialchars($data['interest']) . '</td>
                </tr>
            </table>
            
            <div style="background-color: #ffffff; padding: 20px; border: 1px solid #e2e8f0; border-left: 4px solid #3b82f6; border-radius: 6px;">
                <h4 style="margin-top: 0; color: #0f172a; margin-bottom: 10px;">Mesaj / Talep Edilen Paket:</h4>
                <p style="margin: 0; line-height: 1.6; white-space: pre-wrap; color: #475569;">' . htmlspecialchars($data['message']) . '</p>
            </div>
        </div>
        <div style="background-color: #f1f5f9; padding: 15px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0;">
            Bu e-posta SFK Enerji web sitesinden otomatik olarak gönderilmiştir.
        </div>
    </div>';

    // HTML Şablon - Müşteriye Giden
    $customerHtml = '
    <div style="font-family: Arial, sans-serif; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
        <div style="background-color: #2563eb; padding: 30px 20px; text-align: center;">
            <h2 style="color: #ffffff; margin: 0; font-weight: 600; font-size: 24px;">Teklif Talebiniz Alındı</h2>
        </div>
        <div style="padding: 40px 30px; background-color: #ffffff; text-align: center;">
            <h3 style="color: #0f172a; margin-top: 0; font-size: 20px;">Merhaba ' . htmlspecialchars($data['name']) . ',</h3>
            <p style="font-size: 16px; line-height: 1.6; color: #475569; margin-bottom: 20px;">
                Güneş enerjisi sistemlerimizle ilgilendiğiniz için teşekkür ederiz. Teklif talebiniz sistemimize başarıyla ulaştı.
            </p>
            <p style="font-size: 16px; line-height: 1.6; color: #475569; margin-bottom: 30px;">
                Mühendislik ekibimiz talebinizi ve paket içeriğini inceledikten sonra en kısa sürede sizinle iletişime geçecektir.
            </p>
            
            <div style="margin-top: 30px; padding-top: 30px; border-top: 1px solid #e2e8f0; text-align: left; background: #f8fafc; border-radius: 8px; padding: 20px;">
                <p style="margin: 0; color: #0f172a; font-weight: bold; font-size: 16px;">SFK Enerji A.Ş.</p>
                <p style="margin: 8px 0 0 0; color: #64748b; font-size: 14px;">Erzurum, Türkiye</p>
                <p style="margin: 8px 0 0 0; font-size: 14px;">
                    <a href="mailto:info@sfkenerji.com.tr" style="color: #2563eb; text-decoration: none; font-weight: 500;">info@sfkenerji.com.tr</a> &nbsp;|&nbsp; 
                    <a href="tel:4442879" style="color: #2563eb; text-decoration: none; font-weight: 500;">444 28 79</a>
                </p>
            </div>
        </div>
    </div>';

    // Önbellekte takılı kalan ayarları %100 by-pass etmek için Laravel'i devreden çıkarıp
    // doğrudan Symfony Mailer altyapısını kullanıyoruz.
    try {
        $dsn = 'smtps://' . urlencode('info@sfkenerji.com.tr') . ':' . urlencode('j1J+7a1J') . '@srvc222.trwww.com:465';
        $transport = \Symfony\Component\Mailer\Transport::fromDsn($dsn);
        $mailer = new \Symfony\Component\Mailer\Mailer($transport);

        // Firmaya giden mail
        $adminEmail = (new \Symfony\Component\Mime\Email())
            ->from(new \Symfony\Component\Mime\Address('info@sfkenerji.com.tr', 'SFK Enerji Web'))
            ->to('info@sfkenerji.com.tr')
            ->replyTo($data['email'])
            ->subject('Yeni Teklif Talebi: ' . $data['name'])
            ->html($adminHtml);
        
        $mailer->send($adminEmail);

        // Müşteriye giden mail
        $customerEmail = (new \Symfony\Component\Mime\Email())
            ->from(new \Symfony\Component\Mime\Address('info@sfkenerji.com.tr', 'SFK Enerji A.Ş.'))
            ->to($data['email'])
            ->subject('Teklif Talebiniz Alındı - SFK Enerji')
            ->html($customerHtml);

        $mailer->send($customerEmail);

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('Mail gönderme hatası: ' . $e->getMessage());
        return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    }
});

// --- PAYLAŞIMLI HOSTING İÇİN YARDIMCI ROTALAR ---

// Önbelleği temizle (Giriş sorunu ve güncellemeler için)
Route::get('/cache-temizle', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('optimize:clear');
        \Illuminate\Support\Facades\Artisan::call('view:clear');
        \Illuminate\Support\Facades\Artisan::call('cache:clear');
        \Illuminate\Support\Facades\Artisan::call('route:clear');
        \Illuminate\Support\Facades\Artisan::call('config:clear');
        \Illuminate\Support\Facades\Artisan::call('filament:assets');
        return 'Tebrikler! Tüm önbellekler (Cache, View, Route, Config) başarıyla temizlendi ve assets güncellendi. <br><a href="/">Ana Sayfaya Dön</a>';
    } catch (\Throwable $e) {
        return 'Önbellek temizlenirken bir hata oluştu: ' . $e->getMessage();
    }
});

// Resimlerin görünmesi için storage link oluştur
Route::get('/storage-bagla', function () {
    try {
        if (file_exists(public_path('storage'))) {
            @unlink(public_path('storage'));
        }
        \Illuminate\Support\Facades\Artisan::call('storage:link');
        return 'Storage link başarıyla oluşturuldu! Artık yüklediğiniz resimler görünecektir. <br><a href="/">Ana Sayfaya Dön</a>';
    } catch (\Throwable $e) {
        return 'Storage link oluşturulurken hata: ' . $e->getMessage();
    }
});

// Veritabanı tablolarını güvenli şekilde güncelle (Veri kaybetmeden)
Route::get('/veritabani-guncelle', function () {
    try {
        $output = new \Symfony\Component\Console\Output\BufferedOutput();
        \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true], $output);
        return 'Veritabanı tabloları başarıyla güncellendi! Çıktı: <br><pre>' . $output->fetch() . '</pre><br><a href="/">Ana Sayfaya Dön</a>';
    } catch (\Throwable $e) {
        return 'Veritabanı güncellenirken bir hata oluştu: ' . $e->getMessage();
    }
});

// DİKKAT: Veritabanını sıfırla (Tüm veriler silinir!)
Route::get('/veritabani-sifirla-ve-kur', function () {
    try {
        $output = new \Symfony\Component\Console\Output\BufferedOutput();
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true, '--force' => true], $output);
        return 'Tebrikler! Veritabanı SIFIRLANDI, tablolar yeniden oluşturuldu ve örnek veriler yüklendi. Çıktı: <br><pre>' . $output->fetch() . '</pre><br><a href="/">Ana Sayfaya Dön</a>';
    } catch (\Throwable $e) {
        return 'Hata oluştu: ' . $e->getMessage();
    }
});

// Paylaşımlı hostinglerde kırık symlink sorununu aşmak için alternatif resim gösterici
Route::get('/image-render', function (\Illuminate\Http\Request $request) {
    $path = $request->query('path');
    if (!$path) abort(404);
    
    // Güvenlik: Sadece public disk içindeki dosyalara izin ver
    $path = str_replace('..', '', $path);
    $fullPath = storage_path('app/public/' . $path);
    
    if (file_exists($fullPath)) {
        return response()->file($fullPath);
    }
    
    abort(404);
});
