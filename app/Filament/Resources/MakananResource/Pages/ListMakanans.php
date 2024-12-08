<?php

namespace App\Filament\Resources\MakananResource\Pages;

use App\Filament\Resources\MakananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class Listmakanans extends ListRecords
{
    protected static string $resource = MakananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
