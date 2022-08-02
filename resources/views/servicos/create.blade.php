@extends('adminlte::page')

@section('title', 'Novo Serviço')

@section('content_header')
    <h1>Cadastrar Serviços</h1>
@stop

@section('content')
    <form action="{{ route('servicos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Identificação</h4>
        <div class="row">
            <div class="col">
                <span>Nome</span>
                <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" name="nome">
            </div>

            <div class="col">
                <span>ícone</span>
                <input type="text" class="form-control" placeholder="Ícone" aria-label="Ícone" name="icone">
            </div>

            <div class="col">
                <span>Posição na plataforma</span>
                <input type="text" class="form-control" placeholder="Posição na plataforma"
                       aria-label="Posição na plataforma" name="posicao_plataforma">
            </div>
        </div>

        <br><br>

        <h4>Globais</h4>
        <div class="row">
            <div class="col">
                <span>Valor mínimo</span>
                <input type="text" class="form-control" placeholder="Valor mínimo" aria-label="Valor mínimo"
                       name="valor_minimo">
            </div>

            <div class="col">
                <span>Quantidade mínimas de horas</span>
                <input type="text" class="form-control" placeholder="Quantidade mínimas de horas"
                       aria-label="Quantidade mínimas de horas" name="quantidade_minimas_horas">
            </div>

            <div class="col">
                <span>Porcentagem de comissão</span>
                <input type="text" class="form-control" placeholder="Porcentagem de comissão"
                       aria-label="Porcentagem de comissão" name="porcentagem_comissão">
            </div>
        </div>

        <br><br>

        <h4>Cômodos</h4>

        <div class="row">
            <div class="col">
                <span>Valor por quarto</span>
                <input type="text" class="form-control" placeholder="Valor por quarto" aria-label="Valor mínimo"
                       name="Valor por quarto" data-dz-name="Valor_quarto">
            </div>

            <div class="col">
                <span>Quantidade de horas por quartos</span>
                <input type="text" class="form-control" placeholder="Quantidade de horas por quartos"
                       aria-label="Quantidade de horas por quartos" name="Quantidade_horas_quartos">
            </div>

            <div class="col">
                <span>Valor por sala</span>
                <input type="text" class="form-control" placeholder="Valor por sala" aria-label="Valor por sala"
                       name="valor_por_sala">
            </div>

            <div class="col">
                <span>Quantidades de horas por sala</span>
                <input type="text" class="form-control" placeholder="Quantidades de horas por sala"
                       aria-label="Quantidades de horas por sala" name="quantidades_horas_sala">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <span>Valor por banheiro</span>
                <input type="text" class="form-control" placeholder="Valor por banheiro" aria-label="Valor por banheiro"
                       name="valor_banheiro">
            </div>

            <div class="col">
                <span>Quantidades de horas por banheiro</span>
                <input type="text" class="form-control" placeholder="Quantidades de horas por banheiro"
                       aria-label="Quantidades de horas por banheiro" name="quantidades_horas_banheiro">
            </div>

            <div class="col">
                <span>Valor por cozinha</span>
                <input type="text" class="form-control" placeholder="Valor por cozinha" aria-label="Valor por cozinha"
                       name="Valor_cozinha">
            </div>

            <div class="col">
                <span>Quantidade de horas por cozinha</span>
                <input type="text" class="form-control" placeholder="Quantidade de horas por cozinha"
                       aria-label="Quantidade de horas por cozinha" name="quantidade_horas_cozinha">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <span>Valor por quintal</span>
                <input type="text" class="form-control" placeholder="Valor por quintal" aria-label="Valor por quintal"
                       name="valor_quintal">
            </div>

            <div class="col">
                <span>Quantidade de horas por quintal</span>
                <input type="text" class="form-control" placeholder="Quantidade de horas por quintal"
                       aria-label="Quantidade de horas por quintal" name="Quantidade_horas_quintal">
            </div>

            <div class="col">
                <span>Valor por outros tipos de cômodos</span>
                <input type="text" class="form-control" placeholder="Valor por outros tipos de cômodos"
                       aria-label="Valor por outros tipos de cômodos" name="Valor_outros_tipos_comodos">
            </div>

            <div class="col">
                <span>Quantidade de horas por outros tipos de cômodos</span>
                <input type="text" class="form-control" placeholder="Quantidade de horas por outros tipos de cômodos"
                       aria-label="Quantidade de horas por outros tipos de cômodos"
                       name="quantidade_horas_outros_tipos_comodos">
            </div>
        </div>

        <br>

        <button class="btn btn-primary">Salvar</button>
    </form>
@stop
