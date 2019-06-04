<?php

namespace Laravel_Learn\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Laravel_Learn\Pessoa_perdida;

class SampleChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
//    public function grafico(){
//        $data = Pessoa_perdida::groupBy('created_at')
//            ->get()
//            ->map(fumction($item){
//
//            return count($item);
//        });
//
//        $chart = new SampleChart();
//        $chart->labels($data->keys());
//        $chart->dataset('My dataset', 'line', $data->values());
//        return view('sample_view', compact('chart'));
//    }
}
