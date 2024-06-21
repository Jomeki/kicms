<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Records Management';
    protected static ?string $label = "Clan Events";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Event details')
                ->description('Enter details related to the event')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Event name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Select::make('category')
                        ->options(['Burial','Wedding','Get Together','Commemoration','Anniversary'])
                        ->required(),
                    Forms\Components\RichEditor::make('description')
                        ->label('Event Description')
                        ->required(),
                    Forms\Components\DatePicker::make('date')
                        ->required(),
                    Forms\Components\TextInput::make('location')
                        ->required()
                        ->maxLength(255),
                ]),

                Forms\Components\Section::make('Event Main Characters')
                ->description('Select the details of the main character of the event')
                ->schema([
                    Forms\Components\Select::make('user_id')
                        ->relationship('user', 'full')
                        ->preload()
                        ->searchable()
                        ->label('Event Owner')
                        ->required(),
                    Forms\Components\Select::make('created_by_id')
                        ->options([Auth::user()->id])
                        ->hidden()
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.full')
                    ->label('Event Owner')
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
