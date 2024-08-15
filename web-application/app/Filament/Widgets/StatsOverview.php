<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort=1;

    protected function getStats(): array
    {
        return [
            Stat::make('Assinaturas em dia', 'R$ 9.230'),
            Stat::make('Assinaturas em atraso', 'R$ 1.398'),
            Stat::make('Assinaturas totais', 'R$ 10.628'),
        ];
    }
}
