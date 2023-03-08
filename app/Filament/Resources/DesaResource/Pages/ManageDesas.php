<?php

namespace App\Filament\Resources\DesaResource\Pages;

use App\Filament\Resources\DesaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDesas extends ManageRecords
{
    protected static string $resource = DesaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
