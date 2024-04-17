<?php

namespace App\Filament\Resources\TeaserVideoResource\Pages;

use App\Filament\Resources\TeaserVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateTeaserVideo extends CreateRecord
{
    protected static string $resource = TeaserVideoResource::class;
}
