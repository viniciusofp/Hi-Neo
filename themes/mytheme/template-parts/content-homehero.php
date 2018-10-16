<div class="home-hero bg-purple">
	<video id="home-video" autoplay muted loop playsinline>
  	<source src="<?php echo get_template_directory_uri() ?>/assets/home-videobg.mp4" type="video/mp4">
	</video>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="animated fadeIn">Nosso mundo é gerar <strong>leads, relacionamentos e vendas</strong></h1>
			</div>
			<div class="col-md-6">
				<h3 class="animated fadeInUp">Cras ac aliquet odio. Donec purus tortor.</h3>
			</div>
			<div class="col-md-6">
				<div class="home-hero-cta">
					<form action="" class="animated flipInX delay-1s">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Seu melhor e-mail">
						</div>
							<button class="btn btn-outline-light">Quero aumentar meus resultados</button>
					</form>
				</div>
					
			</div>
		</div>
	</div>
</div>
<script>
	window.onload = function(e){ 
    $('.home-hero').removeClass('bg-purple');
	}
</script>