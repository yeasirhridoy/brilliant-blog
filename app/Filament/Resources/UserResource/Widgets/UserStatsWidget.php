<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::query()->count()),
            Stat::make('Unique Visitors', Visitor::query()->distinct('ip_address')->count()),
            Stat::make('Today\'s Visitors', Visitor::query()->whereDate('created_at', now())->count()),
            Stat::make('Last 7 Days Visitors', Visitor::query()->whereDate('created_at', '>', now()->subWeek())->count()),
            Stat::make('Last 30 Days Visitors', Visitor::query()->whereDate('created_at', '>', now()->subDays(30))->count()),
            Stat::make('Total Visitors', Visitor::query()->count()),
        ];
    }
}
