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

<?php wp_footer(); ?>

</body>
</html>
