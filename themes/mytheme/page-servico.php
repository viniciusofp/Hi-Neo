<?php
/* Template Name: Página de Serviço */
/**
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

<?php 
	$cor = get_field('cor_da_pagina');
	$color = 'color-' . $cor;
	$bgclass = 'bg-' . $cor;
	$svgfill = 'fill-' . $cor;
if (is_page('inbound-marketing')) {

	$bgimg = get_template_directory_uri() . '/img/bginbound.jpg';
} else if (is_page('links-patrocinados')) {

	$bgimg = get_template_directory_uri() . '/img/bglinks.jpg';
} else if (is_page('automacao-de-marketing-e-vendas')) {

	$bgimg = get_template_directory_uri() . '/img/bgautomacao.jpg';
} else {
	$bgimg = '';
} ?>
	
<div class="page-header <?php echo $bgclass ?> servicos-header text-center" style="background-image: url(<?php echo $bgimg ?>);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">
				<h2><?php the_title(); ?></h2>
				<p class="lead">Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
				<a href="#maincta"><button class="btn-lg btn btn-outline-light w-100">Quero mais informações</button></a>
			</div>
		</div>
	</div>
</div>
<?php if (get_field('exibir_comparacao')): ?>
	<div class="page-section servico-comparison">
	<div class="container rellax" data-rellax-speed="-3" data-rellax-percentage="0.5">
		<div class="row py-5">
			<div class="col-md-6 align-self-center text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/old.jpg" alt="">
			</div>
			<div class="col-md-6 align-self-center">
				<h3 class="<?php echo $color ?>"><strong>Velho Marketing</strong></h3>
				<p class="lead">Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-md-6 align-self-start">
				<h3 class="<?php echo $color ?>"><strong>Inbound Marketing</strong></h3>
				<p class="lead">Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
			</div>
			<div class="col-md-6 align-self-center text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/new.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<?php endif ?>


<div class="page-section pb-3">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<h2>Marketing Digital orientado para <strong>resultados</strong></h2>
			</div>
			<div class="col-md-10">
				<p class="lead">Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
				<div class="divider <?php echo $bgclass; ?> mb-0"></div>
			</div>
		</div>
		<div class="row justify-content-center pt-5">
			<?php $i = 0; while ($i < 5) : ?>
			<div class="servico-topico col-12 col-md-6 col-lg-4">
				<img class="svg <?php echo $svgfill ?>" src="<?php echo get_template_directory_uri() ?>/img/topic.svg" alt="">
				<h4 class="<?php echo $color; ?>">Tópico</h4>
				<p>Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos.</p>
			</div>
			<?php $i++; endwhile; ?>
		</div>
	</div>
</div>
<?php if (is_page('automacao-de-marketing-e-vendas')): ?>
	<div class="page-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10 text-center">
					<video controls>
						<source src="<?php echo get_template_directory_uri(); ?>/img/videovendas.mp4">
					</video>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>
<?php 
$frasebg = get_field('imagem_de_fundo');
$frase = get_field('frase_de_destaque');
 ?>
<div class="servico-frase">
	<img src="<?php echo $frasebg;  ?>" alt="" class="imgbg rellax" data-rellax-speed="-4" data-rellax-percentage="0.2">
	<div class="container">
		<div class="row">
			<div class="<?php echo $color ?> col-md-10 col-lg-8 align-self-center rellax" data-rellax-speed="-2" data-rellax-percentage="0.5">
				<?php echo $frase ?>
			</div>
		</div>
	</div>
</div>

<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<script>
window.addEventListener('load', function () {
	/*
	 * Replace all SVG images with inline SVG
	 */
	jQuery('img.svg').each(function(){
	    var $img = jQuery(this);
	    var imgID = $img.attr('id');
	    var imgClass = $img.attr('class');
	    var imgURL = $img.attr('src');

	    jQuery.get(imgURL, function(data) {
	        // Get the SVG tag, ignore the rest
	        var $svg = jQuery(data).find('svg');

	        // Add replaced image's ID to the new SVG
	        if(typeof imgID !== 'undefined') {
	            $svg = $svg.attr('id', imgID);
	        }
	        // Add replaced image's classes to the new SVG
	        if(typeof imgClass !== 'undefined') {
	            $svg = $svg.attr('class', imgClass+' replaced-svg');
	        }

	        // Remove any invalid XML tags as per http://validator.w3.org
	        $svg = $svg.removeAttr('xmlns:a');

	        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
	        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	        }

	        // Replace image with new SVG
	        $img.replaceWith($svg);

	    }, 'xml');

	});
});
</script>
<?php
get_footer();
