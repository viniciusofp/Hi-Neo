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

<div class="home-servicos page-section">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<h2>Marketing Digital orientado para <strong>resultados</strong></h2>
			</div>
			<div class="col-md-10">
				<p class="lead">Neste exato momento, milhões de pessoas estão na internet buscando respostas, soluções para resolver problemas ou realizar sonhos. Seja encontrado, converse com elas e venda!</p>
				<div class="divider bg-dark mb-0"></div>
			</div>
		</div>
		<div class="row inbound item-servico rellax" data-rellax-speed="-1" data-rellax-percentage="0.1">
			<div class="col-lg-6 align-self-center">
				<div class="meta transparent">
					<h3 class="color-red"><strong>Inbound Marketing</strong></h3>
					<p class="lead">Vivamus congue lacinia purus, ac dapibus magna. Duis tempus enim quis aliquet elementum. Aenean at enim sapien lacinia purus, ac dapibus magna. Duis tempus enim quis aliquet elementum. Aenean at enim sapien.</p>
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<img id="inboundimg" data-img="<?php echo get_template_directory_uri(); ?>/img/inbound.jpg" alt="">
			</div>
		</div>
		<div class="row links item-servico rellax" data-rellax-speed="-1" data-rellax-percentage="0.2">
			<div class="col-lg-6 align-self-center order-2 order-lg-1">
				<img id="linksimg" data-img="<?php echo get_template_directory_uri(); ?>/img/links.jpg" alt="">
			</div>
			<div class="col-lg-6 align-self-center order-1 order-lg-2">
				<div class="meta transparent">
					<h3 class="color-orange"><strong>Links Patrocinados</strong></h3>
					<p class="lead">Vivamus congue lacinia purus, ac dapibus magna. Aenean at enim sapien. Vivamus congue lacinia purus, ac dapibus magna. Duis tempus enim quis aliquet elementum. Aenean at enim sapien.</p>
				</div>
			</div>
		</div>
		<div class="row automacao item-servico rellax" data-rellax-speed="-1" data-rellax-percentage="0.3">
			<div class="col-lg-6 align-self-center">
				<div class="meta transparent">
					<h3 class="color-purple"><strong>Automação de Marketing e Vendas</strong></h3>
					<p class="lead">Vivamus congue lacinia purus, ac dapibus magna. Aenean at enim sapien. Vivamus congue lacinia purus, ac dapibus magna. Duis tempus enim quis aliquet elementum. Aenean at enim sapien.</p>
				</div>
			</div>
			<div class="col-lg-6 align-self-center">
				<img id="automacaoimg" data-img="<?php echo get_template_directory_uri(); ?>/img/automacao.jpg" alt="">
			</div>
		</div>
	</div>
</div>


<div class="py-1 home-clientes text-center">
	<div class="container">
		<div class="row">
			<div class="col-12 align-self-center">
				<div id="carouselClientes" class="carousel carousel-fade slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <h3>Vivamus congue lacinia purus, ac dapibus magna. Duis tempus enim quis aliquet elementum. Aenean at enim sapien.</h3>
				      <div class="author">
				      	<img src="<?php echo get_template_directory_uri() ?>/img/groupack-logo.png" alt="">
				      	<p><strong>Mikhail Tal</strong><br>CEO of Riga</p>
				      </div>
				    </div>
				    <div class="carousel-item ">
				      <h3>Aenean at enim sapien lacinia purus, ac dapibus magna. Duis tempus enim quis aliquet elementum.</h3>
				      <div class="author">
				      	<img src="<?php echo get_template_directory_uri() ?>/img/groupack-logo.png" alt="">
				      	<p><strong>Paul Morphy</strong><br>CEO of Riga</p>
				      </div>
				    </div>
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


<div class="home-blog page-section">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-md-12">
				<h3>Aqui embaixo tem um <strong>blog</strong></h3>
				<p>Sed ac felis mollis, convallis est et, maximus arcu.</p>
				<div class="divider bg-dark"></div>
			</div>
		</div>
		<div class="row">
			<?php $i = 0; while ($i < 3 ) : ?>
			<div class="col-md-4">
				<a href="#">
					<div class="blog-item" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/Typewriter.jpg');">
						<div class="meta">
							<h4>Aqui é o título de alguma notícia</h4>
							<p><small>10 de dezembro de 2018</small></p>
						</div>
					</div>
				</a>
			</div>		
			<?php $i++; endwhile; ?>
			<div class="col-12 pt-5 text-center">
				<button class="btn btn-primary">Leia mais</button>
			</div>
		</div>
	</div>
</div>

<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<script>
	window.addEventListener('load', function () {

		$('#inboundimg').attr('src', $('#inboundimg').attr('data-img'))
		$('#linksimg').attr('src', $('#linksimg').attr('data-img'))
		$('#automacaoimg').attr('src', $('#automacaoimg').attr('data-img'))

		var wayinbound = $('.inbound').waypoint(function(direction) {
		 	$('#inboundimg').addClass("animated fadeInRight");
		 	$('.inbound .meta').addClass("animated fadeIn");
		}, {
		  offset: '60%'
		})
		var waylinks = $('.links').waypoint(function(direction) {

		 	$('#linksimg').addClass("animated fadeInLeft");
		 	$('#linksimg').attr("animated fadeInLeft");
		 	$('.links .meta').addClass("animated fadeIn");
		}, {
		  offset: '60%'
		})
		var wayautomacao = $('.automacao').waypoint(function(direction) {
		 	$('#automacaoimg').addClass("animated fadeInRight");
		 	$('.automacao .meta').addClass("animated fadeIn");
		}, {
		  offset: '60%'
		})


var myVar = setInterval(myTimer, 1200);

function myTimer() {
	$('#mainCta').toggleClass('animated pulse');
}


	});
</script>
<?php
get_footer();
