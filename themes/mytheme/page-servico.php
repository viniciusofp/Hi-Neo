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

<?php if (is_page('inbound-marketing')) {
	$color = 'color-red';
	$bgclass = 'bg-red';
	$svgfill = 'fill-red';
	$bgimg = get_template_directory_uri() . '/img/bginbound.jpg';
} else if (is_page('links-patrocinados')) {
	$color = 'color-orange';
	$bgclass = 'bg-orange';
	$svgfill = 'fill-orange';
	$bgimg = get_template_directory_uri() . '/img/bglinks.jpg';
} else if (is_page('automacao-de-marketing-e-vendas')) {
	$color = 'color-purple';
	$bgclass = 'bg-purple';
	$svgfill = 'fill-purple';
	$bgimg = get_template_directory_uri() . '/img/bgautomacao.jpg';
} else {
	$bgclass = 'bg-blue';
	$bgimg = '';
} ?>
	
<div class="page-header <?php echo $bgclass ?> servicos-header text-center" style="background-image: url(<?php echo $bgimg ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<p>Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
				<button class="btn-lg btn btn-outline-light w-100">Quero mais informações</button>
			</div>
		</div>
	</div>
</div>
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

<div class="servico-frase">
	<img src="<?php echo get_template_directory_uri() ?>/img/orange.jpg" alt="" class="imgbg rellax" data-rellax-speed="-4" data-rellax-percentage="0.2">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-lg-8 align-self-center">
				<h1 class="<?php echo $color ?> rellax" data-rellax-speed="-2" data-rellax-percentage="0.5">Creating Custom Page Templates <strong>for Global Use</strong></h1>
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
