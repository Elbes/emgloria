@extends('layout.layoutSite')

@section('content')
<!-- Content -->
 <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">DEVOCIONAL</span><em class="h-right"></em></span></h3>
				<article class="column c-three-fourth">
		            <div class="blog-post">
		              <br class="clear" />
		              <div class="blog-holder contact">
		              @foreach ($devDestaque as $devo)
		              	<h2 class="h-bold">..: {{ $devo->titulo }} :..</h2>
		                <div class="contact-flied">
		                  <h3 class="h-bold">{{ $devo->texto }} </h3>
		                </div>
		               @endforeach
		              </div>
		            </div>
	          </article>
	          <article class="column c-one-third">
	            <div class="about-box">
	            <div class="right-sidebar">
	                <div class="sidebar-h"><strong class="right-heading"><span>ANTERIORES</span></strong></div>
	                <ul class="comments">
	                 @foreach ($devocional as $dev)
         	        	<li><div class="worship"><a href="{{url('/devocional')}}/{{strtolower($dev->id_devocional)}}" class="worship">{{ $dev->titulo }} </a></div></li>
		             @endforeach
	                </ul>
	              </div>
	             </div>
	          </article>
          </div>
        </section>
      </section>
   </div>



@endsection
