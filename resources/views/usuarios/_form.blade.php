<div class="card">
    <div class="card-body">
        <fieldset>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_quarto">Nome do Usuário</label>
                        <input type="input" class="form-control" name="name" id="name"
                               placeholder="Digite o nome do usuário." value="{{ old('name', $usuario->name ?? '') }}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_quarto">E-mail do Usuário</label>
                        <input type="email" class="form-control" name="email"
                               id="email" placeholder="Digite o e-mail do usuário"
                               value="{{ old('email', $usuario->email ?? '') }}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="valor_sala">Senha</label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="Digite a senha do usuário"
                               value="{{ old('password', '') }}">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horas_sala">Confirme a Senha</label>
                        <input type="password" class="form-control" name="password_confirmation"
                               id="password_confirmation" placeholder="Digite a senha outra vez para confirmar a mesma."
                               value="{{ old('password_confirmation', '') }}">
                        @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
        </fieldset>
    </div>
</div>
