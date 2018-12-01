<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- <div class="wrap"> -->

	

	<!-- <div id="primary" class="content-area"> -->
		<!-- <main id="main" class="site-main" role="main"> -->
		<!-- CONTEÚDO PRINCIPAL - QUANDO EM SINGLE, EXIBE CONTENT. SE ESTIVER COMO CARD, EXIBE IMAGEM E DETALHES -->
<section class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="row" id="conteudoPrincipal">
		<div class="col-6">
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
			?>
			<?php
				if ( has_post_thumbnail() ) { 
					esc_attr_e(the_post_thumbnail( 'img-destaque' )); 
				};
			?>
			<?php echo the_archive_description(); ?>

			<?php
				if ( is_single()) {
					// Define apresentação do post caso esteja sendo exibido na tela
					esc_attr_e(the_content());
				} elseif (!is_single()) {
					// Define apresentação do post caso seja exibido em uma categoria
					echo '<a href="'.esc_url(get_permalink()).'" rel="next" target="_self" alt="Ler o artigo inteiro" title="Ler o artigo inteiro">
						<h4 style="color:';
							esc_attr_e(the_field('cor_destaque_primario')); echo '!important;">';esc_attr_e(the_title());
						echo '</h4>';
						esc_attr_e(the_excerpt());
						echo '<p>Ler "<i>';
							esc_attr_e(the_title());
						echo '</i>" completo  <i class="fa fa-plus-circle" style="color:'.esc_attr_e(the_field('cor_destaque_primario')).'!important;"></i>';
						echo '</a>';
					echo '<br/><hr><br/>';
				};
			?>
		</div>
	</article>
</section>

		<!-- </main> #main -->
	</div> <!-- #primary -->
	<?php get_sidebar(); ?>
<!-- </div>wrap -->

<?php
get_footer();
