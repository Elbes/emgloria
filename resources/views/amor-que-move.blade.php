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
        left: 10px;
    }
    li p{
        text-align:center;
    }
    .thumb{
        cursor:pointer;
        position:relative;
        border:#FFF solid 3px;
        border-radius:264px;
        height:264px;
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

     <ul>   
        <!-- exemplo com legenda -->
    <li>
        <div class="thumb" style="background: url('{{ url('/imagens/galeria/') }}/1518529690_img-4.jpg') no-repeat;">
            <a href="{{ url('/layout/images') }}/1.png" data-fancybox data-caption="Legenda da foto 1"></a>
            <a href="{{ url('/layout/images') }}/2.png" data-fancybox data-caption="Legenda da foto 2"></a>
            <a href="{{ url('/layout/images') }}/3.png" data-fancybox data-caption="Legenda da foto 3"></a>
        </div>
        <p>Imagens</p>
    </li>
    
    <!-- exemplo sem legenda -->
    <li>
    	<div class="thumb" style="background: url('{{ url('/layout/images') }}/3.png') no-repeat;">
            <a href="fotos/carros/1.jpg" data-fancybox></a>
            <a href="fotos/carros/2.jpg" data-fancybox></a>
            <a href="fotos/carros/3.jpg" data-fancybox></a>
		</div>
        <p>Carros</p>
    </li>
</ul>


  	   </article>
	   

    </div>

@endsection
@section('dependencyJs')
<!-- JQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- JS Fancybox -->
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
</script>
@endsection