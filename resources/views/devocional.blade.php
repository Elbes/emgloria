@extends('layout.layoutSite')

@section('content')
<!-- Content -->
 <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">DEVOCIONAL</span><em class="h-right"></em></span></h3>
				<article class="column c-three-fourth">
					@foreach ($devDestaque as $devo)
			      	  <div class="blog-post prayer">
			              <br class="clear" />
			              <div class="prayer-box">
			                <h4 class="prayer-heading">{{ mb_strtoupper($devo->titulo) }}</h4>
			                <hr >
			                <p><?php echo nl2br($devo->texto);?></p>
			              </div>
		               </div>
		             @endforeach
	          	</article>

	          <!-- Menu Devocional -->
	           <article class="column c-one-third">
	            <div class="about-box"><div class="right-sidebar">
	                <div class="sidebar-h"><strong class="right-heading"><span>LISTA</span></strong></div>
	                <ul class="archives">
	                @foreach ($devocional as $dev)
	                  <li><div class="worship"><a href="{{url('/devocional')}}/{{strtolower($dev->id_devocional)}}" class="worship">{{ $dev->titulo }} </a></div></li>
	                @endforeach
	                </ul>
	              </div>
	            </div>
	          </article>
          	<!-- Fim Menu Ministérios -->
          </div>
        </section>
      </section>
   </div>



@endsection
