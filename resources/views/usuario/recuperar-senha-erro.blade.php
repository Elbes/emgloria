@extends('layouts.app')
<meta http-equiv="pragma" content="no-cache" />
@section('content')
<br /><br /><br />
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recuperar senha Intranet - SESDF</div>
                <div class="panel-body">
						<p style="color:red"> <strong> ERRO: @include('notificacao') {{$objReturn['ERROR_MESSAGE']}} </strong> </p>
					   
						<div class='obs'>
							<p>Clique no botão abaixo para gerar uma nova solitação.</p>
						</div>
						
						<br/>
						<div class="form-group">
                            <div class="col-md-12 text-center">
                                <a href="{{ url('/esqueceuSenha') }}" class="btn btn-primary" title="Clique para solicitar recuperação de senha novamente">Solicitar Novamente</a>
<!--                                 <a href="{{ url('/login') }}" class="btn btn-primary" title="Clique para retornar ao Login">Retornar ao Login</a> -->
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



