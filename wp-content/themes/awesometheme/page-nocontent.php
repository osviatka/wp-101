<?php

/*
	Template Name: Page No Content
*/

get_header(); ?>

<?php

if( have_posts() ):

    while( have_posts() ): the_post(); ?>


        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>



        <hr>

    <?php endwhile;

endif;

?>

<?php get_footer(); ?>