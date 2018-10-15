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
	
<div class="page-header bg-blue">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>This is a <strong>blog!</strong></h1>
				<p class="lead">At times, you maybe need to use margin or padding utilities to create that perfect alignment you need.</p>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="blog-newsletter">
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

<div class="blog-posts">
	<div class="container">
		<?php $i = 0; while ($i < 6 ) : ?>
			<div class="row">
				<div class="col-lg-6 col-md-5 thumbnail">
					<a href="/2018/09/27/ola-mundo/">
						<img src="<?php echo get_template_directory_uri() ?>/img/Typewriter.jpg" alt="">
					</a>
				</div>
				<div class="col-lg-6 col-md-7 blog-meta align-self-center">
					<a href="#">
						<h3 class="title">Aqui é o título de alguma notícia</h3>
					</a>
					<p>You may also swap .row for .form-row, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.</p>
					<p><small>10 de dezembro de 2018</small></p>
				</div>		
			</div>
			<?php $i++; endwhile; ?>
	</div>
</div>




<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
