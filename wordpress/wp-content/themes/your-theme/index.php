<?php
 get_header();
?>


	<!-- Container -->
	<div class="row">
		<section class="home-section section-hero mb-2 pb-3" id="home">
			<div class="container">
				<?php
					$header_logo = get_theme_mod( 'header_logo' );
					$header_title = get_theme_mod( 'header_title' );
					$header_texto = get_theme_mod( 'header_texto' );
					$header_url = get_theme_mod( 'header_url' );
				?>
				<div class="overlay" style="background-image: url(<?php echo esc_url( $header_logo ); ?>); background-position: right bottom; background-repeat: no-repeat;">
				</div>

				<div class="col-sm-12 col-lg-5">
					<div class="hero-text golden-top golden-bottom">
						<h2 class="px-1 title"><?php echo $header_title ; ?></h2>
						<p class="my-2">
							<?php echo $header_texto ; ?>
						</p>
					</div>
					<div class="mb-3">
						<a href="<?php echo $header_url ; ?>" class="btn">Meu Portfolio</a>
					</div>
				</div>
				<div class="col-sm-12 col-lg-7">
				</div>
			</div> <!--container -->

		</section>
	</div>

	<!-- Sobre -->
	<div class="row">
		<section class="sobre-section my-4 py-3" id="about">
			<div class="row justify-content-between">
				<div class="col-sm-12 col-lg-5 align-self-start">
					<div>
						<h3 class="subtitle mb-2 pb-1">Tatiane Gabrielle</h3>
					</div>
					<div class="golden-bottom">
						<h2 class="title">Olá, é um prazer tê-lo por aqui.</h2>
					</div>
					<div>
						<p class="my-2">
							ut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
						</p>
					</div>

				</div>
				<div class="col-sm-12 col-lg-6">
					<div class="row">
						<div class="item col-lg-6 px-2">
							<img src="<?php echo get_template_directory_uri(); ?>/svg/html5.svg"  class="icon" />
							<h3 class="title">HTML5 & CSS3</h3>
							<p class="my-2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						<div class="item col-lg-6 px-2">
							<img src="<?php echo get_template_directory_uri(); ?>/svg/performance.svg"  class="icon" />
							<h3 class="title">Performance</h3>
							<p class="my-2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>

						<div class="item col-lg-6 px-2">
							<img src="<?php echo get_template_directory_uri(); ?>/svg/mobile.svg"  class="icon" />
							<h3 class="title">Responsividade</h3>
							<p class="my-2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
						<div class="item col-lg-6 px-2">
							<img src="<?php echo get_template_directory_uri(); ?>/svg/rocket.svg"  class="icon" />
							<h3 class="title">Produtividade</h3>
							<p class="my-2">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Meus Trabalhos -->
	<div class="row">
		<section class="trabalho-section my-4 py-3" id="work">
			<div class="row">
				<div class="col-10 m-auto">
					<div class="row">

						<?php
								$loop = new WP_Query( array( 'post_type' => 'meus_trabalhos', 'posts_per_page' => 10 ) );
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<div class="col-sm-10 m-auto col-lg-4 p-0 m-lg-0">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="card">
											<img src="<?php the_post_thumbnail_url('full'); ?>" class="card-img-top" alt="...">
											<div class="overlay">
												<div class="text"><i class="fas fa-search"></i></div>
											</div>
										</a>
									</div>
							<?php endwhile; ?>
					</div>
				</div>

			</div>
		</section>
	</div>

	<!--  Serviços -->
	<div class="row">
		<section class="servicos-section my-4 py-3" id="services">
			<div class="row">
				<div class="col-sm-12 col-lg-4 px-2 align-self-start text-black">
					<p class="text-end">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco"
					</p>
					<p class="text-end">
						- Tony Stark, Stark Industries
					</p>
				</div>
				<div class="col-sm-12 col-lg-4 px-2">
					<div>
						<h3 class="subtitle mb-2 pb-1">Serviços</h3>
					</div>
					<div class="golden-bottom">
						<h2 class="title">Estes são os meus serviços</h2>
					</div>
					<div class="text-black">
						<p class="my-2">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						</p>
						<p class="my-2">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
						</p>
						<a href="#contact" class="btn d-block mt-3">Entrar em Contato</a>
					</div>

				</div>

			</div>
		</section>
	</div>

	<!-- opiniao -->
	<div class="row">
		<section class="opiniao-section my-4 py-3 " id="opinion">
			<div class="row">
				<div class="mt-2 mb-2">
					<div class="row">
						<div class="col-sm-12 px-2 text-center justify-content-center">
							<div>
								<h3 class="subtitle mb-2 pb-1">Opiniões</h3>
							</div>
							<div class="golden-bottom d-flex flex-column align-items-center">
								<h2 class="title">O quê nossos clientes têm a dizer</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-lg-4">
								<div class="card text-center p-4">
									<div class="user-image mb-1">
										<img src="<?php echo get_template_directory_uri(); ?>/img/tony.png" class="img-thumbnail">
									</div>
									<div class="user-content text-black">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque"</p>
										<div class="golden-top my-2 d-flex flex-column align-items-center">
											<p class="mb-0">Tony Stark, Stark Industries</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card text-center p-4">
									<div class="user-image mb-1">
										<img src="<?php echo get_template_directory_uri(); ?>/img/jeff.png" class="img-thumbnail">
									</div>
									<div class="user-content text-black">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque"</p>
										<div class="golden-top my-2 d-flex flex-column align-items-center">
											<p class="mb-0">Jeff Bezos, Amazon Inc.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card text-center p-4">
									<div class="user-image mb-1">
										<img src="<?php echo get_template_directory_uri(); ?>/img/bill.png" class="img-thumbnail">
									</div>
									<div class="user-content text-black">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque"</p>
										<div class="golden-top my-2 d-flex flex-column align-items-center">
											<p class="mb-0">Bill Gates, Microsoft.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Clientes -->
	<div class="row">
		<section class="clientes-section my-4 py-3" id="clients">
			<div class="row justify-content-between">
				<div class="col-sm-12 col-lg-3 align-self-start ">
					<div>
						<h3 class="subtitle mb-2 pb-1">Clientes</h3>
					</div>
					<div class="golden-bottom">
						<h2 class="title">Empresas que utilizam o meu serviço.</h2>
					</div>
					<div>
						<p class="my-2">
							ut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
						</p>
					</div>
				</div>

				<div class="col-sm-10 col-lg-6 align-self-end">
						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente1.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente2.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente3.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente4.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente5.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente6.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente7.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente8.png" class="icon" />
							</div>

							<div class="col-4">
								<img src="<?php echo get_template_directory_uri(); ?>/img/cliente9.png" class="icon" />
							</div>
						</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Contato -->
	<div class="row">
		<section class="contato-section my-4 py-3 " id="contact">
			<div class="row">
				<div class="col-12 px-2 text-center justify-content-center mt-2 mb-2">
					<div>
						<h3 class="subtitle mb-2 pb-1">Contato</h3>
					</div>
					<div class="golden-bottom d-flex flex-column align-items-center">
						<h2 class="title">Entre em contato, vamos tomar um café juntos.</h2>
					</div>
				</div>
			</div>

			<div class="row justify-content-around">
				<div class="col-sm-10 col-lg-4 mb-3">
					<form>
						<div class="form-outline">
							<label class="form-label" for="nome">Nome:</label>
							<input type="text" id="nome" class="form-control" />
						</div>

						<div class="form-outline">
							<label class="form-label" for="email">E-mail:</label>
							<input type="email" id="email" class="form-control" />
						</div>

						<div class="form-outline">
							<label class="form-label" for="assunto">Assunto:</label>
							<input type="text" id="assunto" class="form-control" />
						</div>

						<div class="form-outline">
							<label class="form-label" for="mensagem">Messagem:</label>
							<textarea class="form-control" id="mensagem"></textarea>
						</div>

						<button type="submit" class="btn d-block w-100">ENVIAR MENSAGEM</button>
					</form>
				</div>
				<div class="col-sm-12 col-lg-6 mb-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/map.png" class="img-fluid" alt="">
				</div>
			</div>

			</div>
		</section>
	</div>

	<!-- Footer -->
	<?php

get_footer();
