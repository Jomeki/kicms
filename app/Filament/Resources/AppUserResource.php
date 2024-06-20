<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppUserResource\Pages;
use App\Filament\Resources\AppUserResource\RelationManagers;
use App\Models\AppUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppUserResource extends Resource
{
    protected static ?string $model = AppUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Users Management';
    protected static ?string $label = 'Clan Members';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Details')->description('Enter personal details about the user')->schema([
                    Forms\Components\TextInput::make('fname')
                        ->label('First Name')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\TextInput::make('sname')
                        ->label('Second Name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('lname')
                        ->label('Last Name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('dob')
                        ->label('Date of Birth')
                        ->required(),
                    Forms\Components\TextInput::make('phone_number')
                        ->label('Phone number')
                        ->tel()
                        ->required()
                        ->maxLength(255),]),
                Forms\Components\Section::make('Origin Details')->description('Select the your respective user territory')->schema([Forms\Components\Select::make('territory_id')
                    ->label('Select Territory')
                    ->searchable()
                    ->preload()
                    ->relationship('territory', 'name')
                    ->required()
                    ]),
                Forms\Components\Section::make('Account Details')->description('Enter required user details')->schema([
                    Forms\Components\Select::make('role_id')
                        ->relationship('role', 'name')
                        ->label('Role in system')
                        ->searchable()
                        ->preload()
                        ->required(),
                    Forms\Components\TextInput::make('password')
                        ->password()
                        ->required()
                        ->maxLength(255),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full')
                    ->label('Full Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Phone number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role.name')
                    ->label('User Role')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('territory.name')
                    ->label('User Territory')
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
            'index' => Pages\ListAppUsers::route('/'),
            'create' => Pages\CreateAppUser::route('/create'),
            'view' => Pages\ViewAppUser::route('/{record}'),
            'edit' => Pages\EditAppUser::route('/{record}/edit'),
        ];
    }
}
