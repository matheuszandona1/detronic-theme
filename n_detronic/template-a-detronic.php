<?php
    /**
     ** Template name: A Detronic 2.0
    **/

    // Recupera o nome da pagina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body class="sobre">
<div class="dobra dobra-1 desktop-only">	
	<?php echo do_shortcode( '[smartslider3 slider="9"]' ); ?>       		
</div>
<div class="dobra dobra-1 mobile-only">	
	<?php echo do_shortcode( '[smartslider3 slider="10"]' ); ?>       		
</div>
<div class="fundo-completo cinza">
<div class="dobra dobra-2 container">
	<h2 class="dobra-title">Conheça o propósito da Detronic Energia</h2>
    <!--MODELO MOBILE-->
    <div class="wrap-boxes mobile-only">    	
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box box-3 modelo-espacamento">
                    <div class="icon icon-2">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-28.png">
                        <p class="img-tittle">Missão</p>
                    </div>
                    <div class="box-content text-center" style="text-align:left;">
                        Honrar a Deus e entregar experiência de valor ao mercado de energia.
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="box box-3 modelo-espacamento">
                    <div class="icon icon-2">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector.png">
                        <p class="img-tittle">Visão</p>
                    </div>
                    <div class="box-content text-center" style="text-align:left;">
                        Ser um exemplo multiplicador com vidas verdadeiramente transformadas.
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">              
             	 <div class="box box-3 modelo-espacamento">
                    <div class="icon icon-2">
                        <img src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-36.png">
                        <p class="img-tittle">Valores</p>
                    </div>
                    <div class="box-content text-center">
                        Fé em Deus <br> Ética<br>Compromisso<br>Sustentabilidade
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
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-28.png">
                <p class="img-tittle">Missão</p>
            </div>
            <div class="box-content text-center">
            	Honrar a Deus e entregar experiência de valor ao mercado de energia.
            </div>
        </div>
        
        <div class="box box-3 modelo-espacamento">
        	<div class="icon icon-2">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector.png">
                <p class="img-tittle">Visão</p>
            </div>
            <div class="box-content text-center">
            	Ser um exemplo multiplicador com vidas verdadeiramente transformadas.
            </div>
        </div>
        
        <div class="box box-3 modelo-espacamento">
        	<div class="icon icon-2">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-36.png">
                <p class="img-tittle">Valores</p>
            </div>
            <div class="box-content text-center">
            	Fé em Deus <br> Ética<br>Compromisso<br>Sustentabilidade
            </div>
        </div>        
       
    </div>
    
