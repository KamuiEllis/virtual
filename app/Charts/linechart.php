<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Carbon;

class linechart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        
        $chart = $this->chart->lineChart();
        $chart->setTitle('Sales during ' . Carbon::now()->format('Y'));
        $chart->setSubtitle('Physical sales vs Digital sales.');
        $chart->addData('Physical sales', [40, 93, 35, 42, 18, 82]);
        $chart->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

        return $chart;
    }
}
