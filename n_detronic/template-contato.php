<?php
    /**
     ** Template name: Contato
    **/

    // Recupera o nome da pagina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body class="pagina-contato">
	
	<style>
		@media (max-width:768px){
			.box-content, .content-section, .testimonial-content, .testimonial-name, .title-noticia, .resumo-noticia{
				text-align:left;
			}
		}
	</style>
<div class="dobra dobra-1 desktop-only">	
	<?php echo do_shortcode( '[smartslider3 slider="17"]' ); ?>       		
</div>
<div class="dobra dobra-1 mobile-only">	
	<?php echo do_shortcode( '[smartslider3 slider="18"]' ); ?>       		
</div>
<div class="fundo-completo azul">
	<div class="dobra container">
		<div class="wrap-center">
        	<h2 class="dobra-title branco">Quero entrar em contato!</h2>
        </div>		
        <div class="wrap-form" >
        	<?php echo do_shortcode( '[contact-form-7 id="1229" title="Form página contato"]' ); ?>        	
        </div>
	</div>
</div>
	<div class="dobra container trabalhe">
		<div class="wrap-boxes wrap-content">
        	<div class="data-content">
            	<h2 class="dobra-title">Trabalhe conosco | Venha para a família Detronic!</h2>
            	<img class="mb-4 mb-md-5" src="https://detronicenergia.com/wp-content/uploads/2023/04/DSC08282-1-1.jpg" width="100%">
                <p class="content-p">Nossa empresa valoriza a diversidade e a inclusão, acreditando que cada pessoa traz uma perspectiva única e valiosa para nossa equipe.</p>                
                <p class="content-p">Oferecemos um ambiente de trabalho dinâmico, colaborativo e inovador, onde você pode crescer profissionalmente e contribuir com o sucesso da empresa.</p>               
                <p class="content-p mb-4 mb-md-5">Para conferir as vagas e se candidatar, <a href="https://detronic.solides.jobs/" target="_blank">acesse aqui.</a></p>                
                        
            	<div class="btn-wrap-left">
					<a class="btn-assinatura-2 btn-padrao btn-azul" href="https://detronic.solides.jobs/" target="_blank">Quero conferir as vagas<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
				</div>
            </div>
        </div>
	</div>
	<div class="dobra container blog">
		<div class="row">
			<div class="col-md-6 left">
				<h2 class="dobra-title">
					Acompanhe nosso blog
				</h2>
                <p class="content-p">Acesse para conferir conteúdos mais completos e atualizados sobre energia solar fotovoltaica.</p> 
				<div class="text-center text-md-left">
					<a class="btn-assinatura-2 btn-padrao btn-azul" href="<?php echo site_url(); ?>/blog">Blog Detronic<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>
				</div>
			</div>	
			<div class="col-md-6 d-flex justify-content-center right">
				<img src="https://detronicenergia.com/wp-content/uploads/2023/04/20-23-1.jpg">
			</div>		
		</div>
	</div>
<?php get_footer('new'); ?>