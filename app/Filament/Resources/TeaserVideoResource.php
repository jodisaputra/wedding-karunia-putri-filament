<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeaserVideoResource\Pages;
use App\Filament\Resources\TeaserVideoResource\RelationManagers;
use App\Models\TeaserVideo;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeaserVideoResource extends Resource
{
    protected static ?string $model = TeaserVideo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(components: array(
                FileUpload::make('teaser_video')
                    ->directory('teaser_videos')
                    ->preserveFilenames()
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('status')
            ));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('teaser_video'),
                Tables\Columns\ToggleColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeaserVideos::route('/'),
            'create' => Pages\CreateTeaserVideo::route('/create'),
            'view' => Pages\ViewTeaserVideo::route('/{record}'),
            'edit' => Pages\EditTeaserVideo::route('/{record}/edit'),
        ];
    }
}
