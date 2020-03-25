@extends('layouts.app', ['title' => __('Menu')])

@section('content')
    @include('users.partials.header', ['title' => __('Изменить Меню')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Меню') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('menu') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('menu.update', $menu->id) }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о меню') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Имя') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Имя') }}" value="{{ $menu->name }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Цена') }}</label>
                                    <input type="text" name="price" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Цена') }}" value="{{ $menu->price }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Описания') }}</label>
                                    <input type="text" name="description" id="input-name" class="form-control form-control-alternative" placeholder="{{ __('Описания') }}" value="{{ $menu->description }}" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Тип блюды') }}</label>
                                    <select name='dish_type' class="browser-default custom-select">
                                        <option  selected value="{{$menu->dish_types->id}}" >{{$menu->dish_types->name}}</option>
                                        @foreach($dish_types as $dish_type)
                                            <option value="{{$dish_type->id}}">{{$dish_type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Продукт') }}</label>
                                    <select name='product' class="browser-default custom-select">
                                        <option selected value="{{$menu->products->id}}">{{$menu->products->name}}</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
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
