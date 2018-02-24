<div class="gallery-holder slideshow">
        <div class="gallery">
          <div class="gholder"> <a class="btn-prev" href="#">próximo</a>
            <div class="gmask">
              <ul>
              	@foreach ($banners as $banner)
                	<li><img src="{{ url('/imagens/banners') }}//{{ $banner->imagen_banner }}" alt="image" /></li>
                @endforeach
              </ul>
            </div>
            <a class="btn-next" href="#">próximo</a> </div>
          <div class="pagination">
            <ul>
            @foreach ($banners as $banner)
            	@if (!isset($banner->dhs_exclusao_logica))
              		<li class=""><a href="#"></a></li>
              	@endif
            @endforeach
              
              
            </ul>
          </div>
        </div>
        <span class="banner-bottom2"><img src="{{ url('/layout/') }}/images/banner-bottom.png" alt=""></span> </div>