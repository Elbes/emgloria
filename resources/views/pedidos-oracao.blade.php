@extends('layout.layoutSite')

@section('content')
<!-- Content -->
 <div class="content mt0">
      <section class="grid-holder">
        <section class="grid">
          <div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">PEDIDOS DE ORAÇÃO</span><em class="h-right"></em></span></h3>
				<article class="column c-three-fourth">
		            <div class="blog-post">
		              <br class="clear" />
		              <div class="blog-holder contact">
		                <div class="contact-flied">
		                  <form name="contactform" method="post" action="#">
		                  {{ csrf_field() }}
		                    <fieldset>
		                      <div class="row">
		                        <input name="nome" type="text" placeholder="Nome">
		                        <input name="telefone" type="text" placeholder="Telefone">
		                        <input name="email" type="text" placeholder="E-mail">
		                      </div>
		                      <textarea rows="42" cols="42" name="oracao_pedido" placeholder="Seu pedido de oração"></textarea>
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
	                <div class="sidebar-h"><strong class="right-heading"><span>ORIENTAÇÕES</span></strong></div>
	                <ul class="comments">
	                  <li><div class="worship">Suas informações pessoais não serão divulgadas.</div></li>
	                  <li><div class="worship">Se não quiser, não precisa preencher seu nome. Mas será muito bom saber quem está solicitando.</div></li>
	                </ul>
	              </div>
	             </div>
	          </article>
          </div>
        </section>
      </section>
   </div>



@endsection