</div>
</div>
<div class="dobra dobra-4 container">
	<!--MODELO MOBILE-->
    <div class="wrap-boxes wrap-timeline mobile-only">
        	<div class="timeline-item point-1 baixo">
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group.png">
                <p class="timeline-tittle">1996</p>
                <p class="timeline-content">Grupo Detronic inicia a oferta de soluções para demolições, desmontes e manutenções.</p>
            </div>
            
            <div class="timeline-item point-2 baixo">
            	<hr class="divisor divisor-verde" style="rotate: 90deg;width: 58px;margin: auto;">
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group2.png">
            	<p class="timeline-tittle">2013</p>
                <p class="timeline-content">O grupo expande suas atividades ingressando no mercado de soluções de energia via fontes renováveis.</p>               
            </div>
            
            <div class="timeline-item point-3 baixo">
            	<hr class="divisor divisor-verde" style="rotate: 90deg;width: 58px;margin: auto;">
                <img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group1.png">
                <p class="timeline-tittle">2018</p>
                <p class="timeline-content">Nasce a Detronic Energia, visando a entrega de soluções em energia e transformações de vidas.</p>
            </div>
            
            <div class="timeline-item point-4 baixo"> 
            	<hr class="divisor divisor-verde" style="rotate: 90deg;width: 58px;margin: auto;">
                <img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/image.png" style="width: 100px;">
            	<p class="timeline-tittle">2021</p>
                <p class="timeline-content">O Grupo Detronic cria um ecossistema de negócios: o HUB de Energia.</p>           	
                
            </div>
            
            <div class="timeline-item point-5 baixo">
            	<hr class="divisor divisor-verde" style="rotate: 90deg;width: 58px;margin: auto;">
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group3.png">
                <p class="timeline-tittle">2022</p>
                <p class="timeline-content">Hoje a Detronic é especializada em desenvolvimento de projetos em geração distribuída e redução de custos para consumidores em geral.</p>
            </div>
    	</div> 
    
    <!--FIM MODELO MOBILE-->
		<div class="wrap-boxes wrap-timeline desktop-only">
        	<div class="timeline-item point-1 baixo">
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group.png">
                <p class="timeline-tittle">1996</p>
                <p class="timeline-content">Grupo Detronic inicia a oferta de soluções para demolições, desmontes e manutenções.</p>
            </div>
            
            <div class="timeline-item point-2 cima">
            	<div class="div-cima">
            	<p class="timeline-tittle">2013</p>
                <p class="timeline-content">O grupo expande suas atividades ingressando no mercado de soluções de energia via fontes renováveis.</p>
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group2.png">
                </div>
            </div>
            
            <div class="timeline-item point-3 baixo">
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group1.png">
                <p class="timeline-tittle">2018</p>
                <p class="timeline-content">Nasce a Detronic Energia, visando a entrega de soluções em energia e transformações de vidas.</p>
            </div>
            
            <div class="timeline-item point-4 cima">
            	<div class="div-cima">
            	<p class="timeline-tittle">2021</p>
                <p class="timeline-content">O Grupo Detronic cria um ecossistema de negócios: o HUB de Energia.</p>
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/image.png" style="width: 100px;">
                </div>
            </div>
            
            <div class="timeline-item point-5 baixo">
            	<img class="timeline-img" src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group3.png">
                <p class="timeline-tittle">2022</p>
                <p class="timeline-content">Hoje a Detronic é especializada em desenvolvimento de projetos em geração distribuída e redução de custos para consumidores em geral.</p>
            </div>
    	</div> 
        <hr class="divisor divisor-verde" style="margin-bottom:0px;">
</div>

