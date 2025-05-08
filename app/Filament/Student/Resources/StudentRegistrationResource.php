<?php

namespace App\Filament\Student\Resources;

use App\Filament\Student\Resources\StudentRegistrationResource\Pages;
use App\Filament\Student\Resources\StudentRegistrationResource\RelationManagers;
use App\Models\StudentRegistration;
use App\Models\AcademicYear;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentRegistrationResource extends Resource
{
    protected static ?string $model = StudentRegistration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('birthplace')
                    ->required(),
                Forms\Components\DatePicker::make('birth_date')
                    ->required()
                    ->maxDate(now()),
                Forms\Components\TextInput::make('address')
                    ->required(),
                Forms\Components\TextInput::make('agama')
                    ->required(),
                Forms\Components\TextInput::make('nama_ortu')
                    ->required(),
                Forms\Components\TextInput::make('no_hp_ortu')
                    ->required(),
                Forms\Components\TextInput::make('pendidikan_ortu')
                    ->required(),
                Forms\Components\TextInput::make('pekerjaan_ortu')
                    ->required(),
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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthplace')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birth_date')
                    ->date(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_ortu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp_ortu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pendidikan_ortu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan_ortu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('package')
                    ->searchable(),
                Tables\Columns\TextColumn::make('academic_year.year')
                    ->searchable(),
            ])
            ->filters([
                Tables\Columns\TextColumn::make('academic_year.year'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('package'),
                Tables\Columns\TextColumn::make('created_at')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->date(),
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
            'index' => Pages\ListStudentRegistrations::route('/'),
            'create' => Pages\CreateStudentRegistration::route('/create'),
            'edit' => Pages\EditStudentRegistration::route('/{record}/edit'),
        ];
    }
}
