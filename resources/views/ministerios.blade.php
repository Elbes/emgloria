@extends('layout.layoutSite')

@section('content')
<!-- Content -->

    <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">NOSSOS MINISTÉRIOS</span><em class="h-right"></em></span></h3>
          </div>
          
           <!-- Menu Ministérios -->
          <article class="column c-one-third">
            <div class="about-box">
            	<div class="right-sidebar">
                	<div class="sidebar-h"><strong class="right-heading"><span>Ministérios</span></strong></div>
	                <ul class="comments">
	                  @foreach ($ministerios as $ministerio)
	                  	<li><a href="{{url('/ministerios')}}/{{strtolower($ministerio->id_ministerio)}}" class="worship">{{ mb_strtoupper($ministerio->nome_ministerio) }}</a></li>
	                  @endforeach
	                </ul>
              </div>
             </div>
          </article>
          <!-- Fim Menu Ministérios -->
          
          <div class="txt-widget">
          		@foreach ($minDestaque as $minist)
					<div class="txt-inner">
						<h4>{{ mb_strtoupper($minist->nome_ministerio) }}</h4>
						<p style="text-align: justify;"><?php echo nl2br($minist->texto_ministerio);?></p>
						<br />
						<p style="text-align: left;"><b>Líder: </b>{{$minist->lider_ministerio}}</p>
						<p style="text-align: left;"><b>Colíder: </b>{{$minist->colider_ministerio}}</p>
					</div>	                  
			     @endforeach
      	  </div>
        
        </section>
      </section>
    </div>


@endsection
