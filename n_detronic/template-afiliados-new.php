<?php
    /**
     ** Template name: Afiliados 2.0
    **/

    // Recupera o nome da pagina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body>
		<style>
		@media (max-width:768px){
			.box{
				text-align:left;
			}
		}
	</style>
<div class="dobra dobra-1 desktop-only">	
	<?php echo do_shortcode( '[smartslider3 slider="12"]' ); ?>       		
</div>
<div class="dobra dobra-1 mobile-only">	
	<?php echo do_shortcode( '[smartslider3 slider="13"]' ); ?>       		
</div>


<!-- <div class="dobra dobra-5 container">
	<h2 class="dobra-title modelo-3 title-afiliados" style="margin: auto;width: 800px;text-align:center;">Entenda como <br class="mobile-conversion"> funciona a  <br class="mobile-conversion"> Indicação Premiada</h2>	
    <div class="wrap-video" id="video-explicativo">
    	<iframe class="video-youtube" width="800" height="415" src="https://www.youtube.com/embed/1Pdr6nOo6pM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
    </div>
</div> -->
<div class="fundo-completo cinza altura-adaptada">
<div class="dobra dobra-2 container">
	<h2 class="dobra-title title-afiliados">Passo a passo para zerar sua conta Detronic</h2>
    <!--MODELO MOBILE-->
    <div class="wrap-boxes mobile-only">    	
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box box-3 modelo-espacamento mobile-height">
                    <div class="icon icon-2">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector-1.png">
                        <p class="img-tittle" style="font-weight:300; font-size:16px;"><strong style="font-weight:600; ">1º</strong> Crie sua conta</p>
                    </div>
                    <div class="box-content" style="font-weight: 300;font-size: 14px;line-height: 18px; font-family: 'Work Sans';">
                        Indique seus amigos clicando aqui
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="box box-3 modelo-espacamento mobile-height">
                    <div class="icon icon-2">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector1-1.png">
                        <p class="img-tittle" style="font-weight:300; font-size:16px;"><strong style="font-weight:600; ">2º</strong> Receba seu link com ID</p>
                    </div>
                    <div class="box-content" style="font-weight: 300;font-size: 14px;line-height: 18px; font-family: 'Work Sans';">
                        Compartilhe com sua rede de contatos o seu link exclusivo. Acompanhe suas indicações e monitore seu desempenho por meio do seu acesso de afiliado no site.
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">              
             	 <div class="box box-3 modelo-espacamento mobile-height">
                    <div class="icon icon-2">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-18.png">
                        <p class="img-tittle" style="font-weight:300; font-size:16px;"><strong style="font-weight:600; ">3º</strong> Receba sua comissão</p>
                    </div>
                    <div class="box-content" style="font-weight: 300;font-size: 14px;line-height: 18px; font-family: 'Work Sans';">
                        Para sua indicação ser aprovada, a pessoa indicada deverá assinar o contrato conosco. Seu comissionamento será liberado no mês subsequente à assinatura.
                    </div>
                </div>        
            </div>           
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <!--FIM MODELO MOBILE-->
    <div class="wrap-boxes desktop-only">
    	<div class="box box-3 modelo-espacamento">
        	<div class="icon icon-2">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector-1.png">
                <p class="img-tittle" style="font-weight:300; "><strong style="font-weight:600; ">1º</strong> Faça sua indicação</p>
            </div>
            <div class="box-content" style="font-weight:300; font-size:21px; line-height:30px;">
            Indique seus amigos clicando aqui
            </div>
        </div>
        
        <div class="box box-3 modelo-espacamento">
        	<div class="icon icon-2">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector1-1.png">
                <p class="img-tittle" style="font-weight:300; "><strong style="font-weight:600; ">2º</strong> Sua indicação faz a adesão</p>
            </div>
            <div class="box-content" style="font-weight:300; font-size:21px; line-height:30px;" >
            Nossa equipe irá entrar em contato com seu indicado e concluir o processo de cadastro
            </div>
        </div>
        
        <div class="box box-3 modelo-espacamento">
        	<div class="icon icon-2">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-18.png">
                <p class="img-tittle" style="font-weight:300; "><strong style="font-weight:600; ">3º</strong> Receba seu desconto</p>
            </div>
            <div class="box-content" style="font-weight:300; font-size:21px; line-height:30px;">
            Você recebe R$ 25,00 de desconto na sua conta Detronic por indicação
            </div>
        </div>        
       
    </div>
     <div class="btn-wrap-center">
    	<a class="btn-assinatura-3 btn-padrao btn-azul" href="https://materiais.detronicenergia.com/lp-indicacao-premiada"  target="_blank">Faça sua indicação<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
    </div>
