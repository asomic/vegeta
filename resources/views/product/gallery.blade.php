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
            <a class="btn btn-success btn-block" href="{{route('product.show', ['product'=>$product->id])}}">Información</a>
            <a class="btn btn-success btn-block" href="{{route('product.gallery.show', ['product'=>$product->id])}}">Imagenes</a>
            <a class="btn btn-success btn-block" href="{{route('product.document.show', ['product'=>$product->id])}}">Documentos</a>
        </div>
    </div>
</div>
@endsection
