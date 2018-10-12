<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tema_por_viniciusofp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="theme-color" content="#EC6D1D;">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!-- Navbar -->

	<nav id="header-nav" class="navbar fixed-top navbar-dark navbar-expand-lg">

		<div class="container">

			<?php 
				// Set logo image
				$logo = get_template_directory_uri() . '/img/HiNeo-8-branco.png';
				// Change logo color to orange if is Hi!Neo or Blog pages
				if (is_page('hi') || is_page('blog') || is_page('contato')) {
					$logo = get_template_directory_uri() . '/img/HiNeo-8-laranja.png';
				}
			?>

			<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo?>" data-alt-logo="<?php echo get_template_directory_uri(); ?>/img/HiNeo-80.png" alt="" class="my-2"></a>

		  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <i class="fas fa-bars"></i>
		  </button>

		  <!-- Menu -->
		  <?php 
		  wp_nav_menu( array(
				'theme_location'  => 'menu-1',
				'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) ); ?>
		</div> <!-- container end -->
	</nav> <!-- navbar end -->

	<script>
		window.addEventListener('load', function () {
			var hide = false;

			// Menu Collapse and Color Change scripts

			// Change to opaque menu when scroll
			var logo = $('nav.navbar .navbar-brand img').attr('src');
			var altLogo = $('nav.navbar .navbar-brand img').attr('data-alt-logo');
			$('body').waypoint(function(direction) {
				if (direction == "down") {
			 	 $('nav.navbar').addClass('whiteNav');
			 	 $('nav.navbar .navbar-brand img').attr('src', altLogo);
			 	 setTimeout(function() {
			 	 	hide = true;
			 	 }, 500);
				} else {
					if ( $('.navbar-toggler').attr('aria-expanded') == 'false')  {
				 	 $('nav.navbar').removeClass('whiteNav');
				 	 $('nav.navbar .navbar-brand img').attr('src', logo);
				 	}
				 	hide = false;
				}
			}, {
			  offset: -15
			})


			// Change mobile menu color if user is on top of the page
			$('.navbar-toggler').click(function() {
				if (hide == false) {
					if ( $('.navbar-toggler').attr('aria-expanded') == 'false')  {
						$('nav.navbar').addClass('whiteNav')
			 	 		$('nav.navbar .navbar-brand img').attr('src', altLogo);
					} else {
						$('nav.navbar').removeClass('whiteNav')
			 	 		$('nav.navbar .navbar-brand img').attr('src', logo);
					}
				}
			})

			// Hide menu when scrolling down
			var lastScrollTop = 0;
			$(window).scroll(function(event){
				if (hide) {
			   var st = $(this).scrollTop();
			   if (st > lastScrollTop){
			       $('nav.navbar').addClass('smallNav');
			   } else {
			      $('nav.navbar').removeClass('smallNav');
			   }
			   lastScrollTop = st;
				}
			});

	  var rellax = new Rellax('.rellax');
		}); //window.load
	</script>

	<div id="content" class="site-content">
