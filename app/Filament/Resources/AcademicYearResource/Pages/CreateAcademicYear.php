<?php

namespace App\Filament\Resources\AcademicYearResource\Pages;

use App\Filament\Resources\AcademicYearResource;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Pages\CreateRecord;

class CreateAcademicYear extends CreateRecord
{
    protected static string $resource = AcademicYearResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->label('Tahun Akademik'),
                Forms\Components\Toggle::make('is_registration_open')
                    ->label('Pendaftaran Dibuka?'),
            ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')->sortable(),
                Tables\Columns\IconColumn::make('is_registration_open')->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }
}


