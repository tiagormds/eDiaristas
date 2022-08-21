@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Cadastrar Novo Usuário</h1>
@stop

@section('content')
    <form action="{{ route('usuarios.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        Formulário de novo usuário

{{--        @include('servicos._form')--}}

        <button class="btn btn-primary">Salvar</button>
    </form>
@stop
