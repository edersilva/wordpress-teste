<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package your-theme
 */

?>


<div class="row row-cols-1 row-cols-md-3">
			<?php
				$loop = new WP_Query( array( 'post_type' => 'meus_trabalhos', 'posts_per_page' => 10 ) );

				while ( $loop->have_posts() ) : $loop->the_post();
			?>
					<div class="col s-0">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="card">
							<img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
						</a>
					</div>
				<?php endwhile; ?>
		</div>
