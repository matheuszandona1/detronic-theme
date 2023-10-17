<?php
    /**
     ** Template name: Form parceiros
    **/

    // Recupera o nome da pÃ¡gina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body style="background-color: #f2f2f2;">

<div class="form-parc">
    <div class="form-txt-parc">
        <span style=" color: #56BC79 ; ">quero entrar<br></span><span> em contato!</span>
        <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/img-economizar_2.png" alt="" style="width: 600px;">
    </div>
	<div class="form-contato">
		<?php echo do_shortcode( '[contact-form-7 id="372" title="Contato"]' ); ?>
	</div>
<!-- <iframe name="iframe_formex_lahar" width="40%" height="950px" frameborder="0" style="background: none; border: none;" allowtransparency="true" src="https://forms.lahar.com.br/formularios-externos/acessa/contato-sC7Z38gAGLt6oZVSsO1ioeKy9cm5FZAVi0K2RWoIdx">Seu navegador não possui suporte para iframes.</iframe> -->
    </div>
   

<?php get_footer('new'); ?>