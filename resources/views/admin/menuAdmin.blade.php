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
                            <a href="{{ url('/listaBanner') }}" ><i class="fa fa-edit fa-fw"></i> Banners Superiores</a>
                        </li>
                        
                         <li>
                            <a href="{{ url('/listaDevocional') }}" ><i class="fa fa-files-o fa-fw"></i> Devocional</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaMissaoVisao') }}" ><i class="fa fa-files-o fa-fw"></i> Sobre a Igreja</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaMinisterio') }}" ><i class="fa fa-files-o fa-fw"></i> Ministérios</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaProgramacao') }}" ><i class="fa fa-files-o fa-fw"></i> Programação</a>
                        </li>
                        
                        <li>
                            <a href="{{ url('/listaGaleria') }}" ><i class="fa fa-files-o fa-fw"></i> Galeria</a>
                        </li>
                        <li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
