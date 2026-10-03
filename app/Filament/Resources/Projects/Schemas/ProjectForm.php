<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Proje Bilgileri')
                    ->description('Referans projenin detaylarını girin.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Proje Adı')
                                    ->placeholder('Örn: Metesa Enerji GES')
                                    ->required(),
                                Select::make('category')
                                    ->label('Kategori')
                                    ->options([
                                        'Arazi GES' => 'Arazi GES',
                                        'Çatı GES' => 'Çatı GES',
                                        'Trafo Kurulum' => 'Trafo Kurulum',
                                        'Dağıtım & ENH' => 'Dağıtım & ENH',
                                        'Şarj İstasyonu' => 'Şarj İstasyonu',
                                    ])
                                    ->required(),
                                TextInput::make('location')
                                    ->label('Konum / Şehir')
                                    ->placeholder('Örn: Köprüköy / Erzurum')
                                    ->required(),
                                TextInput::make('capacity')
                                    ->label('Kapasite')
                                    ->placeholder('Örn: 2.4 MWp / 400 kVA')
                                    ->required(),
                            ]),
                        Textarea::make('description')
                            ->label('Açıklama')
                            ->placeholder('Projenin kısa açıklaması...')
                            ->rows(3)
                            ->columnSpanFull()
                            ->required(),
                    ])
                    ->columns(1),

                Section::make('Görsel & Sıralama')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Proje Görseli')
                                    ->image()
                                    ->imageEditor()
                                    ->disk('public')
                                    ->directory('projects')
                                    ->required(),
                                TextInput::make('sort_order')
                                    ->label('Görüntüleme Sırası')
                                    ->numeric()
                                    ->default(0)
                                    ->required(),
                            ])
                    ])
            ]);
    }
}
