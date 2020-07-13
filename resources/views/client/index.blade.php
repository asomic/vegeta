@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <div class="action">
                        <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#clientModal"> Nuevo cliente</button>
                    </div>
                </div>

                <div class="card-body">
                    {{-- <client-table></client-table> --}}

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Rut</th>
                            <th scope="col">Razon Social</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{$client->rut_formated}}</td>
                                <td>{{$client->razon_social}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('client.show',['client'=>$client->id])}}" >Ver</a>
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
<div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="clientModalLabel">Nuevo cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('client.store')}}">
                @csrf
                <sii-rut></sii-rut>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
