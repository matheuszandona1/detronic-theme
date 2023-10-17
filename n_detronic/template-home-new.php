<?php
    /**
     ** Template name: Home 2.0
    **/

    // Recupera o nome da pagina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body>
<div class="dobra dobra-1 desktop-only">	
	<?php echo do_shortcode( '[smartslider3 slider="4"]' ); ?> 		
</div>
<div class="dobra dobra-1 mobile-only">	
<?php echo do_shortcode( '[smartslider3 slider="5"]' ); ?> 	    		
</div>
<div class="fundo-completo cinza">
<div class="dobra dobra-2 container" style="height: 800px;">
	<h2 class="dobra-title" style="margin-bottom:0px; font-family: 'Work sans'; " id="saiba-mais">Energia para transformar</h2>
    <p class="dobra-subtitle">
   		Soluções Detronic Energia
    </p>
    <!--MODELO MOBILE-->
    <div class="wrap-boxes mobile-only">    	
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:88% !important;">
          <div class="carousel-inner">
            <div class="carousel-item active">
             <div class="box box-3">
        		<div class="icon">
            		<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-9.jpg">
           		</div>
            	<div class="box-content">
            		<h3 class="dobra-title" style="margin-bottom:0px;font-size: 24px; font-family: 'Work sans'; text-align:left;">Usinas de Energia</h3>
            		<p class="box-text">Adquira ativos de energia fotovoltaica e participe de um dos mercados que mais cresce no Brasil. </p>
           		</div>
            	<a class="btn-home-1 btn-padrao btn-azul" style="font-size: 14px; text-align:left;" target="_blank" href="<?php echo site_url(); ?>/contato">Entre em contato<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        		</div>
            </div>
            
            <div class="carousel-item">
                
                <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/detronic-imagens-assinatura.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 24px; font-family: 'Work sans'; text-align:left;">Plano de Assinatura de Energia </h3>
            	<p class="box-text" style="text-align:left;">Reduza sua conta de energia sem investimentos, de forma ágil e descomplicada.</p>
            </div>
            <a class="btn-home-1 btn-padrao btn-azul" style="font-size: 14px; text-align:left;" target="_blank" href="https://detronicenergia.com/assinatura-de-energia">Saiba mais<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
                
            </div>  
            
            <div class="carousel-item">              
            	
                <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/detronic-imagens-hub.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 24px; font-family: 'Work sans'; text-align:left;">Hub de Energia</h3>
            	<p class="box-text">Ecossistema criado para conectar todos os players de mercado verticalizando entregas desde autoprodução, usinas híbridas, PPA’s, Full EPC…</p>
            </div>
            <a class="btn-home-1 btn-padrao btn-azul" style="font-size: 14px;text-align:left;" target="_blank" href="https://detronicenergia.com/hub-de-energia">Saiba mais<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
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
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/Rectangle-9.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px;font-family: 'Work sans';">Usinas de Energia</h3>
            	<p class="box-text">Adquira ativos de energia fotovoltaica e participe de um dos mercados que mais cresce no Brasil.</p>
            </div>
            <a class="btn-home-1 btn-padrao btn-azul" target="_blank" href="<?php echo site_url(); ?>/contato">Entre em contato<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        
        
        <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/detronic-imagens-assinatura.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px;font-family: 'Work sans';">Plano de Assinatura de Energia </h3>
            	<p class="box-text">Reduza sua conta de energia sem investimentos, de forma ágil e descomplicada.</p>
            </div>
            <a class="btn-home-1 btn-padrao btn-azul" target="_blank" href="https://detronicenergia.com/assinatura-de-energia">Saiba mais<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        
        
        
       <div class="box box-3">
        	<div class="icon">
            	<img src="https://detronicenergia.com/wp-content/uploads/2022/12/detronic-imagens-hub.jpg">
            </div>
            <div class="box-content">
            	<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px; font-family: 'Work sans';">Hub de Energia</h3>
            	<p class="box-text">Ecossistema criado para conectar todos os players de mercado verticalizando entregas desde autoprodução, usinas híbridas, PPA’s, Full EPC…</p>
            </div>
            <a class="btn-home-1 btn-padrao btn-azul" target="_blank" href="https://detronicenergia.com/hub-de-energia">Saiba mais<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        
        
    </div>
    
</div>
</div>

