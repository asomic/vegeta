@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="action">
                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#productModal"> Nuevo producto</button>
                    </div>
                </div>

                <div class="card-body">
                    {{-- <client-table></client-table> --}}

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{strtoupper ($product->name)}}</td>
                                <td class="">
                                    <a class="btn btn-success" href="{{route('product.show',['product'=>$product->id])}}" >Ver</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="clientModalLabel">Nuevo producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('product.store')}}">
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Precio</label>
                    <input name="name" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success ">Guardar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
