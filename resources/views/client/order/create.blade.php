@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('client.sidebar')
        </div>
        <div class="col-md-8 mb-4">
            <order-create></order-create>
        </div>
    </div>
</div>
@endsection
