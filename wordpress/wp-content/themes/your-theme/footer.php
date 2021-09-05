
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<p><small class="text-muted">Feito com amor por Tatiane Gabrielle</small></p>
					</div>
					<div class="col-lg-6">
						<div class="socials text-end">
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
				</div>
			</div>
		</footer>
	</div>
	<?php
		wp_footer();
	?>
</body>
</html>