</div>
</div>
<div class="fundo-completo azul">
<div class="dobra dobra-2 container">
	<div class="wrap-boxes textos">
    	<div class="text-1">
        	<p>Até quanto eu posso<br>reduzir minha conta?</p>
        </div>
        <div class="text-2" style="font-weight:400;">
        	<p>Supondo que você tenha uma conta de R$ 150,00, indicando 6 amigos você irá zerar uma conta Detronic. Caso você indique mais de 6, o saldo ficará como crédito para a próxima fatura.</p>
        </div>
    </div>
</div>
</div>
<div class="fundo-completo cinza">
	<div class="dobra dobra-4 container mobile-version-padding">
		<div class="wrap-boxes wrap-content">
        	<div class="data-content adding-padding">
            	<h2 class="dobra-title">Para quem é o programa Indicação Premiada?</h2>
                <p class="content-p">Esse é um programa desenvolvido para que nossos clientes tenham uma economia maior que seu plano de assinatura atual. Afinal de contas, economizar mais é sempre bom. </p>
                <p class="content-p">Para indicar seus amigos, é muito simples, basta informar apenas 3 dados e pronto! Nossa equipe entrará em contato com seu indicado para o fechamento da contratação do plano. </p>               
                <p class="content-p" style="margin-bottom: 50px;">Para ganhar o desconto de R$25 por cada indicação, basta que seus indicados assinem o termo de adesão de acordo com o plano de assinatura escolhido.</p>                
            
            	<div class="btn-wrap-left center">
    	<a class="btn-assinatura-2 btn-padrao btn-azul" href="https://materiais.detronicenergia.com/lp-indicacao-premiada">Indique agora<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
    </div>
            </div>
            <div class="data-content">
            	<img class="img-data-content" src="https://detronicenergia.com/wp-content/uploads/2022/12/IMG.jpg">
            </div>
        </div>
	</div>
</div>
<div class="dobra dobra-7 container">
	<h2 class="dobra-title">Perguntas frequentes</h2>
    
    <div class="accordion accordion-flush" id="accordionFlushExample">
    
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Quem pode ser minha indicação?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      Qualquer pessoa física ou jurídica, que esteja em Minas Gerais e que seja atendida pela Cemig. Residências, comércios, escritórios, hotéis etc. — quase todos podem ser beneficiados, desde que se enquadrem na classe Residencial (B1) ou Comercial (B3).
		<br>
        <br>
        <strong>Abaixo, algumas condições:</strong>
		<br>
        <br>
        Ter um valor mínimo de conta Cemig de R$130; Não ter conta subsidiada pela Cemig ou pelo governo, como a tarifa social; Hoje, não atendemos também clientes com classe tarifária B2, ou seja, com tarifas rurais; Quem mora de aluguel também pode ser beneficiado. A única questão é que a conta de luz tem que estar em nome de quem vai assinar o contrato, seja o inquilino, seja o proprietário do imóvel.
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        O que o meu indicado ganha?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      Seu indicado irá economizar em sua conta de energia ao escolher um dos nossos planos de assinaturas disponíveis atualmente:
        <br>
        <br>
        <ul>
            <li>10% sem fidelidade para residências</li>
            <li>10% sem fidelidade para comércios ou empresas</li>
            <li>12% com fidelidade de 12 meses para comércios ou empresas</li>
            <li>15% com fidelidade de 24 meses para comércios ou empresas</li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Como funciona o desconto na minha fatura Detronic?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        No primeiro dia útil de cada mês, fazemos o levantamento de todas as adesões através das suas indicações do mês anterior, e então aplicamos o desconto adicional na sua fatura. 
        Este desconto se refletirá na fatura Detronic Energia do mês seguinte.
        <br>
        <br>
        Exemplo: Caso seu indicado faça a adesão a um de nossos planos de desconto no mês de maio, seu desconto adicional referente a esta indicação virá na fatura de julho.
      </div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
      Quanto de desconto adicional posso ganhar através das minhas indicações?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        Você ganha um desconto adicional de R$25 por cada indicado que fizer adesão a um de nossos planos de assinatura.
        <br>
        <br>
        Não há limite para as indicações. Caso você indique uma quantidade de amigos maior que o suficiente para zerar a sua conta em um mês, este crédito será descontado nas faturas posteriores.
      </div>
    </div>
  </div>
  
  
</div>
</div>
<?php get_footer('new'); ?>