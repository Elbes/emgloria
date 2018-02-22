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
      
      
      <div class="heading-holder">
        <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">PROGRAMAÇÃO</span><em class="h-right"></em></span></h3>
      </div>
      <article class="events calender-box">
        
        <div class="img-details">
          <ul id="s3">
            <li >
              <div class="info-1">
                <div class="left"><div class="txt-widget">
                	<h4>DOMINGO - CULTO EVANGÉLICO</h4>
                	<h4>DOMINGO - ESCOLA BÍBLICA DOMINICAL</h4>
                	<h4>QUARTA-FEIRA - PLANEJANDO 2018</h4>
                	<h4>SEXTA-FEIRA - CULTO DOS JOVENS</h4>
                	</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="calender">
          <div id="calendar"></div>
        </div>
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
