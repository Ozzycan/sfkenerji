<?php

namespace App\Filament\Resources\EnergyPackages\Pages;

use App\Filament\Resources\EnergyPackages\EnergyPackageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEnergyPackages extends ListRecords
{
    protected static string $resource = EnergyPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
