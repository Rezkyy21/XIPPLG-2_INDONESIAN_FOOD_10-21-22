<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MakananResource\Pages;
use App\Filament\Resources\MakananResource\RelationManagers;
use App\Models\Makanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class makananResource extends Resource
{
    protected static ?string $model = makanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_makanan'),
                Forms\Components\TextInput::make('deskripsi'),
                Forms\Components\TextInput::make('harga'),
                Forms\Components\FileUpload::make('gambar'),
                Forms\Components\Select::make('kategori_id')
                ->relationship('kategori', 'nama_kategori')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_makanan'),
                Tables\Columns\TextColumn::make('deskripsi'),
                Tables\Columns\TextColumn::make('harga'),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('kategori.nama_kategori'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori_id')
                ->relationship('kategori','nama_kategori'),
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
            'index' => Pages\ListMakanans::route('/'),
            'create' => Pages\CreateMakanan::route('/create'),
            'edit' => Pages\EditMakanan::route('/{record}/edit'),
        ];
    }
}
