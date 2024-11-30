<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    protected int|string|array $columnSpan='full';

    //untuk menampilkan widget diatas table
    protected static ?int $sort = 2;
    public function table(Table $table): Table
    {
        

        return $table
            ->query(OrderResource::getEloquentQuery())
            ->DefaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                ->label('Order ID')
                ->searchable()
                ->sortable(),

                TextColumn::make('user.name')
                ->label('Customer')
                ->searchable()
                ->sortable(),

                TextColumn::make('grand_total')
                ->money('IDR'),

                TextColumn::make('status')

                ->badge()
                ->color(fn (string $state)=> match($state) {
                    'new'=>'info', 
                    'processing'=>'warning',
                    'shipped'=>'success',
                    'delivered'=>'success',
                    'cancelled'=>'danger',
                })
                ->icon(fn (string $state)=> match($state) {
                    'new'=> 'heroicon-m-sparkles',
                    'processing'=> 'heroicon-m-arrow-path',
                    'shipped'=> 'heroicon-m-truck',
                    'delivered'=> 'heroicon-m-check-badge',
                    'cancelled'=> 'heroicon-m-x-circle',
                })
                ->sortable(),

                TextColumn::make('payment_method')
                ->sortable()
                ->searchable(), 

                TextColumn::make('payment_status')
                ->sortable()
                ->badge()
                ->searchable(),

                TextColumn::make('created_at')
                ->label('Order Date')
                ->dateTime()

            ])
            ->actions([
                Action::make('View Order')
                ->url(fn(Order $record)=> OrderResource::getUrl('view', ['record' => $record]))
                ->icon('heroicon-m-eye')
            ]);
    }
}
