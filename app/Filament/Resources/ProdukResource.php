<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdukResource\Pages;
use App\Models\Produk; // Ganti Barang menjadi Produk
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProdukResource extends Resource
{
    protected static ?string $model = Produk::class; // Ganti Barang menjadi Produk

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_produk') // Ganti nama_barang menjadi nama_produk
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('stok'),
                Forms\Components\Select::make('kategori'),
                Forms\Components\DatePicker::make('tanggal_masuk'),
                Forms\Components\Toggle::make('tersedia'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk') // Ganti nama_barang menjadi nama_produk
                    ->searchable(),
                Tables\Columns\TextColumn::make('stok'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\IconColumn::make('tersedia')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduks::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}