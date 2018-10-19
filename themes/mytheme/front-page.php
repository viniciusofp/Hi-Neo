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


<!-- Banner principal da Home -->
<?php get_template_part('template-parts/content', 'homehero') ?>



<!-- Serviços -->
<?php
$servicos_chamada = get_field('servicos_chamada');
$servicos_linha_fina = get_field('servicos_linha_fina');
$servicos = get_field('servicos');
?>
<div class="home-servicos page-section">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<?php echo $servicos_chamada; ?>
			</div>
			<div class="col-md-10">
				<p class="lead"><?php echo $servicos_linha_fina; ?></p>
				<div class="divider bg-dark mb-0"></div>
			</div>
		</div>
	<?php if( have_rows('servicos') ):
		$count = 0;
	?>
		<?php while( have_rows('servicos') ): the_row(); $count++;?>
			<?php if ( ($count % 2) == 1): ?>
				<div class="row item-servico way-<?php echo $count ?> rellax" data-rellax-speed="-1" data-rellax-percentage="0.1">
					<div class="col-lg-6 align-self-center">
						<div class="meta transparent">
							<?php the_sub_field('texto') ?>
						</div>
					</div>
					<div class="col-lg-6 align-self-center">
						<img data-img="<?php the_sub_field('imagem')?>" alt="">
					</div>
				</div>
			<?php else: ?>
				<div class="row item-servico way-<?php echo $count ?> rellax" data-rellax-speed="-1" data-rellax-percentage="0.2">
					<div class="col-lg-6 align-self-center order-2 order-lg-1">
						<img data-img="<?php the_sub_field('imagem')?>" alt="">
					</div>
					<div class="col-lg-6 align-self-center order-1 order-lg-2">
						<div class="meta transparent">
							<?php the_sub_field('texto') ?>
						</div>
					</div>
				</div>
			<?php endif ?>
		<?php endwhile; ?>

	<?php endif; ?>
	</div>
</div>

<!-- Clientes -->
<?php if( have_rows('clientes') ):
$active = 'active';
?>
<div class="py-1 home-clientes text-center">
	<div class="container">
		<div class="row">
			<div class="col-12 align-self-center">
				<div id="carouselClientes" class="carousel carousel-fade slide" data-ride="carousel">
				  <div class="carousel-inner">
		  		
						<?php while( have_rows('clientes') ): the_row(); $count++;?>
					    <div class="carousel-item <?php echo $active ?>">
					      <h3>"<?php the_sub_field('citacao') ?>"</h3>
					      <div class="author">
					      	<img src="<?php the_sub_field('logo_da_empresa')?>" alt="">
					      	<p><strong><?php the_sub_field('nome')?></strong><br><?php the_sub_field('cargo__empresa')?></p>
					      	
					      </div>
					    </div>
						<?php
						$active = '';
						endwhile; ?>			
				  </div>
				  <a class="carousel-control-prev" href="#carouselClientes" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselClientes" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<!-- Blog -->
<div class="home-blog page-section">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<?php the_field('blog_chamada') ?>
				<p><?php the_field('blog_linha_fina') ?></p>
				<div class="divider bg-dark"></div>
			</div>
		</div>
		<div class="row">
			<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3
			);
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="col-md-4">
							<a href="<?php the_permalink(); ?>">
								<div class="blog-item" style="background-image: url(<?php the_post_thumbnail_url('medium') ?>);">
									<div class="blog-meta">
										<h4 class="title"><?php the_title(); ?></h4>
										<p><small><?php echo get_the_date() ?></small></p>
									</div>
								</div>
							</a>
						</div>	

				<?php endwhile; ?>

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			<div class="col-12 pt-5 text-center">
				<a href="<?php echo home_url('/blog') ?>"><button class="btn btn-primary">Leia mais</button></a>
			</div>
		</div>
	</div>
</div>

<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<script>
	window.addEventListener('load', function () {

		var waypoints = []
		var itemServico = jQuery('.item-servico');
		for (var i = itemServico.length; i > 0; i--) {

			jQuery('.way-' + i +' img').attr('src', jQuery('.way-' + i +' img').attr('data-img'))
			if (i % 2 == 1) {
				waypoints[i] = jQuery('.way-' + i).waypoint(function(direction) {
			 		jQuery(this.element).find('img').addClass("animated fadeInRight");
				 	jQuery(this.element).find('.meta').addClass("animated fadeIn");

				}, {
				  offset: '60%'
				})
			} else {
				waypoints[i] = jQuery('.way-' + i).waypoint(function(direction) {
			 		jQuery(this.element).find('img').addClass("animated fadeInLeft");
				 	jQuery(this.element).find('.meta').addClass("animated fadeIn");

				}, {
				  offset: '60%'
				})
			}
		}

	});
</script>





<?php
get_footer();
