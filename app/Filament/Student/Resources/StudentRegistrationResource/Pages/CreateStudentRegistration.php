<?php

namespace App\Filament\Student\Resources\StudentRegistrationResource\Pages;

use App\Filament\Student\Resources\StudentRegistrationResource;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\CreateRecord;
use App\Models\AcademicYear;
use Filament\Tables;

class CreateStudentRegistration extends CreateRecord
{
    protected static string $resource = StudentRegistrationResource::class;

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\TextInput::make('birthplace')->required(),
                DatePicker::make('birth_date')
                    ->required()
                    ->maxDate(now()),
                Forms\Components\TextInput::make('address')->required(),
                Forms\Components\TextInput::make('agama')->required(),
                Forms\Components\TextInput::make('nama_ortu')->required(),
                Forms\Components\TextInput::make('no_hp_ortu')->required(),
                Forms\Components\TextInput::make('pendidikan_ortu')->required(),
                Forms\Components\TextInput::make('pekerjaan_ortu')->required(),
                Forms\Components\Select::make('package')
                    ->options([
                        'Paket A' => 'Paket A',
                        'Paket B' => 'Paket B',
                        'Paket C' => 'Paket C',
                    ])
                    ->required(),
                Forms\Components\Select::make('academic_year_id')
                    ->options(AcademicYear::query()->pluck('year', 'id'))
                    ->required(),
            ]);

    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('academic_year.year'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('package'),
                Tables\Columns\TextColumn::make('created_at')->date(),
                Tables\Columns\TextColumn::make('updated_at')->date(),
            ])
            ->filters([
                Tables\Columns\TextColumn::make('academic_year.year'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('package'),
                Tables\Columns\TextColumn::make('created_at')->date(),
                Tables\Columns\TextColumn::make('updated_at')->date(),
            ]);
    }
}