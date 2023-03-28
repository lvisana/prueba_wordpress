
<article id="post-<?php the_ID() ?>">
    <header class="entry-header">
        <?php
        if (is_singular(  )) {
            the_title('<h3 class="entry-title">', '</h3>');
        } else {
            the_title('<h3 class="entry-title"><a class="entry-link" href="'. esc_url( get_permalink() ).'">', '<a/></h3>');
        }
        ?>  
    </header>

    <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('large'); // full, large, medium, custom size
        }
    ?>

        <?php
            if (is_home(  ) || is_archive(  )) :
        ?>
            <div class="entry-content">
                <?php the_excerpt(); ?>
            </div>
        <?php 
            elseif(is_single(  )) :
        ?>
            <div class="entry-content">
                <?php 
                
                the_content(); 

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ninestars'),
                    'after' => '</div>',
                ) );
                
                ?>
            </div>
        <?php 
            endif;
        ?>

</article>