@extends('layouts.app', ['title' => __('Product Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавить Продукты')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Управление продуктом') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('product') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('product.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о продукте') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Имя') }}" value="{{ old('name') }}" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-description">{{ __('Описания') }}</label>
                                    <input class="form-control form-control-alternative" type="textarea" name="desc" placeholder="Введите текст здесь ...">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Карта') }}</label>
                                    <input type="text" name="map" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Карта') }}" value="{{ old('map') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Номер телефона') }}</label>
                                    <input type="text" name="phone_number" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Номер телефона') }}" value="{{ old('map') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Адрес') }}</label>
                                    <input type="text" name="address" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Адрес') }}" value="{{ old('map') }}" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-map">{{ __('Место') }}</label>
                                    <input type="text" name="seats" id="input-map" class="form-control form-control-alternative" placeholder="{{ __('Место') }}" value="{{ old('map') }}" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Hall description') }}</label>
                                    <select name='hall_desc' class="browser-default custom-select">
                                        <option selected>Откройте это меню выбора</option>
                                        @foreach($hall_descriptions as $hall_description)
                                            <option value="{{$hall_description->id}}">{{$hall_description->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Город') }}</label>
                                    <select name='city' class="browser-default custom-select">
                                        <option selected>Откройте это меню выбора</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Сохранить') }}</button>
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
