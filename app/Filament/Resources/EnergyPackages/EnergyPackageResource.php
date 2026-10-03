<?php

namespace App\Filament\Resources\EnergyPackages;

use App\Filament\Resources\EnergyPackages\Pages\CreateEnergyPackage;
use App\Filament\Resources\EnergyPackages\Pages\EditEnergyPackage;
use App\Filament\Resources\EnergyPackages\Pages\ListEnergyPackages;
use App\Filament\Resources\EnergyPackages\Schemas\EnergyPackageForm;
use App\Filament\Resources\EnergyPackages\Tables\EnergyPackagesTable;
use App\Models\EnergyPackage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EnergyPackageResource extends Resource
{
    protected static ?string $model = EnergyPackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleGroup;

    protected static ?string $navigationLabel = 'Enerji Paketleri';

    protected static ?string $modelLabel = 'Enerji Paketi';

    protected static ?string $pluralModelLabel = 'Enerji Paketleri';

    protected static string|\UnitEnum|null $navigationGroup = 'İçerik Yönetimi';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return EnergyPackageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EnergyPackagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEnergyPackages::route('/'),
            'create' => CreateEnergyPackage::route('/create'),
            'edit' => EditEnergyPackage::route('/{record}/edit'),
        ];
    }
}
