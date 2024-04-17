<?php

namespace App\Filament\Resources\TeaserVideoResource\Pages;

use App\Filament\Resources\TeaserVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeaserVideo extends EditRecord
{
    protected static string $resource = TeaserVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
