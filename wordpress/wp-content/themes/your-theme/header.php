<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package your-theme
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>


	<!-- HEADER -->
	<header class="site-header sticky-top">
		<nav class="navbar navbar-expand-lg" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="#"><?php bloginfo( 'name' ); ?></a>
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'menu-1',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'menu',
							'menu_class'      => 'navbar-nav mr-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>
			</div>
		</nav>
	</header>
