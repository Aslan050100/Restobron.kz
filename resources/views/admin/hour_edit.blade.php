@extends('layouts.app', ['title' => __('Hour')])

@section('content')
    @include('users.partials.header', ['title' => __('Изменить Объявление')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Объявление') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('hour') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('hour.update', $hour->id) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о объявлений') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Продукт') }}</label>
                                    <select name='product' class="browser-default custom-select">
                                        <option selected value="{{$hour->products->id}}">{{$hour->products->name}}</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Monday') }}</label>
                                    <select name='monday' class="browser-default custom-select">
                                        <option selected>{{$hour->monday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Tuesday') }}</label>
                                    <select name='tuesday' class="browser-default custom-select">
                                        <option selected>{{$hour->tuesday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Wednesday') }}</label>
                                    <select name='wednesday' class="browser-default custom-select">
                                        <option selected>{{$hour->wednesday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Thursday') }}</label>
                                    <select name='thursday' class="browser-default custom-select">
                                        <option selected>{{$hour->thursday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Friday') }}</label>
                                    <select name='friday' class="browser-default custom-select">
                                        <option selected>{{$hour->friday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Saturday') }}</label>
                                    <select name='saturday' class="browser-default custom-select">
                                        <option selected>{{$hour->saturday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Sunday') }}</label>
                                    <select name='sunday' class="browser-default custom-select">
                                        <option selected>{{$hour->sunday}}</option>
                                        @foreach($weeks as $week)
                                            <option value="{{$week->hour}}">{{$week->hour}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Изменить') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
