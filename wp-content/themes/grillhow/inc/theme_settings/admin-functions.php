<?php
function grillhow_theme_setup() {

    // Adds <title> tag support
    add_theme_support( 'title-tag' ); 
    
    $defaults = array(
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'Grill How', 'Grill How Logo' ),
		'unlink-homepage-logo' => true, 
	);
    add_theme_support( 'custom-logo', $defaults );

	register_nav_menus( array(
		'header'   => esc_html__( 'Display this menu in Header', 'ls_grillhow' ),
		'footer'   => esc_html__( 'Display this menu in Footer', 'ls_grillhow' ),
	) );
}

add_action( 'after_setup_theme', 'grillhow_theme_setup');
function grillhow_add_admin_page() {
    add_menu_page('Grill How Theme Options', 'Grill How',
                'manage_options', 'lulu_grill', 'grillhow_theme_create_page',
                get_template_directory_uri(  ) . '/img/icon-admin.png', 110); 

	add_action( 'admin_init', 'grillhow_custom_settings' );
	
}

add_action( 'admin_menu', 'grillhow_add_admin_page' );

function grillhow_custom_settings() {
	register_setting( 'register_grillhow_options', 'color' );
}

function mw_enqueue_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'script', plugins_url('script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}

add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );

function grillhow_theme_create_page() {
    require_once(get_template_directory(  ) . '/inc/templates/admin/admin-page.php');
}

