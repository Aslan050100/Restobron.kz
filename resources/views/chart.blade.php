@extends("layouts.app")
@section('content')
    <div class="container">
        <h1>SaleValueChart</h1>
        <div class="flex">
            <div class="w-1/2">
                {!! $chart->container() !!}
            </div>
        </div>

        {!! $chart->script() !!}
    </div>
 @endsection

