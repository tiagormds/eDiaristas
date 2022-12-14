@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Cadastrar Serviços</h1>
@stop

@section('content')
    <form action="{{ route('servicos.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        @include('servicos._form')

        <button class="btn btn-primary">Salvar</button>
    </form>
@stop
