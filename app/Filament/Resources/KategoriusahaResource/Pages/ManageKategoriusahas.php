<?php

namespace App\Filament\Resources\KategoriusahaResource\Pages;

use App\Filament\Resources\KategoriusahaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKategoriusahas extends ManageRecords
{
    protected static string $resource = KategoriusahaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
