 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #f48228;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">IBG</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Painel Administrativo - Igreja Batista Em Glória</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{ Auth::user()->nome }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
	                        <a href="{{ url('/meusDados')}}" title="Visualizar e alterar meus dados"><i class="fa fa-user fa-fw"></i>Meus Dados</a>
	                    </li>
	                                 
	                     <li>
	                        <a href="{{ url('/alterarSenha')}}" title="Alterar minha senha de acesso"><i class="fa fa-gear fa-fw"></i>Alterar Senha</a>
	                     </li>
	                     
	                     <li class="divider"></li>
	                      
                         <li>
	                         <a href="{{ url('/logout') }}" onclick="event.preventDefault();
	                                            document.getElementById('logout-form').submit();" title="Sair do sistema">
		                     <i class="fa fa-sign-out fa-fw"></i>Sair
		                          </a>
	                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	                                            {{ csrf_field() }}
	                          </form>
                          </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            @include('admin.menuAdmin')            
        </nav>
