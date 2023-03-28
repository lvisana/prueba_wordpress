
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Satisfy&family=Tiro+Devanagari+Hindi:ital@0;1&display=swap" rel="stylesheet">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php
        if (is_singular() && pings_open( get_queried_object() )):  ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif;?>
    <?php wp_head(); ?>
    

    <title><?php wp_title( '|', true, 'right' ); ?></title>
</head>
<body <?php body_class(); ?>>
<?php var_dump(get_theme_mod('gh_ophours_since'))  ?>
    <header class="container-fluid secondary-light p-0" <?php header_image(); ?>>
            <nav class="navbar navbar-expand-lg">
                <div class="container-xxl py-1 px-2 px-lg-5">

                        <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" 
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
                    
                    <div class="text-uppercase d-flex flex-lg-row-reverse gap-4 fw-bold">                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                         </button>
                        
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body text-end">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'header',
                                    'menu_id'        => 'primary-menu',
                                    'container'      => false,
                                    'depth'          => 1,
                                    'menu_class'     => 'navbar-nav align-items-center me-auto my-2 my-lg-0 gap-lg-4',
                                    'walker'         => new Bootstrap_NavWalker(),
                                    'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                                ) );

                                ?>
                            </div>
                        </div>
                    </div>


                </div>
            </nav>

    </header>
        

