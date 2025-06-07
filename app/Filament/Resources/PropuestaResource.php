<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropuestaResource\Pages;
use App\Filament\Resources\PropuestaResource\RelationManagers;
use App\Models\Propuesta;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropuestaResource extends Resource
{
    protected static ?string $model = Propuesta::class;

    protected static ?string $navigationIcon = 'heroicon-c-list-bullet';
    protected static ?int $navigationSort = 98;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('')
                    ->schema([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('correo')
                            ->email()
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\Fieldset::make('')
                    ->schema([
                        Forms\Components\Textarea::make('descripcion')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ]),
                Forms\Components\Fieldset::make('')
                    ->schema([
                        Forms\Components\TextInput::make('url')
                            ->url()
                            ->activeUrl()
                            ->required()
                            ->columnSpanFull()
                            ->suffixAction(
                                Action::make('copiar')
                                    ->icon('heroicon-s-clipboard')
                                    ->action(function ($livewire, $state) {
                                        $livewire->dispatch('copy-to-clipboard', text: $state);
                                    })
                            )
                            ->extraAttributes([
                                'x-data' => '{
                                    copyToClipboard(text) {
                                        if (navigator.clipboard && navigator.clipboard.writeText) {
                                            navigator.clipboard.writeText(text).then(() => {
                                                $tooltip("Copiado al portapapeles", { timeout: 1500 });
                                            }).catch(() => {
                                                $tooltip("No se pudo copiar", { timeout: 1500 });
                                            });
                                        } else {
                                            const textArea = document.createElement("textarea");
                                            textArea.value = text;
                                            textArea.style.position = "fixed";
                                            textArea.style.opacity = "0";
                                            document.body.appendChild(textArea);
                                            textArea.select();
                                            try {
                                                document.execCommand("copy");
                                                $tooltip("Copiado al portapapele", { timeout: 1500 });
                                            } catch (err) {
                                                $tooltip("No se pudo copiar", { timeout: 1500 });
                                            }
                                            document.body.removeChild(textArea);
                                        }
                                    }
                                }',
                                'x-on:copy-to-clipboard.window' => 'copyToClipboard($event.detail.text)',
                            ]),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')
                    ->since()
                    ->sortable(),
                Tables\Columns\IconColumn::make('estatus')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->falseColor('gray')
                    ->alignCenter()
                    ->action(function (Propuesta $propuesta) {
                        $estatus = $propuesta->estatus;
                        if ($estatus) {
                            $propuesta->estatus = 0;
                        } else {
                            $propuesta->estatus = 1;
                        }
                        $propuesta->save();
                    })
                ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('estatus')
                    ->label('Cambiar Estatus')
                    ->icon('heroicon-m-pencil-square')
                    ->iconButton()
                    ->action(function (Propuesta $propuesta) {
                        $estatus = $propuesta->estatus;
                        if ($estatus) {
                            $propuesta->estatus = 0;
                        } else {
                            $propuesta->estatus = 1;
                        }
                        $propuesta->save();
                    })
                //Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPropuestas::route('/'),
            'create' => Pages\CreatePropuesta::route('/create'),
            //'edit' => Pages\EditPropuesta::route('/{record}/edit'),
            //'view' => Pages\ViewPropuesta::route('/{record}'),
        ];
    }
}