<div class="dobra dobra-5 container">
	<h2 class="dobra-title">Venha transformar o mundo com a gente!</h2>	
    <img src="https://detronicenergia.com/wp-content/uploads/2022/12/DSC08282-1.jpg" class="img-dobra-5" style="
	max-width:100%;
	min-height: 200px;
	object-fit:cover;
	object-position:center;">
    <p class="dobra-5-content">Nosso propósito é transformar a vida das pessoas, levando a elas mais do que energia renovável acessível, mas também nossos valores e nossa forma de enxergar o mundo.</p>
    <p class="dobra-5-content">Se você se identifica com nossa missão e gosta de fazer o que tem que ser feito bem-feito, nós temos um lugar para você no nosso time.</p>
    <p class="dobra-5-content"><strong>Porque fazer parte do time Detronic:</strong></p>
    <!--MODELO MOBILE-->
    
    <div class="wrap-boxes box-a-detronic mobile-only">
    	<div id="carouselExampleControls-novo" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          
            <div class="carousel-item active">
              <div class="motivo">
                    <img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-27.png">
                    <p class="motivo-content" style="text-align:left;">Fazemos a <span class="str-verde">diferença</span> na vida das pessoas</p>
               </div>
            </div>
            
            <div class="carousel-item">
               <div class="motivo">
                    <img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group.png">
                    <p class="motivo-content" style="text-align:left;">Contribuímos com um mundo mais <span class="str-verde">sustentável</span></p>
                </div>
            </div>
            
            <div class="carousel-item">
              <div class="motivo">
                    <img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-281.png">
                    <p class="motivo-content" style="text-align:left;">Possibilitamos seu <span class="str-verde">crescimento profissional</span> em um dos mercados de maior destaque</p>
                </div>
            </div>
            
            <div class="carousel-item">
             <div class="motivo">
        		<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group1.png">
            	<p class="motivo-content" style="text-align:left;">Agimos com <span class="str-verde">ética e respeito</span> em todas as nossas relações</p>
       		 </div>        
            </div>
            
            <div class="carousel-item">
               <div class="motivo">
                    <img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group2.png">
                    <p class="motivo-content"style="text-align:left;">Atuamos com excelência e <span class="str-verde">inovação tecnológica</span></p>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="motivo">
                    <img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector1.png">
                    <p class="motivo-content"style="text-align:left;">Temos um time com reconhecida <span class="str-verde">capacidade técnica</span></p>
                </div>
            </div>
            
            <div class="carousel-item">
              <div class="motivo">
                    <img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector2.png">
                    <p class="motivo-content"style="text-align:left;">Criamos um <span class="str-verde">HUB de energia</span>, que provém soluções customizadas e eficientes no mercado de energia renovável</p>
                </div>
            </div>            
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls-novo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls-novo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>   
    </div>
    
    <!--FIM MODELO MOBILE-->
    <div class="wrap-boxes box-a-detronic desktop-only">
    	<div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-27.png">
            <p class="motivo-content">Fazemos a <span class="str-verde">diferença</span> na vida das pessoas</p>
        </div>
        
        <div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group.png">
            <p class="motivo-content">Contribuímos com um mundo mais <span class="str-verde">sustentável</span></p>
        </div>
        
        <div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group-281.png">
            <p class="motivo-content">Possibilitamos seu <span class="str-verde">crescimento profissional</span> em um dos mercados de maior destaque</p>
        </div>
        
        <div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group1.png">
            <p class="motivo-content">Agimos com <span class="str-verde">ética e respeito</span> em todas as nossas relações</p>
        </div>
        
        <div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Group2.png">
            <p class="motivo-content">Atuamos com excelência e <span class="str-verde">inovação tecnológica</span></p>
        </div>
        
        <div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector1.png">
            <p class="motivo-content">Temos um time com reconhecida <span class="str-verde">capacidade técnica</span></p>
        </div>
        
        <div class="motivo">
        	<img class="icon-motivo" src="https://detronicenergia.com/wp-content/uploads/2022/12/Vector2.png">
            <p class="motivo-content">Criamos um <span class="str-verde">HUB de energia</span>, que provém soluções customizadas e eficientes no mercado de energia renovável</p>
        </div>
    </div>
     <div class="btn-wrap-center">
    	<a class="btn-assinatura-3 btn-padrao btn-azul" href="https://detronic.solides.jobs/"  target="_blank">Trabalhe conosco<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
    </div>
    <hr class="divisor divisor-verde" style="margin-bottom:0px;">
</div>

