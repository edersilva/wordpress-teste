<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package your-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- Container -->
	<section class="home-section section-hero container mb-4 pb-3" id="home">
		<div class="overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/hero.png); background-position: right bottom; background-repeat: no-repeat;">
		</div>
		<div class="col-12 col-md-5">
			<div class="hero-text golden-top golden-bottom">
				<h2 class="px-1 title">Esta é minha página</h2>
				<p class="my-2">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et mi vel nulla aasw congue.
				</p>
			</div>
			<div class="mb-3">
				<a href="#" class="btn">Meu Portfolio</a>
			</div>
		</div>
		<div class="col-12 col-md-7">
		</div>
	</section>

	<!-- Sobre -->
	<section class="sobre-section container my-4 py-3 d-flex" id="about">
		<div class="col-md-5 align-self-start">
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
		<div class="col-md-6 offset-md-1">
			<div class="row">
				<div class="item col-md-6 px-2">
					<img src="<?php echo get_template_directory_uri(); ?>/svg/html5.svg"  class="icon" />
					<h3 class="title">HTML5 & CSS3</h3>
					<p class="my-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="item col-md-6 px-2">
					<img src="<?php echo get_template_directory_uri(); ?>/svg/performance.svg"  class="icon" />
					<h3 class="title">Performance</h3>
					<p class="my-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>

				<div class="item col-md-6 px-2">
					<img src="<?php echo get_template_directory_uri(); ?>/svg/mobile.svg"  class="icon" />
					<h3 class="title">Responsividade</h3>
					<p class="my-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
				<div class="item col-md-6 px-2">
					<img src="<?php echo get_template_directory_uri(); ?>/svg/rocket.svg"  class="icon" />
					<h3 class="title">Produtividade</h3>
					<p class="my-2">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Meus Trabalhos -->
	<section class="trabalho-section container my-4 py-3" id="work">
		<div class="row row-cols-1 row-cols-md-3">
			<?php
				$loop = new WP_Query( array( 'post_type' => 'meus_trabalhos', 'posts_per_page' => 10 ) );

				while ( $loop->have_posts() ) : $loop->the_post();
			?>
					<div class="col s-0">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="card">
							<img src="<?php the_post_thumbnail_url('full'); ?>" class="card-img-top" alt="...">
						</a>
					</div>
				<?php endwhile; ?>
		</div>
	</section>

	<!--  Serviços -->
	<section class="servicos-section container my-4 py-3 d-flex" id="services">
		<div class="col-md-4 px-2 align-self-start text-black">
			<p class="text-end">
				"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco"
			</p>
			<p class="text-end">
				- Tony Stark, Stark Industries
			</p>
		</div>
		<div class="col-md-4 px-2">
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
				<a href="#" class="btn d-block mt-3">Entrar em Contato</a>
			</div>

		</div>
		<div class="offset-md-4"></div>
	</section>

	<!-- opiniao -->
	<section class="opiniao-section container my-4 py-3 " id="opinion">

		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-12 px-2 text-center justify-content-center">
					<div>
						<h3 class="subtitle mb-2 pb-1">Opiniões</h3>
					</div>
					<div class="golden-bottom d-flex flex-column align-items-center">
						<h2 class="title">O quê nossos clientes têm a dizer</h2>
					</div>
				</div>
				<div class="row g-2">
					<div class="col-md-4">
						<div class="card p-3 text-center px-4">
							<div class="user-image mb-1"> <img src="<?php echo get_template_directory_uri(); ?>/img/tony.png" class="img-thumbnail"> </div>
							<div class="user-content text-black">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque"</p>
								<div class="golden-top my-2"></div>
								<h5 class="mb-0">Tony Stark, Stark Industries</h5>
							</div>

						</div>
					</div>
					<div class="col-md-4">
						<div class="card p-3 text-center px-4">
							<div class="user-image mb-1"> <img src="<?php echo get_template_directory_uri(); ?>/img/jeff.png" class="img-thumbnail"> </div>
							<div class="user-content text-black">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque"</p>
								<div class="golden-top my-2"></div>
								<h5 class="mb-0">Tony Stark, Stark Industries</h5>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card p-3 text-center px-4">
							<div class="user-image mb-1"> <img src="<?php echo get_template_directory_uri(); ?>/img/bill.png" class="img-thumbnail"> </div>
							<div class="user-content text-black">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque"</p>
								<div class="golden-top my-2"></div>
								<h5 class="mb-0">Tony Stark, Stark Industries</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Clientes -->
	<section class="clientes-section container my-4 py-3 d-flex" id="clients">
		<div class="col-md-3 align-self-start">
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
		<div class="div offset-md-2"></div>
		<div class="col-md-7 ">
			<div class="row">

				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente1.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente2.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente3.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente4.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente5.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente6.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente7.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente8.png" class="icon" />
				</div>
				<div class="item col-md-4">
					<img src="<?php echo get_template_directory_uri(); ?>/img/cliente9.png" class="icon" />
				</div>
			</div>
	</section>

	<!-- Contato -->
	<section class="contato-section container my-4 py-3 " id="contact">

		<div class="row">
			<div class="container mt-5 mb-5">
				<div class="col-12 px-2 text-center justify-content-center">
					<div>
						<h3 class="subtitle mb-2 pb-1">Contato</h3>
					</div>
					<div class="golden-bottom d-flex flex-column align-items-center">
						<h2 class="title">Entre em contato, vamos tomar um café juntos.</h2>
					</div>
				</div>
		</div>
			<div class="row">
				<div class="col-md-6 mb-3">
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
				<div class="col-md-6 mb-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/map.png" class="img-fluid" alt="">
				</div>
			</div>


		</div>
	</section>
</main>
	<!-- Footer -->
	<?php
get_sidebar();
get_footer();
