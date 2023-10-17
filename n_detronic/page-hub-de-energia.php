<?php

    /**
      * Template Name: Hub de Energia
    **/
      get_header('new');
      get_template_part("navbar-new");
 ?>

<body style="background-color: #f2f2f2;">

<div class="reduce">
    <img src="<?php echo get_template_directory_uri() ?>/icons/fullbanner_hub_de_energia_2.jpg" style="width: 100%">
</div>

<div class="banner-02">
    <div class="banner-02-txt">
        <span class="d4">Energia Sustentável.<br>O futuro já começou.</span>
        <div class="banner-icons">
            <div class="banner-icons">
                <div class="content_img">
                    <a href="<?php echo get_bloginfo('home'); ?>/reducao-de-ate-20-na-conta">
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag3/icon-banner-01.png"
                             alt="Redução de contas de luz" style="height:50px">
                        <div>Redução de até 20% na conta</div>
                    </a>
                </div>
                <div class="content_img_2">
                    <a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag5/icon-banner-04.png"
                             style="height:50px">
                        <div>Parceiros/ Investidores</div>
                    </a>
                </div>
                <div class="content_img_3">
                    <a href="<?php echo get_bloginfo('home'); ?>/instalacao">
                        <img src="<?php echo get_template_directory_uri() ?>/icons/pag3/icon-banner-03.png"
                             style="height:50px">
                        <div>Instalação usina solar</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 */
        padding-top: 25px;
        height: 0;
    }

    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>


<div class="container hub-energia">
    <h1 class="energia-sub" style="padding-bottom: 30px;"><?php the_title(); ?></h1>
    <div class="fun-div">
    <span class="func-sub">Entregamos soluções personalizadas para nossos Parceiros, Investidores, Empresas e para Você.</span>
    <span class="func-sub">Atuamos de forma inovadora e transformamos os problemas de mercado em soluções eficientes.</span>
    <span class="func-sub">Acreditamos que conectados somos mais fortes e muito mais rentáveis.</span>
    </div>
    <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/g3uw8RbrK3g" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>

    <!--<div class="hover">
        <div class="zoom">
            <img src="<?php echo get_template_directory_uri() ?>/icons/hub/icon02.png" alt="" style="width: 100px; align-self: center">
            <span class="for-zoom">para</span>
            <span class="for-what">você</span>
            <a href="<?php echo get_bloginfo('home'); ?>/reducao-de-ate-20-na-conta" class="btn-calc-5" style="text-decoration: none;">saiba mais</a>
        </div>
        <div class="zoom">
            <img src="<?php echo get_template_directory_uri() ?>/icons/hub/icon01.png" alt="" style="width: 100px; align-self: center">
            <span class="for-zoom">para</span>
            <span class="for-what">parceiros/investidores</span>
            <a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores" class="btn-calc-5" style="text-decoration: none;">saiba mais</a>
        </div>
        <div class="zoom">
            <img src="<?php echo get_template_directory_uri() ?>/icons/pag2/icon-reducao-2.png" alt="" style="width: 100px; align-self: center">
            <span class="for-zoom">para</span>
            <span class="for-what">Empresas</span>
            <a href="<?php echo get_bloginfo('home'); ?>/instalacao-usina-solar" class="btn-calc-5" style="text-decoration: none;">saiba mais</a>
        </div>
    </div>-->
</div>

<?php get_footer('new'); ?>