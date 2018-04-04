@extends('layout.layoutSite')
@section('content')
 <!-- Content -->
    <div class="content mt0">
      <!-- <article class="banner-bottom">
          <h2>Na Igreja!</h2>
       <h2><img src="{{ url('/layout/') }}/images/logo-emgloria-limpo.png" alt="image" /></h2> 
        <span class="detail">Agora você pode estar na Igreja a qualquer momento.</span> </article> -->
      
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">NOSSA IGREJA</span><em class="h-right"></em></span></h3>
          </div>
          
          <article class="column c-one-fourth service-box">
            <div class="new-box">
              <div class="ch-item ch-img-3">
                <div class="ch-info">
                  <h4><a href="{{url('/pastores')}}">PASTORES</a></h4>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="text">
              <p>Devocional com versículos bíblicos comentados.</p>
            </div>
          </article>
          
          <article class="column c-one-fourth service-box">
            <div class="new-box">
              <div class="ch-item ch-img-1">
                <div class="ch-info">
                  <h4><a href="{{ url('/pedidos-oracao') }}">PEDIDO DE ORAÇÃO</a></h4>
                </div>
              </div>
            </div>
            <div class="text">
              <p>Deus sabe das necessidades de cada um e escuta o teu íntimo.</p>
            </div>
          </article>
          
          <article class="column c-one-fourth service-box">
            <div class="new-box">
              <div class="ch-item ch-img-2">
                <div class="ch-info">
                  <h4><a href="{{ url('/doacoes') }}">DOAÇÕES</a></h4>
                  <p></p>
                </div>
              </div>
            </div>
            <div class="text">
              <p>“Quanto for possível, não deixe de fazer o bem a quem dele precisa”. (PV 3:27)</p>
            </div>
          </article>
          
          <article class="column c-one-fourth service-box">
            <div class="new-box">
              <div class="ch-item ch-img-4">
                <div class="ch-info">
                  <h4><a href="{{ url('/culto-online') }}" >CULTO ONLINE</a></h4>
                </div>
              </div>
            </div>
            <div class="text">
              <p>Assita ao culto pela internet.</p>
            </div>
          </article>
        </section>
      </section>
      
      <section class="grid-holder">
        <section class="grid about">
          <article class="column c-three-fourth-progra about-box">
            <div id="timeline-holder">
              <div id="timeline">
                <ul id="dates">
                @foreach($dev as $dev_ano)
                  <li><a href="#1900">{{ date( 'd/m/y', strtotime( $dev_ano->dhs_cadastro )) }}</a></li>
                @endforeach
                </ul>
                
                <ul id="timedetail">
                @foreach($dev as $devocional)
                  <li id="20050">
                    <h1>{{ $devocional->titulo }}</h1><p></p>
                    <p><?php echo nl2br(substr($devocional->texto, 0, 200));?> <a href="{{url('/devocional')}}/{{$devocional->id_devocional}}" title="Ver texto completo">...Ler Mais</a></p>
                  </li>
                 @endforeach
                </ul>
                <a href="#" id="next">+</a> <a href="#" id="prev">-</a> </div>
            </div>
          </article>
          <article class="column c-one-third-progra">
            <div class="about-box"><div class="right-sidebar">
                <div class="sidebar-h"><strong class="right-heading"><span>PROGRAMAÇÃO</span></strong></div>
                <ul class="archives">
                @foreach ($progra as $pr)
                  <li>{{strtoupper($pr->dia_programacao)}} - {{strtoupper($pr->texto_programacao)}}
                  <span class="num-post">{{$pr->hora_programacao}} Hs</span></li>
                @endforeach
                </ul>
              </div>
            </div>
          </article>
        </section>
      </section>
      
      <!-- <div class="heading-holder">
        <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">PROGRAMAÇÃO</span><em class="h-right"></em></span></h3>
      </div>
      <article class="events calender-box">
        <div class="calender">
          <div id="calendar"></div>
        </div>
        <div class="img-details">
          <ul id="s3">
            <li >
              <div class="info-1">
                <div class="left"><div class="txt-program">
                	@foreach ($progra as $programacao)
                		<h4>{{strtoupper($programacao->dia_programacao)}} - {{strtoupper($programacao->texto_programacao)}}</h4>
                	@endforeach
                	</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
    </article> -->
    
      
      <!-- <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">GALERIA</span><em class="h-right"></em></span></h3>
          </div>
          @foreach ($imagens as $imagem)
	          <article class="column c-one-third">
	            <div class="img-holder slide-1"> <a href="{{ url('/galeria-gloria') }}"><img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt="image" class="img-responsive imagem-inicio"/></a> </div>
	          </article>
          @endforeach
          <a href="{{ url('/galeria-gloria') }}" class="btn-a">Galeria completa</a>
        </section>
      </section>
      <br /> -->
      
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">Multimídia</span><em class="h-right"></em></span></h3>
          </div>
          <!--Side-bar Style Start-->
          <article class="column c-one-third-galeria">
            <div class="about-box">
            
              <div class="right-sidebar">
                <ul class="gallery-list">
                @foreach ($imagens as $imagem)
                  <li><a href="{{ url('/galeria-gloria') }}"><img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt="image" /></a></li>
                 @endforeach
                </ul>
              </div>
             </div>
          </article>
          <!--Side-bar Style Start-->
          <article class="column c-one-third-galeria">
            <div class="about-box">
            
              <div class="right-sidebar">
                <ul class="gallery-list-video">
                @foreach ($video_inicio as $video)
		            <li><video controls > <source src="{{ url('/videos/galeria/') }}/{{$video->nome_video}}" /></video></li>
	          @endforeach
                </ul>
              </div>
              
             </div>
          </article>
          <!--Side-bar Style End-->
          <a href="{{ url('/galeria-gloria') }}" class="btn-a">Galeria completa</a>
        </section>
      </section>
    </div>
    <br />

@endsection
@section( 'dependencyJs' )
<!-- <script src="{{ url('/layout/js/') }}/jquery.bootstrap.newsbox.min.js"
	type="text/javascript"></script> 
<script type="text/javascript">


$(function () {

   $(".news-demo-down-auto").bootstrapNews({

        newsPerPage: 3,

        autoplay: true,

        pauseOnHover: true,

        navigation: false,

        direction: 'down',

        newsTickerInterval: 1500,

        

    });

});

</script>-->2
@endsection
