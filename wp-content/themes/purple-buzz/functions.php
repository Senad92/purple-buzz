<?php
/**
 * Purple Buzz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Purple_Buzz
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'purple_buzz_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function purple_buzz_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Purple Buzz, use a find and replace
		 * to change 'purple-buzz' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'purple-buzz', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'purple-buzz' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'purple_buzz_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'purple_buzz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function purple_buzz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'purple_buzz_content_width', 640 );
}
add_action( 'after_setup_theme', 'purple_buzz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function purple_buzz_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'purple-buzz' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'purple-buzz' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'purple_buzz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function purple_buzz_scripts() {
	wp_enqueue_style( 'purple-buzz-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'purple-buzz-style', 'rtl', 'replace' );

	wp_enqueue_script( 'purple-buzz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'purple_buzz_scripts' );

/**
 * Enqueue scripts and styles from Purple Buzz theme.
 */

function purple_buzz_enqueue_styles() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_register_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_register_style('boxicon-min', get_template_directory_uri() . '/assets/css/boxicon.min.css');
	wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
	wp_register_style('templatemo', get_template_directory_uri() . '/assets/css/templatemo.css');
  
	wp_enqueue_style( array('bootstrap','bootstrap-min', 'boxicon-min', 'custom', 'templatemo') );
  }
  add_action( 'wp_enqueue_scripts', 'purple_buzz_enqueue_styles' );

  function purple_buzz_enqueue_scripts() {
	wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.1', true);
	wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.1', true);
	wp_register_script('fslightbox', get_template_directory_uri() . '/assets/js/fslightbox.js', array('jquery'), '1.1', true);
	wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'), '1.1', true);
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '1.1', true);
	wp_register_script('templatemo', get_template_directory_uri() . '/assets/js/templatemo.js', array('jquery'), '1.1', true);
	wp_register_script('templatemo-min', get_template_directory_uri() . '/assets/js/templatemo.min.js', array('jquery'), '1.1', true);
  
	wp_enqueue_script( array('bootstrap-bundle','custom','fslightbox','isotope', 'templatemo', 'templatemo-min', 'jquery') );
  }
  add_action( 'wp_enqueue_scripts', 'purple_buzz_enqueue_scripts' );
  
  /**
 * Custom WP Menu - Bootstrap Navwalker
 */

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link btn-outline-primary rounded-pill px-3';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');
register_nav_menu('icon-menu', 'Icon menu');


/** FOOTER WIDGET FOR OUR COMPANY NAVIGATION **/
register_sidebar(array(
	'name'          => esc_html__('Our Company', 'purple-buzz-company-widget'),
	'id'            => 'footer-1',
	'description'   => esc_html__('Add widgets here to appear in your footer.', 'purple-buzz'),
	'before_widget' => '<div class="footer_arrow_icons">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="h4 pb-lg-3 text-light light-300">',
	'after_title'   => '</h3>',
));

/** FOOTER WIDGET FOR OUR WORKS NAVIGATION **/
register_sidebar(array(
	'name'          => esc_html__('Our Works', 'purple-buzz-works-widget'),
	'id'            => 'footer-2',
	'description'   => esc_html__('Add widgets here to appear in your footer.', 'purple-buzz'),
	'before_widget' => '<div class="footer_arrow_icons">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="h4 pb-lg-3 text-light light-300">',
	'after_title'   => '</h3>',
));

/** Replacing Wordpress logo in the admin login section with Company logo */

function purple_buzz_login_logo() { ?>
	<style type="text/css">
	#login h1 a, .login h1 a {
	background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/purple_buzz_logo.png);
    width: 320px;
    height: 49px;
    background-size: 335px 100px;
    background-repeat: no-repeat;
    padding-bottom: 30px;
	}
	</style>
	<?php }
add_action( 'login_enqueue_scripts', 'purple_buzz_login_logo' );

// ACF OPTION PAGE

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// ACF BLOCKS

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

		// Blocks used primarily in Home page

        // register a Carousel block.
        acf_register_block_type(array(
            'name'              => 'carousel',
            'title'             => __('Carousel slider'),
            'description'       => __('A custom carousel block.'),
            'render_template'   => 'template-parts/blocks/carousel-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('carousel', 'quote'),
        ));

        // register a Services block.
        acf_register_block_type(array(
            'name'              => 'services',
            'title'             => __('Services block'),
            'description'       => __('A custom services block.'),
            'render_template'   => 'template-parts/blocks/services-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('services', 'quote'),
        ));

        // register a Portfolio block.
        acf_register_block_type(array(
            'name'              => 'portfolio',
            'title'             => __('Portfolio block'),
            'description'       => __('A custom portfolio block.'),
            'render_template'   => 'template-parts/blocks/portfolio-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('portfolio', 'quote'),
        ));

        // register a Small Blue block.
        acf_register_block_type(array(
            'name'              => 'small',
            'title'             => __('Small block'),
            'description'       => __('A custom small block.'),
            'render_template'   => 'template-parts/blocks/small-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('small', 'quote'),
        ));

        // register a Content List block.
        acf_register_block_type(array(
            'name'              => 'content',
            'title'             => __('Content list block'),
            'description'       => __('A custom content block.'),
            'render_template'   => 'template-parts/blocks/content-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('content', 'quote'),
        ));

		// Blocks used primarily in About Us page

        // register a About us banner block.
        acf_register_block_type(array(
            'name'              => 'about-us',
            'title'             => __('About us banner block'),
            'description'       => __('A custom about us banner block.'),
            'render_template'   => 'template-parts/about-blocks/about-banner-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('about-us', 'quote'),
        ));

        // register a Team block.
        acf_register_block_type(array(
            'name'              => 'team',
            'title'             => __('Team block'),
            'description'       => __('A custom team block.'),
            'render_template'   => 'template-parts/about-blocks/team-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('team', 'quote'),
        ));

        // register a Partner block.
        acf_register_block_type(array(
            'name'              => 'partner',
            'title'             => __('Partner block'),
            'description'       => __('A custom partner block.'),
            'render_template'   => 'template-parts/about-blocks/partner-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('partner', 'quote'),
        ));

        // register a Chart block.
        acf_register_block_type(array(
            'name'              => 'chart',
            'title'             => __('Chart block'),
            'description'       => __('A custom chart block.'),
            'render_template'   => 'template-parts/about-blocks/chart-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('chart', 'quote'),
        ));

        // register a Banner right block.
        acf_register_block_type(array(
            'name'              => 'banner-right',
            'title'             => __('Banner right block'),
            'description'       => __('A custom banner-right block.'),
            'render_template'   => 'template-parts/about-blocks/banner-right-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('banner-right', 'quote'),
        ));

        // register a Mission & Vision block.
        acf_register_block_type(array(
            'name'              => 'mission',
            'title'             => __('Mission Vision block'),
            'description'       => __('A custom mission block.'),
            'render_template'   => 'template-parts/about-blocks/mission-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('mission', 'quote'),
        ));

        // register a Newsletter block.
        acf_register_block_type(array(
            'name'              => 'newsletter',
            'title'             => __('Newsletter block'),
            'description'       => __('A custom newsletter block.'),
            'render_template'   => 'template-parts/about-blocks/newsletter-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('newsletter', 'quote'),
        ));
    }
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

