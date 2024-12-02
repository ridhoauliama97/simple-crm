<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ContactResource;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
