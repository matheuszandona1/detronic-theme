<?php
    /**
     ** Template name: Página de teste
    **/

    // Recupera o nome da pagina atual
    $slug = basename(get_permalink());
    get_header('new');
    get_template_part('navbar-new');
?>
<body>

<h1>TESTE</h1>
   

<?php get_footer('new'); ?>