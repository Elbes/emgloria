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
              <div class="ch-item ch-img-3">
                <div class="ch-info">
                  <h4><a href="{{url('/devocional')}}/{{$devAtivo->id_devocional}}">DEVOCIONAL</a></h4>
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
                  <li><a href="#1900">2008</a></li>
                  <li><a href="#1930">2009</a></li>
                  <li><a href="#1944">2010</a></li>
                  <li><a href="#1950">2011</a></li>
                  <li><a href="#1971">2012</a></li>
                </ul>
                <ul id="timedetail">
                  <li id="20050">
                    <h1>2008</h1>
                    <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. </p>
                  </li>
                  <li id="2006">
                    <h1>2009</h1>
                    <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. </p>
                  </li>
                  <li id="2007">
                    <h1>2010</h1>
                    <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. </p>
                  </li>
                  <li id="2008">
                    <h1>2011</h1>
                    <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. </p>
                  </li>
                  <li id="2009">
                    <h1>2012</h1>
                    <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. </p>
                  </li>
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
        </div> -->
        
    </article>
    
      
      <section class="grid-holder">
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
      <br />
    </div>

@endsection
@section( 'dependencyJs' )
<script src="{{ url('/layout/js/') }}/jquery.bootstrap.newsbox.min.js"
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

</script>
@endsection
