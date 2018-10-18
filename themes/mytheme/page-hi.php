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
<div class="sobre page-header bg-blue sobre-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-5">
				<?php the_content(); ?>
			</div>
			<div class="col-6 col-lg-3 offset-xl-1 align-self-start">
				<video class="video-gif"  autoplay muted loop playsinline>
  				<source src="<?php echo get_template_directory_uri(); ?>/img/edu.mp4" type="video/mp4">
				</video>
			</div>
			<div class="col-6 col-lg-3 align-self-end">
				<video class="video-gif"  autoplay muted loop playsinline>
  				<source src="<?php echo get_template_directory_uri(); ?>/img/glauco.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
</div>

<div class="sobre sobre-video page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xl-8 align-self-center">
				<video controls>
					<source src="<?php the_field('video')?>">
				</video>
			</div>
			<div class="col-lg-6 col-xl-4 align-self-center">
				<?php the_field('texto_do_video') ?>
			</div>
		</div>
	</div>
</div>


<?php endwhile; endif; ?>
<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
