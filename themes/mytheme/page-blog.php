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
				<div class="col-lg-6 col-md-5 thumbnail" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');">
					<a href="<?php the_permalink(); ?>" class="imglink">
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

	</div>
</div>
<div class="container">
	<!-- pagination here -->
	<?php if ($blogQuery->max_num_pages > 1): ?>
		<div class="row justify-content-center">
			<div class="col pagination-wrapper pb-5 mt-0">
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

<div class="blog-newsletter rellax" data-rellax-speed="-1" data-rellax-percentage="0.4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-10 col-xl-8 text-center">
				<div class="newsletter">
					<?php echo do_shortcode('[contact-form-7 id="3074" title="Formulário - Newsletter" html_id="newsletterform"]') ?>
					<script type="text/javascript">
							var wpcf7Elm = jQuery('#newsletterform').closest('.wpcf7')[0];
							wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {__ss_noform.push(['submit', null, '3e2ad501-f2b8-473b-a5b5-d2e53f4f0c48']);}, false );
					    var __ss_noform = __ss_noform || [];
					    __ss_noform.push(['baseURI', 'https://app-3QNCT37ACG.marketingautomation.services/webforms/receivePostback/MzawMDEzMbe0AAA/']);
					    __ss_noform.push(['form', 'newsletterform', '3e2ad501-f2b8-473b-a5b5-d2e53f4f0c48']);
					</script>
					<script type="text/javascript" src="https://koi-3QNCT37ACG.marketingautomation.services/client/noform.js?ver=1.24" ></script> 
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
