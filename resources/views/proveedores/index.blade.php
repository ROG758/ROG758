@extends('layouts.app')
@section('content')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Provedores</h5>
        <a href="{{route('proveedores.create')}}" class="btn btn-primary ml-auto">
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
            @if($proveedores->total() > 15)
            {{$proveedores->links()}}
            @endif
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Razon social</th>
                        <th>Nombre completo</th>
                        <th>Dirrección</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>RFS</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $valor=1;
                      if($pag!=1)
                      $valor=$comienzo+1;
                    ?>
                    @foreach($proveedores as $proveedor)
                    <tr>
                        <th scope="row">{{$valor++}}</th>
                        <td>{{$proveedor->idProveedor}}</td>
                        <td> {{$proveedor->razonSocial}}</td>
                        <td> {{$proveedor->nombreCompleto}}</td>
                        <td> {{$proveedor->dirreccion}}</td>
                        <td> {{$proveedor->telefono}}</td>
                        <td> {{$proveedor->correo}}</td>
                        <td> {{$proveedor->rfc}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{route('proveedores.show', $proveedor->idProveedor)}}" class="btn btn-info"><i
                                        class="fas fa-binoculars"></i></a>
                                <a href="{{route('proveedores.edit', $proveedor->idProveedor)}}"
                                    class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <button type="Submit" class="btn btn-danger" form="delete_{{$proveedor->idProveedor}}"
                                    onclick="return confirm('¿Desea continuar con la operacion?. Esta acción no se puede revertir')">

                                    <i class="fas fa-trash"></i>

                                </button>

                                <form action="{{route('proveedores.destroy', $proveedor->idProveedor)}}"
                                    id="delete_{{$proveedor->idProveedor}}" method="POST" enctype="multipart/form-data"
                                    hidden>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </td>
                        @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <div class="card-fooder">
        @if($proveedores->total() > 15)
        {{$proveedores->links()}}
        @endif

    </div>
</div>

<!-- JS PARA FILTAR Y BUSCAR MEDIANTE PAGINADO -->
<Script type="text/javascript">
$('#limit').on('change', function() {
    window.location.href = "{{ route('proveedores.index')}}?limit=" + $(this).val() + '&search=' + $('#search')
        .val()
})

$('#search').on('keyup', function(e) {
    if (e.keyCode == 13) {
        window.location.href = "{{ route('proveedores.index')}}?limit=" + $('#limit').val() + '&search=' + $(
            this).val()
    }
})
</Script>
@endsection