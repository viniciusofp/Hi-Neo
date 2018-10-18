<?php 
$args = array(
	'pagename' => 'cta-principal',
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div id="maincta" class="queromaisinformacoes">
			<div class="container">
				<div class="row rellax" data-rellax-speed="-4" data-rellax-percentage="0.5">
					<div class="col-12 col-lg-6 align-self-center">
						<?php the_content(); ?>
					</div>
					<div class="col-12 col-lg-6 align-self-end pt-2">
						<?php
						echo do_shortcode( get_field('formulario') ); ?>
<!-- 						<form action="">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu nome">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu melhor e-mail">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Seu telefone">
							</div>
							<button id="mainCta" class="btn btn-lg btn-outline-warning w-100 mt-3 mb-3">Quero aumentar meus resultados</button>
						</form> -->
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script>
	window.addEventListener('load', function () {

		var myVar = setInterval(myTimer, 1200);

		function myTimer() {
			$('.queromaisinformacoes input.wpcf7-submit').toggleClass('animated pulse');
		}

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
<script type="text/javascript">
		var wpcf7Elm = jQuery('#mainCta').closest('.wpcf7')[0];wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {__ss_noform.push(['submit', null, '48139990-bfca-4f89-9920-f6d2699def93']);}, false );
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QNCT37ACG.marketingautomation.services/webforms/receivePostback/MzawMDEzMbe0AAA/']);
    __ss_noform.push(['form', 'mainCta' '48139990-bfca-4f89-9920-f6d2699def93']);
</script>
<script type="text/javascript" src="https://koi-3QNCT37ACG.marketingautomation.services/client/noform.js?ver=1.24" ></script>
