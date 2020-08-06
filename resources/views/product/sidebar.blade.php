<div class="card mb-4">
    <div class="card-header">
        {{$product->name}}

    </div>
    <img  class="card-img-top" src="{{asset('/img/default.png')}}">
    <div class="card-body">
        <img  class="card-img-top" src="{{asset('/img/default.png')}}">
        
    </div>

</div>
<a class="btn btn-success btn-block" href="{{route('product.show', ['product'=>$product->id])}}">Información</a>
<a class="btn btn-success btn-block" href="{{route('product.gallery.show', ['product'=>$product->id])}}">Imagenes</a>
<a class="btn btn-success btn-block" href="{{route('product.document.show', ['product'=>$product->id])}}">Documentos</a>