<header id="header">
        <div class="header-wrapper home">
          <div class="header-holder">
            <h1 id="logo"><a href="{{url('/')}}">A Igreja</a></h1>
            <div class="nav">
              <ul class="menu menu_blue">
                @if(Request::segment(1) == '')
				    <li class="active"><a href="{{url('/')}}">HOME</a></li>
				@else
				    <li><a href="{{url('/')}}">HOME</a></li>
				@endif
				
				@if(Request::segment(1) == 'sobre-igreja')
					<li class="active"><a href="{{url('/sobre-igreja')}}">EM GLÓRIA</a></li>
				@else
				    <li class="fullwidth"><a href="{{url('/sobre-igreja')}}">EM GLÓRIA</a></li>
				@endif
				
				@if(Request::segment(1) == 'ministerios')
					<li class="active"><a href="{{url('/ministerios')}}/{{$minAtivo->id_ministerio}}">MINISTÉRIOS</a></li>
				@else
				    <li class="fullwidth"><a href="{{url('/ministerios')}}/{{$minAtivo->id_ministerio}}">MINISTÉRIOS</a></li>
				@endif
				
				<!-- @if(Request::segment(1) == 'programacao')
					<li class="active"><a href="{{url('/programacao')}}">PROGRAMAÇÃO</a></li>
				@else
					<li class="fullwidth"><a href="{{url('/programacao')}}">PROGRAMAÇÃO</a></li>
				@endif -->
				
				@if(Request::segment(1) == 'palavra-pastor')
					<li class="active"><a href="{{url('/palavra-pastor')}}">PALAVRA DO PASTOR</a></li>
				@else
					<li class="fullwidth"><a href="{{url('/palavra-pastor')}}">PALAVRA DO PASTOR</a></li>
				@endif
				
				@if(Request::segment(1) == 'amor-que-move')
					<li class="active"><a href="{{ url('/amor-que-move') }}">AMOR QUE MOVE</a></li>
				@else
					<li class="fullwidth"><a href="{{ url('/amor-que-move') }}">AMOR QUE MOVE</a></li>
				@endif
				
				 <!-- <li class="fullwidth"><a href="#">LOJA</a></li> -->
				 
				@if(Request::segment(1) == 'form-contato')
					<li class="active"><a href="{{url('/form-contato')}}">CONTATO</a></li>
				@else
					<li class="fullwidth"><a href="{{url('/form-contato')}}">CONTATO</a></li>
				@endif
                
               <!-- 
               <li class="fullwidth"><a href="about.html" class="drop">MINISTÉRIOS</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="col_1 firstcolumn">
                        <ul>
                          <li><a href="team.html">LOUVOR</a></li>
                          <li><a href="timeline.html">DANÇA</a></li>
                          <li><a href="sermons.html">TEATRO</a></li>
                          <li><a href="sermons.html">EVANGELISMO</a></li>
                          <li><a href="sermons.html">AÇÃO SOCIAL</a></li>
                          <li><a href="team.html">CASAIS</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col_2">
                      <div class="col_1 firstcolumn">
                        <ul>
                          <li><a href="timeline.html">ENSINO</a></li>
                          <li><a href="sermons.html">INFANTIL</a></li>
                          <li><a href="sermons.html">JOVENS</a></li>
                          <li><a href="sermons.html">ADOLESCENTES</a></li>
                          <li><a href="sermons.html">MISSÕES</a></li>
                          <li><a href="team.html">CULTO NOS LARES</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
               
                <li class="fullwidth"><a href="about.html" class="drop">Em Glória</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="{{ url('/layout/') }}/images/ch-25.jpg" alt="">
                        <h2>John</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                      <div class="inner-col"> <img src="{{ url('/layout/') }}/images/ch-27.jpg" alt="">
                        <h2>Mark</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>About Us</h2>
                      <div class="col_1 firstcolumn">
                        <ul>
                          <li><a href="team.html">Team</a></li>
                          <li><a href="timeline.html">Timeline</a></li>
                          <li><a href="sermons.html">Sermons</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="church-event.html" class="drop">Events</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="{{ url('/layout/') }}/images/ch-25.jpg" alt="">
                        <h2>John</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                      <div class="inner-col"> <img src="{{ url('/layout/') }}/images/ch-25.jpg" alt="">
                        <h2>Mark</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>Events</h2>
                      <div class="col_1 firstcolumn">
                        <ul>
                          <li><a href="event-detail.html">Event Detail</a></li>
                          <li><a href="event-venue.html">Event Venue</a></li>
                          <li><a href="news.html" class="drop">Latest News</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="blog.html" class="drop">Blog</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="{{ url('/layout/') }}/images/ch-36.jpg" alt="">
                        <h2>John</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                      <div class="inner-col"> <img src="images/ch-29.jpg" alt="">
                        <h2>Mark</h2>
                        <p>vore veritatis et quasi itecto  veritatis et quasi itecto</p>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>Blog</h2>
                      <div class="col_1 firstcolumn">
                        <ul class="plus">
                          <li><a href="blog.html">Blog</a></li>
                          <li><a href="blog-post.html">Blog Post</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="gallery.html" class="drop">Gallery</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col"> <img src="vimages/ch-28.jpg" alt=""> <img src="i{{ url('/layout/') }}/mages/ch-29.jpg" alt=""> <img src="{{ url('/layout/') }}/images/ch-30.jpg" alt=""> <img src="{{ url('/layout/') }}/images/ch-31.jpg" alt=""> <img src="{{ url('/layout/') }}/images/ch-32.jpg" alt=""> <img src="{{ url('/layout/') }}/images/ch-33.jpg" alt=""> <img src="{{ url('/layout/') }}/images/ch-34.jpg" alt=""> <img src="{{ url('/layout/') }}/images/ch-35.jpg" alt=""> </div>
                    </div>
                    <div class="col_2">
                      <h2>Gallery</h2>
                      <div class="col_1 firstcolumn">
                        <ul class="plus">
                          <li><a href="gallery-singlepost.html">Gallery Column 1</a></li>
                          <li><a href="gallery-2.html"> Gallery Column 2</a></li>
                          <li><a href="gallery-3.html"> Gallery Column 3</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth"><a href="#" class="drop">Pages</a>
                  <div class="dropdown_fullwidth first_fullwidth">
                    <div class="col_2 firstcolumn">
                      <div class="inner-col">
                        <iframe src="http://player.vimeo.com/video/8282393?badge=0" width="300" height="200" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                      </div>
                    </div>
                    <div class="col_2">
                      <h2>All Pages</h2>
                      <div class="col_1 firstcolumn">
                        <ul class="plus">
                          <li><a href="prayer-wall.html">Prayer Wall</a></li>
                          <li><a href="video.html">Videos</a></li>
                          <li><a href="prayer-request.html">Prayer Request</a></li>
                          <li><a href="service.html">Service</a></li>
                          <li><a href="404.html">404</a></li>
                          <li><a href="short-code.html">Short Code</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="fullwidth">
                <li><a href="contact-us.html" class="drop">Contact</a>
                  <div class="dropdown_fullwidth first_fullwidth" id="contact-drop">
                    <div class="col_2 firstcolumn">
                      <h2>Contact Us</h2>
                      <div class="col_1 firstcolumn">
                        <form name="contactform" method="post" action="contact-form-2.php">
                          <fieldset>
                            <div class="row-contact">
                              <label>Name</label>
                              <input name="" type="text" value="">
                            </div>
                            <div class="row-contact">
                              <label>Email</label>
                              <input name="" type="text" value="">
                            </div>
                            <div class="row-contact">
                              <label>Message</label>
                              <textarea rows="42" cols="42"></textarea>
                            </div>
                            <input name="" type="submit" value="SUBMIT" class="submit-1">
                          </fieldset>
                        </form>
                        <ul class="blog-networks">
                          <li><a href="#" class="blog-twitter">twitter</a></li>
                          <li><a href="#" class="blog-flicker">flicker</a></li>
                          <li><a href="#" class="blog-facebook">facebook</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>-->
              </ul>
              <form action="dummy" method="post">
                <select name="choice" size="1" onChange="jump(this.form)" class="chzn-results">
                  <option value="#">HOME</option>
                  <option value="#">EM GLÓRIA</option>
                  <option value="#">MINISTÉRIOS</option>
                  <option value="#">PROGRAMAÇÃO</option>
                  <option value="#">PALAVRA DO PASTOR</option>
                  <option value="#">LOJA</option>
                  <option value="#">CONTATO</option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </header>