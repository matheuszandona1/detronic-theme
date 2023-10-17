<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"

          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">

    <link href="icon-box-slider.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="icon-box-slider.js"></script>

    <link rel="stylesheet" href="css/main.css">

    <script src="js/function.js"></script>


</head>
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
<body>

<?php include('navbar.php'); ?>


<div class="videoWrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/g3uw8RbrK3g" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div>

<div class="container hub-energia">
    <span class="energia-sub" style="padding-bottom: 30px;">
        hub de energia
    </span>
    <span class="func-sub">Entregamos soluções personalizadas para nossos Parceiros, Investidores, Empresas e para Você.</span>
    <span class="func-sub">Atuamos de forma inovadora e transformamos os problemas de mercado em soluções eficientes.</span>
    <span class="func-sub">Acreditamos que conectados somos mais fortes e muito mais rentáveis.</span>

    <div class="hover">
        <div class="zoom">
            <img src="icons/hub/icon01.png" alt="" style="width: 100px; align-self: center">
            <span class="for-zoom">para</span>
            <span class="for-what">parceiros</span>
            <a href="http://simulacao.detronicenergia.com/" class="btn-calc-5" style="text-decoration: none;">saiba mais</a>
        </div>
        <div class="zoom">
            <img src="icons/hub/icon02.png" alt="" style="width: 100px; align-self: center">
            <span class="for-zoom">para</span>
            <span class="for-what">investidores</span>
            <a href="http://simulacao.detronicenergia.com/" class="btn-calc-5" style="text-decoration: none;">saiba mais</a>
        </div>
        <div class="zoom">
            <img src="icons/pag2/icon-reducao-2.png" alt="" style="width: 100px; align-self: center">
            <span class="for-zoom">para</span>
            <span class="for-what">Empresas</span>
            <a href="http://simulacao.detronicenergia.com/" class="btn-calc-5" style="text-decoration: none;">saiba mais</a>
        </div>
    </div>
</div>


</body>
</html>
