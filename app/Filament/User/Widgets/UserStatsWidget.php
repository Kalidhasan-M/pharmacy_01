<?php

namespace App\Filament\User\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user();
        
        return [
            Stat::make('Account Status', 'Active')
                ->description('Your account is active')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            
            Stat::make('Member Since', $user->created_at->format('M Y'))
                ->description('You joined us')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('info'),
            
            Stat::make('Welcome', $user->name)
                ->description('Good to see you')
                ->descriptionIcon('heroicon-m-user')
                ->color('primary'),
        ];
    }
} 