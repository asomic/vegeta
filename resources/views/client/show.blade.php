@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
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
        </div>

        <div class="col-8">
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
