<?php

// if (have_posts()) {
    //    while ( have_posts()) {
        //       the_post();
        //       get_template_part( 'inc/templates/post/content' );
        //    }
        // }



get_header(); 


get_template_part( 'inc/templates/home/hero' );

get_template_part( 'inc/templates/home/info' );

get_template_part( 'inc/templates/home/newsletter' );

get_footer();
