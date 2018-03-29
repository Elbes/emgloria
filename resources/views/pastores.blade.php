@extends('layout.layoutSite')

@section('content')
<!-- Content -->
    <div class="content mt0">
    <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">Pastores</span><em class="h-right"></em></span></h3>
          </div>
          <div class="text-holder">
            <p>Vivamus nam arcu purus feugiat. Nunc tincidunt aliquet labore tellus, magna quisque erat morbi placerat donec quisque, felis sapien inceptos imperdiet wisi nec, pede donec mauris mauris cursus amet libero. Enim amet tortor dapibus cum sed, libero non pulvinar, enulla sit phasellus fringilla, in elit turpis congue faucibus. Ut habitasse ac, qui porta velit, aptent fermentum natoque cras id libero. Litora accumsan eget donec arcu tortor, ornare praesent at lacus sollicitudin ultrices, nec donec arcu bibendum eu, ut in et non neque, sed potenti quisque.</p>
          </div>
          @foreach ($pastor as $pastores)
	          <article class="column c-one-third ">
	            <div class="about-box">
	              <div class="img-holder"><img src="{{url('/imagens/pastores/')}}/{{$pastores->foto_pastor}}" alt="image" /></div>
	              <strong class="name">{{$pastores->nome_pastor}}</strong> <span class="title">{{$pastores->funcao_pastor}}</span>
	              <p>{{$pastores->obs_pastor}} n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.</p>
	              <ul class="social-networks">
	                <li><a href="#" class="facebook-1">facebook</a></li>
	                <li><a href="#" class="twitter-1">twitter</a></li>
	                <li><a href="#" class="vimeo-1">vimeo</a></li>
	                <li><a href="#" class="flicker-1">flicker</a></li>
	              </ul>
	            </div>
	          </article>
          @endforeach
          <article class="column c-one-third ">
            <div class="about-box">
              <div class="img-holder"><img src="images/ch-7.jpg" alt="image" /></div>
              <strong class="name">Tom Black</strong> <span class="title">Assistent Priest</span>
              <p>n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.</p>
              <ul class="social-networks">
                <li><a href="#" class="facebook-1">facebook</a></li>
                <li><a href="#" class="twitter-1">twitter</a></li>
                <li><a href="#" class="vimeo-1">vimeo</a></li>
                <li><a href="#" class="flicker-1">flicker</a></li>
              </ul>
            </div>
          </article>
          <article class="column c-one-third">
            <div class="about-box">
              <div class="img-holder"><img src="images/ch-8.jpg" alt="image" /></div>
              <strong class="name">Andy John</strong> <span class="title">Brother</span>
              <p>n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.</p>
              <ul class="social-networks">
                <li><a href="#" class="facebook-1">facebook</a></li>
                <li><a href="#" class="twitter-1">twitter</a></li>
                <li><a href="#" class="vimeo-1">vimeo</a></li>
                <li><a href="#" class="flicker-1">flicker</a></li>
              </ul>
            </div>
          </article>
          <article class="column c-one-third">
            <div class="about-box">
              <div class="img-holder"><img src="images/ch-8.jpg" alt="image" /></div>
              <strong class="name">Micheal Doe</strong> <span class="title">Priest</span>
              <p>n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.</p>
              <ul class="social-networks">
                <li><a href="#" class="facebook-1">facebook</a></li>
                <li><a href="#" class="twitter-1">twitter</a></li>
                <li><a href="#" class="vimeo-1">vimeo</a></li>
                <li><a href="#" class="flicker-1">flicker</a></li>
              </ul>
            </div>
          </article>
          <article class="column c-one-third">
            <div class="about-box">
              <div class="img-holder"><img src="images/ch-7.jpg" alt="image" /></div>
              <strong class="name">John thomson</strong> <span class="title">Assistent Priest</span>
              <p>n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.</p>
              <ul class="social-networks">
                <li><a href="#" class="facebook-1">facebook</a></li>
                <li><a href="#" class="twitter-1">twitter</a></li>
                <li><a href="#" class="vimeo-1">vimeo</a></li>
                <li><a href="#" class="flicker-1">flicker</a></li>
              </ul>
            </div>
          </article>
          <article class="column c-one-third">
            <div class="about-box">
              <div class="img-holder"><img src="images/ch-6.jpg" alt="image" /></div>
              <strong class="name">Hellen Grey</strong> <span class="title">Brother</span>
              <p>n hac habitasse platea dictumst. Aliquam dictum felis a purus cursus inorttitor libero vulputate. Vestibulum ante ipsum primis in faucibus orci luctus etultric posuere cubilia Curae.</p>
              <ul class="social-networks">
                <li><a href="#" class="facebook-1">facebook</a></li>
                <li><a href="#" class="twitter-1">twitter</a></li>
                <li><a href="#" class="vimeo-1">vimeo</a></li>
                <li><a href="#" class="flicker-1">flicker</a></li>
              </ul>
            </div>
          </article>
        </section>
      </section>
    </div>
@endsection