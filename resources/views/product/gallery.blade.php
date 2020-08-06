@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('product.sidebar')
        </div>
        <div class="col-md-9 mb-4">
            <button class="btn btn-success ">Nueva Imagen</button>
            <div class="row">
                @for ($i = 0; $i < 5; $i++)
                    <div class="col-4 ">
                        <img width="100" class="m-2" src="{{asset('/img/default.png')}}">
                    </div>
                @endfor
            </div>
            {{-- <div class="card">
                <div class="card-body">
                    hola
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
