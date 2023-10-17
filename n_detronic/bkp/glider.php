<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="glider.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/glider-css.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Glider</title>
</head>
<body>
<div class="glider-contain multiple">
    <button class="glider-prev">
        <
    </button>

    <div class="glider">
        <a href="https://coleguium.com.br/">
        <img src="icons/parc/coleguium.png" alt="detronic" style="width: 250px !important; margin-left: 20px;">
        </a>

        <a href="https://ensinoelite.com.br/">
            <img src="icons/parc/elite.png" alt="detronic" style="width: 250px !important; margin-left: 20px;">
        </a>

        <a href="https://www.laboratoriocarloschagas.com.br/">
            <img src="icons/parc/lab.png" alt="detronic" style="width: 250px !important; margin-left: 20px;">
        </a>

        <a href="https://www.pmssistemas.com.br/">
            <img src="icons/parc/pms.png" alt="detronic" style="width: 250px !important; margin-left: 20px;">
        </a>

        <a href="https://seusindico.net.br/">
            <img src="icons/parc/seu_sindico.png" alt="detronic" style="width: 250px !important; margin-left: 20px;">
        </a>
        <a href="https://www.detronicenergia.com/">
            <img src="icons/parc/sindicon.png" alt="detronic" style="width: 250px !important; margin-left: 20px;">
        </a>


    </div>

    <button class="glider-next">></button>

</div>


<script src="glider.min.js"></script>

<script>
    new Glider(document.querySelector('.glider'), {
        slidesToShow: 1,
        draggable: true,
        dots: '#dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        }
    })
</script>
</body>
</html>