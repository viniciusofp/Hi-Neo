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
	
<div class="page-header bg-blue" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>

<div class="blog-posts">
	<div class="container">
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$blogArgs = array(
			'post_type' => 'post',
			'posts_per_page' => 4,
	  	'paged'          => $paged
		);
		$blogQuery = new WP_Query($blogArgs); ?>
		<?php while ( $blogQuery->have_posts() ) : $blogQuery->the_post(); ?>
			<div class="row">
				<div class="col-lg-6 col-md-5 thumbnail">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</a>
				</div>
				<div class="col-lg-6 col-md-7 blog-meta align-self-center">
					<a href="<?php the_permalink(); ?>">
						<h3 class="title"><?php the_title(); ?></h3>
					</a>
					<?php if (get_field('linha_fina')): ?>
						<p><small><?php the_field('linha_fina') ?></small></p>
					<?php else: ?>
						<?php the_excerpt(); ?>
					<?php endif ?>
					<p><small><?php echo get_the_date(); ?></small></p>
				</div>		
			</div>
				
		<?php endwhile; ?>

		<!-- pagination here -->
		<?php if ($blogQuery->max_num_pages > 1): ?>
			<div class="row justify-content-center">
				<div class="col pagination-wrapper">
					<p>Mais posts</p>
					<div class="numbers">
						<?php if (function_exists("pagination")) {
				      pagination($blogQuery->max_num_pages);
				    } ?>
				  </div>
				</div>
			</div>
		<?php endif ?>
	</div>
</div>



<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
