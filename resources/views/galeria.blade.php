@extends('layout.layoutSite')
@section('dependencyCss')
<!-- Start JavaScript -->
<link rel="stylesheet" href="{{ url('/layout/') }}/css/javascri.css" type="text/css" media="all">
<!-- gallery CSS -->
<link rel="stylesheet" href="{{ url('/layout/') }}/css/prettyPhoto.css" type="text/css" media="all">
<!-- Start Player CSS -->
@endsection
@section('content')
 <!-- Content -->
    <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">NOSSA GALERIA</span><em class="h-right"></em></span></h3>
          </div>
        </section>
      </section>
        
      <article class="banner-bottom">
	        <span class="detail">Um pouco dos nossos momentos traduzidos em imagens. Venha conhecer pessoalmente.</span>
	   </article>
	   	
	   	<section class="grid-holder">
        <section class="grid">
         
          <article class="column c-three-fourth">
            <section class="grid-holder">
              <section class="grid lightbox gallery" id="catagory-item-holder">
              
              @foreach ($imagens as $imagem)
                <figure class="column c-one-fourth gallery-col Landscape catagory-item">
                  <div class="item alpha gallery-item">
                    <div class="caption gallery-box"> <a href="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" rel="prettyPhoto[gallery1]"> <img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt="" class="pic"> <span class="hover-effect big zoom"></span></a></div>
                    
                    <!-- hover effect --> 
                    
                    <strong class="gallery-titel"><a href="gallery-singlepost.html">Our Churches</a></strong>
                    <p>Sit amet, consectetur adipiscing </p>
                    <strong></strong>
                  </div>
                  
                  <!-- End --> 
                  
                </figure>
               @endforeach
               
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