<?php

namespace App\Filament\Resources\KrsMataKuliahResource\Pages;

use App\Filament\Resources\KrsMataKuliahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKrsMataKuliahs extends ListRecords
{
    protected static string $resource = KrsMataKuliahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
