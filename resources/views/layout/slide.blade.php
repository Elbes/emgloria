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
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
          </div>
        </div>
        <span class="banner-bottom2"><img src="{{ url('/layout/') }}/images/banner-bottom.png" alt=""></span> </div>