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
        $sal=Average_check::pluck('price','created_at');
        $chart=new SaleChart();
        $chart->labels($sal->keys());
        $chart->dataset('Sales value', 'line', $sal->values())->backgroundColor('blue');
        return view('chart',compact('chart'));
    }

}
