<nav class="navbar navbar-expand-lg navbar-light bg-light rounded fixed-top" aria-label="Twelfth navbar example">

    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <img src="<?php echo get_template_directory_uri() ?>/icons/detronic.png" width="200" height="49" id="logo-detronic">

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link active" aria-current="page" id="logo-nav" href="<?php echo get_bloginfo('home'); ?>">

                        <img src="<?php echo get_template_directory_uri() ?>/icons/detronic.png" width="200" height="49">

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn-home" href="<?php echo get_bloginfo('home'); ?>" id="nav-txt">home</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn-a-detronic" href="<?php echo get_bloginfo('home'); ?>/a-detronic-energia" id="nav-txt">a detronic</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn-hub" href="<?php echo get_bloginfo('home'); ?>/hub-de-energia" id="nav-txt">HUB de energia</a>

                </li>

              <div class="btn-group">
				<li class="nav-item dropdown-toggle" data-toggle="dropdown" style="display:flex;align-items:center;">
				  <a class="nav-link btn-blog" href="<?=site_url();?>/blog" id="nav-txt">blog</a>
				</li>			  
                <div class="dropdown-menu">
                  <a class="dropdown-item btn-conteudos" href="<?=site_url();?>/blog/">Conteúdos</a>
                  <a class="dropdown-item btn-materiais" href="<?=site_url();?>/blog/materiais">Materiais Ricos</a>
                </div>
			  </div>
<!--                 <li class="nav-item">

                    <a class="nav-link" href="<?php echo get_bloginfo('home'); ?>/blog" id="nav-txt">blog</a>

                </li> -->

                <li class="nav-item">
					<div class="btn-group">

						<button type="button" class="btn btn-lg btn-contato dropdown-toggle" data-toggle="dropdown" style="font-family: 'Work Sans', sans-serif;
    color: #3569A2;text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
	font-size:11pt;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
}">

							contato

						</button>

						<div class="dropdown-menu">

							<a class="dropdown-item btn-trabalhe" href="https://detronic.solides.jobs/" target="_blank">Trabalhe Conosco</a>

							<a class="dropdown-item btn-fale-conosco" href="<?php echo get_bloginfo('home') ?>/contato">Entrar em Contato</a>

						</div>

					</div>
                </li>

				<li class="nav-item">
					<div class="btn-group">

						<button type="button" class="btn btn-lg btn-sol dropdown-toggle btn-solucoes" data-toggle="dropdown" style="font-family: 'Work Sans', sans-serif;
		font-weight: 700;">

							soluções

						</button>

						<div class="dropdown-menu">

							<a class="dropdown-item btn-reducao" href="<?php echo get_bloginfo('home') ?>/reducao-de-ate-15-na-conta">Redução na conta</a>

							<a class="dropdown-item btn-parceiros" href="<?php echo get_bloginfo('home') ?>/parceiros-investidores">Parceiros / Investidores</a>

							<a class="dropdown-item btn-instalacao" href="<?php echo get_bloginfo('home') ?>/instalacao-usina-solar">Instalação de Usina Solar</a>
							
							<a class="dropdown-item btn-outras-solucoes" href="<?php echo get_bloginfo('home') ?>/outras-solucoes-sustentaveis">Outras soluções em energia</a>

						</div>

					</div>
				</li>
				
				<!--
				<li class="nav-item">
					|&nbsp;&nbsp; 
					<a class="wrap wrap-main" title="Área do Cliente" href="https://www.detronicenergia.com/area-restrita/" onClick='gtag( "event", "click", { "event_category" : "Menu", "event_label" : "Área do cliente" } )'>
						<img src="<?php echo get_template_directory_uri() ?>/icons/icone_area_do_cliente-02.png">&nbsp;
						Área do Cliente
					</a>
				</li>
				-->

            </ul>

        </div>

    </div>

</nav>
