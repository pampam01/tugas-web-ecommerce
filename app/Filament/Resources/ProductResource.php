<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              Group::make()->schema([
                  Section::make('Product Information')->schema([
                      TextInput::make('name')
                      ->required()
                      ->maxLength(255)
                      ->live(true, 500)
                      ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) :  null)
                      ,

                      TextInput::make('slug')
                      ->required()
                      ->maxLength(255)
                      ->disabled()
                      ->dehydrated()
                      ->unique(Product::class, 'slug', ignoreRecord: true)
                      ,

                      MarkdownEditor::make('description')
                      ->columnSpanFull()
                      ->fileAttachmentsDirectory('products')
                  ])->columns(2), 

                  Section::make('Images')->schema([
                    // ada yang kuganti disini image jadi
                      FileUpload::make('images')  
                      ->multiple()
                      ->directory('products')
                      ->maxFiles(5)
                      ->reorderable(),

                     Select::make('size')
                     ->options([
                        's'=>'X', 
                        'm' =>'M', 
                        'l' => 'L',
                        'xl'=> 'XL'
                     ])
                      
                  ])
              ])->columnSpan(2),

              Group::make()->schema([
                  Section::make('Pricing')->schema([
                      TextInput::make('price')
                      ->numeric()
                      ->required()
                      ->prefix('IDR')
                  ]),
                  Section::make('Associations')->schema([
                      Select::make('category_id')
                      ->required()
                      ->searchable()
                      ->preload()
                      ->relationship('category', 'name'), 

                      Select::make('brand_id')
                      ->required()
                      ->searchable()
                      ->preload()
                      ->relationship('brand', 'name')
                  ]),
                  Section::make('Status')->schema([
                      Toggle::make('in_stock')
                      ->required()
                      ->default(true),

                      Toggle::make('is_active')
                      ->required()
                      ->default(true),

                      Toggle::make('is_featured')
                      ->required(),


                      Toggle::make('on_sale')
                      ->required(),

                  ])

              ])->columnSpan(1),


            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money("IDR")
                    ->sortable(),
                Tables\Columns\TextColumn::make('size')
                ,

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('in_stock')
                    ->boolean(),
                Tables\Columns\IconColumn::make('on_sale')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
               Tables\Actions\ActionGroup::make([
                   Tables\Actions\EditAction::make(),
                   Tables\Actions\DeleteAction::make(),
                   Tables\Actions\ViewAction::make(),
               ])
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
