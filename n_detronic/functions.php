<?php
show_admin_bar(false);


function enqueue_custom_scripts() {
    // Enqueue the script
    wp_enqueue_script('indexjs', get_template_directory_uri() . '/res/js/index.b642e918.js', array('jquery'), '1.0.6', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


/**
 * Post Tumbnail
 **/
add_image_size('blog-thumbnail', 340, 215, true);
add_image_size('banner', 1920, 600, true);
add_image_size('medium-content', 1190, 380, true);
add_theme_support('post-thumbnails');


// Verifica se não existe nenhuma função com o nome tutsup_session_start
if ( ! function_exists( 'tutsup_session_start' ) ) {
    // Cria a função
    function tutsup_session_start() {
        // Inicia uma sessão PHP
        if ( ! session_id() ) session_start();
    }
    // Executa a ação
    add_action( 'init', 'tutsup_session_start' );
}

function short_title($title, $max)
{
    // Título ultrapassa limite de caracteres
    if (strlen($title) > $max) :
        // Cortamos o título
        $title = substr($title, 0, $max) . '...';
    endif;

    // imprimimos o título
    echo $title;
}

function short_content($content, $max)
{
    // Texto ultrapassa limite de caracteres
    if (strlen($content) > $max) :
        // Cortamos o texto
        $content = substr($content, 0, $max) . '...';
    endif;

    // Imprimimos o resultado
    echo $content;
}

// split content at the more tag and return an array
function split_content()
{

    global $more;
    $more = true;
    $content = preg_split('/<span id="more-d+"></span>/i', get_the_content('more'));
    for ($c = 0, $csize = count($content); $c < $csize; $c++) {
        $content[$c] = apply_filters('the_content', $content[$c]);
    }
    return $content;

}