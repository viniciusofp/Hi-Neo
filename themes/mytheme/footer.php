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

			<div class="col-md-3 align-self-center pb-4">
				<?php the_custom_logo(); ?>
			</div>
			<div class="col">
				<div class="footer-contato">
					<?php dynamic_sidebar( 'footer-contact' ); ?>
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
				
				<div class="footer-social">
					<?php dynamic_sidebar( 'footer-social' ); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="footer-credits">
					<p class="small">Hi!Neo © 2018. Desenvolvido por <a target="_blank" href="//viniciusofp.com.br"><strong>viniciusofp</strong></a>.</p>
					
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
