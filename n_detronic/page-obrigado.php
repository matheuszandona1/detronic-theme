<?php

/**
 * Template Name: Obrigado
 **/
get_header('new');
get_template_part("navbar-new");
?>

<body onload="load()" class="page-obrigado" style="background-color: #FFF;">

<div class="energia container" style="background-color: #FFF;">
    <div class="energia1 row align-items-center justify-content-between">
        <div class="energia-text col-md-6">
            <h1 class="energia-title">Obrigado</h1>
            <p class="energia-txt py-md-5 py-3">
                Agradecemos sua mensagem. <br>
				Nosso time ira entrar em contato com você.
            </p>
			<a href="https://detronicenergia.com/blog" class="btn">Acesse nosso blog</a>
        </div>

        <div class="imagem col-md-5">
				<img src="https://detronicenergia.com/wp-content/uploads/2022/06/Vector-22.png">
        </div>
    </div>

</div>

<?php get_footer('new'); ?>