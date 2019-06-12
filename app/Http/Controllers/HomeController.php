<?php

namespace Laravel_Learn\Http\Controllers;

use ConsoleTVs\Charts\Classes\C3\Chart;
use Illuminate\Http\Request;
//use Khill\Lavacharts\Charts\Chart;
use Charts;
//use Khill\Lavacharts\Charts;
//use ConsoleTVs\Charts;
use Laravel_Learn\Charts\SampleChart;
use Laravel_Learn\Pessoa_perdida;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function grafico()
    {
//        $data = Pessoa_perdida::groupBy('created_at')
//            ->get()
//            ->map(function ($item) {
//                // Return the number of persons with that age
//                return count($item);
//            });
//
//        $chart = new SampleChart();
//        $chart->labels($data->keys());
//        $chart->dataset('My dataset', 'line', $data->values());

        $data = collect([]); // Could also be an array

        for ($days_backwards = 2; $days_backwards >= 0; $days_backwards--) {
            // Could also be an array_push if using an array rather than a collection.
            $data->push(Pessoa_perdida::whereDate('created_at', today()->subDays($days_backwards))->count());
        }

        $chart = new SampleChart;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'line', $data);
//        dd($data);
//        $chart = new SampleChart;
//        $chart->labels(['One', 'Two', 'Three', 'Four']);
//        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
//        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        return view('admin.grafico', compact('chart'));

    }
}
