<?php
    /**
     ** Template name: Assinatura de Energia 2.0
    **/

    // Recupera o nome da pagina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body class="assinatura">
	
	<style>
		@media (max-width:768px){
			.box-content, .content-section, .testimonial-content, .testimonial-name, .title-noticia, .resumo-noticia{
				text-align:left;
			}
		}
	</style>
<div class="dobra dobra-1 desktop-only">	
	<?php echo do_shortcode( '[smartslider3 slider="2"]' ); ?>       		
</div>
<div class="dobra dobra-1 mobile-only">	
	<?php echo do_shortcode( '[smartslider3 slider="3"]' ); ?>       		
</div>
<div class="dobra dobra-2 container">
	<h2 class="dobra-title">Já parou pra pensar que existe uma forma mais barata de se consumir energia?</h2>
    <!--MODELO MOBILE-->
    <div class="wrap-boxes mobile-only">    	
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                  <div class="icon">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-40.png">
                  </div>
                  <div class="box-content">
                        <strong class="str-verde">01.</strong> A energia é gerada nas <strong class="str-verde">fazendas solares</strong> da Detronic Energia
                  </div>
            	</div>
            </div>
            <div class="carousel-item">
                <div class="box">
                    <div class="icon">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-38.png">
                    </div>
                    <div class="box-content">
                        <strong class="str-verde">02.</strong> Toda energia produzida é injetada na rede da <strong class="str-verde">CEMIG</strong>
                    </div>
                </div>
            </div>
            <div class="carousel-item">              
             	 <div class="box">
                	<div class="icon">
                    	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector.png">
                	</div>
                	<div class="box-content">
                    	<strong class="str-verde">03.</strong> Ao contratar o seu plano de assinatura, você receberá os créditos de energia na sua conta com a <strong class="str-verde">diminuição do valor</strong>
               		</div>
            	</div>              
            </div>
            <div class="carousel-item">              
            	<div class="box">
        			<div class="icon">
            			<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector1.png">
            		</div>
            		<div class="box-content">
            			<strong class="str-verde">04.</strong> Você receberá energia <strong class="str-verde">da mesma forma</strong> que recebe hoje
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
    	<div class="box">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-40.png">
            </div>
            <div class="box-content">
            	<strong class="str-verde">01.</strong> A energia é gerada nas <strong class="str-verde">fazendas solares</strong> da Detronic Energia
            </div>
        </div>
        
        <div class="box">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-38.png">
            </div>
            <div class="box-content">
            	<strong class="str-verde">02.</strong> Toda energia produzida é injetada na rede da <strong class="str-verde">CEMIG</strong>
            </div>
        </div>
        
        <div class="box">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector.png">
            </div>
            <div class="box-content">
            	<strong class="str-verde">03.</strong> Ao contratar o seu plano de assinatura, você receberá os créditos de energia na sua conta com a <strong class="str-verde">diminuição do valor</strong>
            </div>
        </div>
        
        <div class="box">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector1.png">
            </div>
            <div class="box-content">
            	<strong class="str-verde">04.</strong> Você receberá energia <strong class="str-verde">da mesma forma</strong> que recebe hoje
            </div>
        </div>
        
    </div>
    <div class="btn-wrap-center"  id="formulario">
    	<a class="btn-assinatura-1 btn-padrao btn-azul" target="_blank" href="https://simulacao.detronicenergia.com/">Simule aqui seu desconto<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
    </div>
</div>
<div class="fundo-completo azul">
	<div class="dobra dobra-3 container">
		<div class="wrap-center">
        	<h2 class="dobra-title branco">Cadastre-se aqui e comece a economizar ainda esse mês</h2>
        </div>
        <div class="wrap-form" >
        	<?php echo do_shortcode( '[contact-form-7 id="511" title="Form página assinatura de energia"]' ); ?>        	
        </div>
	</div>
</div>
<div class="fundo-completo cinza">
	<div class="dobra dobra-4 container">
		<div class="wrap-boxes wrap-content">
        	<div class="data-content">
            	<h2 class="dobra-title">Economia também para sua<br>empresa ou o seu negócio</h2>
                <p class="content-p">As assinaturas de energia estão disponíveis para qualquer<br>estabelecimento ligado a rede da CEMIG.</p>                
                <p class="content-p" style="margin-bottom: 50px;">Leve economia para o seu orçamento, ofereça valor aos seus clientes<br>usando energia sustentável e tudo isso sem investimentos.</p>                
            
            	<div class="btn-wrap-left">
    	<a class="btn-assinatura-2 btn-padrao btn-azul" href="#formulario">Comece agora<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
    </div>
            </div>
            <div class="data-content">
            	<img class="img-data-content" src="https://detronicenergia.com/wp-content/uploads/2022/11/IMG.jpg">
            </div>
        </div>
	</div>
