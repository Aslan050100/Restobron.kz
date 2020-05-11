@extends('layouts.app', ['title' => __('Pro_parking')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Продукты и Парковка') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('pro_parking.create') }}" class="btn btn-sm btn-primary">{{ __('Добавить Продукты и Парковку') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Product id') }}</th>
                                    <th scope="col">{{ __('parking id') }}</th>
                                    <th scope="col">{{ __('Дата создания') }}</th>
                                    <th scope="col">{{ __('Дата обновления') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pro_parkings as $pro_parking)
                                    <tr>
                                        <td>{{ $pro_parking->pro_id }}</td>
                                        <td>
                                            <a>{{ $pro_parking->parking_id }}</a>
                                        </td>
                                        <td>{{ $pro_parking->created_at}}</td>
                                        <td>{{ $pro_parking->updated_at}}</td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <form action="{{ route('pro_parking.destroy', [$pro_parking->pro_id,$pro_parking->parking_id]) }}" method="post">
                                                            @csrf

                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this product and parking?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Удалить') }}
                                                            </button>
                                                        </form>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $pro_parkings->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
