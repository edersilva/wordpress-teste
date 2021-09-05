<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="wrapper">
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


	<main id="main" class="container">

			<div class="row">
				<div class="col-sm-10 m-auto col-md-12">
