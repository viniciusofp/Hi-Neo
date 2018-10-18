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
?>
	
<?php if (have_posts()): while(have_posts()): the_post(); ?>
<div class="contato-header">

	<video id="contato-video" autoplay muted loop>
  	<source src="<?php echo get_template_directory_uri() ?>/img/contato.mp4" type="video/mp4">
	</video>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<?php the_content(); ?>
			</div>
			<div class="col-lg-7 offset-lg-1">
				<?php get_template_part('template-parts/form', 'contato') ?>
			</div>
		</div>
	</div>
</div>
<div class="contato-mapa">
	<iframe src="<?php the_field('mapa') ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="contato-video page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xl-8 align-self-center">
				<video controls>
					<source src="<?php the_field('video') ?>">
				</video>
			</div>
			<div class="col-lg-6 col-xl-4 align-self-center">
				<?php the_field('texto_do_video') ?>
			</div>
		</div>
	</div>
</div>


<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php endwhile; endif; ?>

<?php
get_footer();
