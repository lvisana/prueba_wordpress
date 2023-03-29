<?php

get_header(); 


if (is_front_page() ) :
    
    get_template_part( 'inc/templates/home/hero' );
    get_template_part( 'inc/templates/home/info' );
    get_template_part( 'inc/templates/home/newsletter' );

endif;


get_footer();