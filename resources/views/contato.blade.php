	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Entre em contato conosco</h2>
					<div class="divider-header"></div>
					<p>Faça um orçamento sem compromisso ou esclareça suas dúvidas com um de nossos consultores. Preencha o formulário abaixo que entraremos em contato.</p>
					</div>
					</div>
				</div>
			</div>

		</div>
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
				        <div id="sendmessage">Mensagen enviada com sucesso!</div>
                        <div id="errormessage"></div>
                        <form action="{{ url('/guarda-contato') }}" method="post" role="form" class="contactForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome') }}" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Escreva seu nome" required/>
                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Seu Email" data-rule="email" data-msg="escreva um email válido" required />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="telefone" id="telefone" value="{{ old('telefone') }}" placeholder="Telefone" data-rule="minlen:4" data-msg="Escreva o assunto" required/>
                                @if ($errors->has('telefone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="assunto" id="assunto" value="{{ old('assunto') }}" placeholder="Assunto" data-rule="minlen:4" data-msg="Escreva o assunto" required/>
                                @if ($errors->has('assunto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('assunto') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensagem" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem" required>{{ old('mensagem') }}</textarea>
                                @if ($errors->has('mensagem'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mensagem') }}</strong>
                                    </span>
                                @endif
                                <!-- <div class="validation"></div> -->
                            </div>
                            
                            <div class="text-center"><button type="submit" class="btn btn-skin btn-lg btn-block">Enviar</button></div>
                        </form>
						
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->