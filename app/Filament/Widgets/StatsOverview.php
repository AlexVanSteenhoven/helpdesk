<?php

namespace App\Filament\Widgets;

use App\Models\Ticket;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total tickets', Ticket::all()->count())->icon('heroicon-o-ticket'),

            Stat::make('Open tickets', Ticket::where('status', 'open')->count())->icon('heroicon-o-inbox'),
            Stat::make('Assigned tickets', Ticket::where('status', 'assigned')->count())->icon('heroicon-o-user-group'),

        ];
    }
}
