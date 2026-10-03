<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Default User
        if (User::count() === 0) {
            User::factory()->create([
                'name' => 'SFK Admin',
                'email' => 'admin@sfkenerji.com.tr',
                'password' => bcrypt('password'),
            ]);
        }

        // Default Site Settings
        if (SiteSetting::count() === 0) {
            SiteSetting::create([
                'phone' => '444 28 79',
                'email' => 'info@sfkenerji.com.tr',
                'address' => 'Erzurum, Türkiye',
                'vision_title' => 'Firmamız;',
                'vision_description' => 'Enerji altyapı yatırımları alanında faaliyet göstermek üzere, genç mühendislerden oluşan yeni ve dinamik bir yapılanma ile hizmete başlamıştır. En önemli hedefimiz tüm Türkiye\'de var olarak, enerji yatırımlarında çözüm ortağınız olmaktır.',
                'facebook_link' => 'https://facebook.com/sfkenerji',
                'instagram_link' => 'https://instagram.com/sfkenerji',
                'linkedin_link' => 'https://twitter.com/sfkenerji',
                'metric_1_val' => '15+',
                'metric_1_lbl' => 'MW Kurulu Güç',
                'metric_2_val' => '450+',
                'metric_2_lbl' => 'Tamamlanan Proje',
                'metric_3_val' => '%100',
                'metric_3_lbl' => 'Sürdürülebilir Mühendislik',
                'metric_4_val' => '24/7',
                'metric_4_lbl' => 'Aktif İzleme & Destek',
                
                // New default values
                'hero_badge' => 'Geleceğin Enerji Altyapıları',
                'hero_title' => 'Enerjinin <br /> <span class="text-gradient-emerald-blue">Kusursuz Hali.</span>',
                'hero_description' => 'Fabrikalar, ticari binalar ve konutlar için sürdürülebilir, yüksek verimli ve yenilikçi enerji altyapı mühendisliği. Geleceği asimetrik teknolojiyle bugünden kurun.',
                'hero_cta_1' => 'Yatırımını Hesapla',
                'hero_cta_2' => 'Sistem Paketleri',
                
                'vision_badge' => 'Şirket Profilimiz',
                'vision_quote' => 'En önemli hedefimiz tüm Türkiye\'de var olarak, enerji yatırımlarında çözüm ortağınız olmaktır.',
                
                'services_badge' => 'Uzmanlık Alanlarımız',
                'services_title' => 'Geleceğin Enerjisini <br />Bugünden Kuruyoruz.',
                'services_description' => 'Mühendislik sınırlarını aşan asimetrik sistemlerimizle verimliliği artırırken karbon izinizi sıfıra indiriyoruz.',
                
                'projects_badge' => 'Başarı Hikayelerimiz',
                'projects_title' => 'Referans Projelerimiz',
                
                'simulator_badge' => 'Yatırım Simülatörü',
                'simulator_title' => 'Güneş Paneli Yatırım Getirinizi Keşfedin.',
                'simulator_description' => 'Çatı alanınızı veya aylık elektrik faturanızı simülatöre girerek, sisteminizin tahmini kurulu gücünü, üreteceği elektriği, kazanacağınız tasarrufu ve yıllık doğaya olan katkınızı anında görün.',
                'simulator_info_1' => 'Hesaplamalar Türkiye ortalama güneşlenme verilerine dayanır.',
                'simulator_info_2' => 'Güneş paneli ömrü ortalama 25 yıldır.',
                'simulator_trees_text' => 'Bu yatırımınızla her yıl ortalama :trees ağaç dikmiş kadar çevresel katkı sağlarsınız.',
                
                'packages_badge' => 'Hazır Enerji Paketleri',
                'packages_title' => 'Seçkin Çözümler',
                'packages_description' => 'İhtiyacınıza en uygun, mühendislik ekibimiz tarafından optimize edilmiş, yüksek performanslı hazır altyapı paketleri.',
                
                'about_features' => [
                    [
                        'title' => 'Teknik Destek',
                        'description' => 'Teknik destek hizmeti sunmaktayız.',
                        'svg_icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-3.536 5 5 0 015-5M4.93 19.07a9 9 0 01-1.272-1.272m0 0l-2.829-2.829m-2.829 2.829L3 21M9 12a3 3 0 116 0 3 3 0 01-6 0z"></path></svg>'
                    ],
                    [
                        'title' => 'Kurumsal Hizmet',
                        'description' => 'Tüm hizmetlerimiz kurumsal bir yaklaşımla sunulmaktadır.',
                        'svg_icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>'
                    ],
                    [
                        'title' => 'Müşteri Memnuniyeti',
                        'description' => 'Müşteri memnuniyeti ilk önceliğimizdir.',
                        'svg_icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>'
                    ],
                    [
                        'title' => 'Yenilikçi Fikirler',
                        'description' => 'Ar-Ge ekibimiz en iyi ürünlerle buluşmanızı sağlamaya çalışır.',
                        'svg_icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l.707-.707m2.828 9.9a5 5 0 113.536 0V21h-3.536v-3.457z"></path></svg>'
                    ],
                    [
                        'title' => 'Uygun Fiyat',
                        'description' => 'Ürünlerde hem en iyi kaliteyi hem de en uygun fiyatı sunmaya çalışırız.',
                        'svg_icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>'
                    ],
                    [
                        'title' => 'Ulusal Destek Ağı',
                        'description' => 'Türkiye\'nin 17 noktasında teknik destek noktalarımız bulunmaktadır.',
                        'svg_icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>'
                    ]
                ],
                
                'partners' => [
                    ['name' => 'Alfa', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/alfa-1703594693.jpg'],
                    ['name' => 'Huawei', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/huawei-1703594704.jpg'],
                    ['name' => 'Sungrow', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/sungrow-1703594717.jpg'],
                    ['name' => 'Kehua Tech', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/kehua-tech-1703594726.jpg'],
                    ['name' => 'Arçelik', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/arcelik-1703594737.jpg'],
                    ['name' => 'Plurawatt', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/plurawatt-1703594747.jpg'],
                    ['name' => 'Smart', 'logo' => 'https://sfkenerji.com.tr/img/ortaklar/smart-1703594755.jpg']
                ],
                'privacy_policy' => '<h2>Gizlilik Politikası</h2><p>SFK Enerji olarak kişisel verilerinizin güvenliği hususuna azami hassasiyet göstermekteyiz. Sitemizi ziyaret ettiğinizde toplanan verileriniz yasal mevzuat sınırları dahilinde korunmaktadır.</p><p>Çerezler (cookies) web sitemizin daha verimli kullanılması amacıyla geçici olarak tarayıcınızda saklanır. Kişisel bilgileriniz kesinlikle üçüncü şahıslarla paylaşılmamaktadır.</p>',
                'kvkk_text' => '<h2>KVKK Aydınlatma Metni</h2><p>6698 sayılı Kişisel Verilerin Korunması Kanunu (KVKK) uyarınca, SFK Enerji A.Ş. olarak veri sorumlusu sıfatıyla tarafımıza iletilen kişisel verilerinizi işleme amaçlarımız:</p><ul><li>Hizmetlerimizin sunulması ve iyileştirilmesi,</li><li>Teklif taleplerinizin işleme alınması ve dönüş yapılması,</li><li>Yasal yükümlülüklerin yerine getirilmesi.</li></ul><p>Tüm yasal haklarınız ve verilerinizin işlenme detayları hakkında bilgi edinmek için bize info@sfkenerji.com.tr adresinden ulaşabilirsiniz.</p>'
            ]);
        }

        // Default Bento Services
        if (Service::count() === 0) {
            Service::create([
                'title' => 'Güneş Enerjisi Santralleri (GES)',
                'subtitle' => '01 / GES PROJELERİ',
                'description' => 'Endüstriyel çatı, arazi ve konut tipi GES projeleriniz için anahtar teslim (EPC) mühendislik, fizibilite çalışmaları, yasal izin süreçleri ve montaj. Yüksek verimli panellerle maksimum amortisman hızı.',
                'image' => 'https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=80',
                'tags' => 'Endüstriyel Çatı, Arazi GES, Fizibilite ve İzin',
                'grid_span' => 4,
                'sort_order' => 1,
            ]);

            Service::create([
                'title' => 'Elektrik Taahhüt',
                'subtitle' => '02 / TAAHHÜT',
                'description' => 'Alçak gerilim (AG) ve yüksek gerilim (YG) trafo kurulumları, ana dağıtım panoları ve bina elektrik sistemleri taahhüt projeleri.',
                'image' => 'https://images.unsplash.com/photo-1544724569-5f546fd6f2b5?auto=format&fit=crop&w=1200&q=80',
                'tags' => 'YG Trafo, AG Pano',
                'grid_span' => 2,
                'sort_order' => 2,
            ]);

            Service::create([
                'title' => 'Şarj İstasyonları',
                'subtitle' => '03 / ŞARJ',
                'description' => 'Elektrikli araç AC/DC hızlı şarj istasyon altyapı kurulumları, istasyon ağ yönetim yazılım entegrasyonu ve mühendisliği.',
                'image' => 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=1200&q=80',
                'tags' => 'Hızlı DC, AC Ev Tipi',
                'grid_span' => 2,
                'sort_order' => 3,
            ]);

            Service::create([
                'title' => 'Mühendislik, Bakım & İzleme',
                'subtitle' => '04 / DESTEK',
                'description' => 'Aktif GES tesisleri için uzaktan izleme (SCADA), arıza-bakım, panel temizliği, termal kamera dron taramaları ve performans analizi raporlama. Mevcut tesisinizin verimlilik optimizasyonunu üstleniyoruz.',
                'image' => 'https://images.unsplash.com/photo-1581092921461-eab62e97a780?auto=format&fit=crop&w=1200&q=80',
                'tags' => 'SCADA İzleme, Dron Termal, Verimlilik Analizi',
                'grid_span' => 4,
                'sort_order' => 4,
            ]);
        }

        // Default Slider Projects
        if (Project::count() === 0) {
            Project::create([
                'title' => 'Metesa Enerji GES',
                'category' => 'Arazi GES',
                'location' => 'Köprüköy / Erzurum',
                'capacity' => '2.4 MWp',
                'description' => 'Erzurum Köprüköy\'de hayata geçirdiğimiz yüksek verimli arazi tipi Güneş Enerjisi Santrali projesi.',
                'image' => 'https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 1,
            ]);

            Project::create([
                'title' => 'Kale Blok Bims GES',
                'category' => 'Arazi GES',
                'location' => 'Pasinler / Erzurum',
                'capacity' => '3.8 MWp',
                'description' => 'Erzurum Pasinler bölgesinde kurulu güç hedeflerini tamamlayan geniş ölçekli arazi GES santrali yatırımı.',
                'image' => 'https://images.unsplash.com/photo-1613665813446-82a78c468a1d?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 2,
            ]);

            Project::create([
                'title' => 'OSB Endüstriyel Çatı GES',
                'category' => 'Çatı GES',
                'location' => 'Aziziye / Erzurum',
                'capacity' => '850 kWp',
                'description' => 'Erzurum Organize Sanayi Bölgesinde kurulu üretim tesislerinin çatılarını yeşil enerji merkezlerine dönüştürdük.',
                'image' => 'https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 3,
            ]);

            Project::create([
                'title' => 'Kurtuluş Trafo ve Dağıtım',
                'category' => 'Trafo Kurulum',
                'location' => 'Yakutiye / Erzurum',
                'capacity' => '400 kVA',
                'description' => 'Erzurum Yakutiye ilçesinde trafo binası kurulum, AG-YG kablo çekim ve dağıtım kabini yenileme taahhüt işleri.',
                'image' => 'https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 4,
            ]);

            Project::create([
                'title' => 'Yukarıözbağ Enerji Nakil Hattı',
                'category' => 'Dağıtım & ENH',
                'location' => 'İspir / Erzurum',
                'capacity' => '31.5 kV',
                'description' => 'Erzurum İspir ilçesinde tamamladığımız yüksek gerilim enerji nakil hattı ve bölge dağıtım şebekesi altyapısı taahhüt projesi.',
                'image' => 'https://images.unsplash.com/photo-1544724569-5f546fd6f2b5?auto=format&fit=crop&w=1200&q=80',
                'sort_order' => 5,
            ]);
        }
    }
}
