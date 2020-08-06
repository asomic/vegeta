@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('product.sidebar')

        </div>
        <div class="col-md-9 mb-4">
            <button class="btn btn-success mb-2">Nuevo documento</button>
            @for ($i = 0; $i < 5; $i++)
            <div class="card mb-2">
                <div class="card-body"> documento N° {{$i}}</div>
            </div>
            @endfor

        </div>
    </div>
</div>
@endsection
