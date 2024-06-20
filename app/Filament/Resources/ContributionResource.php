<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContributionResource\Pages;
use App\Filament\Resources\ContributionResource\RelationManagers;
use App\Models\Contribution;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContributionResource extends Resource
{
    protected static ?string $model = Contribution::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';
    protected static ?string $label = "Event Contributions";
    protected static ?string $navigationGroup = 'Records Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contribution Details')->description("Create details about contributions")->schema([
                    Forms\Components\Select::make('user_id')
                        ->relationship('user', 'full')
                        ->label('User name')
                        ->preload()
                        ->searchable()
                        ->required(),
                    Forms\Components\Select::make('event.name')
                        ->relationship('event', 'name')
                        ->preload()
                        ->searchable()
                        ->label('Event name')
                        ->required(),
                    Forms\Components\TextInput::make('amount')
                        ->required()
                        ->numeric(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.full')
                    ->label('Contributor Name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event.name')
                    ->label('Event name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListContributions::route('/'),
            'create' => Pages\CreateContribution::route('/create'),
            'view' => Pages\ViewContribution::route('/{record}'),
            'edit' => Pages\EditContribution::route('/{record}/edit'),
        ];
    }
}