</div>
<div class="dobra dobra-5 container">
	<h2 class="dobra-title" style="margin-bottom:0px;">Não é só economizar</h2>
	<p class="dobra-subtitle">
   		Atuamos pensando no futuro. Convidamos você a pensar também.<br>
		Escolha nossos Planos de Assinatura de Energia Solar. Escolha Detronic.
    </p>
    <!--MODELO MOBILE--> 
    <div class="wrap-boxes mobile-only">
    
    	<div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <!-- <div class="carousel-item active">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-18.png"></div>
            		<div class="content-section" style="text-align:left;"><strong class="str-verde" style="font-size: 22px;">949 mil reais</strong><br>de economia mensal para nossos clientes</div>
            	</div>
            </div> -->
            <div class="carousel-item active">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector3.png"></div>
            		<div class="content-section"style="text-align:left;"><strong class="str-verde" style="font-size: 22px;">
                <?php 
                    $global_arvores_plantadas = get_option('arvores_plantadas_field');
                    echo '<span class="meu-span">' . $global_arvores_plantadas . '</span>';
                ?>
                mil unidades</strong><br>de árvores plantadas por ano</div>
            	</div>
            </div>
            <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector2.png"></div>
            		<div class="content-section"style="text-align:left;"><strong class="str-verde" style="font-size: 22px;">
                <?php 
                    $global_reducao_de_co2 = get_option('reducao_de_co2_field');
                    echo '<span class="meu-span">' . $global_reducao_de_co2 . '</span>';
                ?>
                mil toneladas</strong><br>de redução de CO² na atmosfera por ano</div>
            	</div>
            </div>
            <!-- <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-17.png"></div>
            		<div class="content-section"style="text-align:left;"><strong class="str-verde" style="font-size: 22px;">5,27 milhões (kWh)</strong><br>de produção mensal estimada de energia das nossas usinas</div>
            	</div>
            </div>
            <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector3.png"></div>
            		<div class="content-section"style="text-align:left;"><strong class="str-verde" style="font-size: 22px;">22.756 mil unidades</strong><br>de árvores plantadas por ano</div>
            	</div>
            </div> -->
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>   	
    </div>
    
    <!--FIM MODELO MOBILE-->
    <div class="wrap-boxes desktop-only">
    	<div class="section">
        	<!-- <div class="section-box">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-18.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">949 mil reais</strong><br>de economia mensal para nossos clientes</div>
            </div> -->
            <div class="section-box">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector3.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">                <?php 
                    $global_arvores_plantadas = get_option('arvores_plantadas_field');
                    echo '<span class="meu-span">' . $global_arvores_plantadas . '</span>';
                ?> mil unidades</strong><br>de árvores plantadas por ano</div>
            </div>
            <div class="section-box">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector2.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">                <?php 
                    $global_reducao_de_co2 = get_option('reducao_de_co2_field');
                    echo '<span class="meu-span">' . $global_reducao_de_co2 . '</span>';
                ?> mil toneladas</strong><br>de redução de CO² na atmosfera por ano</div>
            </div>
        </div>
        <!-- <div class="section">
        	<div class="section-box">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-17.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">5,27 milhões (kWh)</strong><br>de produção mensal estimada de energia das nossas usinas</div>
            </div>
            <div class="section-box">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector3.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">22.756 mil unidades</strong><br>de árvores plantadas por ano</div>
            </div>
        </div>        -->
    </div>  
    <div class="wrap-video">
    	<video width="800" controls class="video-destaque">
  			<source src="https://detronicenergia.com/wp-content/uploads/2022/11/Plano-de-Assinatura_FullHD.mp4" type="video/mp4"> 			
  			Your browser does not support HTML video.
		</video>
    </div>
