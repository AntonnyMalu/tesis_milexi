<?php

namespace App\Filament\Resources\RecursoResource\Pages;

use App\Filament\Resources\RecursoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateRecurso extends CreateRecord
{
    protected static string $resource = RecursoResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = Storage::disk('public')->mimeType($data['video']);
        return $data;
    }
}
