<?php

namespace App\Filament\Resources\FormBuilderResource\Pages;

use App\Filament\Resources\FormBuilderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormBuilders extends ListRecords
{
    protected static string $resource = FormBuilderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
