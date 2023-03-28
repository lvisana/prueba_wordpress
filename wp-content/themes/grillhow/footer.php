
<footer class="container-fluid p-0 ">
    <div class="secondary-light">
        <div class="container-xxl py-3 py-lg-5">
            <div id="footer-one" class="d-flex lh-sm text-uppercase px-2 py-lg-3 flex-column flex-lg-row align-items-center justify-content-between gap-3">
                <div class="logo">
                <a class="nav-link" href="<?php echo esc_url( home_url( '/', 'https' ) ); ?>" 
                        title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
                        rel="home">
                            
                            <?php if( has_custom_logo() ):  ?>
                                <?php 

                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    $custom_logo_url = $custom_logo_data[0];
                                ?>
                                    <div class="logo"><img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                                        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>
                                    </div>

                                <?php elseif(null !== get_bloginfo('name')): ?>
                                    <h1 class="tertiary-font"><?php echo bloginfo( 'name' ); ?></h1>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() . '/img/logotype.png' ?>" alt="Grill How" />
                                <?php endif; ?>
                        </a>
                </div>
                <?php dynamic_sidebar( 'footer-section-one' ); ?>
            </div>

        </div>
        <hr>

        <div class="text-center pb-5 pt-2 primary-font primary-font fs-7" id="footer-two">
            <?php dynamic_sidebar( 'footer-section-two' ); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>