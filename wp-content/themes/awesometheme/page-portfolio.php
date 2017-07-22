<?php


/*
	Template Name: Page Portfolio
*/

get_header(); ?>

<?php

if( have_posts() ):

    while( have_posts() ): the_post(); ?>
        <h1>This is my Portfolio</h1>

        <h3><?php the_title(); ?></h3>



        <p><?php the_content(); ?></p>

        <hr>

    <?php endwhile;

endif;

?>

<?php get_footer(); ?>