@extends('layout.layoutSite')

@section('content')
<a name="PASTORES"></a>
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
          <hr>
          @foreach ($pastor as $pastores)
	          <article class="column c-one-third-pastor">
	            <div class="about-box"><center>
	              <div class="img-holder-pastor"><img src="{{url('/imagens/pastores/')}}/{{$pastores->foto_pastor}}" width="250px" height="180px" alt="image" /></div>
	              <strong class="name">Pr. {{$pastores->nome_pastor}} - {{$pastores->funcao_pastor}}</strong>
                <span class="title">Esposa:<b>{{$pastores->esposa_pastor}}</b></span>
	              <p style="text-align: justify; min-height: 200px;">{{$pastores->obs_pastor}} </p>
	            </div></center>
              <hr />
	          </article>
          @endforeach
        </section>
      </section>
    </div>
@endsection