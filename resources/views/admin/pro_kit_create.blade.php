@extends('layouts.app', ['title' => __('Pro_kit Management')])

@section('content')
    @include('users.partials.header', ['title' => __('Добавить Продукты и Кухню')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Продукты и Кухня') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('pro_kit') }}" class="btn btn-sm btn-primary">{{ __('Назад') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('pro_kit.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Информация о продукте и Кухне') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Продукт') }}</label>
                                    <select name='product_id' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      @foreach($products as $product)
                                      <option value="{{$product->id}}">{{$product->name}}</option>
                                      @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password">{{ __('Кухня') }}</label>
                                    <select name='kitchen_id' class="browser-default custom-select">
                                      <option selected>Откройте это меню выбора</option>
                                      @foreach($kitchens as $kitchen)
                                      <option value="{{$kitchen->id}}">{{$kitchen->name}}</option>
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
