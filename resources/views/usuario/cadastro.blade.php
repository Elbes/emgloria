@extends('auth.app')

@section('content')
<div class="container">
<br /><br /><br /><br /><br />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @include('notificacao')
            <div class="panel panel-default">
                <div class="panel-heading">Formulário de cadastro de usuário</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/inserir-usuario') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                            <label for="telefone" class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" required>

                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('id_perfil') ? ' has-error' : '' }}">
                            <label for="selSistema" class="col-md-4 control-label">Perfil</label>

                            <div class="col-md-6">
                                <select class="form-control" id="id_perfil" name="id_perfil">
                                <option selected="selected" value="">Selecione...</option>
                                @foreach ($perfis as $perfil)
                                	<option value="{{$perfil->id_perfil}}">{{$perfil->nome_perfil}}</option>
                                @endforeach
                                </select>
                                @if ($errors->has('id_perfil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_perfil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('senha') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="senha" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" title="Clique para cadastrar">Cadastrar</button>
                                <button type="reset" class="btn btn-primary" title="Clique para limpar">Limpar</button>
                                 <a href="{{ url('/login') }}" class="btn btn-primary" title="Clique para retornar ao Login">Retornar ao Login</a>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

