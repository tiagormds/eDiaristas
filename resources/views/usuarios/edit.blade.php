@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Editar Serviços</h1>
@stop

@section('content')
    <form action="{{ route('servico.update', $servico->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('servicos._form')

        <button class="btn btn-primary">Salvar</button>
    </form>
@stop