<div class="dobra dobra-5 container">
	<h2 class="dobra-title" style="font-family: 'Work sans';" >Seja um parceiro Detronic </h2>
    <div class="wrap-boxes modelo-2" style="margin-bottom: 50px;">
    	<div class="section-box" style="width:100%;background-color:#F8F8F8;border:none;display: block; padding: 22px;">
        		<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px;padding-inline: 0px; font-family: 'Work sans';">Programa de Indicação</h3>
            	<div class="content-section">Aumente sua economia com o Programa Indicação Premiada. Indique seus amigos e ganhe R$25 de desconto na fatura Detronic a cada indicado que assinar energia.</div>
                <a class="btn-home-2 btn-padrao btn-azul" href="https://detronicenergia.com/afiliados-3/" style="display: inline-block;margin-top: 30px;" target="_blank">Saiba mais<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>
        <div class="section-box" style="width:100%;background-color:#F8F8F8;border:none;display: block; padding: 22px;">
        		<h3 class="dobra-title" style="margin-bottom:0px;font-size: 26px;padding-inline: 0px;font-family: 'Work sans';">Parceiros Detronic</h3>
            	<div class="content-section">Empresas de médio e grande porte podem agregar mais um produto ao seu portfólio e receber uma receita acessória recorrente.</div>
                <a class="btn-home-3 btn-padrao btn-azul" target="_blank" href="https://detronicenergia.com/contato/" style="display: inline-block;margin-top: 30px;">Cadastre-se<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
        </div>    
    </div>
	<h2 class="dobra-title" style="margin-bottom:0px;font-family: 'Work sans';">Não é só economizar. Repense sua forma de consumir energia.</h2>
	<p class="dobra-subtitle">
   		Nosso trabalho é pensar o futuro. Convidamos você a fazer parte dessa transformação.
    </p>
    <!--MODELO MOBILE--> 
    <!--<div class="wrap-boxes mobile-only">
    
    	<div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-18.png"></div>
            		<div class="content-section"><strong class="str-verde" style="font-size: 22px;">949 mil reais</strong><br>de economia mensal para nossos clientes</div>
            	</div>
            </div>
            <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector2.png"></div>
            		<div class="content-section"><strong class="str-verde" style="font-size: 22px;">6.499 mil toneladas</strong><br>de redução de CO² na atmosfera por ano</div>
            	</div>
            </div>
            <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-17.png"></div>
            		<div class="content-section"><strong class="str-verde" style="font-size: 22px;">5,27 milhões (kWh)</strong><br>de produção mensal estimada de energia das nossas usinas</div>
            	</div>
            </div>
            <div class="carousel-item">
              	<div class="section-box">
        			<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector3.png"></div>
            		<div class="content-section"><strong class="str-verde" style="font-size: 22px;">22.756 mil unidades</strong><br>de árvores plantadas por ano</div>
            	</div>
            </div>
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
    </div>-->
    
    <!--FIM MODELO MOBILE-->
    <div class="wrap-boxes modelo-2">
    	<div class="section">
        	<div class="section-box modelo-2">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-18.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;">
              <span class="meu-span"><?php echo get_field('economia'); ?></span>
               milhões reais</strong><br>de economia mensal para nossos clientes</div>
            </div>
            <div class="section-box modelo-2">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector2.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;"><span class="meu-span"><?php echo get_field('reducao_de_co2'); ?></span> mil toneladas</strong><br>de redução de CO² na atmosfera por ano</div>
            </div>
        </div>
        <div class="section">
        	<div class="section-box modelo-2">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Group-17.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;"><span class="meu-span"><?php echo get_field('producao_mensal'); ?></span> milhões (kWh)</strong><br>de produção mensal estimada de energia das nossas usinas</div>
            </div>
            <div class="section-box modelo-2">
        		<div class="icon-section"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/Vector3.png"></div>
            	<div class="content-section"><strong class="str-verde" style="font-size: 22px;"><span class="meu-span"><?php echo get_field('arvores_plantadas'); ?></span> mil unidades</strong><br>de árvores plantadas por ano</div>
            </div>
        </div>       
    </div>
    <?php
      $global_economia = get_field('economia');
      update_option('economia_field', $global_economia);

      $global_reducao_de_co2 = get_field('reducao_de_co2');
      update_option('reducao_de_co2_field', $global_reducao_de_co2);

      $global_producao_mensal = get_field('producao_mensal');
      update_option('producao_mensal_field', $global_producao_mensal);

      $global_arvores_plantadas = get_field('arvores_plantadas');
      update_option('arvores_plantadas_field', $global_arvores_plantadas);
