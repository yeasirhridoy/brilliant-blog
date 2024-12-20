<?php

namespace App\Filament\Widgets;

use App\Models\Visitor;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class VisitorsPerMonthChart extends ChartWidget
{
    protected static ?string $heading = 'Monthly Visitors';

    protected int|string|array $columnSpan = 'full';

    protected static ?string $maxHeight = '200px';

    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $data = Trend::model(Visitor::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->dateColumn('created_at')
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Visitor Count',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
