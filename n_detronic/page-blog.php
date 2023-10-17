<?php
/**
 ** Template name: Blog
 **/

// Recupera o nome da página atual
$slug = basename(get_permalink());
get_header('new');

get_template_part('navbar-new');

?>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/5ad7cffc-58db-4505-966d-6efeae926a3c-loader.js" ></script>
<section id="gallery">
    <div class="blog-main">
        <span class="faq-title"><?php the_title(); ?></span>
        <span class="faq-sub"><?php the_content(); ?></span>
        <div class="container blog-container">

            <div class="row">

                <?php
                $args = array('category' => 'blog', 'numberposts' => -1);
                $page_list = get_posts($args);
                if (have_posts()) :
                    foreach ($page_list as $p) :
                        ?>


                        <div class="col-lg-4 mb-4 blog-border">
                            <div class="card h-100" id="card-back">
                                <?php echo get_the_post_thumbnail($p->ID, 'blog-thumbnail'); ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php short_title($p->post_title, 55); ?></h5>
                                    <div> <?php //short_content($p->post_content, 130); ?> </div>
                                    <div>
                                        <a class="btn btn-sm pull-right" href="<?php echo get_post_permalink($p->ID) ?>"
                                           title="<?php echo $p->post_title; ?>">Leia mais</a>
                                    </div>

                                    <!-- <a href="blog-pages/como-um-hub.php" class="btn btn-sm pull-right">Leia mais</a> -->
                                </div>
                                <!-- end /card-body -->
                            </div>
                            <!-- end /.card -->
                        </div>
                        <!-- end /.col-lg-4 -->

                    <?php endforeach; endif; ?>

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.blog-main -->

</section>
<!-- end /#gallery -->


<?php /*
                <div class="col-lg-4 mb-4 blog-border">
                    <div class="card" id="card-back">
                        <img src="icons/pag2/blog02.png"
                             alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">A EVOLUÇÃO DA
                                ENERGIA SOLAR NO
                                BRASIL.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                similique
                                repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in
                                pariatur. Incidunt repellendus praesentium quae!</p>
                            <a href="blog-pages/como-um-hub.php" class="btn btn-sm pull-right">Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card" id="card-back">
                        <img src="icons/pag2/blog03.png"
                             alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">CONHEÇA O GRUPO
                                DETRONIC.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum
                                similique
                                repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in
                                pariatur. Incidunt repellendus praesentium quae!</p>
                            <a href="blog-pages/como-um-hub.php" class="btn btn-sm pull-right">Leia mais</a>
                        </div>
                    </div>
                </div>
*/ ?>




<?php get_footer('new'); ?>