?>
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
              <div class="logo-noticia" ><img style="height: 35px;object-fit: cover;" src="https://detronicenergia.com/wp-content/uploads/2023/06/marca-positiva-rgb-1536x864-1.png"></div>
              <p class="title-noticia" style="text-align:left;" >Appian e Detronic formam parceria para construção de 20 parques solares no Brasil</p>
              <p class="resumo-noticia" style="text-align:left;">O fundo de private equity britânico Appian Capital Advisory e a Detronic Energia formarão uma joint venture para a construção de 20 parques solares a partir do segundo trimestre deste ano</p>
              <a class="btn-padrao btn-branco" target="_blank" href="https://economia.uol.com.br/noticias/reuters/2023/06/01/appian-e-detronic-formam-parceria-para-construcao-de-20-parques-solares-no-brasil.html">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
          </div>
        </div>
        <div class="carousel-item">
            <div class="box branca" style="width: 100%;">
                <div class="logo-noticia"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/em-1.png"></div>
                <p class="title-noticia" style="text-align:left;">Chega em Minas nova tecnologia que torna a energia solar mais acessível</p>
                <p class="resumo-noticia" style="text-align:left;">Detronic Energia oferece forma inovadora de utilizar a energia solar sem precisar instalar painéis na sua residência ou no seu negócio</p>
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
    	  <div class="box branca" style="width: 100%;display: flex; flex-direction: column;">
        	  <div class="logo-noticia"><img style="height: 35px;object-fit: cover;" src="https://detronicenergia.com/wp-content/uploads/2023/06/marca-positiva-rgb-1536x864-1.png"></div>
            <p class="title-noticia">Appian e Detronic formam parceria para construção de 20 parques solares no Brasil</p>
            <p class="resumo-noticia">O fundo de private equity britânico Appian Capital Advisory e a Detronic Energia formarão uma joint venture para a construção de 20 parques solares a partir do segundo trimestre deste ano</p>
			      <a class="btn-padrao btn-branco" style="margin-top: auto; max-width:200px;" target="_blank" href="https://economia.uol.com.br/noticias/reuters/2023/06/01/appian-e-detronic-formam-parceria-para-construcao-de-20-parques-solares-no-brasil.html">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
        </div>
      <div class="box branca" style="width: 100%;display: flex; flex-direction: column;">
        	<div class="logo-noticia" style="height: 35px;"><img src="https://detronicenergia.com/wp-content/uploads/2022/11/em-1.png"></div>
            <p class="title-noticia">Chega em Minas nova tecnologia que torna a energia solar mais acessível</p>
            <p class="resumo-noticia">Detronic Energia oferece forma inovadora de utilizar a energia solar sem precisar instalar painéis na sua residência ou no seu negócio</p>
			<a class="btn-padrao btn-branco" target="_blank" style="margin-top: auto; max-width:200px;" href="https://www.em.com.br/app/noticia/patrocinado/detronic/2022/05/23/noticia-patrocinado-detronic,1368402/chega-em-minas-nova-tecnologia-que-torna-a-energia-solar-mais-acessivel.shtml">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
        </div>
        
        <div class="box branca" style="width: 100%;display: flex; flex-direction: column;">
        	<div class="logo-noticia" style="height: 35px;"><img src="https://detronicenergia.com/wp-content/uploads/2023/05/logo-canalenergia-1500x311-1.jpg"></div>
            <p class="title-noticia">Detronic Energia e Cruzeiro lançam plano de assinatura de energia renovável</p>
            <p class="resumo-noticia">Parceria proporcionará economia na conta de luz dos associados e servirá como ação educativa sobre consumo energético consciente </p>
			<a class="btn-padrao btn-branco" target="_blank" style="margin-top: auto; max-width:200px;" href="https://www.canalenergia.com.br/noticias/53247098/detronic-energia-e-cruzeiro-lancam-plano-de-assinatura-de-energia-renovavel">Leia a matéria<img class="icon-btn efeito" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2-1.png"></a>
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