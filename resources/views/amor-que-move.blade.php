@extends('layout.layoutSite')
@section('dependencyCss')

<!-- CSS Fancybox -->
    <link rel="stylesheet" type="text/css" href="{{ url('/layout/') }}/fancybox/dist/jquery.fancybox.css">

    <style type="text/css">
    /* body{ font-family:Arial, Helvetica, sans-serif } */
    li{
        list-style:none;
        display:inline;
        float:left;
        
    }
    li p{
        text-align:center;
        color:#000;
		font-weight:normal;
		font-family: 'droid_serif,regular';
		font-size:20px;
		line-height:30px;
		min-height:80px;
		text-transform:uppercase;
		margin:0;
    }
    .thumb{
        cursor:pointer;
        position:relative;
        border:#FFF solid 3px;
        /* border-radius:264px; */
        height:192px;
        width:264px;
    }
    
    .thumb2{
        cursor:pointer;
        position:relative;
        border:#FFF solid 3px;
        /* border-radius:264px; */
        height:192px;
        width:264px;
        
    }
    </style>
	
@endsection
@section('content')
 <!-- Content -->
    <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">AMOR QUE MOVE</span><em class="h-right"></em></span></h3>
          </div>
        </section>
      </section>
        
      <article class="banner-bottom">
	        <span class="detail">O Amor Que Move é um projeto para resgatar vidas da escuridão. Iniciado em 2017 e já está colhendo frutos.</span>
	   </article>
	   
	   <article class="banner-bottom-slide">

     <ul id="thumbs" class="clearfix">   
        <!-- exemplo com legenda -->
	    <li>
	        <div class="thumb imagem-amor" style="background: url('{{ url('/imagens/galeria/') }}/{{ $img_primeira->nome_imagem }}') no-repeat;">
	             @foreach ($imagens as $imagem)
	                 <a href="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" data-fancybox data-caption="Legenda da foto 1"></a>
	             @endforeach
	        </div>
	        <p>Imagens</p>
	    </li>
	    
	    <!-- exemplo sem legenda -->
	    <li>
	        <div class="thumb2 imagem-amor" style="background: url('{{ url('/imagens/galeria/') }}/{{ $img_primeira->nome_imagem }}') no-repeat;">
	             @foreach ($imagens as $imagem)
	                 <a href="{{ url('/imagens/galeria/') }}/{{ $imagem->nome_imagem }}" data-fancybox data-caption="Legenda da foto 1"></a>
	             @endforeach
	        </div>
	        <p>Vídeos</p>
	    </li>
	</ul>


  	   </article>
	   

    </div>

@endsection
@section('dependencyJs')
<!-- JQuery -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 --><!-- JS Fancybox -->
<script type="text/javascript" src="{{ url('/layout/') }}/fancybox/dist/jquery.fancybox.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".thumb").click(function() {
            var hrefs = new Array();
            $.fancybox.open(
                $(this).find("[data-fancybox]").each(function(){
                    hrefs.push($(this).attr('href'));
                })
            );
        });
    });

    $(document).ready(function() {
        $(".thumb2").click(function() {
            var hrefs = new Array();
            $.fancybox.open(
                $(this).find("[data-fancybox]").each(function(){
                    hrefs.push($(this).attr('href'));
                })
            );
        });
    });
</script>
@endsection