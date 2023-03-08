<?php

namespace App\Filament\Resources\JenisuttpResource\Pages;

use App\Filament\Resources\JenisuttpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageJenisuttps extends ManageRecords
{
    protected static string $resource = JenisuttpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
