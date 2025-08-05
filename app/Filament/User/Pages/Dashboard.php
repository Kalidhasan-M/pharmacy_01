<?php

namespace App\Filament\User\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\User\Widgets\UserStatsWidget;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    
    protected static string $view = 'filament.user.pages.dashboard';
    
    public function getTitle(): string
    {
        return 'User Dashboard';
    }
    
    protected function getHeaderWidgets(): array
    {
        return [
            UserStatsWidget::class,
        ];
    }
} 