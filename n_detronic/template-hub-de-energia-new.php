<?php
    /**
     ** Template name: Hub de energia 2.0
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
	<?php echo do_shortcode( '[smartslider3 slider="7"]' ); ?>       		
</div>
<div class="dobra dobra-1 mobile-only">	
	<?php echo do_shortcode( '[smartslider3 slider="8"]' ); ?>       		
</div>
<div class="fundo-completo cinza">
<div class="dobra dobra-2 container" style="height: 800px;">
	
    <!--MODELO MOBILE-->
    <div class="wrap-boxes mobile-only">    	
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:88% !important;">
          <div class="carousel-inner">
            <div class="carousel-item active">
             <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-9-1.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px; font-family: 'Work sans';">Autoprodução de Energia</h3>
            	<p class="box-text">Projetos de autoprodução de energia para clientes do mercado livre, desde a análise de viabilidade técnico-econômica com objetivo de direcionar o melhor modelo de negócio, estruturação de CAPEX e OPEX, até a execução de obras de implantação de sistemas fotovoltaicos ou de armazenamento de energia.</p>
            </div>
            <a class="btn-hub-1 btn-padrao btn-azul" target="_blank" href="https://detronicenergia.com/contato/">Saiba mais com nossos especialistas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
            </div>
            
            <div class="carousel-item">
                
               <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-91-1.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px; font-family: 'Work sans';">Outras Fontes de Energia</h3>
            	<p class="box-text">Acompanhamos o desenvolvimento tecnológico e estruturamos projetos para demandas específicas com alto potencial, tais como, usinas de hidrogênio, equipamentos e sistemas híbridos para armazenamento de energia e outras aplicações on-grid e off-grid que já estão consolidadas no mercado internacional.</p>
            </div>
            <a class="btn-hub-1 btn-padrao btn-azul" target="_blank" href="https://detronicenergia.com/contato/">Saiba mais com nossos especialistas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
                
            </div>  
            
            <div class="carousel-item">              
            	
                <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-92.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px; font-family: 'Work sans';">Consultoria</h3>
            	<p class="box-text">A Detronic Energia presta consultoria técnica e comercial de todos os modelos do mercado de energia, não apenas com o intuito singular da prestação de um serviço, mas com o compromisso de encontrar soluções viáveis e desenvolver negócios.</p>
            </div>
            <a class="btn-hub-1 btn-padrao btn-azul" target="_blank" href="https://detronicenergia.com/contato/">Saiba mais com nossos especialistas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
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
    	<div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-9-1.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px; font-family: 'Work sans';">Autoprodução de Energia</h3>
            	<p class="box-text">Projetos de autoprodução de energia para clientes do mercado livre, desde a análise de viabilidade técnico-econômica com objetivo de direcionar o melhor modelo de negócio, estruturação de CAPEX e OPEX, até a execução de obras de implantação de sistemas fotovoltaicos ou de armazenamento de energia.</p>
            </div>
            <a class="btn-hub-1 btn-padrao btn-azul" href="#formulario">Saiba mais com nossos especialistas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        
        
        <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-91-1.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px;font-family: 'Work sans';">Outras Fontes de Energia</h3>
            	<p class="box-text">Acompanhamos o desenvolvimento tecnológico e estruturamos projetos para demandas específicas com alto potencial, tais como, usinas de hidrogênio, equipamentos e sistemas híbridos para armazenamento de energia e outras aplicações on-grid e off-grid que já estão consolidadas no mercado internacional.</p>
            </div>
            <a class="btn-hub-1 btn-padrao btn-azul" href="#formulario">Saiba mais com nossos especialistas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        
        
        
       <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-92.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px;font-family: 'Work sans';">Consultoria</h3>
            	<p class="box-text">A Detronic Energia presta consultoria técnica e comercial de todos os modelos do mercado de energia, não apenas com o intuito singular da prestação de um serviço, mas com o compromisso de encontrar soluções viáveis e desenvolver negócios.</p>
            </div>
            <a class="btn-hub-1 btn-padrao btn-azul" href="#formulario">Saiba mais com nossos especialistas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        
        
    </div>
    
</div>
</div>

<!-- <div class="dobra dobra-5 container">
	<h2 class="dobra-title modelo-3" style="margin-bottom:0px;  margin: auto;width: 800px;font-family: 'Work sans';">Hub de energia</h2>
	<p class="dobra-subtitle modelo-3" style="  margin: auto; width: 800px;">
   		Entenda como você e seu negócio podem participar do lucrativo mercado de energia
    </p>   
    
    <div class="wrap-video" id="video-explicativo">
    	<iframe class="video-youtube" width="800" height="415" src="https://www.youtube-nocookie.com/embed/g3uw8RbrK3g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div> -->

     <section class="form-invest hub" id="formulario">
        <h3 class="general__title text-align-center">Fale agora com nosso time de especialistas</h3>
        <p class="general__desc text-align-center">
        Entenda mais sobre as soluções customizadas da Detronic Energia através do nosso time técnico. 
        </p>
        <form name="formulario-hub-de-energia" action="https://detronicenergia.com/obrigado/" class="form-invest__form" >
            <div class="form-invest__form-input">
                <input type="text" placeholder="Nome">
            </div>
            <div class="form-invest__form-input">
                <input type="number" placeholder="Telefone">
            </div>
            <div class="form-invest__form-input">
                <input type="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-invest-btn">
                <button type="submit">Quero conversar</button>
            </div>
        </form>
    </section> 

<?php get_footer('new'); ?>