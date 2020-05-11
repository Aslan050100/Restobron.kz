<?php

namespace App\Http\Controllers;

use App\Average_check;
use App\Charts\OrderChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\DB;

class OrderChartController extends Controller
{
    public function index()
    {
        $orders = Average_check:: select(\DB::raw("count(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Month(created_at)"))
            ->pluck('count');

        $chart = new OrderChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $chart->dataset('Total orders', 'bar', $orders)->options([
            'fill' => 'true',
            'backgroundColor'=>'orange',
            'borderColor' => 'orange'
        ]);

        return view('home', compact('chart'));
    }
}