<div class="dobra dobra-7 container">
	<div class="wrap-boxes onu">
    	<div class="section-text">
        	<h2 class="dobra-title" style="style="margin-bottom:0px;">Pacto Global ONU</h2>
            <p class="dobra-subtitle">Sustentabilidade como pilar transformador</p>
            <p class="dobra-5-content">A Detronic Energia é integrante do maior empreendimento voluntário de sustentabilidade corporativa do mundo, a Rede Brasil do Pacto Global.</p>
            <p class="dobra-5-content">É hoje a maior iniciativa de sustentabilidade corporativa do mundo, com mais de 13 mil membros em quase 80 redes locais, que abrangem 160 países.</p>
            <p class="dobra-5-content"><strong>Ao integrar o Pacto Global, comprometemos-nos a reportar anualmente o nosso progresso em relação aos 10 princípios, que são:</strong></p>            
        </div>
        <!--MODELO MOBILE-->
        
        	<div class="section-boxes mobile-only">
            
            
            <div class="accordion accordion-flush" id="accordionFlushExample">    
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    DIREITOS HUMANOS
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-23.png">
                    	<p class="overlay-tittle">RESPEITAR</p>
                        <p class="dobra-5-content">Apoiar e respeitar a proteção de direitos humanos reconhecidos internacionalmente.</p>
                        
                        <p class="overlay-tittle">ASSEGURAR</p>
                        <p class="dobra-5-content">Assegurar-se de sua não participação em violações destes direitos.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    TRABALHO
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-231.jpg">
                    	<p class="overlay-tittle">APOIAR</p>
                        <p class="dobra-5-content">Apoiar a liberdade de associação e o reconhecimento efetivo do direito à negociação coletiva.</p>
                        
                        <p class="overlay-tittle">ELIMINAR</p>
                        <p class="dobra-5-content">A eliminação de todas as formas de trabalho forçado ou compulsório.</p>
                        
                        <p class="overlay-tittle">ERRADICAR</p>
                        <p class="dobra-5-content">A abolição efetiva do trabalho infantil.</p>
                        
                        <p class="overlay-tittle">ESTIMULAR</p>
                        <p class="dobra-5-content">Eliminar a discriminação no emprego.</p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    MEIO AMBIENTE 
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-232.jpg">
                        <p class="overlay-tittle">PREVENIR</p>
                        <p class="dobra-5-content">Apoiar uma abordagem preventiva aos desafios ambientais.</p>
                        
                        <p class="overlay-tittle">DESENVOLVER</p>
                        <p class="dobra-5-content">Desenvolver iniciativas para promover maior responsabilidade ambiental.</p>
                        
                        <p class="overlay-tittle">INCENTIVAR</p>
                        <p class="dobra-5-content">Incentivar o desenvolvimento e difusão de tecnologias ambientalmente amigáveis.</p>
                  </div>
                </div>
              </div>

               <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    ANTICORRUPÇÃO
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-233.jpg">
                    	<p class="overlay-tittle">COMBATER</p>
                        <p class="dobra-5-content">Combater a corrupção em todas as suas formas, inclusive extorsão e propina.</p>    
                  </div>
                </div>
              </div>             
            </div>          
           </div>
        <!--FIM MODELO MOBILE-->
        <div class="section-boxes desktop-only">
        	<div class="wrap-boxes interna">
            	<div class="box-interna">
                	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-23.jpg">
                    <p class="btn-img-interno">DIREITOS HUMANOS <img class="seta-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/Arrow-1.png"></p>
                    <div class="overlay">
                        <p class="overlay-tittle">RESPEITAR</p>
                        <p class="dobra-5-content">Apoiar e respeitar a proteção de direitos humanos reconhecidos internacionalmente.</p>
                        
                        <p class="overlay-tittle">ASSEGURAR</p>
                        <p class="dobra-5-content">Assegurar-se de sua não participação em violações destes direitos.</p>
                    </div>
                </div>
                
            	<div class="box-interna">
                	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-231.jpg">
                    <p class="btn-img-interno">TRABALHO <img class="seta-interna" style="margin-left: 120px;" src="https://detronicenergia.com/wp-content/uploads/2022/12/Arrow-1.png"></p>
                    <div class="overlay">
                        <p class="overlay-tittle">APOIAR</p>
                        <p class="dobra-5-content">Apoiar a liberdade de associação e o reconhecimento efetivo do direito à negociação coletiva.</p>
                        
                        <p class="overlay-tittle">ELIMINAR</p>
                        <p class="dobra-5-content">A eliminação de todas as formas de trabalho forçado ou compulsório.</p>
                        
                        <p class="overlay-tittle">ERRADICAR</p>
                        <p class="dobra-5-content">A abolição efetiva do trabalho infantil.</p>
                        
                        <p class="overlay-tittle">ESTIMULAR</p>
                        <p class="dobra-5-content">Eliminar a discriminação no emprego.</p>
                    </div>
                </div>
                
            	<div class="box-interna">
                	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-232.jpg">
                    <p class="btn-img-interno">MEIO AMBIENTE <img class="seta-interna" style="margin-left: 82px;" src="https://detronicenergia.com/wp-content/uploads/2022/12/Arrow-1.png"></p>
                    <div class="overlay">
                        <p class="overlay-tittle">PREVENIR</p>
                        <p class="dobra-5-content">Apoiar uma abordagem preventiva aos desafios ambientais.</p>
                        
                        <p class="overlay-tittle">DESENVOLVER</p>
                        <p class="dobra-5-content">Desenvolver iniciativas para promover maior responsabilidade ambiental.</p>
                        
                        <p class="overlay-tittle">INCENTIVAR</p>
                        <p class="dobra-5-content">Incentivar o desenvolvimento e difusão de tecnologias ambientalmente amigáveis.</p>
                    </div>
                </div>
                
            	<div class="box-interna">
                	<img class="img-interna" src="https://detronicenergia.com/wp-content/uploads/2022/12/20-233.jpg">
                    <p class="btn-img-interno">ANTICORRUPÇÃO <img class="seta-interna" style="margin-left: 75px;" src="https://detronicenergia.com/wp-content/uploads/2022/12/Arrow-1.png"></p>
                    <div class="overlay">
                        <p class="overlay-tittle">COMBATER</p>
                        <p class="dobra-5-content">Combater a corrupção em todas as suas formas, inclusive extorsão e propina.</p>                       
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>    
    <hr class="divisor divisor-verde" style="margin-bottom:0px;">
    <div class="wrap-boxes empresa" style="padding-block:80px;padding-bottom:20px;">
    	<div class="img-empresa">
        	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Mask-group.jpg">
        </div>
        <div class="empresa-content">
        	<h2 class="dobra-title">O que dizem sobre a Detronic</h2>
            <p class="dobra-5-content">O Selo Empresa Amiga da Família reconhece publicamente as empresas estabelecidas em território nacional que se mostram comprometidas com o equilíbrio <strong>trabalho-família</strong>.</p>
            <p class="dobra-5-content">O SEAF é parte integrante do Programa de Equilíbrio Trabalho-Família, uma iniciativa do Ministério da Mulher, da Família e dos Direitos Humanos, por intermédio da Secretaria Nacional da Família.</p>
            
        </div>
    </div>
