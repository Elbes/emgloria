            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li> -->
                        <li>
                            <a href="{{ url('/admin') }}" ><i class="fa fa-dashboard fa-fw"></i> Início</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaPastores') }}" ><i class="fa fa-user fa-fw"></i> Pastores</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaBanner') }}" ><i class="fa fa-files-o fa-fw"></i> Banners Superiores</a>
                        </li>
                        
                         <li>
                            <a href="{{ url('/listaDevocional') }}" ><i class="fa fa-edit fa-fw"></i> Devocional</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaMissaoVisao') }}" ><i class="fa fa-bar-chart-o fa-fw"></i> Sobre a Igreja</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaMinisterio') }}" ><i class="fa fa-wrench fa-fw"></i> Ministérios</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaProgramacao') }}" ><i class="fa fa-table fa-fw"></i> Programação</a>
                        </li>

                        <li>
                            <a href="{{ url('/listaPedidosOracao') }}" ><i class="fa fa-table fa-fw"></i> Pedidos Orações</a>
                        </li>
                        
                         <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Galeria<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('/listaGaleria') }}" > Imagens</a>
                                </li>
                                <li>
                                    <a href="{{ url('/listaVideo') }}" > Vídeos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaUsuario') }}" ><i class="fa fa-table fa-fw"></i> Usuários</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
