@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card mb-4">
                <div class="card-header">
                    {{$product->name}}
                </div>
                <div class="card-body">
                    <img width="100%" src="{{asset('/img/default.png')}}">
                    
                </div>

            </div>
            <a class="btn btn-success btn-block">Información</a>
            <a class="btn btn-success btn-block">Imagenes</a>
            <a class="btn btn-success btn-block">Documentos</a>
        </div>
    </div>
</div>
@endsection
