@extends('layout.layoutSite')

@section('content')
<a name="DOAÇÕES"></a>
<!-- Content -->
    <div class="content mt0" >
    	<div class="heading-holder">
            <h3 class="content-heading"><span><em class="h-left"></em><span class="inner-heading">DOE COM O CORAÇÃO</span><em class="h-right"></em></span></h3>
         </div>
      <article class="banner-bottom">
        <span class="detail">
        <h5>Doação é um gesto de caridade bastante importante, que normalmente, vem acompanhado de amor e de muita bondade,
          e esta ação, deve e precisa crescer a cada dia, pois existem várias famílias carentes que precisam de ajuda,
           não podemos ver elas passando dificuldades e ficar de braços cruzados sem fazer nada por elas.</h5>
          <br />
        <b>Provérbios 11:24,25</b> –  “Há quem dê generosamente, e vê aumentar suas riquezas; outros retêm o que deveriam dar, e caem na pobreza. O generoso prosperará; quem dá alívio aos outros, alívio receberá”.
       </span>
      </article>
      <div class="heading-holder">
         <span class="detail">
             <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
			<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
				<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
				<input type="hidden" name="currency" value="BRL" />
				<input type="hidden" name="receiverEmail" value="elbes2009@gmail.com" />
				<input type="hidden" name="iot" value="button" />
				<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
			</form>
			<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
        </span>
      </div>
       <br /> 
       
    </div>
@endsection
