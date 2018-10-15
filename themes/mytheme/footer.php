<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tema_por_viniciusofp
 */

?>

	</div><!-- #content -->

<footer>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6">
				<div class="footer-newsletter">
					<div class="form">
						<div class="form-group">
							<input type="text" class="form-control email"></input>
						</div>
						<button class="btn btn-outline-primary w-100">Assinar Newsletter</button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-contato">
					<p>Praesent eu ex blandit augue vulputate elementum. In pellentesque ut orci ut commodo.</p>
					<p><small>Alameda Jaú, XXX - São Paulo,<br>SP +55 11 3251 3383<br>contato@hineo.com.br</small></p>
				</div>
			</div>
			<div class="col-12">
				<div class="footer-menu">
					<?php
					wp_nav_menu( array(
					    'menu'           => 'menu-1', // Do not fall back to first non-empty menu.
					) ); ?>
					
				</div>
			</div>
			<div class="col-12">
				<a href="<?php echo home_url() ?>"><img class="pb-4" src="<?php echo get_template_directory_uri() ?>/img/HiNeo-80.png" alt=""></a>
				<div class="footer-social">
					<ul class="list-inline">
						<li class="list-inline-item"><a href=""><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-12">
				<div class="footer-credits">
					<p class="small">Hi!Neo © 2018. Desenvolvido por <a href="//viniciusofp.com.br"><strong>viniciusofp</strong></a>.</p>
					
				</div>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<script>

	window.addEventListener('load', function () {
		setTimeout(function() {
	  	var rellax = new Rellax('.rellax');
		},800)
		// Select all links with hashes
		$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
	});
if ('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('<?php echo get_template_directory_uri(); ?>/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}


</script>

<?php wp_footer(); ?>

</body>
</html>
