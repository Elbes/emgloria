@extends('layout.layoutSite')
<link rel="stylesheet" href="{{ url('/layout/') }}/lightbox/dist/css/lightbox.min.css">
@section('content')
<a name="AMOR"></a>
     <!-- Content -->
    <div class="content mt0">
      <section class="grid-holder">
        <section class="grid-galeria">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">AMOR QUE MOVE</span><em class="h-right"></em></span></h3>
          </div>
        </section>
      </section>
        
      <article class="banner-bottom">
	        <span class="detail">O Amor Que Move é um projeto para resgatar vidas da escuridão. Iniciado em 2017 e já está colhendo frutos.</span>
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
          			<article class="column c-four-fifth  catagory-item All"> 

			            <!-- ========================= Light Box & Frame ========================= -->
			
			            <ul class="portfolio group ">
 							@foreach ($imagens as $imagem)
                    			<li class="g-3-imagem item">
                    				<a  href="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" data-lightbox="example-set" data-title="{{$imagem->obs_imagem}}"><img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt=""/></a>
                    			</li>
                    		@endforeach
                    	</ul>
           			</article>
 
        		</section>
      		</section>
            
           
            <br clear="all">
            
          </article>
          
          <article class="column c-three-fourth-galeria">
          	<section class="grid-holder">
        		<section class="grid">
          			<article class="column c-four-fifth"> 

			            <!-- ========================= Light Box & Frame ========================= -->
			
			            <ul class="portfolio group">
							@foreach ($videos as $video)
				              <li class="g-3 item">
				
				                <div class="video-holder slide-1"><video controls > <source src="{{ url('/videos/galeria/') }}/{{$video->nome_video}}" /></video></div>
				
				              </li>
			                @endforeach
			             </ul>
           
          				</article>
          			<br clear="all">

        		</section>
      		</section>
           
            
          </article>
        </section>
      </section>

    </div>

@endsection
@section('dependencyJs')
<script src="{{ url('/layout/') }}/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
@endsection