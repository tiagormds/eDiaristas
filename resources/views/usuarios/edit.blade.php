@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Editar Serviços</h1>
@stop

@section('content')
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('usuarios._form')

        <button class="btn btn-primary">Atualizar</button>
    </form>
@stop
