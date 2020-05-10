<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Charts\SaleChart;
use App\Average_check;
use Illuminate\Support\Facades\DB;

class SaleChartController extends Controller
{
    public function index(){
        /*$sal=Average_check::pluck('price','created_at');
        $chart=new SaleChart();
        $chart->labels($sal->keys());
        $chart->dataset('Sales value', 'line', $sal->values())->backgroundColor('blue');
       */
        $products = Average_check::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = SaleChart::database($products, 'bar', 'highcharts')
            ->title("Product Details")
            ->elementLabel("Total Products")
            ->dimensions(1000, 500)
            ->responsive(true)
            ->groupByMonth(date('Y'), true);

        return view('chart',compact('chart'));
    }

}
