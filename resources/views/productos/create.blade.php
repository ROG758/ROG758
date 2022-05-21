@extends('layouts.app')
@section('content')
<div clas="card mt-3">
    <div class="card-header d-inline-flex">
        <h5>Formulario Crear Productos</h5>
        <a href="{{route('productos.index')}}" class="btn btn-primary ml-auto">
            <i class="fas fa-chevron-circle-left"></i>
            Volver
        </a>
    </div>
    <div class="card-body">
        <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data" id="create">
        @include('productos.partials.form')
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary" form="create">
            <i class="fas fa-plus"></i>
            Crear
        </button>
    </div>

</div>
@endsection