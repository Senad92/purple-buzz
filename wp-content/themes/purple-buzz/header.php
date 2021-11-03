<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Purple_Buzz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'purple-buzz' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- Header -->
		<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
			<div class="container d-flex justify-content-between align-items-center">
				<a class="navbar-brand h1" href="<?php echo get_home_url(); ?>">
					<i class='bx bx-buildings bx-sm text-dark'></i>
					<span class="text-dark h4">Purple</span> <span class="text-primary h4">Buzz</span>
				</a>
				<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">

				<div class="flex-fill mx-xl-5 mb-2">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark %2$s">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
					?>
					</div>
					<div class="navbar align-self-center d-flex pb_remove_li_style">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'icon-menu',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '%3$s',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
						?>
						<!-- <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
						<a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
						<a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a> -->
					</div>
				</div>
			</div>
		</nav>
		<!-- Close Header -->
	</header><!-- #masthead -->
