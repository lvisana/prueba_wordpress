<?php

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'post',
    'meta_key' => 'post_subtitle',
    'category' => 'blog'
));

if( $posts ): 

    // <section class="container-fluid p-0">
        

    foreach( $posts as $post ): 
        
        setup_postdata( $post );
        get_template_part('inc/templates/post/content');

    endforeach; 
    ?>
    
</section>

<?php 

endif; 

wp_reset_postdata();