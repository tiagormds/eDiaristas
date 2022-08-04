<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Identificação</legend>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="input" class="form-control" name="nome" id="nome" placeholder="Nome" value="{{ isset($servico) || old('name') ? $servico->nome : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="icone">Ícone</label>
                        <input type="input" class="form-control" name="icone" id="icone" placeholder="Ícone" value="{{ isset($servico) ? $servico->icone : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="posicao">Posição na Plataforma</label>
                        <input type="input" class="form-control" name="posicao"
                               id="posicao" placeholder="Posição na Plataforma" value="{{ isset($servico) ? $servico->posicao : '' }}">
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Globais</legend>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_minimo">Valor Mínimo</label>
                        <input type="input" class="form-control" name="valor_minimo" id="valor_minimo"
                               placeholder="Valor Mínimo" value="{{ isset($servico) ? $servico->valor_minimo : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantidade_horas">Quantidades Mínimas de Horas</label>
                        <input type="input" class="form-control" name="quantidade_horas"
                               id="quantidade_horas" placeholder="Quantidades Mínimas de Horas" value="{{ isset($servico) ? $servico->quantidade_horas : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="porcentagem">Porcentagem de comissão</label>
                        <input type="input" class="form-control" name="porcentagem"
                               id="porcentagem" placeholder="Porcentagem de comissão" value="{{ isset($servico) ? $servico->porcentagem : '' }}">
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Cômodos</legend>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_quarto">Valor por quarto</label>
                        <input type="input" class="form-control" name="valor_quarto" id="valor_quarto"
                               placeholder="Valor por quarto" value="{{ isset($servico) ? $servico->valor_quarto : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_quarto">Quantidade de horas por quartos</label>
                        <input type="input" class="form-control" name="horas_quarto"
                               id="horas_quarto" placeholder="Quantidade de horas por quartos" value="{{ isset($servico) ? $servico->horas_quarto : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_sala">Valor por sala</label>
                        <input type="input" class="form-control" name="valor_sala" id="valor_sala"
                               placeholder="Valor por sala" value="{{ isset($servico) ? $servico->valor_sala : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_sala">Quantidades de horas por sala</label>
                        <input type="input" class="form-control" name="horas_sala"
                               id="horas_sala" placeholder="Quantidades de horas por sala" value="{{ isset($servico) ? $servico->horas_sala : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_banheiro">Valor por Banheiro</label>
                        <input type="input" class="form-control" name="valor_banheiro" id="valor_banheiro"
                               placeholder="Valor por Banheiro" value="{{ isset($servico) ? $servico->valor_banheiro : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_banheiro">Quantidades de Horas por Banheiro</label>
                        <input type="input" class="form-control" name="horas_banheiro"
                               id="horas_banheiro" placeholder="Quantidades de Horas por Banheiro" value="{{ isset($servico) ? $servico->horas_banheiro : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_cozinha">Valor por Cozinha</label>
                        <input type="input" class="form-control" name="valor_cozinha" id="valor_cozinha"
                               placeholder="Valor por cozinha" value="{{ isset($servico) ? $servico->valor_cozinha : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_cosinha">Quantidade de horas por cozinha</label>
                        <input type="input" class="form-control" name="horas_cosinha"
                               id="horas_cosinha" placeholder="Quantidade de horas por cozinha" value="{{ isset($servico) ? $servico->horas_cosinha : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_quintal">Valor por Quintal</label>
                        <input type="input" class="form-control" name="valor_quintal" id="valor_quintal"
                               placeholder="Valor por Quintal" value="{{ isset($servico) ? $servico->valor_quintal : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_quintal">Quantidade de horas por quintal</label>
                        <input type="input" class="form-control" name="horas_quintal"
                               id="horas_quintal" placeholder="Quantidade de horas por quintal" value="{{ isset($servico) ? $servico->horas_quintal : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_outros">Valor por outros tipos de cômodos</label>
                        <input type="input" class="form-control" name="valor_outros"
                               id="valor_outros" placeholder="Valor por outros tipos de cômodos" value="{{ isset($servico) ? $servico->valor_outros : '' }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_outros">Quantidade de horas por outros tipos
                            de cômodos</label>
                        <input type="input" class="form-control" name="horas_outros"
                               id="horas_outros"
                               placeholder="Quantidade de horas por outros tipos de cômodos" value="{{ isset($servico) ? $servico->horas_outros : '' }}">
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
</div>
