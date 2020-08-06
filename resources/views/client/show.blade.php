@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('client.sidebar')
        </div>
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">
                    Ordenes
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Estado</th>
                            <th class="justify-content-end">Total</th>
                            <th></th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($client->orders as $order)
                        <tr >
                            <th scope="row">{{$order->id}}</th>
                            <td> <span class="badge badge-secondary">Pendiente</span></td>
                            <td class="pull-right">${{ number_format($order->total, 0, ',', '.')}} + iva</td>
                            <td><a class="btn btn-success" href="{{route('client.order.show',['client' => $client->id, 'order' => $order->id])}}">ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="card-body">
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
