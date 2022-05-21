@extends('layouts.app')
@section('content')
<div clas="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Formulario Editar Provedores</h5>
        <a href="{{route('proveedores.index')}}" class="btn btn-primary ml-auto">
            <i class="fas fa-chevron-circle-left"></i>
            Volver
        </a>
    </div>
    <div class="card-body">
        <form action="{{route('proveedores.update',$proveedor->idProveedor)}}" method="POST" enctype="multipart/form-data" id="create">
        @method('PUT')
        @include('proveedores.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
        <i class="fas fa-pencil-alt"></i>
            Editar
        </button>
    </div>

</div>
@endsection