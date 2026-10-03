# SFK Enerji — Tasarım & Mimari Dokümantasyonu (Design & Architecture)

Bu dokümantasyon, **SFK Enerji** kurumsal web platformu ve yönetim panelinin görsel tasarım felsefesini, UI/UX kararlarını, ön yüz mimarisini ve arka plan mühendislik yapısını detaylandırmaktadır.

---

## 1. Tasarım Vizyonu ve Felsefesi

SFK Enerji için tasarladığım arayüzün temel amacı; geleneksel ve durağan kurumsal web sitelerinin ötesine geçerek, **temiz enerji, ileri teknoloji ve modern mühendislik gücünü** hissettiren dinamik bir kullanıcı deneyimi sunmaktır.

### Temel Tasarım İlkeleri:
1. **Liquid Glass & Glassmorphism:** Derinlik algısı oluşturmak için yarı saydam katmanlar, `backdrop-blur` efektleri ve ince ışık kırılmaları (border highlight) kullanıldı.
2. **Ambient & Dynamic Lighting:** Statik arka planlar yerine, sayfada hafif parlayan ışık küreleri (`glow-spheres`) ve fare hareketini takip eden etkileşimli ışık izi (`cursorLight`) kurgulandı.
3. **Mikro-Etkileşimler (Micro-Interactions):** Butonlar, kartlar ve form elemanları üzerinde akıcı geçişler (`transition-all duration-300`), hover efektleri ve ölçekleme animasyonları ile arayüze canlılık kazandırıldı.
4. **Veri Odaklı ve İnteraktif Deneyim:** Ziyaretçilerin pasif okuyucu olmaktan çıkıp etkileşime girebileceği bir **İnteraktif GES (Güneş Enerjisi) Simülatörü** geliştirildi.

---

## 2. Tipografi ve Renk Paleti

### Tipografi
Modern, endüstriyel ve okunabilirliği yüksek iki ana yazı tipi tercih edildi:
- **Başlıklar ve Vurgular:** `Outfit` (Geometrik, enerjik ve premium his veren sans-serif).
- **Teknik Veriler ve Rakamlar:** `Space Grotesk` (Teknolojik, mühendislik ve metrik odaklı karakter yapısı).

```html
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
```

### Renk Sistemi
| Renk Rolü | Renk Kodu / Değeri | Kullanım Amacı |
| :--- | :--- | :--- |
| **Ana Enerji Mavisi** | `#2563eb` (Blue 600) / `#3b82f6` | Birincil butonlar, dinamik göstergeler, CTA aksiyonları |
| **Koyu Zemin & Kontrast** | `#0f172a` (Slate 900) / `#020617` | Gece modu kontrastları, admin mailleri, otoriter başlıklar |
| **Yumuşak Arka Plan** | `#f8fafc` (Slate 50) | Gözü yormayan, aydınlık ve ferah kurumsal zemin |
| **Cyan / Neon Vurgu** | `#06b6d4` / `#22d3ee` | Yenilenebilir enerji ve güneş paneli ışıma hissi |
| **Cam Efekti (Glass)** | `rgba(255, 255, 255, 0.7)` | Yüzen navigasyon çubuğu, teklif çekmecesi ve bilgi panelleri |

---

## 3. Ön Yüz (Frontend) Bileşen Mimarisi

### 3.1. Yüzen Sıvı Cam Navigasyon (Liquid Glass Nav)
- Masaüstünde ekranın üst merkezine sabitlenmiş, kenarları yumuşatılmış `rounded-full` yüzen bar.
- Sayfa kaydırıldıkça içeriklerin üzerinde yarı saydam bir buzlu cam gibi durarak gezinme konforunu artırır.
- Mobil cihazlar için özel kayar menü (drawer) entegrasyonu mevcuttur.

### 3.2. Dinamik Işık ve Atmosfer Katmanı
- **`#cursorLight`:** Ziyaretçinin imleç hareketlerine bağlı olarak arka planda hafif bir parıltı yayar.
- **Ambient Glow:** `#0f172a` ve `#2563eb` tonlarında arka plana dağıtılmış yumuşak radyal degradeler ile derinlik sağlanır.

