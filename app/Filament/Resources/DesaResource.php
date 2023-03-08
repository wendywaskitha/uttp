<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Desa;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DesaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DesaResource\RelationManagers;

class DesaResource extends Resource
{
    protected static ?string $model = Desa::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $modelLabel = 'Desa/Kelurahan';

    protected static ?string $navigationLabel = 'Desa/Kelurahan';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('kecamatan_id')
                        ->label('Kecamatan')
                        ->relationship('kecamatan', 'nm_kecamatan'),
                    TextInput::make('nm_desa')
                        ->label('DESA/KELURAHAN')
                        ->unique()
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('#')->rowIndex(),
                TextColumn::make('kecamatan.nm_kecamatan')
                    ->label('KECAMATAN'),
                TextColumn::make('nm_desa')
                    ->label('DESA/KELURAHAN'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDesas::route('/'),
        ];
    }    
}
