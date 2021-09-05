<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="referrer" content="strict-origin" />
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="wrapper">
	<!-- HEADER -->
	<header class="site-header sticky-top">
		<nav class="navbar navbar-expand-lg" role="navigation">
			<div class="container">
				<a class="navbar-brand mr-2"><?php bloginfo( 'name' ); ?></a>
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
				<div class="socials d-none d-lg-block">
					<!-- Instagram -->
					<?php
						$social_instagram = get_theme_mod( 'social_instagram' ); // Get custom meta-value.
						if ( ! empty( $social_instagram ) ) :
					?>
						<a href="<?php echo $social_instagram ;?>"  target="_blank"">
							<i class="fab fa-instagram"></i>
						</a>
					<?php
						else :
						endif;
					?>
					<!-- Linkedin -->
					<?php
						$social_linkedin = get_theme_mod( 'social_linkedin' ); // Get custom meta-value.
						if ( ! empty( $social_linkedin ) ) :
					?>
						<a href="<?php echo $social_linkedin ; ?>" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					<?php
						else :
						endif;
					?>
					<!-- Github -->
					<?php
						$social_github = get_theme_mod( 'social_github' ); // Get custom meta-value.
						if ( ! empty( $social_github ) ) :
					?>
						<a href="<?php echo $social_github ; ?>" target="_blank">
							<i class="fab fa-github"></i>
						</a>
					<?php
						else :
						endif;
					?>
				</div>
			</div>

		</nav>
	</header>


	<main id="main" class="container">

			<div class="row">
				<div class="col-sm-10 m-auto col-lg-12">
