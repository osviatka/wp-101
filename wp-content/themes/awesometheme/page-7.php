<?php get_header(); ?>

    <div class="row">

        <div class="col-xs-12 col-sm-8">

            <?php

            if( have_posts() ):

                while( have_posts() ): the_post(); ?>

                    <p><?php the_content(); ?></p>
                    <hr>
                    <hr>

                <?php endwhile;

            endif;

            ?>

        </div>

        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>

<?php get_footer(); ?>