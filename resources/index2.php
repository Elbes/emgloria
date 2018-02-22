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
                  <h4><a href="{{ url('/devocional') }}">DEVOCIONAL</a></h4>
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
              <p>Um amor ao próximo que pode mover montanhas.</p>
            </div>
          </article>
          <article class="column c-one-fourth service-box">
            <div class="new-box">
              <div class="ch-item ch-img-4">
                <div class="ch-info">
                  <h4><a href="#">CULTO ONLINE</a></h4>
                </div>
              </div>
            </div>
            <div class="text">
              <p>Fique por dentro das notícias da nossa Igreja.</p>
            </div>
          </article>
        </section>
      </section>
      
      <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">MISSÃO / VISÃO</span><em class="h-right"></em></span></h3>
         </div>
      <article class="banner-bottom">
        <span class="detail"><b>Missão: </b>Texto da Missão aqui.</span>
      </article>
      <article class="banner-bottom">
        <span class="detail"><b>Visão: </b>Texto da Visão aqui.</span>
      </article>
      
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">GALERIA</span><em class="h-right"></em></span></h3>
          </div>
          <article class="column c-one-third">
            <div class="img-holder slide-1"> <a href="gallery-singlepost.html"><img src="{{ url('/layout/') }}/images/img-4.jpg" alt="image" /></a> </div>
          </article>
          <article class="column c-one-third">
            <div class="img-holder slide-1"> <a href="gallery-singlepost.html"><img src="{{ url('/layout/') }}/images/img-2.jpg" alt="image" /></a> </div>
          </article>
          <article class="column c-one-third">
            <div class="img-holder slide-1"> <a href="gallery-singlepost.html"><img src="{{ url('/layout/') }}/images/img-3.jpg" alt="image" /></a> </div>
          </article>
          <a href="#" class="btn-a">Galeria completa</a>
        </section>
      </section>


      
        <!-- <div class="heading-holder">
        <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">GUIA DE SERVIÇOS</span><em class="h-right"></em></span></h3>
        </div>
        
       <section class="grid-holder ">
        <section class="grid">
          <article class="column c-one-third">
            <div class="post">
             <ul class="news-demo-down-auto">
				<li class="news-item">Python new version is released..<a href="#">Read more...</a></li>
				<li class="news-item">Get ready for Bootstrap 4.... <a href="#">Read more...</a></li>
				<li class="news-item">New forms in Bootstrap.. <a href="#">Read	more...</a></li>
				<li class="news-item">PHP date ... <a href="#">Read more...</a></li>
				<li class="news-item">Read about Java update ... <a href="#">Read more...</a></li>
				<li class="news-item">HTML 5... <a href="#">Read more...</a></li>
				<li class="news-item">HTML 5... <a href="#">Read more...</a></li>
				<li class="news-item">HTML 5... <a href="#">Read more...</a></li>
			 <ul>
            </div>
            <div class="read-more"><a href="#">Anuncie aqui</a></div>
          </article>
        </section>
      </section> -->
      
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
