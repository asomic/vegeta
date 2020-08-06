@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            @include('client.sidebar')
        </div>
        <div class="col-md-8 mb-4">
            <div>info</div>
        </div>
    </div>
</div>
@endsection
