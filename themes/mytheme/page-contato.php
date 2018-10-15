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
	
<div class="contato-header">

	<video id="contato-video" autoplay muted loop>
  	<source src="<?php echo get_template_directory_uri() ?>/img/contato.mp4" type="video/mp4">
	</video>

	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2>Dá um <strong>Hi!</strong> pra gente!</h2>
				<p>Praesent eu ex blandit augue vulputate elementum. In pellentesque ut orci ut commodo.</p>
				<p><small> Alameda Jaú, XXX - São Paulo, SP <br>+55 11 3251 3383 <br>contato@hineo.com.br</small></p>
			</div>
			<div class="col-lg-7 offset-lg-1">
				<form action="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu nome">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu melhor telefone">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu melhor email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Site da sua empresa">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Melhor dia para reunião">
							</div>
						</div>
						<div class="col-12 py-2">
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="10" class="form-control">Sua mensagem</textarea>
							</div>
						</div>
						<div class="col-12">
							<button class="btn btn-outline-light w-100">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="contato-mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.9910204265675!2d-46.6532480490673!3d-23.568765984604042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce594288f284a7%3A0x43fdf5a9cf974cc0!2sHi*21Neo!5e0!3m2!1spt-BR!2sbr!4v1539618765219" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="contato-video page-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xl-8 align-self-center">
				<video controls>
					<source src="<?php echo get_template_directory_uri(); ?>/img/sobre-video.mp4">
				</video>
			</div>
			<div class="col-lg-6 col-xl-4 align-self-center">
				<p>Um dos mais valiosos serviços que uma agência de comunicação pode prestar a seus clientes é saber identificar pessoas, talentos, habilidades, ferramentas e técnicas para cada problema ou situação de mercado. E isso nunca foi tão decisivo como hoje em dia. A Hi! Neo é isso. É entender muito bem o caso para poder chegar a um diagnóstico feliz e uma execução eficaz. Uma ideia genial pode ser um vídeo, uma campanha nos mecanismos de busca na internet ou a decisão de usar o bom e velho telefone para esquentar relacionamentos. Neste mundo de tantos termos novos, tanta tecnologia, tanta automação, é importante contar com quem tem um olhar ampliado de todo processo, ciente que no final das contas quem decide é a cabeça e o coração dessa máquina fantástica chamada gente.</p>
			</div>
		</div>
	</div>
</div>


<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
