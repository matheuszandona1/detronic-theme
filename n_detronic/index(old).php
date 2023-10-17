<?php get_header(); ?>
<?php get_template_part('navbar'); ?>

<style>


    .video-container-2 {
        position: relative;
    }

    video {
        height: 555px;
        vertical-align: middle;
        width: 100%;
        object-fit: fill;
    }

    .overlay-desc {
        background: rgba(0, 0, 0, 0);
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    h1 {
        text-align: center;
    }

    main {
        margin: 0 auto;
        width: 80%;
    }

    p {
        color: white;
        font-family: 'Open Sans', sans-serif;
        font-size: 1.1rem;
        line-height: 1.7rem;
    }


</style>

<body>
<div class="video-container-2">
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo get_template_directory_uri() ?>/videos/usina.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay-desc">
        <h1 class="d10">Somos a<h1 class="d11"> Detronic Energia</h1>
    </div>
</div>

<br><br><br>

<div class="solucao">

    <div class="txt-sol-1">
        <span class="sol_1">qual é a <span class="sol-line">melhor solução</span> para você?</span>
    </div>

    <br><br>

    <div class="sol-items">

        <div class="sol-main">

            <a href="<?php echo get_bloginfo('home') ?>/reducao-de-ate-20-na-conta">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-01.png" alt="" style="width: 300px;">
			</a>

				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/infografico002.png" style="width: 250px;" title="Detronic">
			</a>

            <a href="<?php echo get_bloginfo('home'); ?>/instalacao-usina-solar">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-02.png" alt="" style="width: 300px;">
			</a>

        </div>
        <!-- end /.sol-main -->

        <a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
			<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-03.png" alt="" style="width: 250px;">
		</a>

    </div>


    <!-- end /.sol-items -->

    <div class="sol-img-mobile">

        <a href="<?php echo get_bloginfo('home'); ?>/reducao-de-ate-20-na-conta">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/detronic_botao1.png" class="sol-mobile">
        </a>

        <a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/detronic_botao2.png" class="sol-mobile">
        </a>

        <a href="<?php echo get_bloginfo('home'); ?>/instalacao-usina-solar">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/detronic_botao3.png" class="sol-mobile">
        </a>

    </div>
    <!-- end /.sol-img-mobile -->
    <br>

</div>
<!--
<a href="https://www.detronicenergia.com/area-restrita/">
    <div class="hover">
        <div class="zoom">
            <img src="<?php echo get_template_directory_uri() ?>/icons/cliente.png" alt="">
            <span class="for-zoom">área do cliente</span>
        </div>
    </div>
</a>
-->
<!-- end /.solucao -->

<?php get_footer(); ?>
