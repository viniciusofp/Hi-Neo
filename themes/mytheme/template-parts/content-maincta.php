<div class="queromaisinformacoes">
	<div class="container">
		<div class="row rellax" data-rellax-speed="-4" data-rellax-percentage="0.5">
			<div class="col-12 col-lg-6 align-self-center">
				<h2>Quer uma agência digital para fazer sua área de marketing e sua força de vendas <strong>trabalharem juntas e explodirem em vendas?</strong></h2>
			</div>
			<div class="col-12 col-lg-6 align-self-end">
				<form action="">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Seu nome">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Seu melhor e-mail">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Seu telefone">
					</div>
					<button id="mainCta" class="btn btn-lg btn-outline-orange w-100 mt-3 mb-3">Quero aumentar meus resultados</button>

				</form>
			</div>
<!-- 			<div class="col-12 align-self-center pt-4">
				<button class="btn btn-lg btn-outline-orange w-100">Quero aumentar meus resultados</button>
			</div> -->
		</div>
	</div>
</div>
<script>
	window.addEventListener('load', function () {
  	$('.queromaisinformacoes').waypoint(function(direction) {
			if (direction == "down") {
		 	 $('.queromaisinformacoes .col-12').addClass('unBlur');
			} else {
		 	 $('.queromaisinformacoes .col-12').removeClass('unBlur');
			}
		}, {
		  offset: '80%'
		})
	});
</script>