</div>
</div>
<div class="fundo-completo cinza espacamento-extra">
	<div class="dobra dobra-5 container">
	<h2 class="dobra-title" style="margin-bottom:0px;">Veja o resultado do nosso trabalho</h2>
	<p class="dobra-subtitle">
   		Energia transforma
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
                    ?> mil unidades</strong><br>de árvores plantadas por ano</div>
            	</div>
            </div>
            <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector2.png"></div>
            		<div class="content-section"style="text-align:left;"><strong class="str-verde" style="font-size: 22px;">
                    <?php 
                    $global_reducao_de_co2 = get_option('reducao_de_co2_field');
                    echo '<span class="meu-span">' . $global_reducao_de_co2 . '</span>';
                ?> mil toneladas</strong><br>de redução de CO² na atmosfera por ano</div>
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
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">                    
                <?php 
                    $global_arvores_plantadas = get_option('arvores_plantadas_field');
                    echo '<span class="meu-span">' . $global_arvores_plantadas . '</span>';
                ?>
                mil unidades</strong><br>de árvores plantadas por ano</div>
            </div>
            <div class="section-box">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector2.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">
                <?php 
                    $global_reducao_de_co2 = get_option('reducao_de_co2_field');
                    echo '<span class="meu-span">' . $global_reducao_de_co2 . '</span>';
                ?>
                mil toneladas</strong><br>de redução de CO² na atmosfera por ano</div>
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
</div>
</div>
<?php get_footer('new'); ?>