</div>
<div class="fundo-completo cinza">
<div class="dobra dobra-6 container">
	<h2 class="dobra-title">Além da economia, muitos outros benefícios</h2>
    <!--MODELO MOBILE-->
    
    <div class="wrap-boxes mobile-only">
    
        <div id="carouselExampleControls-4" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              	<div class="box branca">
                    <div class="icon" style="text-align:center;">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-34.png">
                    </div>
                    <div class="box-content" style="text-align:center;">
                        Redução na conta de luz
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="box branca">
                    <div class="icon" style="text-align:center;">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector-1.png">
                    </div>
                    <div class="box-content" style="text-align:center;">
                        Energia renovável e limpa
                    </div>
                </div>
            </div>
            <div class="carousel-item">
              	<div class="box branca">
                    <div class="icon" style="text-align:center;">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-19.png">
                    </div>
                    <div class="box-content" style="text-align:center;">
                        Sem a necessidade de investimentos
                    </div>
                </div>
            </div>
            <div class="carousel-item">
               <div class="box branca">
                    <div class="icon" style="text-align:center;">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-35.png">
                    </div>
                    <div class="box-content" style="text-align:center;">
                        Liberdade para escolher sua fonte de energia
                    </div>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls-4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls-4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>        
    </div>    
    
    <!--FIM MODELO MOBILE-->
    <div class="wrap-boxes desktop-only">
    	<div class="box branca">
        	<div class="icon" style="text-align:center;">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-34.png">
            </div>
            <div class="box-content" style="text-align:center;">
            	Redução na conta de luz
            </div>
        </div>
        
        <div class="box branca">
        	<div class="icon" style="text-align:center;">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector-1.png">
            </div>
            <div class="box-content" style="text-align:center;">
            	Energia renovável e limpa
            </div>
        </div>
        
        <div class="box branca">
        	<div class="icon" style="text-align:center;">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-19.png">
            </div>
            <div class="box-content" style="text-align:center;">
            	Sem a necessidade de investimentos
            </div>
        </div>
        
        <div class="box branca">
        	<div class="icon" style="text-align:center;">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-35.png">
            </div>
            <div class="box-content" style="text-align:center;">
            	Liberdade para escolher sua fonte de energia
            </div>
        </div>
        
    </div>
    <div class="btn-wrap-center">
    	<a class="btn-assinatura-3 btn-padrao btn-azul" href="#formulario">Faça a sua assinatura<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
    </div>
</div>
</div>
	<div class="container clube-certo">
		<div class="row align-items-center">
			<div class="col-md-4 d-flex justify-content-center left">
				<img src="https://detronicenergia.com/wp-content/uploads/2023/03/mockup-clubecerto-1.png" style="max-width:250px;">
			</div>
			<div class="col-md-8">
				<img src="https://detronicenergia.com/wp-content/uploads/2023/03/sitelayout_CBC-home_01-1.png" style="margin-bottom:30px;">
                <p>Ao se tornar um cliente Detronic Energia, <strong>você já faz parte automaticamente do Clube Certo</strong>, ou seja, imediatamente após a assinatura do termo de adesão você já passa a ter os benefícios desta rede de descontos exclusivos em lojas, gastronomia, lazer, esportes e em mais de 600 mil produtos e serviços.</p> 
<p> É economia em dobro para o seu bolso: na conta de luz e em mais de 30 mil estabelecimentos por todo o Brasil. Se você já for cliente Detronic, acesse <a href="https://clubecerto.com.br" target="_blank">clubecerto.com.br</a>, insira seu CPF e descubra o que te espera.</p> 
			</div>			
		</div>
	</div>
<div class="dobra dobra-7 container">
	<h2 class="dobra-title">Principais dúvidas sobre as assinaturas de energia solar</h2>
    
    <div class="accordion accordion-flush" id="accordionFlushExample">
    
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        É necessário fazer obras para ter energia solar?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Não há necessidade de obras ou instalações para você aderir a este modelo de energia solar. A energia produzida em nossas usinas será compensada em sua fatura de energia, sem investimento, por meio de créditos.</div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Preciso pagar algo no momento da contratação?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Não, você só precisa escolher o melhor plano e assinar o termo de adesão, que receberá em seu e-mail. Você só começa a pagar após o recebimento do crédito em sua conta de energia.</div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Caso minha energia acabe, a quem devo recorrer?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">A CEMIG continua sendo seu ponto de contato no caso de qualquer problema com a rede elétrica da sua localidade. Nada muda quanto a isso. Ela é a responsável por levar a energia até a sua casa.</div>
    </div>
  </div>
  
   <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Como será feito o pagamento para a CEMIG e para a Detronic Energia?
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Você receberá dois boletos, um da CEMIG e outro da Detronic Energia. No boleto da CEMIG, você receberá os créditos de energia e pagará as taxas mínimas. No boleto da Detronic você pagará o valor reduzido. Ao somar os dois boletos, a sua redução será de até 15% (conforme plano escolhido).</div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        Quais são as taxas mínimas que continuo pagando para a CEMIG?
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Você permanece pagando o custo de disponibilidade (valor mínimo cobrado pela concessionária, que corresponde, em média, a R$ 28,50 para clientes monofásicos, R$ 47,50 para clientes bifásicos e R$ 95,00 para clientes trifásicos), a iluminação pública e o PIS/COFINS, que corresponde, em média, a R$ 0,027/kWh consumido.</div>
    </div>
  </div>
  
    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
        Imóvel alugado pode ter energia solar?
      </button>
    </h2>
    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Sim, é possível. Quem mora de aluguel ou tem uma empresa em um imóvel alugado também pode usufruir dos benefícios da energia solar.</div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
        Quais documentos preciso apresentar para ser cliente Detronic Energia?
      </button>
    </h2>
    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">CNPJ ou CPF; conta de energia com histórico de consumo de no mínimo de 12 meses; se for empresa, precisamos da última alteração do contrato social, e para condomínios, da Ata de Assembleia. A titularidade da conta de energia deverá ser a mesma da pessoa contratante.</div>
    </div>
  </div>  
