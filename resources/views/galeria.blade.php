@extends('layout.layoutSite')
@section('dependencyCss')
<!-- Start JavaScript -->

<!-- Start Player CSS -->
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
         
          <article class="column c-four-fifth-galery">

            <section class="grid-holder">

              <section class="grid lightbox gallery" id="catagory-item-holder">

               
              @foreach ($imagens as $imagem)
                <figure class="column c-one-third-img-galery Landscape catagory-item">

                  <div class="item alpha gallery-item">

                    <div class="caption gallery-box">  <a href="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" rel="prettyPhoto[gallery1]"> <img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt="" class="pic"> <span class="hover-effect big zoom"></span></a></div>
                    
                    <!-- hover effect --> 
                    
                    <!-- <strong class="gallery-titel"><a href="gallery-singlepost.html">Our Churches</a></strong>
                    <p>Sit amet, consectetur adipiscing </p> -->
                    <strong></strong>
                  </div>
                  
                  <!-- End --> 
                  
                </figure>
               @endforeach
               
              </section>
            </section>
            
           
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

        		</section>
      		</section>
           
             <br clear="all">
          </article>
        </section>
      </section>

    </div>

@endsection
@section('dependencyJs')

@endsection