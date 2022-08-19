<div class="card">
    <div class="card-body">
        <fieldset>
            <legend>Identificação</legend>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="input" class="form-control" name="nome" id="nome" placeholder="Nome"
                               value="{{ old('nome', $servico->nome ?? '') }}">
                        @error('nome')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="icone">Ícone</label>
                        <select class="form-control" name="icone" id="icone">
                            <option value="" disabled selected>Selecione o ícone</option>
                            <option
                                value="twf-cleaning-1" {{ old('icone',  $servico->icone ?? '') ==='twf-cleaning-1' ? 'selected' : ''   }}>
                                Ícone 1
                            </option>
                            <option
                                value="twf-cleaning-2" {{ old('icone',  $servico->icone ?? '') ==='twf-cleaning-2' ? 'selected' : '' }}>
                                Ícone 2
                            </option>
                            <option
                                value="twf-cleaning-3" {{ old('icone',  $servico->icone ?? '') ==='twf-cleaning-3' ? 'selected' : '' }}>
                                Ícone 3
                            </option>
                        </select>
                        @error('icone')
                        <div class="text-danger">O campo Ícone é obrigatório.</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="posicao">Posição na Plataforma</label>
                        <input type="input" class="form-control" name="posicao"
                               id="posicao" data-mask="00" placeholder="Posição na Plataforma"
                               value="{{ old('posicao', $servico->posicao ?? '') }}">
                        @error('posicao')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
                               placeholder="Valor Mínimo" value="{{ old('valor_minimo', $servico->valor_minimo ?? '') }}" data-mask="#.##0,00" data-mask-reverse="true">
                        @error('valor_minimo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantidade_horas">Quantidades Mínimas de Horas</label>
                        <input type="input" class="form-control" name="quantidade_horas"
                               id="quantidade_horas" placeholder="Quantidades Mínimas de Horas"
                               value="{{ old('quantidade_horas', $servico->quantidade_horas ?? '') }}">
                        @error('quantidade_horas')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="porcentagem">Porcentagem de comissão</label>
                        <input type="input" class="form-control" name="porcentagem"
                               id="porcentagem" placeholder="Porcentagem de comissão"
                               value="{{ old('porcentagem', $servico->porcentagem ?? '') }}">
                        @error('quantidade_horas')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
                        <input type="input" class="form-control" name="valor_quarto" id="valor_quarto" data-mask="#.##0,00" data-mask-reverse="true"
                               placeholder="Valor por quarto" value="{{ old('valor_quarto', $servico->valor_quarto ?? '') }}">
                        @error('valor_quarto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_quarto">Quantidade de horas por quartos</label>
                        <input type="input" class="form-control" name="horas_quarto"
                               id="horas_quarto" data-mask="0" placeholder="Quantidade de horas por quartos"
                               value="{{ old('horas_quarto', $servico->horas_quarto ?? '') }}">
                        @error('horas_quarto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_sala">Valor por sala</label>
                        <input type="input" class="form-control" name="valor_sala" id="valor_sala" data-mask="#.##0,00" data-mask-reverse="true"
                               placeholder="Valor por sala" value="{{ old('valor_sala', $servico->valor_sala ?? '') }}">
                        @error('valor_sala')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_sala">Quantidades de horas por sala</label>
                        <input type="input" class="form-control" name="horas_sala"
                               id="horas_sala" data-mask="0" placeholder="Quantidades de horas por sala"
                               value="{{ old('horas_sala', $servico->horas_sala ?? '') }}">
                        @error('horas_sala')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_banheiro">Valor por Banheiro</label>
                        <input type="input" class="form-control" name="valor_banheiro" data-mask="#.##0,00" data-mask-reverse="true" id="valor_banheiro"
                               placeholder="Valor por Banheiro"
                               value="{{ old('valor_banheiro', $servico->valor_banheiro ?? '') }}">
                        @error('valor_banheiro')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_banheiro">Quantidades de Horas por Banheiro</label>
                        <input type="input" class="form-control" name="horas_banheiro"
                               id="horas_banheiro" data-mask="0" placeholder="Quantidades de Horas por Banheiro"
                               value="{{ old('horas_banheiro', $servico->horas_banheiro ?? '') }}">
                        @error('horas_banheiro')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_cozinha">Valor por Cozinha</label>
                        <input type="input" class="form-control" name="valor_cozinha" data-mask="#.##0,00" data-mask-reverse="true" id="valor_cozinha"
                               placeholder="Valor por cozinha" value="{{ old('valor_cozinha', $servico->valor_cozinha ?? '') }}">
                        @error('valor_cozinha')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_cosinha">Quantidade de horas por cozinha</label>
                        <input type="input" class="form-control" name="horas_cosinha"
                               id="horas_cosinha" data-mask="0" placeholder="Quantidade de horas por cozinha"
                               value="{{ old('horas_cosinha', $servico->horas_cosinha ?? '') }}">
                        @error('horas_cosinha')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_quintal">Valor por Quintal</label>
                        <input type="input" class="form-control" name="valor_quintal" id="valor_quintal" data-mask="#.##0,00" data-mask-reverse="true"
                               placeholder="Valor por Quintal" value="{{ old('valor_quintal', $servico->valor_quintal ?? '') }}">
                        @error('valor_quintal')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_quintal">Quantidade de horas por quintal</label>
                        <input type="input" class="form-control" name="horas_quintal"
                               id="horas_quintal" data-mask="0" placeholder="Quantidade de horas por quintal"
                               value="{{ old('horas_quintal', $servico->horas_quintal ?? '') }}">
                        @error('horas_quintal')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_outros">Valor por outros tipos de cômodos</label>
                        <input type="input" class="form-control" name="valor_outros" data-mask="#.##0,00" data-mask-reverse="true"
                               id="valor_outros" placeholder="Valor por outros tipos de cômodos"
                               value="{{ old('valor_outros', $servico->valor_outros ?? '') }}">
                        @error('valor_outros')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_outros">Quantidade de horas por outros tipos
                            de cômodos</label>
                        <input type="input" class="form-control" name="horas_outros"
                               id="horas_outros" data-mask="0"
                               placeholder="Quantidade de horas por outros tipos de cômodos"
                               value="{{ old('horas_outros', $servico->horas_outros ?? '') }}">
                        @error('horas_outros')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
</div>
