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
<?php if (is_page('inbound-marketing')) {
	$bgclass = 'bg-red';
} else if (is_page('links-patrocinados')) {
	$bgclass = 'bg-orange';
} else if (is_page('automacao-de-marketing-e-vendas')) {
	$bgclass = 'bg-purple';
} else {
	$bgclass = 'bg-blue';
} ?>
	
<div class="page-header <?php echo $bgclass ?> text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<p>Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
				<button class="btn-lg btn btn-outline-light">Quero mais informações</button>
			</div>
		</div>
	</div>
</div>

<?php
get_sidebar();
get_footer();
