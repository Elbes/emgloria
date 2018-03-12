@extends('layout.layoutSite')
@section('dependencyCss')

<link rel="stylesheet" href="{{ url('/layout/') }}/css/jPages.css" type="text/css" media="all"/>
<link rel="stylesheet" href="{{ url('/layout/') }}/css/animate.css" type="text/css" media="all"/>
	
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
	   	
	   <!-- <article class="banner-bottom-slide">

        
        <div id="img" class="animated"><div class="img-holder"><img src="{{ url('/imagens/galeria/') }}/{{ $img_primeira->nome_imagem }}" alt="image" class="img-responsive imagem-amor"/></div></div>

       
        <ul id="thumbs" class="clearfix">
            @foreach ($imagens as $imagem)
            <li class="img-holder"><div class="img-holder"><img src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt="image" class="img-responsive imagem-amor"/></div></li>
            @endforeach
        </ul>

       
        <div class="holder"></div>

       
        <div id="btns">
            <span class="prev"></span>
            <span class="next"></span>
        </div>


  	   </article> -->
  	   
  	   <section class="grid-holder">
        <section class="grid">
         
          @foreach ($imagens as $imagem)
	          <article class="column c-one-third">
	            <div class="video-holder slide-1"><img class="video" src="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" alt="image" class="img-responsive imagem-amor"/></div>
	          </article>
          @endforeach
        </section>
      </section>
    

    </div>

@endsection
@section('dependencyJs')
<script src="{{ url('/layout/') }}/js/paginacao/jPages.js"></script>
<script src="{{ url('/layout/') }}/js/paginacao/jquery-1.8.2.min.js"></script>
<script src="{{ url('/layout/') }}/js/paginacao/highlight.pack.js"></script>
<script src="{{ url('/layout/') }}/js/paginacao/tabifier.js"></script>
<script src="{{ url('/layout/') }}/js/paginacao/js.js"></script>
<script src="{{ url('/layout/') }}/js/paginacao/jPages.min.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28718218-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>
  
    <script>
  $(function() {

    /* initiate plugin */
    $("div.holder").jPages({
      containerID : "thumbs",
      perPage     : 4,
      previous    : ".prev",
      next        : ".next",
      links       : "blank",
      direction   : "auto",
      animation   : "fadeInUp"
    });

    $("ul#thumbs li").click(function(){
      $(this).addClass("selected")
      .siblings()
      .removeClass("selected");

      var img = $(this).children().clone().addClass("animated fadeInDown");
      $("div#img").html( img );

    });

  });
  </script>
@endsection