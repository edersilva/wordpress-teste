
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<p><small class="text-muted">Feito com amor por Tatiane Gabrielle</small></p>
					</div>

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) :
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-lg-6',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;
					?>
				</div>
			</div>
		</footer>
	</div>
	<?php
		wp_footer();
	?>
</body>
</html>
