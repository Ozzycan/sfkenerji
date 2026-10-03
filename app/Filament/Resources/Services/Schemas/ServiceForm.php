<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hizmet Detayları')
                    ->description('Bento grid üzerinde sergilenecek hizmet detaylarını girin.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Hizmet Başlığı')
                                    ->placeholder('Örn: Güneş Enerjisi Santralleri (GES)')
                                    ->required(),
                                TextInput::make('subtitle')
                                    ->label('Alt Başlık / Kod')
                                    ->placeholder('Örn: 01 / GES PROJELERİ')
                                    ->required(),
                                TextInput::make('tags')
                                    ->label('Etiketler')
                                    ->placeholder('Etiketleri virgülle ayırarak girin (Örn: Çatı GES, Arazi GES)')
                                    ->helperText('Ön yüzde buton şeklinde yan yana listelenecektir.')
                                    ->required(),
                                Select::make('grid_span')
                                    ->label('Kutu Genişliği')
                                    ->options([
                                        2 => 'Dar Kutu (1/3 Genişlik)',
                                        4 => 'Geniş Kutu (2/3 Genişlik)',
                                    ])
                                    ->default(2)
                                    ->required(),
                            ]),
                        Textarea::make('description')
                            ->label('Açıklama')
                            ->placeholder('Hizmetin detaylı açıklaması...')
                            ->rows(4)
                            ->columnSpanFull()
                            ->required(),
                    ])
                    ->columns(1),

                Section::make('Tasarım & Görsel')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                FileUpload::make('image')
                                    ->label('Arka Plan Görseli')
                                    ->image()
                                    ->imageEditor()
                                    ->disk('public')
                                    ->directory('services')
                                    ->required(),
                                TextInput::make('sort_order')
                                    ->label('Sıralama')
                                    ->numeric()
                                    ->default(0)
                                    ->required(),
                            ])
                    ])
            ]);
    }
}
