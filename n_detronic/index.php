<?php get_header('new'); ?>
<?php get_template_part('navbar-new'); ?>

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


	@media only screen and (min-width: 480px) {
		.modal-dialog-body{
			width:533px;
		}
		.modal-img{
			width:100%;
		}
	}
	@media only screen and (max-width: 479px) {
		.modal-dialog-body{
			width:100%;
			height:100px;
		}
		.modal-img{
			width:95%;
		}
	}

</style>

<body style="background-color: #f2f2f2;">
<div class="video-container-2">
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo get_template_directory_uri() ?>/videos/usina.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="overlay-desc">
        <h1 class="d10">Somos a<h1 class="d11"> Detronic Energia</h1>
    </div>
</div>



<div class="solucao">

	<br><br><br>

    <div class="txt-sol-1">
        <span class="sol_1">qual é a <span class="sol-line">melhor solução</span> para você?</span>
    </div>

    <br><br>

    <div class="sol-items">
		<?php
		/*
		<div class="sol-main">

            <a href="<?php echo get_bloginfo('home') ?>/reducao-de-ate-20-na-conta">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-1.png" alt="" style="margin-top:-250px;">
			</a>

			<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/infografico_central.png" style="width: 250px;" title="Detronic">
			

            <a href="<?php echo get_bloginfo('home'); ?>/instalacao-usina-solar">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-3.png" alt="" style="margin-top:-250px;">
			</a>

        </div>
        <!-- end /.sol-main -->

		<div class="sol-main">
			<a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-4.png" alt="" style="margin-top:-30px;margin-right:80px;">
			</a>
			
			<a href="<?php echo get_bloginfo('home'); ?>/outras-solucoes-sustentaveis">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-5.png" alt="" style="margin-top:-30px;margin-left:80px;">
			</a>
		</div>
		
		*/
		?>
        <div class="sol-main">

            <a href="<?php echo get_bloginfo('home') ?>/reducao-de-ate-20-na-conta">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-info-desktop-1.png" alt="" style="width: 300px;margin-top:-250px;">
			</a>

			<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-info-desktop-2.png" style="width: 250px;" title="Detronic">
			

            <a href="<?php echo get_bloginfo('home'); ?>/instalacao-usina-solar">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-info-desktop-3.png" alt="" style="width: 300px;margin-top:-250px;">
			</a>

        </div>
        <!-- end /.sol-main -->

		<div class="sol-main">
			<a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-info-desktop-4.png" alt="" style="width: 250px;margin-top:-30px;margin-right:80px;">
			</a>
			
			<a href="<?php echo get_bloginfo('home'); ?>/outras-solucoes-sustentaveis">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/btn-info-desktop-5.png" alt="" style="width: 250px;margin-top:-30px;margin-left:80px;">
			</a>
		</div>
    </div>


	<br><br>
	
    <!-- end /.sol-items -->

    <div class="sol-img-mobile">

        <a href="<?php echo get_bloginfo('home'); ?>/reducao-de-ate-20-na-conta">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-01-novo-2.png" class="sol-mobile">
        </a>

        <a href="<?php echo get_bloginfo('home'); ?>/parceiros-investidores">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-04-novo-2.png" class="sol-mobile">
        </a>

        <a href="<?php echo get_bloginfo('home'); ?>/instalacao-usina-solar">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-03-novo-2.png" class="sol-mobile">
        </a>
	
		<a href="<?php echo get_bloginfo('home'); ?>/outras-solucoes-sustentaveis">
            <img src="<?php echo get_template_directory_uri(); ?>/icons/pag1/info-05-novo-2.png" class="sol-mobile">
        </a>
		
    </div>
    <!-- end /.sol-img-mobile -->
    <br>

</div>




<!-- Modal -->
<!--
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-dialog-body" role="document" >
		<div class="modal-content " >
			<div class="modal-header" >

				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('.modal-backdrop, .model, #exampleModal2').hide();">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="<?php // echo get_template_directory_uri() ?>/icons/banner_popup_RECESSO_Detronic.jpg" class="modal-img" >
			</div>
		</div>
	</div>
</div>
-->

<!--
<a href="https://www.detronicenergia.com/area-restrita/">
    <div class="hover">
        <div class="zoom">
            <img src="<?php //echo get_template_directory_uri() ?>/icons/cliente.png" alt="">
            <span class="for-zoom">área do cliente</span>
        </div>
    </div>
</a>
-->
<!-- end /.solucao -->


<script>
//$('#exampleModal').show(300);
//alert('asd');
var myModal = new bootstrap.Modal(document.getElementById('exampleModal2'), {})
myModal.toggle();
</script>


<?php get_footer('new'); ?>