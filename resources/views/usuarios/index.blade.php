@extends('adminlte::page')

@section('title', 'Lista de Serviços')

@section('content_header')
    <h1>Lista de Usuários</h1>
@stop

@section('content')

    @if(session('mensagem'))
        <div class="alert alert-default-success">
            {{ session('mensagem') }}
        </div>
    @endif


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @forelse($usuarios as $usuario)
            <tr>
                <th scope="row">{{ $usuario->id }}</th>
                <td>{{ $usuario->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('usuarios.edit', $usuario->id) }}">Atualizar Dados</a>
                    <a class="btn btn-danger" href="{{ route('usuarios.destroy', $usuario->id) }}">Apagar Usuário</a>
                </td>
            </tr>
        @empty
            <tr>
                <th></th>
                <th>Nenhum registro foi encontrado!</th>
                <th></th>
            </tr>
        @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $usuarios->links() }}
    </div>

{{--    <div class="float-right">--}}
{{--        <a href="{{ route('servicos.create') }}" class="btn btn-primary">Novo serviço</a>--}}
{{--    </div>--}}
@stop
