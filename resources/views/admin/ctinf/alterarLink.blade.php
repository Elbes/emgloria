@extends('admin.layoutAdmin')

	@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alteração de dados do Link - {{$link->link_nome}}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dados do Link
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <form role="form" action="{{ url('/admin/ctinf/alterar-link') }}" method="post">
                                    {{ csrf_field() }} 
                                    <input type="hidden" class="form-control" name="id_link" value="{{ $link->id_link }}">
                                       <div class="form-group{{ $errors->has('link_nome') ? ' has-error' : '' }}">
                                            <label>Nome do Link</label>
                                            <input class="form-control" name="link_nome" placeholder="Entre com o que aparecerá na página" value="{{ $link->link_nome }}" required="required">
                                        	@if ($errors->has('link_nome'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('link_nome') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('link_descricao') ? ' has-error' : '' }}">
                                            <label>Descrição do Link</label>
                                            <input class="form-control" name="link_descricao" placeholder="Entre com a descrição do link" value="{{ $link->link_descricao }}" required="required">
                                        	@if ($errors->has('link_descricao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('link_descricao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('link_acesso') ? ' has-error' : '' }}">
                                            <label>Link de acesso</label>
                                            <input class="form-control" name="link_acesso" placeholder="Entre com o link de acesso" value="{{ $link->link_acesso }}" required="required">
                                        	@if ($errors->has('link_acesso'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('link_acesso') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('prioridade') ? ' has-error' : '' }}">
                                            <label>Prioridade</label>
                                            <label for="priodidade">
	                                            <select class="form-control" name="prioridade" id="prioridade" required="required">
	                                            	<option value="{{$link->prioridade}}">{{$link->prioridade}}</option>
												    <option value="1">1</option>
												    <option value="2">2</option>
												    <option value="3">3</option>
												    <option value="4">4</option>
												    <option value="5">5</option>
												    <option value="6">6</option>
												    <option value="7">7</option>
												    <option value="8">8</option>
												    <option value="9">9</option>
												    <option value="10">10</option>
												 </select>
                                            </label>
                                            @if ($errors->has('prioridade'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('prioridade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('posicao') ? ' has-error' : '' }}">
                                            <label>Posição</label>
	                                        <label class="radio-inline"><input type="radio" name="posicao" value="Destaque" onclick="$('#Destaque').show();" {{isset($link->posicao) && $link->posicao == 'Destaque' ? 'checked' : '' }} required>Destaque</label>
											<label class="radio-inline"><input type="radio" name="posicao" value="Inferior" onclick="$('#Destaque').hide();" {{isset($link->posicao) && $link->posicao == 'Inferior' ? 'checked' : '' }} required>Inferior</label>
											@if ($errors->has('posicao'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('posicao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div id="Destaque" style="display:none;">
                                        <div class="form-group{{ $errors->has('icone') ? ' has-error' : '' }}">
                                            <label>Ícone do Botão</label>
	                                        <label class="radio-inline"><input class="input-hidden" type="radio" name="icone" value="fa fa-medkit fa-2x" {{isset($link->icone) && $link->icone == 'fa fa-medkit fa-2x' ? 'checked' : '' }}><i class="fa fa-medkit fa-3x" aria-hidden="true" ></i></label>
	                                        <label class="radio-inline"><input class="input-hidden" type="radio" name="icone" value="fa fa-ambulance fa-2x" {{isset($link->icone) && $link->icone == 'fa fa-ambulance fa-2x' ? 'checked' : '' }}><i class="fa fa-ambulance fa-3x" aria-hidden="true" ></i></label>
	                                        <label class="radio-inline"><input class="input-hidden" type="radio" name="icone" value="fa fa-stethoscope fa-2x" {{isset($link->icone) && $link->icone == 'fa fa-stethoscope fa-2x' ? 'checked' : '' }}><i class="fa fa-stethoscope fa-3x" aria-hidden="true" ></i></label>
	                                        <label class="radio-inline"><input class="input-hidden" type="radio" name="icone" value="fa fa-book fa-2x" {{isset($link->icone) && $link->icone == 'fa fa-book fa-2x' ? 'checked' : '' }}><i class="fa fa-book fa-3x" aria-hidden="true" ></i></label>
	                                        <label class="radio-inline"><input class="input-hidden" type="radio" name="icone" value="fa fa-plus-square fa-2x" {{isset($link->icone) && $link->icone == 'fa fa-plus-square fa-2x' ? 'checked' : '' }}><i class="fa fa-user-md fa-3x" aria-hidden="true" ></i></label>
	                                        <label class="radio-inline"><input class="input-hidden" type="radio" name="icone" value="fa fa-calendar fa-2x" {{isset($link->icone) && $link->icone == 'fa fa-calendar fa-2x' ? 'checked' : '' }}><i class="fa fa-calendar fa-3x" aria-hidden="true" ></i></label>
											@if ($errors->has('icone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('icone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('cor_icone') ? ' has-error' : '' }}">
                                            <label>Cor do Ícone</label>
                                            <input type="color" id="cor_icone" value="{{$link->cor_icone}}" name="cor_icone" list="cor_icone" >
											
                                 
                                            @if ($errors->has('cor_icone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cor_icone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        </div>
                                        <button type="submit" class="btn btn-default">Alterar</button>
                                        <a class="btn btn-default"  href="{{ url('inserirLink') }}" >Cancelar</a>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
   @endsection
   
   @section( 'dependencyJs' )

	@endsection