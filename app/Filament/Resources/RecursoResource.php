<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecursoResource\Pages;
use App\Filament\Resources\RecursoResource\RelationManagers;
use App\Models\Recurso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecursoResource extends Resource
{
    protected static ?string $model = Recurso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('clases_id')
                ->label('Clase')
                ->relationship('clase', 'nombre')
                ->searchable()
                ->preload()
                ->createOptionForm([
                    Forms\Components\TextInput::make('nombre')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('descripcion')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('edad_min')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('edad_max')
                        ->required()
                        ->numeric(),
                ]),
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('imagen')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('video')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('url')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('estatus')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clase.nombre')
                    ->label('Clase')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('estatus'),
            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('clase')
                ->relationship('clase', 'nombre'),
            ])
            ->actions([
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
            'index' => Pages\ListRecursos::route('/'),
            'create' => Pages\CreateRecurso::route('/create'),
            'edit' => Pages\EditRecurso::route('/{record}/edit'),
        ];
    }
}
