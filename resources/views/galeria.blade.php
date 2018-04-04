@extends('layout.layoutSite')

@section('dependencyCss')
<link rel="stylesheet" href="{{ url('/layout/') }}/lightbox/dist/css/lightbox.min.css">

<!-- End JavaScript -->
<!--[if lt IE 9]>
      <script src="js/html5.js"></script>
<![endif]-->
@endsection
@section('content')
 <!-- Content -->
    <div class="content mt0">
      <section class="grid-holder">
        <section class="grid-galeria">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">NOSSA GALERIA</span><em class="h-right"></em></span></h3>
          </div>
        </section>
      </section>
        
      <article class="banner-bottom">
	        <span class="detail">Um pouco dos nossos momentos traduzidos em imagens. Venha conhecer pessoalmente.</span>
	   </article>
	   <article class="column c-four-fifth">

          <div class="f-holder"><strong class="g-heading g-1-heading">FILTRO</strong>

            <ul class="filter g2 group" id="catagory-item-filter">
            	<li><a href="#" data-value="All">Tudo</a></li>
            	<li><a href="#" data-value="Videos">Videos</a></li>
            </ul>

          </div>

        </article>
	   	<section class="grid-holder">
        <section class="grid-galeria">
        
          <article class="column c-three-fourth-galeria">
          	<section class="grid-holder">
        		<section class="grid">
          			<article class="column c-four-fifth  catagory-item "> 

			            <!-- ========================= Light Box & Frame ========================= -->
			
			            <ul class="portfolio group All">
 							@foreach ($imagens as $imagem)
                    			<li class="g-3-imagem item">
                    				<a  href="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" data-lightbox="example-set" data-title="{{$imagem->obs_imagem}}"><img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt=""/></a>
                    			</li>
                    		@endforeach
                    	</ul>
           			</article>
 
        		</section>
      		</section>
           
          </article>
          
          
          <article class="column c-three-fourth-galeria ">
          	<section class="grid-holder">
        		<section class="grid">
          			<article class="column c-four-fifth Videos catagory-item"> 

			            <!-- ========================= Light Box & Frame ========================= -->
			
			            <ul class="portfolio group">
							@foreach ($videos as $video)
				              <li class="g-3 item">
				
				                <div class="video-holder slide-1"><video controls > <source src="{{ url('/videos/galeria/') }}/{{$video->nome_video}}" /></video></div>
				
				              </li>
			                @endforeach
			             </ul>
           
          				</article>

        		</section>
      		</section>
           
             <br clear="all">
          </article>
          
        </section>
      </section>

    </div>

@endsection
@section('dependencyJs')
<script src="{{ url('/layout/') }}/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 500,
      'wrapAround': true
    })
</script>
@endsection