<?php

namespace App\Filament\Resources\EnergyPackages\Pages;

use App\Filament\Resources\EnergyPackages\EnergyPackageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEnergyPackage extends EditRecord
{
    protected static string $resource = EnergyPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
