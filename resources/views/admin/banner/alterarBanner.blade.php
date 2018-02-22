@extends('admin.layoutAdmin')

	@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alteração do Banner - <b>{{ $banner->banner_nome}}</b> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @include('notificacao')
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forneça as informações do Banner para Slides da Intranet
                        </div>
                       <!--  @include('notificacao') -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <form role="form" enctype="multipart/form-data" action="{{ url('/admin/banner/altera-banner') }}" method="post">
                                    {{ csrf_field() }} 
                                    	<input type="hidden" class="form-control" name="id_banner" value="{{ $banner->id_banner }}"> 
                                    	<input type="hidden" class="form-control" name="validade_atual" value="{{ $banner->validade }}"> 
                                        <div class="form-group{{ $errors->has('banner_nome') ? ' has-error' : '' }}">
                                            <label>Nome do Banner</label>
                                            <input class="form-control" name="banner_nome" placeholder="Entre com o nome do Banner" value="{{ $banner->banner_nome }}" required="required">
                                        	@if ($errors->has('banner_nome'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('banner_nome') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('validade') ? ' has-error' : '' }}">
                                            <label>Data de validade do Banner</label>
                                            <input class="form-control" name="validade" disabled="disabled" value="{{ date('d/m/Y',strtotime($banner->validade)) }}" >
                                        	@if ($errors->has('validade'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('validade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('banner_validade') ? ' has-error' : '' }}">
                                            <label>Aumentar dias de validade do Banner</label>
                                            <input class="form-control" name="banner_validade" placeholder="Entre com o número de dias de validade" value="{{ old('banner_validade') }}" title="Aumentará dias de validade na data de validade atual">
                                        	@if ($errors->has('banner_validade'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('banner_validade') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Observação</label>
                                            <textarea class="form-control" name="banner_obs" rows="3" placeholder="Alguma observação importante">{{ $banner->banner_obs}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Prioridade</label>
                                            <label for="priodidade">
	                                            <select class="form-control" name="prioridade" id="prioridade">
	                                               <option value="{{ $banner->prioridade}}" selected="selected">{{ $banner->prioridade}}</option>
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
                                        </div>
                                        <div class="form-group">
                                            <label>Imagem do Banner</label>
                                            <div><img style="width:200px; height:80px;" src="{{ url('/imagens/banners') }}/{{ $banner->imagen_banner}}" alt="" ></div>
                                        </div>

                                        <button type="submit" class="btn btn-default">Salvar</button>
                                        <a class="btn btn-default"  href="{{ url('/inserirBanner') }}" >Cancelar</a>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
   @endsection
   
   @section( 'dependencyJs' )
		<!-- DataTables JavaScript -->
	   
@endsection
   