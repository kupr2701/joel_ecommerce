<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LivraisonResource\Pages;
use App\Filament\Resources\LivraisonResource\RelationManagers;
use App\Models\Livraison;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;


class LivraisonResource extends Resource
{
    protected static ?string $model = Livraison::class;
    protected static ?string $label = 'Livraisons';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('order_id')
                    ->relationship('order', 'billing_name')
                    ->required(),
                Forms\Components\Toggle::make('etat_commande')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                Tables\Columns\TextColumn::make('order.ref_id'),
=======
                Tables\Columns\TextColumn::make('order.user.name'),
>>>>>>> 7aa1ad0664662bfec27fe948e8b13b9dc19f3380
                Tables\Columns\IconColumn::make('etat_commande')->label('Livré')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                Filter::make('etat_commande')->label('Livré')
    ->query(fn (Builder $query): Builder => $query->where('etat_commande', true))
            ])
            ->actions([
<<<<<<< HEAD
=======
                Tables\Actions\Action::make('livraison')->label('Valider')
                    ->url(fn (Livraison $record): string  => route('valider_livraison', $record))
                    ->requiresConfirmation(),
>>>>>>> 7aa1ad0664662bfec27fe948e8b13b9dc19f3380
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLivraisons::route('/'),
            'create' => Pages\CreateLivraison::route('/create'),
            'edit' => Pages\EditLivraison::route('/{record}/edit'),
            'view' => Pages\ViewLivraison::route('/{record}'),
        ];
    }
}
