@extends('layout.layoutSite')

@section('content')
 <!-- Content -->
    
    <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">NOSSO CONTATO</span><em class="h-right"></em></span></h3>
          </div>
          <article class="column c-three-fourth">
            <div class="blog-post">
              <div class="map-holder">
                <div style="width: 602px">
                  <iframe width="602" height="253" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.0488953470567!2d-48.05866418558295!3d-16.010969988916926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2a9e113e6641%3A0x2971d41fa31296eb!2sIgreja+Batista+em+Gl%C3%B3ria!5e0!3m2!1spt-PT!2sbr!4v1514728478534" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
              </div>
              <br class="clear" />
              <div class="blog-holder">
                <div class="left"> <strong class="name">ENTRE EM CONTATO CONOSCO!</strong>
                  <div class="contact-box">
                    <p>Somos gratos por você estar aqui. Ficaremos mais grato ainda se nos enviar uma mensagem ou nos fazer uma visita. </p>
                  </div>
                </div>
                <div class="right"> <strong class="name">MEIOS DE CONTATO</strong>
                  <div class="contact-us">
                    <p>QI 04 LOTE 860 - GAMA/DF
						SETOR DE INDÚSTRIAS
						CEP: 72425-030 </p>
                    <ul class="list">
                      <li>Fone:: (61) xxx xxxxx</li>
                      <li>Email: <a href="mailto:elbes2009@gmail.com">elbes2009@gmail.com</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="blog-holder contact"> <strong class="name">Deixe um recado</strong>
                <div class="contact-flied">
                  <form name="contactform" method="post" action="#">
                  {{ csrf_field() }}
                    <fieldset>
                      <div class="row">
                        <input name="nome" type="text" placeholder="Seu Nome">
                        <input name="telefone" type="text" placeholder="Seu Telefone">
                        <input name="email" type="text" placeholder="Seu Email">
                      </div>
                      <textarea name="mensagem" rows="42" cols="42" placeholder="Sua mensagem"></textarea>
                      <input name="" type="submit" value="ENVIAR" class="submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </article>
          <article class="column c-one-third">
            <div class="about-box">
            <div class="right-sidebar">
                <div class="sidebar-h"><strong class="right-heading"><span>PRÓXIMOS EVENTOS</span></strong></div>
                <ul class="comments">
                  <li><div class="clock"><span>23</span></div><a href="#" class="worship">Titulo evento</a>
                    <p>23 de Janeiro - 10:00</p>
                  </li>
                  
                  <li><div class="clock"><span>24</span></div><a href="#" class="worship">Titulo evento</a>
                    <p>24 de Janeiro - 11:00</p>
                  </li>

                </ul>
              </div>
             </div>
          </article>
        </section>
      </section>
    </div>
@endsection