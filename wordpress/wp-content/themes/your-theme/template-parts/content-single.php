<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="golden-bottom d-flex flex-column align-items-center">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</div>

		<?php
			if ( 'post' === get_post_type() ) :
		?>

		<?php
			endif;
		?>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<?php
			if ( has_post_thumbnail() ) :
				echo '<div class="post-thumbnail mb-2">' . get_the_post_thumbnail( get_the_ID(), 'full' ) . '</div>';
			endif;

			the_content();

			wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'your-theme' ) . '</span>', 'after' => '</div>' ) );
		?>
	</div><!-- /.entry-content -->




</article><!-- /#post-<?php the_ID(); ?> -->
