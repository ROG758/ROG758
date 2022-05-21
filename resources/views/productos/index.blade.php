@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Productos</h5>
        <a href="{{route('productos.create')}}" class="btn btn-primary ml-auto">
            <i class="fas fa-plus"></i>
            AGREGAR
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-4">
                <div class="form-gruop">
                    <a class="navbar-brand">Listar</a>
                    <select class="cunstom-select" id="limit" name="limit">
                        @foreach([15,30,45,60] as $limit)
                        <option value="{{ $limit}}"
                            @if(isset($_GET['limit'])){{($_GET['limit']==$limit) ?'selected':''}} @endif>{{ $limit}}
                        </option>
                        @endforeach
                    </select>

                    <?php
                    if(isset($_GET['page'])){
                        $pag=$_GET['page'];
                    }else{
                        $pag=1;
                    }
                    if(isset($_GET['limit'])){
                        $limite=$_GET['limit'];
                    }else{
                        $limite=15;
                    }

                    $comienzo=$limite*($pag-1);

                    ?>



                </div>

            </div>

            <div class="col-8">
                <div class="form-group">
                    <a class="navbar-brand">Buscar</a>
                    <input class="form-control me-2" type="search" placeholder="Search" id="search" aria-label="Search"
                        value="{{(isset($_GET['search']))?$_GET['search']:''}}">


                </div>
            </div>
            @if($productos->total() > 15)
            {{$productos->links()}}
            @endif

        </div>

        <div class="tables-responsive ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Expiración</th>
                        <th>Stock</th>
                        <th>Proveedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $valor=1;
                      if($pag!=1){
                      $valor=$comienzo+1;
                      }
                    ?>
                    @foreach($productos as $producto)
                    <tr>
                        <th scope="row">{{$valor++}}</th>
                        <td>{{$producto->idProducto}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>{{$producto->expiracion}}</td>
                        <td>{{$producto->stock}}</td>
                        <td>{{$producto->idProveedor}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('productos.show', $producto->idProducto)}}" class="btn btn-info"><i
                                        class="fas fa-binoculars"></i></a>
                                <a href="{{route('productos.edit', $producto->idProducto)}}" class="btn btn-primary"><i
                                        class="fas fa-pencil-alt"></i></a>
                                        
                                        <button type="Submit" class="btn btn-danger" 
                                form="delete_{{$producto->idProducto}}"
                                onclick="return confirm('¿Desea continuar con la operacion?. Esta acción no se puede revertir')">
                                    
                                    <i class="fas fa-trash"></i>

                                </button>

                                <form action="{{route('productos.destroy', $producto->idProducto)}}"
                                id="delete_{{$producto->idProducto}}" method="POST" enctype="multipart/form-data"
                                hidden>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div> 
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>
    <div class="card-footer">
    @if($productos->total() > 15)
            {{$productos->links()}}
            @endif
            </div>

</div>

<!-- JS PARA FILTAR Y BUSCAR MEDIANTE PAGINADO -->
<Script type="text/javascript">
$('#limit').on('change', function(){
    window.location.href="{{ route('productos.index')}}?limit=" + $(this).val()+ '&search=' + $('#search').val()
})

$('#search').on('keyup', function(e){
    if(e.keyCode == 13){
        window.location.href="{{ route('productos.index')}}?limit=" +$('#limit').val()+'&search='+$(this).val()
    }
})
</Script>
@endsection