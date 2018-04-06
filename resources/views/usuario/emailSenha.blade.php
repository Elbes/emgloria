@extends('auth.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <br /><br /><br />
         @include('notificacao')
         <br /><br />
            <div class="panel panel-default">
                <div class="panel-heading">Recuperar senha - Digite o email de acesso a intranet</div>
                <div class="panel-body">
                   

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/envia-reseta-senha') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Recuperar Senha</button>
                                <a href="{{ url('/login') }}" class="btn btn-primary" title="Clique para ir para o login">Ir para o Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
