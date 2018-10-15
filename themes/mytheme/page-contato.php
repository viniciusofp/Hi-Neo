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
	
<div class="page-header bg-blue servicos-header text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<h2>A <strong>Hi!Neo</strong> é uma experiente empresa com entusiasmo de garotos.</h2>
				<p>Um dos mais valiosos serviços que uma agência de comunicação pode prestar a seus clientes é saber identificar pessoas, talentos, habilidades, ferramentas e técnicas para cada problema ou situação de mercado. E isso nunca foi tão decisivo como hoje em dia. A Hi! Neo é isso. É entender muito bem o caso para poder chegar a um diagnóstico feliz e uma execução eficaz. Uma ideia genial pode ser um vídeo, uma campanha nos mecanismos de busca na internet ou a decisão de usar o bom e velho telefone para esquentar relacionamentos. Neste mundo de tantos termos novos, tanta tecnologia, tanta automação, é importante contar com quem tem um olhar ampliado de todo processo, ciente que no final das contas quem decide é a cabeça e o coração dessa máquina fantástica chamada gente.</p>
			</div>
		</div>
	</div>
</div>



<!-- CTA Principal -->
<?php get_template_part('template-parts/content', 'maincta') ?>

<?php
get_footer();
