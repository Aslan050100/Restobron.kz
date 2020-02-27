@extends('layouts.app', ['title' => __('Ad')])

@section('content')
    @include('users.partials.header', ['title' => __('Изменить средний чек')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Средний чек') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('average_checks') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('average_checks.update', $avg->id) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о среднем чеке') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Цена') }}</label>
                                    <input type="text" name="price" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Price') }}" value="{{$avg->price }}" required autofocus>
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