</div>
<hr class="divisor divisor-verde">
<h2 class="dobra-title">Nosso trabalho fala por nós, veja o depoimento de nossos clientes</h2>

<div id="carouselExampleControls-3" class="carousel slide" data-ride="carousel" style="min-height: 120px;height: 120px;">

            <div class="carousel-inner">
                <div class="carousel-item active">                                    
                    <span class="testimonial-content">"Estou imensamente satisfeito com o sistema de geração de energia fotovoltaica instalado pela Detronic Energia. Estou pagando apenas as taxas mínimas para a concessionária. Isso viabiliza outros investimentos, que é o mais importante."</span>
                    <br>
                    <h2 class="testimonial-name">- Filipe Rabelo Cunha</h2>  
                </div>

                <div class="carousel-item">
                    <span class="testimonial-content">"Um projeto que foi planejado durante algum tempo, e só foi possível sua realização graças ao empenho e profissionalismo da Detronic Energia. Só temos que agradecer o empenho de todos que realizaram com excelência e qualidade todas as etapas e superaram todas as expectativas! Parabéns a todos e vamos para a próxima!"</span> 
                    <br>
                    <h2 class="testimonial-name">- Dário Júnior - Hortifruti Bem-estar</h2>
                </div>
                
                <div class="carousel-item">
                    <span class="testimonial-content">"Estou bastante satisfeita com a minha adesão à Detronic. O desconto é real, e convenhamos, qualquer economia nesses tempos complicados, já vale a pena! Outro fator que me influenciou a aderir à Detronic, foi a possibilidade de uso de energia alternativa, como energia solar, o que sempre quis fazer, mas por falta de espaço, nunca tive essa oportunidade."</span> 
                    <br>
                    <h2 class="testimonial-name">- Eleonora Mhyrra</h2>
                </div>
                
                <div class="carousel-item">
                    <span class="testimonial-content">"Não tem muito tempo que uso o serviço da Detronic mas já estou economizando consideravelmente na conta de luz. Estamos satisfeitos com o serviço e com a economia certa. Redução na despesa fixa é tudo que uma empresa precisa na economia do Brasil."</span> 
                    <br>
                    <h2 class="testimonial-name">- Edilene Lott - Comercial Água Marinha</h2>
                </div>
                
                <div class="carousel-item">
                    <span class="testimonial-content">"Depois que assinei o contrato com a Detronic, estou muito feliz pela economia na conta de energia, pelo atendimento profissional prestado pela empresa, que além de responder as dúvidas com agilidade, as atendentes são muito educadas e acolhedoras. Obrigada a equipe da Detronic por me ajudar a reduzir minhas despesas com a energia elétrica em minha residência."</span> 
                    <br>
                    <h2 class="testimonial-name">- Gislene Maria</h2>
                </div>
                
                <div class="carousel-item">
                    <span class="testimonial-content">"Aderi à Detronic por uma questão muito simples, economia. 
