@extends('layouts.app')


@section('content')
  <h5>{{ $Nombre }}</h5>
    <p>nueva vista</p>
    <p>hola que hace</p>

    <a href="{{route('ruta.users.create')}}">crear usuario</a>
    <a href="{{route('ruta.users.show')}}">ver usuario</a>
    <a href="{{route('ruta.users.edit')}}">Editar usuario</a>
    <a href="{{route('ruta.users.delete')}}">Elimienar usuario</a>

    <h5>Estructura de control</h5>
    @if($valor==0)
    <h1>el valor es 0</h1>
    @elseif ($valor>0)
    <h3>el valor es mayor a 0</h3>
    @else
    <h3>EL valor es: {{$valor}}</h3>

    @endif
   
     <hr>
    @for($i=0;$i<=10;$i++)
     <h4>Cilo {{$i}}<h4>
    @endfor


    @include('layouts.partecodigo')
@endsection

