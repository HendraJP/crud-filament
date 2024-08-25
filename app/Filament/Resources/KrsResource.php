<?php

namespace App\Filament\Resources;

use App\Models\Krs;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use App\Filament\Resources\KrsResource\Pages;

class KrsResource extends Resource
{
    protected static ?string $model = Krs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Heading')
                    ->description('')
                    ->schema([
                        Select::make('id_mahasiswa')
                            ->label('Mahasiswa')
                            ->relationship('mahasiswa', 'nama')
                            ->required(),
                        TextInput::make('tingkat')
                            ->label('Tingkat')
                            ->required(),
                        TextInput::make('semester')
                            ->label('Semester')
                            ->required(),
                        DatePicker::make('tahun_ajaran')
                            ->native(false)
                            ->displayFormat('Y'),
                        Select::make('mata_kuliah')
                            ->multiple()
                            ->relationship('mataKuliah', 'mata_ajar')
                            ->label('Mata Kuliah')
                            ->required()
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_krs')->sortable()->searchable(),
                TextColumn::make('mahasiswa.nama')->sortable()->searchable(),
                TextColumn::make('tingkat'),
                TextColumn::make('semester'),
                TextColumn::make('tahun_ajaran'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListKrs::route('/'),
            'create' => Pages\CreateKrs::route('/create'),
            'edit' => Pages\EditKrs::route('/{record}/edit'),
        ];
    }
}