function grillhow_customize_register( $wp_customize ) {

	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! STANDARD COLORS

	$wp_customize->add_setting('gh_link_color', array(
		'default' => '#010001',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('gh_btn_color', array(
		'default' => '#DD012A',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('gh_btn_hover_color', array(
		'default' => '#a81832',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('gh_standard_colors', array(
		'title' => __('Standard Colors', 'Grill How'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gh_link_color_control', array(
		'label' => __('Link Color', 'Grill How'),
		'section' => 'gh_standard_colors',
		'settings' => 'gh_link_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gh_btn_color_control', array(
		'label' => __('Button Color', 'Grill How'),
		'section' => 'gh_standard_colors',
		'settings' => 'gh_btn_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gh_btn_hover_color_control', array(
		'label' => __('Button Hover Color', 'Grill How'),
		'section' => 'gh_standard_colors',
		'settings' => 'gh_btn_hover_color',
	) ) );


	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! CONTACT INFO

	$wp_customize->add_setting('gh_address_one');
	
	$wp_customize->add_setting('gh_address_two');

	$wp_customize->add_setting('gh_email_one');
	
	$wp_customize->add_setting('gh_email_two');

	$wp_customize->add_setting('gh_phone_one');
	
	$wp_customize->add_setting('gh_phone_two');

	$wp_customize->add_section('gh_contact_info', array(
		'title' => __('Contact Info', 'Grill How'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_address_control_one', array(
		'label' => __('Address 1', 'Grill How'),
		'section' => 'gh_contact_info',
		'settings' => 'gh_address_one',
		'type' => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_address_control_two', array(
		'label' => __('Address 2', 'Grill How'),
		'section' => 'gh_contact_info',
		'settings' => 'gh_address_two',
		'type' => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_email_control_one', array(
		'label' => __('Email 1', 'Grill How'),
		'section' => 'gh_contact_info',
		'settings' => 'gh_email_one',
		'type' => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_email_control_two', array(
		'label' => __('Email 2', 'Grill How'),
		'section' => 'gh_contact_info',
		'settings' => 'gh_email_one',
		'type' => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_phone_control_one', array(
		'label' => __('Phone 1', 'Grill How'),
		'section' => 'gh_contact_info',
		'settings' => 'gh_phone_one',
		'type' => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_phone_control_two', array(
		'label' => __('Phone 2', 'Grill How'),
		'section' => 'gh_contact_info',
		'settings' => 'gh_phone_two',
		'type' => 'text',
	) ) );


	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! OPENING HOURS
	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! WEEK DAYS


	$wp_customize->add_panel('gh_ophour_panel',array(
		'title' => 'Opening Hours',
		'priority'=> 30,
	));	

	$wp_customize->add_section('gh_weekdays_section', array(
		'title' => __('Week days', 'Grill How'),
		'priority' => 10,
		'panel' => 'gh_ophour_panel',
	));

	$wp_customize->add_setting('gh_opweek_monday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_tuesday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_wednesday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_thursday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_friday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_saturday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_sunday', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('gh_opweek_days', array(
		'type' => 'option',
		'default' => true,
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_monday_control', array(
		'label' => __('Monday', 'mon'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_monday',
		'type' => 'checkbox',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_tuesday_control', array(
		'label' => __('Tuesday', 'tue'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_tuesday',
		'type' => 'checkbox',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_wednesday_control', array(
		'label' => __('Wednesday', 'wed'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_wednesday',
		'type' => 'checkbox',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_thursday_control', array(
		'label' => __('Thursday', 'thur'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_thursday',
		'type' => 'checkbox',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_friday_control', array(
		'label' => __('Friday', 'frid'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_friday',
		'type' => 'checkbox',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_saturday_control', array(
		'label' => __('Saturday', 'sat'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_saturday',
		'type' => 'checkbox',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gh_opweek_sunday_control', array(
		'label' => __('Sunday', 'sun'),
		'section' => 'gh_weekdays_section',
		'settings' => 'gh_opweek_sunday',
		'type' => 'checkbox',
	) ) );

	//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! WEEK DAYS

	$wp_customize->add_section('gh_ophours_section', array(
		'title' => __('Operating Time', 'Grill How'),
		'priority' => 10,
		'panel' => 'gh_ophour_panel',
	));

	$wp_customize->add_setting('gh_ophours_since', array(
		'default' => '9999-12-12 21:00:00',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('gh_ophours_to', array(
		'default' => '9999-12-12 21:00:00',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( new WP_Customize_Date_Time_Control( $wp_customize, 'gh_ophours_since_control', array(
		'label' => __('Since', 'Grill How'),
		'section' => 'gh_ophours_section',
		'settings' => 'gh_ophours_since',
		'include_time' => true,
		'twelve_hour_format' => true,
		'allow_past_date' => false,
	) ) );

	$wp_customize->add_control( new WP_Customize_Date_Time_Control( $wp_customize, 'gh_ophours_to_control', array(
		'label' => __('To', 'Grill How'),
		'section' => 'gh_ophours_section',
		'settings' => 'gh_ophours_to',
		'include_time' => true,
		'twelve_hour_format' => true,
		'allow_past_date' => false,
	) ) );
}

add_action('customize_register', 'grillhow_customize_register');

// Output Customize CSS
function grillhow_customize_css() { ?>

	<style type="text/css">

		a:link,
		a:visited,
        a {
			color: <?php 
				echo get_theme_mod('gh_link_color'); 
				?>;
		}

		.btn,
		.btn:link,
		.btn:visited,
		button,
        #primary-menu li:last-child {
			background-color: <?php 
				echo get_theme_mod('gh_btn_color'); 
				?>;
		}

		.btn:hover,
		button,
        #primary-menu li:last-child {
			background-color: <?php 
				echo get_theme_mod('gh_btn_hover_color'); 
				?>;
		}

	</style>

<?php 
}

add_action('wp_head', 'grillhow_customize_css');

function grillhow_register_sidebars() {
	
	register_sidebar( array(
		 'name'          => esc_html__( 'Newsletter Signup', 'ls_grillhow' ),
		 'id'            => 'newsletter',
		 'description'   => esc_html__( 'Widgets added here would appear inside a newsletter', 'ls_grillhow' ),
		 'before_widget' => '',
		 'after_widget'  => '',
		 'before_title'  => '',
		 'after_title'   => '',
	 ) );

	 register_sidebar( array(
		 'name'          => esc_html__( 'Footer Section One', 'ls_grillhow' ),
		 'id'            => 'footer-section-one',
		 'description'   => esc_html__( 'Widgets added here would appear inside the first section of the footer', 'ls_grillhow' ),
		 'before_widget' => '',
		 'after_widget'  => '',
		 'before_title'  => '',
		 'after_title'   => '',
	 ) );

	 register_sidebar( array(
		 'name'          => esc_html__( 'Footer Section Two', 'ls_grillhow' ),
		 'id'            => 'footer-section-two',
		 'description'   => esc_html__( 'Widgets added here would appear inside the second section of the footer', 'ls_grillhow' ),
		 'before_widget' => '<p id="copyright" class="d-inline">© '. date('Y') . ', '. get_bloginfo( 'name' ). '. </p>',
		 'after_widget'  => '',
		 'before_title'  => '',
		 'after_title'   => '',
	 ) );
 }

 add_action( 'widgets_init', 'grillhow_register_sidebars' );