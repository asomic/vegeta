@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('product.sidebar')
        </div>
        <div class="col-md-9 mb-4">
            <div class="card" >
                <div class="card-header">
                    Resumen
                </div>
                <div class="card-body">
                    Resumen
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
