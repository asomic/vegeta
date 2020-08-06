@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card mb-4">
                <div class="card-header">
                    Cliente
                </div>
                <div class="card-body">
                    <label for="rut">RUT</label>
                    <p> {{$client->rut_formated}}</p>
                    <label for="razon">Razon Social</label>
                    <p> {{$client->razon_social}}</p>
                    <label for="rut">Giro</label>
                    <p> {{$client->giro}}</p>
                </div>

            </div>
            <button class="btn btn-success btn-block">Nueva orden</button>
        </div>


        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">
                    Historial
                </div>
                <div class="card-body">
                    las ordenes ....
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
