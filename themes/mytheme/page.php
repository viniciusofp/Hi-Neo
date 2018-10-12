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
	
<div class="page-header bg-blue servicos-header text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<p>Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
			</div>
		</div>
	</div>
</div>



<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
