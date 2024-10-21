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
            Stat::make('Total Admins', User::query()->where('role', User::ROLE_ADMIN)->count()),
            Stat::make('Total Editors', User::query()->where('role', User::ROLE_EDITOR)->count()),
            Stat::make('Total Visitors', Visitor::query()->count()),
        ];
    }
}
