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
		<nav class="navbar navbar-expand-lg" label="navbar">
			<div class="container">
				<h1 class="navbar-brand my-0 py-0 mr-1 px-3">Seu Site</h1>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
						<?php esc_html_e( '', 'your-theme' ); ?>
				</button>
				<div class="collapse navbar-collapse ml-1">
				<?php
					wp_nav_menu(
						array(

							'container'         => 'ul',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
							'theme_location'=> 'menu-1',
						)
					);
				?>
				</div>
			</div>
		</nav>
	</header>
