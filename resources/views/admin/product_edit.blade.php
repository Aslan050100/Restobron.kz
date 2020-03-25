@extends('layouts.app', ['title' => __('Product')])

@section('content')
    @include('users.partials.header', ['title' => __('Изменить Продукты')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Продукты') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('product') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('product.update', $product->id) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о продукте') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Name') }}" value="{{$product->name }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Описания') }}</label>
                                    <input class="form-control form-control-alternative" value="{{ $product->description}}" type="textarea" name="desc" placeholder="Enter text here...">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Карта') }}</label>
                                    <input type="text" name="map" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Map') }}" value="{{ $product->map }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Номер телефона') }}</label>
                                    <input type="text" name="phone_number" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Номер телефона') }}" value="{{ $product->phone_number }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Адрес') }}</label>
                                    <input type="text" name="address" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Адрес') }}" value="{{ $product->address }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Место') }}</label>
                                    <input type="text" name="seats" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Место') }}" value="{{ $product->seats }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Hall description') }}</label>
                                    <select name='hall_desc' class="browser-default custom-select">
                                        <option selected value="{{$product->hall_description->id}}">{{$product->hall_description->name}}</option>
                                        @foreach($hall_descriptions as $hall_description)
                                            <option value="{{$hall_description->id}}">{{$hall_description->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Город') }}</label>
                                    <select name='city' class="browser-default custom-select">
                                        <option selected value="{{$product->city->id}}">{{$product->city->name}}</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
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
