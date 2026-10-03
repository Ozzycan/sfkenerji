<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Görsel')
                    ->circular(),
                TextColumn::make('subtitle')
                    ->label('Kod / Bölüm')
                    ->sortable(),
                TextColumn::make('title')
                    ->label('Hizmet Başlığı')
                    ->searchable()
                    ->sortable()
                    ->weight('semibold'),
                TextColumn::make('grid_span')
                    ->label('Kutu Genişliği')
                    ->badge()
                    ->color(fn ($state) => $state == 4 ? 'success' : 'gray')
                    ->formatStateUsing(fn ($state) => $state == 4 ? 'Geniş' : 'Dar')
                    ->sortable(),
                TextColumn::make('sort_order')
                    ->label('Sıra')
                    ->sortable(),
            ])
            ->defaultSort('sort_order', 'asc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
