<?php

namespace App\Filament\Resources\TeaserVideoResource\Pages;

use App\Filament\Resources\TeaserVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeaserVideos extends ListRecords
{
    protected static string $resource = TeaserVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
