<?php

namespace App\Http\Controllers;

use App\Average_check;
use App\Charts\SaleChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\DB;

class SaleChartController extends Controller
{
    public function index()
    {
        $sales = Average_check:: select(\DB::raw("SUM(price) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Month(created_at)"))
            ->pluck('count');

        $chart = new SaleChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $chart->dataset('Sales value', 'line', $sales)->options([
            'fill' => 'true',
            'borderColor' => '#51C1C0'
        ]);

        return view('home', compact('chart'));
    }
}
