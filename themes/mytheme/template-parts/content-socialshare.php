<ul class="social-share list-inline">
	<li class="list-inline-item"><a class="popup-share facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink() ?>"><i class="fab fa-facebook"></i></a></li>
	<li class="list-inline-item"><a class="popup-share twitter" href="http://twitter.com/intent/tweet?text=<?php the_title() ?>&url=<?php the_permalink() ?>&via=hineomkt"><i class="fab fa-twitter"></i></a></li>
	<li class="list-inline-item"><a class="popup-share whatsapp" href="https://wa.me/?text=<?php the_title(); ?>%20-%20<?php the_permalink(); ?>" data-text="<?php the_title(); ?> - <?php the_permalink(); ?>" data-href="<?php the_permalink(); ?>" ><i class="fab fa-whatsapp"></i></a></li>
	<li class="list-inline-item"><a class="popup-share pinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&description=&media=<?php the_post_thumbnail_url() ?>"><i class="fab fa-pinterest-p"></i></a></li>
	<li class="list-inline-item"><a class="popup-share google-plus" href="http://plus.google.com/share?url=<?php the_permalink() ?>"><i class="fab fa-google-plus"></i></a></li>
	<li class="list-inline-item"><a class="popup-share linkedin" href="http://linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title() ?>"><i class="fab fa-linkedin"></i></a></li>
</ul>
<script>
window.addEventListener('load', function () {
	    jQuery('.popup-share').click(function(e) {
	        e.preventDefault();
	        window.open(jQuery(this).attr('href'), 'socialShareWindow', 'height=450, width=550, top=' + (jQuery(window).height() / 2 - 275) + ', left=' + (jQuery(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
	        return false;
	    });
	});
</script>