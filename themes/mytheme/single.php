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
				<p class="lead"><?php the_field('linha_fina'); ?></p>
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

					<div class="share text-center pb-3">
						<p><strong>Compartilhe nas redes sociais</strong></p>
						<?php echo get_template_part('template-parts/content', 'socialshare') ?>
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

<div class="pt-1 pb-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<h3>Mais posts</h3>
				<div class="divider bg-dark"></div>
			</div>
		</div>
		<div class="row">
			<?php $i = 0; while ($i < 3 ) : ?>
			<div class="col-md-4">
				<a href="#">
					<div class="blog-item" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/Typewriter.jpg');">
						<div class="blog-meta">
							<h4 class="title">Aqui é o título de alguma notícia</h4>
							<p><small>10 de dezembro de 2018</small></p>
						</div>
					</div>
				</a>
			</div>		
			<?php $i++; endwhile; ?>
			<div class="col-12 pt-5 text-center">
				<button class="btn btn-primary">Ver todos</button>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif ?>



<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
