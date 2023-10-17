<?php

/**
 ** Template name: Page de Construção
 **/

// Recupera o nome da pagina atual
$slug = basename(get_permalink());
get_header("new");
?>
<style>
  .construcao{
    padding: 80px 0px;
  }
  @media(max-width:480px){
    padding: 40px 0px;
  }
  .construcao__container{
    max-width: 1240px;
    padding: 0px 24px;
    margin: 0 auto;
    text-align: center;
    font-family: "Work Sans", sans-serif; 
  }
  .construcao__title{
      color: #3D3D3D;
      font-family: Work Sans;
      font-size: 40px;
      font-style: normal;
      font-weight: 500;
      line-height: normal; 
  }
  .construcao__desc{
    color: #3D3D3D;
    text-align: center;
    font-family: "Work Sans", sans-serif;
    font-size: 28px;
    font-style: normal;
    font-weight: 300;
    line-height: 56px; 
  }
</style>


<nav class="topo-celular navbar navbar-expand-lg navbar-light bg-light rounded fixed-top" aria-label="Twelfth navbar example" style="background-color:#fff !important;">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <img src="<?php echo get_template_directory_uri() ?>/icons/detronic.png" width="200" height="49" id="logo-detronic">

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">

            <ul class="navbar-nav new-navbar">

                <li class="nav-item">

                    <a class="nav-link active" aria-current="page" id="logo-nav" href="<?php echo get_bloginfo('home'); ?>">

                        <img src="<?php echo get_template_directory_uri() ?>/icons/detronic.png" width="180" height="49" style="margin-right: 30px;">

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn-home" href="<?php echo get_bloginfo('home'); ?>" id="nav-txt">Home</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn-a-detronic" href="<?php echo get_bloginfo('home'); ?>/a-detronic-energia" id="nav-txt">Detronic</a>

                </li>

<!--                  <li class="nav-item">

                    <a class="nav-link btn-hub" href="https://detronicenergia.com/investimento/" id="nav-txt">Investidores</a>

                </li>  -->
                
				<li class="nav-item">

                    <a class="nav-link btn-hub" href="<?php echo get_bloginfo('home'); ?>/assinatura-de-energia" id="nav-txt">Assinatura de Energia</a>

                </li>
                
                <li class="nav-item">

                    <a class="nav-link btn-hub" href="<?php echo get_bloginfo('home'); ?>/hub-de-energia" id="nav-txt">Hub de Energia</a>

                </li>
                
               <li class="nav-item">

                    <a class="nav-link btn-hub" href="<?php echo get_bloginfo('home'); ?>/afiliados-3" id="nav-txt">Programa de indicação</a>

                </li>  
                
                <li class="nav-item">

                    <a class="nav-link btn-hub" href="<?php echo get_bloginfo('home'); ?>/blog" id="nav-txt">Blog</a>

                </li>
                
                <li class="nav-item">

                    <a class="nav-link btn-hub" href="<?php echo get_bloginfo('home'); ?>/contato" id="nav-txt">Contato</a>

                </li>
				
				
            <a class="btn-padrao btn-azul" target="_blank" href="https://app.detronicenergia.com/admin/login">Área de Login<img class="icon-btn" src="https://detronicenergia.com/wp-content/uploads/2022/11/Arrow-2.png"></a>


            </ul>

        </div>

    </div>

</nav>
<section class="construcao">
    <div class="construcao__container">
      <h2 class="construcao__title">Página em construção</h2>
      <p class="construcao__desc">
      O site está em desenvolvimento.
      <br>
      Em breve mais informações sobre o Programa Luz do Bem
      </p>
    </div>
</section>

<?php get_footer("new"); ?>