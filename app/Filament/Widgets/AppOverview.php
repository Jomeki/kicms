<?php

namespace App\Filament\Widgets;

use App\Models\AppUser;
use App\Models\Event;
use App\Models\Project;
use App\Models\Territory;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AppOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Registered Clan Territories',Territory::count())
            ->icon('heroicon-o-map-pin'),
            Stat::make('Registered Clan Members',AppUser::count())->icon('heroicon-o-users'),
            Stat::make('Registered Clan Events ',Event::count())->icon('heroicon-o-calendar-days'),
            Stat::make('Registered Clan Projects ',Project::count())->icon('heroicon-o-folder-open'),
        ];
    }
}
