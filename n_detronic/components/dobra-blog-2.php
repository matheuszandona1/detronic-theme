<?php

// Recupera o nome da página atual
$slug = basename(get_permalink());
get_header();
get_template_part('navbar');

$args = array("category" => "blog", 'numberposts' => 3);
$page_list = get_posts($args);

?>
<section id="gallery" style="background-color: #D3D3D3;">

    <span class="faq-title">BLOG</span>

    <span class="faq-sub" style="text-transform: uppercase">Leia também esses conteúdos</span>

    <div class="container blog-container">

        <div class="row">

            <?php if (have_posts()) : foreach ($page_list as $p) : ?>

                <div class="col-lg-4 mb-4 blog-border">

                    <div class="card" id="card-back">

                        <?php echo get_the_post_thumbnail($p->ID, 'blog-thumbnail'); ?>

                        <div class="card-body">
                          <div><h5 class="card-title"><?php short_title($p->post_title, 60); ?></h5></div>
                            <div> <?php //short_content($p->post_content, 130); ?> </div>
                            <div>
								<?php /*<a class="btn btn-sm pull-right" href="<?php echo get_post_permalink($p->ID) ?>" title="<?php echo $p->post_title; ?>">*/ ?>
								<a class="btn-calc2" href="<?php echo get_post_permalink($p->ID) ?>" title="<?php echo $p->post_title; ?>">
									Leia mais
								</a>
							</div>

                        </div>
                        <!-- end /.card-body -->

                    </div>
                    <!-- end /#card-black -->

                </div>
                <!-- end /blog-border -->

            <?php endforeach; endif; ?>

        </div>
        <!-- end /.row -->

    </div>
    <!-- end /.blog-container -->

</section>