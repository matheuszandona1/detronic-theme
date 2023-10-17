<?php


get_header('new');

get_template_part('navbar-new');


if (have_posts()) : while (have_posts()) : the_post();

    ?>


    <section class="blog-page">

        <div class="blog-page">

            <div class="blog-content">

                <!-- <img src="<?php ?>" alt="" style="width:100%;"> -->

                <?php if (has_post_thumbnail()) : the_post_thumbnail('banner'); endif; ?>

                <div class="container flex-container">

                    <div class="title-style"><h1> <?php the_title(); ?></h1></div>
                    <?php the_content(); ?>


                </div>

            </div>

        </div>

    </section>


<?php endwhile; endif; ?>

<?php get_template_part('components/dobra-blog-2'); ?>

<?php get_footer('new'); ?>