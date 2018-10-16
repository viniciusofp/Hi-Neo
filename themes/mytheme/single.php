<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tema_por_viniciusofp
 */

get_header();

if (have_posts()): while(have_posts()): the_post();

?>
	
<div class="page-header bg-blue text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<p class="lead">Photoshop is what many digital artists, photographers, graphic designers, and even some web developers have in common. What sets us apart is how we use the tool. In this tutorial, Yoanna Victorova shares her most often used Photoshop shortcuts and a few key parts of her creative process.</p>
			</div>
		</div>
	</div>
</div>
<div class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 post-content pb-5">
				<?php the_content(); ?>
			</div>

			<div class="col-lg-4 post-sidebar">
				<div class="sticky-top" style="top: 100px">

					<div class="share text-center color-blue pb-3">
						<p><strong>Compartilhe nas redes sociais</strong></p>
						<ul class="list-inline">
							<li class="list-inline-item"><a href=""><i class="h3 fab fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="h3 fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="h3 fab fa-whatsapp"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="h3 fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="h3 fab fa-google-plus"></i></a></li>
							<li class="list-inline-item"><a href=""><i class="h3 fab fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="newsletter">
						<div class="form">
							<div class="form-group">
								<input type="text" class="form-control email" placeholder="Seu melhor e-mail"></input>
							</div>
							<button class="btn btn-outline-primary w-100">Assinar Newsletter</button>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php endwhile; endif ?>



<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
