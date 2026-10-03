<?php

namespace App\Filament\Resources\EnergyPackages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class EnergyPackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Paket Detayları')
                    ->description('Güneş enerjisi paketinin genel bilgilerini ve fiyatlandırmasını girin.')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Paket Başlığı')
                                    ->placeholder('Örn: Standart Konut GES Paketi')
                                    ->required(),
                                Select::make('category')
                                    ->label('Kategori Grubu')
                                    ->options([
                                        'Off Grid' => 'Off Grid',
                                        'On Grid' => 'On Grid',
                                        'Hybrid' => 'Hybrid',
                                        'Sulama' => 'Sulama',
                                    ])
                                    ->required(),
                                TextInput::make('price')
                                    ->label('Fiyat (TL)')
                                    ->numeric()
                                    ->prefix('₺')
                                    ->placeholder('Örn: 145000')
                                    ->required(),
                            ]),
                        Textarea::make('description')
                            ->label('Açıklama')
                            ->placeholder('Paket içeriği, kullanılan panel sayısı, invertör detayları vb.')
                            ->rows(4)
                            ->columnSpanFull(),
                        
                        Grid::make(3)
                            ->schema([
                                TextInput::make('kva_badge')
                                    ->label('kVA Değeri')
                                    ->placeholder('Örn: 3 kVA'),
                                TextInput::make('type_badge')
                                    ->label('Tip Rozeti')
                                    ->placeholder('Örn: OFF GRID'),
                                TextInput::make('daily_production')
                                    ->label('Günlük Üretim')
                                    ->placeholder('Örn: 6-9 kWh'),
                            ]),

                        \Filament\Forms\Components\Toggle::make('is_popular')
                            ->label('Popüler Seçim (Rozeti Göster)')
                            ->default(false),

                        \Filament\Forms\Components\Repeater::make('features')
                            ->label('Paket Özellikleri')
                            ->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('name')->label('Özellik Adı')->placeholder('Örn: 625W Monokristal Güneş Paneli')->required(),
                                    TextInput::make('value')->label('Değer')->placeholder('Örn: 4 Adet')->required(),
                                ])
                            ])
                            ->defaultItems(0)
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
                
                Section::make('Paket Görseli')
                    ->description('Paketi web sitesinde temsil edecek kapak görselini yükleyin.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Görsel')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('packages')
                            ->maxSize(2048) // 2MB
                            ->columnSpanFull(),
                    ])
            ]);
    }
}