### 3.3. İnteraktif GES Simülatörü & Hesaplama Motoru
Ziyaretçinin çatı alanı, aylık elektrik faturası ve bina tipine göre:
- Kurulabilecek tahmini panel gücünü (kWp),
- Yıllık tahmini enerji üretimini (kWh),
- Yıllık amortisman ve maliyet tasarrufunu,
- Engellenen karbon salınımını (CO₂ tonajı)
gerçek zamanlı hesaplayan dinamik bir JavaScript simülatörü geliştirildi.

### 3.4. Kayar Teklif Çekmecesi (Slide-Over Drawer)
- Ziyaretçiyi sayfadan koparmadan, ekranın sağından akıcı bir şekilde açılan modern form.
- Seçilen paket veya hesaplanan GES simülasyonu verisini otomatik olarak form alanına bağlar.
- Arka planda sayfa yenilenmeksizin asenkron (AJAX / Fetch) olarak `/send-quote` ucuna iletilir.

---

## 4. Arka Yüz (Backend) & Yönetim Mimarisi

### 4.1. Teknoloji Yığını
- **Çatı:** Laravel 11.x / 13.x
- **Yönetim Paneli:** Filament v3 (TALL Stack - Tailwind, Alpine.js, Laravel, Livewire)
- **Kimlik & Güvenlik:** Filament Breezy (2FA & Güvenli profil oturum yönetimi)
- **Stil & Varlık Derleyici:** Tailwind CSS 3 & Vite

### 4.2. Veritabanı Modelleri ve Yönetilebilirlik
Tüm içerik, yönetim panelinden sıfır kod müdahalesiyle güncellenebilecek şekilde tasarlandı:

1. **`EnergyPackage` (Hazır Enerji Paketleri):**
   - Kategori (Ev, Ticari, Tarımsal Sulama vb.)
   - Güç kapasitesi, inverter tipi, garanti süreleri ve dinamik özellik listeleri.
2. **`Project` (Referans Projeler):**
   - Tamamlanan GES santralleri, kurulu güç bilgisi, lokasyon ve fotoğraf galerisi.
3. **`Service` (Hizmetlerimiz):**
   - Keşif, EPC mühendislik, bakım-onarım ve danışmanlık hizmet kartları.
4. **`SiteSetting` (Kurumsal Ayarlar & Metrikler):**
   - Telefon, e-posta, adres, sosyal medya linkleri, sayaç metrikleri (15+ MW, 450+ Proje vb.) ve kurumsal vizyon metinleri.

### 4.3. Çift Yönlü Akıllı E-Posta Bildirim Sistemi (`/send-quote`)
Form gönderildiğinde iki taraflı özel HTML e-posta şablonu tetiklenir:
1. **Yöneticiye Bildirim:** Müşteri adı, telefonu, ilgilenilen paket ve notları içeren zengin tablolu bildirim.
2. **Müşteriye Karşılama:** Talebin alındığını bildiren, kurumsal kimliğe uygun güven verici otomatik onay e-postası.

---

## 5. Paylaşımlı Hosting ve Prodüksiyon Optimizasyonları

Klasik cPanel ve paylaşımlı hosting ortamlarında Laravel çalıştırılırken karşılaşılan yaygın kısıtlamaları aşmak için özel rotalar geliştirildi:

- **`/image-render`:** Paylaşımlı sunucularda `symlink` (sembolik link) engeli veya kırılma durumlarında, yüklenen görsellerin güvenli şekilde `storage` altından filtrelenerek gösterilmesini sağlar.
- **`/cache-temizle`:** SSH terminal erişimi olmayan sunucularda tek tıkla `config:clear`, `route:clear`, `view:clear` ve `filament:assets` komutlarını çalıştırır.
- **`/veritabani-guncelle`:** SSH olmadan yeni migration'ları güvenle çalıştırır.
- **`/storage-bagla`:** Web üzerinden sembolik linki yeniden bağlar.

---

## 6. Özet

SFK Enerji platformu; modern web trendlerini (Glassmorphism, Dark/Light Glow, Micro-Interactions), esnek bir Laravel & Filament v3 mimarisiyle birleştiren, hem görsel hem teknik açıdan yüksek standartlarda inşa edilmiş bir mühendislik projesidir.
