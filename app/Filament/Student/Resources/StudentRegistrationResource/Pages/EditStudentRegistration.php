<?php

namespace App\Filament\Student\Resources\StudentRegistrationResource\Pages;

use App\Filament\Student\Resources\StudentRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentRegistration extends EditRecord
{
    protected static string $resource = StudentRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