Eles têm uma energia mais barata que a CEMIG. É muito fácil aderir e eles são muito tranquilos. Burocracia quase não existe e recomendo para todo mundo. Não tem por que não fazer, se a energia é a mesma só que mais barata."</span> 
                    <br>
                    <h2 class="testimonial-name">- Leonardo Ituassu - Clínica Animalis</h2>
                </div>
                
                <div class="carousel-item">
                    <span class="testimonial-content">"Boa tarde! Estou muito satisfeita com os serviços prestados pela Detronic; de fato percebi uma significativa economia em minha conta de energia! Valeu muito a adesão!!!"</span> 
                    <br>
                    <h2 class="testimonial-name">- Djenane Rezende</h2>
                </div>
                
            </div>

            <a class="carousel-control-prev" href="#carouselExampleControls-3" role="button" data-slide="prev"
               style="background-image: none">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next" href="#carouselExampleControls-3" role="button" data-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>


</div>
<div class="fundo-completo cinza espacamento-extra">
<div class="dobra dobra-8 container">
	<h2 class="dobra-title">O que dizem sobre a Detronic</h2>
    <!--MODELO MOBILE-->
    
    <div class="wrap-boxes mobile-only">
    
    <div id="carouselExampleControls-5" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="box branca" style="width: 100%;">
                <div class="logo-noticia"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/em-1.png"></div>
                <p class="title-noticia">Chega em Minas nova tecnologia que torna a energia solar mais acessível</p>
                <p class="resumo-noticia">Detronic Energia oferece forma inovadora de utilizar a energia solar sem precisar instalar painéis na sua residência ou no seu negócio</p>
                <a class="link-materia btn-padrao btn-branco" target="_blank" href="https://www.em.com.br/app/noticia/patrocinado/detronic/2022/05/23/noticia-patrocinado-detronic,1368402/chega-em-minas-nova-tecnologia-que-torna-a-energia-solar-mais-acessivel.shtml">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
            </div>
        </div>
         <div class="carousel-item">
             <div class="box branca" style="width: 100%;">
                <div class="logo-noticia"><img src="https://detronicenergia.com/wp-content/uploads/2023/05/logo-canalenergia-1500x311-1.jpg"></div>
                <p class="title-noticia" style="text-align:left;">Detronic Energia e Cruzeiro lançam plano de assinatura de energia renovável</p>
                <p class="resumo-noticia" style="text-align:left;">Parceria proporcionará economia na conta de luz dos associados e servirá como ação educativa sobre consumo energético consciente</p>
                <a class="link-materia btn-padrao btn-branco" target="_blank" href="https://www.canalenergia.com.br/noticias/53247098/detronic-energia-e-cruzeiro-lancam-plano-de-assinatura-de-energia-renovavel">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
            </div>     
        </div>          
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls-5" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls-5" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>       
       
    </div>
    
    <!--FIM MODELO MOBILE-->
    <div class="wrap-boxes desktop-only">
    	<div class="box branca" style="width: 100%;">
        	<div class="logo-noticia"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/em-1.png"></div>
            <p class="title-noticia">Chega em Minas nova tecnologia que torna a energia solar mais acessível</p>
            <p class="resumo-noticia">Detronic Energia oferece forma inovadora de utilizar a energia solar sem precisar instalar painéis na sua residência ou no seu negócio</p>
			<a class="btn-padrao btn-branco" target="_blank" href="https://www.em.com.br/app/noticia/patrocinado/detronic/2022/05/23/noticia-patrocinado-detronic,1368402/chega-em-minas-nova-tecnologia-que-torna-a-energia-solar-mais-acessivel.shtml">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
        </div>
        
       <div class="box branca" style="width: 100%;">
        	<div class="logo-noticia"><img src="https://detronicenergia.com/wp-content/uploads/2023/05/logo-canalenergia-1500x311-1.jpg"></div>
            <p class="title-noticia">Detronic Energia e Cruzeiro lançam plano de assinatura de energia renovável</p>
            <p class="resumo-noticia">Parceria proporcionará economia na conta de luz dos associados e servirá como ação educativa sobre consumo energético consciente </p>
			<a class="btn-padrao btn-branco" target="_blank" href="https://www.canalenergia.com.br/noticias/53247098/detronic-energia-e-cruzeiro-lancam-plano-de-assinatura-de-energia-renovavel">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
        </div>  
        
        <!--<div class="box branca" style="width: 100%;">
        	<div class="logo-noticia"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/soubh-1.png" style="width: 74px;"></div>
            <p class="title-noticia">Reta final da corrida por investimentos em usinas de energia solar</p>
            <p class="resumo-noticia">Nova legislação gera janela de oportunidade para investimento com rentabilidade atrativa</p>
			<a class="btn-padrao btn-branco" target="_blank" href="#">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
        </div>-->   
        
    </div>
</div>
</div>
<?php get_footer('new'); ?>