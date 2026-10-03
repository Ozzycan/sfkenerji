<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Site Ayarları')
                    ->tabs([
                        Tab::make('Genel & İletişim')
                            ->icon(Heroicon::OutlinedPhone)
                            ->schema([
                                Section::make('İletişim Bilgileri')
                                    ->description('Sitedeki telefon, e-posta ve adres bilgilerini güncelleyin.')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('phone')
                                                    ->label('Telefon Numarası')
                                                    ->placeholder('Örn: 444 28 79')
                                                    ->required(),
                                                TextInput::make('email')
                                                    ->label('E-posta Adresi')
                                                    ->email()
                                                    ->placeholder('Örn: info@sfkenerji.com.tr')
                                                    ->required(),
                                                Textarea::make('address')
                                                    ->label('Adres')
                                                    ->placeholder('Erzurum, Türkiye')
                                                    ->columnSpanFull()
                                                    ->required(),
                                            ])
                                    ]),

                                Section::make('Sosyal Medya Linkleri')
                                    ->description('Header ve Footer alanlarında yer alan sosyal medya hesap linkleri.')
                                    ->schema([
                                        Grid::make(3)
                                            ->schema([
                                                TextInput::make('facebook_link')
                                                    ->label('Facebook')
                                                    ->placeholder('https://facebook.com/sfkenerji'),
                                                TextInput::make('instagram_link')
                                                    ->label('Instagram')
                                                    ->placeholder('https://instagram.com/sfkenerji'),
                                                TextInput::make('linkedin_link')
                                                    ->label('LinkedIn / X')
                                                    ->placeholder('https://linkedin.com/company/sfkenerji'),
                                            ])
                                    ])
                            ]),

                        Tab::make('Giriş & Vizyon')
                            ->icon(Heroicon::OutlinedHome)
                            ->schema([
                                Section::make('Kahraman (Hero) Bölümü')
                                    ->description('Giriş ekranında yer alan ana başlık, açıklama ve buton yazılarını yönetin.')
                                    ->schema([
                                        TextInput::make('hero_badge')
                                            ->label('Hero Rozet Metni')
                                            ->placeholder('Örn: Geleceğin Enerji Altyapıları')
                                            ->required(),
                                        TextInput::make('hero_title')
                                            ->label('Hero Başlığı (HTML destekler)')
                                            ->placeholder('Örn: Enerjinin <br /> <span class="text-gradient-emerald-blue">Kusursuz Hali.</span>')
                                            ->required(),
                                        Textarea::make('hero_description')
                                            ->label('Hero Açıklaması')
                                            ->rows(3)
                                            ->required(),
                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('hero_cta_1')
                                                    ->label('Buton 1 Metni (Sol)')
                                                    ->placeholder('Örn: Yatırımını Hesapla')
                                                    ->required(),
                                                TextInput::make('hero_cta_2')
                                                    ->label('Buton 2 Metni (Sağ)')
                                                    ->placeholder('Örn: Sistem Paketleri')
                                                    ->required(),
                                            ])
                                    ]),

                                Section::make('Kurumsal & Vizyonumuz')
                                    ->description('Hakkımızda / Vizyon kısmındaki başlık, açıklama ve tırnak metnini düzenleyin.')
                                    ->schema([
                                        TextInput::make('vision_badge')
                                            ->label('Vizyon Rozet Metni')
                                            ->placeholder('Örn: Şirket Profilimiz')
                                            ->required(),
                                        TextInput::make('vision_title')
                                            ->label('Vizyon Başlığı')
                                            ->placeholder('Örn: Firmamız;')
                                            ->required(),
                                        Textarea::make('vision_description')
                                            ->label('Vizyon Açıklaması')
                                            ->rows(4)
                                            ->required(),
                                        Textarea::make('vision_quote')
                                            ->label('Vizyon Vurgu / Tırnak Cümlesi')
                                            ->rows(2)
                                            ->required(),
                                    ]),

                                Section::make('İstatistik Metrikleri')
                                    ->description('Vizyon bölümünün altında yer alan 4 adet istatistik kartını düzenleyin.')
                                    ->schema([
                                        Grid::make(4)
                                            ->schema([
                                                TextInput::make('metric_1_val')
                                                    ->label('Metrik 1 Değer')
                                                    ->placeholder('Örn: 15+')
                                                    ->required(),
                                                TextInput::make('metric_1_lbl')
                                                    ->label('Metrik 1 Etiket')
                                                    ->placeholder('Örn: Kurulu Güç')
                                                    ->required(),

                                                TextInput::make('metric_2_val')
                                                    ->label('Metrik 2 Değer')
                                                    ->placeholder('Örn: 450+')
                                                    ->required(),
                                                TextInput::make('metric_2_lbl')
                                                    ->label('Metrik 2 Etiket')
                                                    ->placeholder('Örn: Proje')
                                                    ->required(),

                                                TextInput::make('metric_3_val')
                                                    ->label('Metrik 3 Değer')
                                                    ->placeholder('Örn: %100')
                                                    ->required(),
                                                TextInput::make('metric_3_lbl')
                                                    ->label('Metrik 3 Etiket')
                                                    ->placeholder('Örn: Sürdürülebilirlik')
                                                    ->required(),

                                                TextInput::make('metric_4_val')
                                                    ->label('Metrik 4 Değer')
                                                    ->placeholder('Örn: 24/7')
                                                    ->required(),
                                                TextInput::make('metric_4_lbl')
                                                    ->label('Metrik 4 Etiket')
                                                    ->placeholder('Örn: Destek')
                                                    ->required(),
                                            ])
                                    ]),
                            ]),

                        Tab::make('Hizmetler & Projeler')
                            ->icon(Heroicon::OutlinedBriefcase)
                            ->schema([
                                Section::make('Bento Hizmetler Bölümü')
                                    ->description('Uzmanlık alanlarımızın başlık ve açıklama kısımlarını düzenleyin.')
                                    ->schema([
                                        TextInput::make('services_badge')
                                            ->label('Hizmetler Rozet Metni')
                                            ->required(),
                                        TextInput::make('services_title')
                                            ->label('Hizmetler Başlığı (HTML destekler)')
                                            ->required(),
                                        Textarea::make('services_description')
                                            ->label('Hizmetler Açıklaması')
                                            ->rows(2)
                                            ->required(),
                                    ]),

                                Section::make('Referans Projeler Bölümü')
                                    ->description('Başarı hikayelerimizin başlık kısımlarını düzenleyin.')
                                    ->schema([
                                        TextInput::make('projects_badge')
                                            ->label('Projeler Rozet Metni')
                                            ->required(),
                                        TextInput::make('projects_title')
                                            ->label('Projeler Başlığı')
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('Simülatör & Paketler')
                            ->icon(Heroicon::OutlinedBolt)
                            ->schema([
                                Section::make('Yatırım Simülatörü Metinleri')
                                    ->description('GES Simülatör bölümündeki bilgilendirici metinleri ve başlıkları yönetin.')
                                    ->schema([
                                        TextInput::make('simulator_badge')
                                            ->label('Simülatör Rozet Metni')
                                            ->required(),
                                        TextInput::make('simulator_title')
                                            ->label('Simülatör Başlığı')
                                            ->required(),
                                        Textarea::make('simulator_description')
                                            ->label('Simülatör Açıklaması')
                                            ->rows(3)
                                            ->required(),
                                        TextInput::make('simulator_info_1')
                                            ->label('Bilgi Notu 1')
                                            ->required(),
                                        TextInput::make('simulator_info_2')
                                            ->label('Bilgi Notu 2')
                                            ->required(),
                                        TextInput::make('simulator_trees_text')
                                            ->label('Çevresel Katkı / Ağaç Metni (:trees değişkenini kullanın)')
                                            ->helperText('Değerin geleceği yere :trees yazın. Örn: Bu yatırımınızla her yıl ortalama :trees ağaç dikmiş kadar olursunuz.')
                                            ->required(),
                                    ]),

                                Section::make('Hazır Paketler Bölümü')
                                    ->description('Enerji paketleri bölümündeki başlık ve açıklamaları yönetin.')
                                    ->schema([
                                        TextInput::make('packages_badge')
                                            ->label('Paketler Rozet Metni')
                                            ->required(),
                                        TextInput::make('packages_title')
                                            ->label('Paketler Başlığı')
                                            ->required(),
                                        Textarea::make('packages_description')
                                            ->label('Paketler Açıklaması')
                                            ->rows(2)
                                            ->required(),
                                    ]),
                            ]),

                        Tab::make('Değerler & Çözüm Ortakları')
                            ->icon(Heroicon::OutlinedUsers)
                            ->schema([
                                Section::make('Kurumsal Değerlerimiz')
                                    ->description('Hakkımızda bölümünün yanındaki 6 adet değer kartını yönetin.')
                                    ->schema([
                                        Repeater::make('about_features')
                                            ->label('Değer Kartları')
                                            ->schema([
                                                TextInput::make('title')
                                                    ->label('Kart Başlığı')
                                                    ->required(),
                                                TextInput::make('description')
                                                    ->label('Kart Açıklaması')
                                                    ->required(),
                                                Textarea::make('svg_icon')
                                                    ->label('Kart SVG İkon Kodu')
                                                    ->rows(3)
                                                    ->required(),
                                            ])
                                            ->columnSpanFull()
                                    ]),

                                Section::make('Çözüm Ortaklarımız ve Güç Birliğimiz')
                                    ->description('Sitenin en altında sergilenen çözüm ortağı markaların logolarını yönetin.')
                                    ->schema([
                                        Repeater::make('partners')
                                            ->label('Marka Logoları')
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label('Firma / Marka Adı')
                                                    ->required(),
                                                FileUpload::make('logo')
                                                    ->label('Marka Logosu')
                                                    ->image()
                                                    ->imageEditor()
                                                    ->disk('public')
                                                    ->directory('partners')
                                                    ->required(),
                                            ])
                                            ->grid(3)
                                            ->columnSpanFull()
                                    ]),
                            ]),

                        Tab::make('Yasal Metinler')
                            ->icon(Heroicon::OutlinedDocumentText)
                            ->schema([
                                Section::make('Gizlilik Politikası & KVKK Metinleri')
                                    ->description('Sitedeki Gizlilik Politikası ve KVKK aydınlatma metinlerini düzenleyin.')
                                    ->schema([
                                        RichEditor::make('privacy_policy')
                                            ->label('Gizlilik Politikası Metni')
                                            ->required(),
                                        RichEditor::make('kvkk_text')
                                            ->label('KVKK Aydınlatma Metni')
                                            ->required(),
                                    ])
                            ])
                    ])
                    ->columnSpanFull()
            ]);
    }
}
