@extends('layout.layoutSite')

@section('content')
<!-- Content -->
    <div class="content mt0">
    @foreach ($missaoVisao as $sobre)
    	<div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">{{$sobre->titulo}}</span><em class="h-right"></em></span></h3>
         </div>
      <article class="banner-bottom">
        <span class="detail"><?php echo nl2br($sobre->texto);?></span>
      </article>
      @endforeach
    </div>
@endsection