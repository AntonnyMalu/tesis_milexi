<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaseResource\Pages;
use App\Filament\Resources\ClaseResource\RelationManagers;
use App\Models\Clase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClaseResource extends Resource
{
    protected static ?string $model = Clase::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('')
                    ->schema([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),
                        Forms\Components\TextInput::make('edad_min')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('edad_max')
                            ->required()
                            ->numeric(),
                    ])
                    ->columns(4),
                Forms\Components\Fieldset::make('')
                    ->schema([
                        Forms\Components\Textarea::make('descripcion')
                            ->rows(10)
                            ->cols(20)
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('imagen')
                            ->image()
                            ->imageEditor()
                            ->directory('images-clases')
                            ->maxSize(2024)
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagen'),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable()
                    ->limit(50)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('edad_min')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('edad_max')
                    ->numeric()
                    ->sortable()
                    ->alignCenter(),
                Tables\Columns\ToggleColumn::make('estatus')
                ->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListClases::route('/'),
            'create' => Pages\CreateClase::route('/create'),
            'edit' => Pages\EditClase::route('/{record}/edit'),
        ];
    }
}
