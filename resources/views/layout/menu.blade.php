<header id="header">
        <div class="header-wrapper home">
          <div class="header-holder">
            <h1 id="logo"><a href="{{url('/')}}">A Igreja</a></h1>
            <div class="nav">
              <ul class="menu menu_blue">
                @if(Request::segment(1) == '')
				    <li class="active"><a href="{{url('/')}}">HOME</a></li>
				@else
				    <li><a href="{{url('/')}}">HOME</a></li>
				@endif
				
				@if(Request::segment(1) == 'sobre-igreja')
					<li class="active"><a href="{{url('/sobre-igreja')}}">EM GLÓRIA</a></li>
				@else
				    <li class="fullwidth"><a href="{{url('/sobre-igreja')}}">EM GLÓRIA</a></li>
				@endif
				
				@if(Request::segment(1) == 'ministerios')
					<li class="active"><a href="{{url('/ministerios')}}/{{$minAtivo->id_ministerio}}">MINISTÉRIOS</a></li>
				@else
				    <li class="fullwidth"><a href="{{url('/ministerios')}}/{{$minAtivo->id_ministerio}}">MINISTÉRIOS</a></li>
				@endif
				
				<!-- @if(Request::segment(1) == 'programacao')
					<li class="active"><a href="{{url('/programacao')}}">PROGRAMAÇÃO</a></li>
				@else
					<li class="fullwidth"><a href="{{url('/programacao')}}">PROGRAMAÇÃO</a></li>
				@endif -->
				
				@if(Request::segment(1) == 'devocional')
					<li class="active"><a href="{{url('/devocional')}}//{{$devAtivo->id_devocional}}">DEVOCIONAL</a></li>
				@else
					<li class="fullwidth"><a href="{{url('/devocional')}}/{{$devAtivo->id_devocional}}">DEVOCIONAL</a></li>
				@endif
				
				@if(Request::segment(1) == 'amor-que-move')
					<li class="active"><a href="{{ url('/amor-que-move') }}">AMOR QUE MOVE</a></li>
				@else
					<li class="fullwidth"><a href="{{ url('/amor-que-move') }}">AMOR QUE MOVE</a></li>
				@endif
				
				 <!-- <li class="fullwidth"><a href="#">LOJA</a></li> -->
				 
				@if(Request::segment(1) == 'form-contato')
					<li class="active"><a href="{{url('/form-contato')}}">CONTATO</a></li>
				@else
					<li class="fullwidth"><a href="{{url('/form-contato')}}">CONTATO</a></li>
				@endif

              </ul>
              <form action="dummy" method="post">
                <select name="choice" size="1" onChange="jump(this.form)" class="chzn-results">
                  <option value="{{url('/')}}">HOME</option>
                  <option value="{{url('/sobre-igreja')}}">EM GLÓRIA</option>
                  <option value="{{url('/ministerios')}}/{{$minAtivo->id_ministerio}}">MINISTÉRIOS</option>
                  <option value="{{url('/devocional')}}//{{$devAtivo->id_devocional}}">DEVOCIONAL</option>
                  <option value="{{ url('/amor-que-move') }}">AMOR QUE MOVE</option>
                  <option value="{{url('/form-contato')}}">CONTATO</option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </header>