<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php 
	// if (is_page_template('content-solucao')){
	// 	echo '
	// 		<style>
	// 			div#primary.site-content{
	// 				width: 100% !important;
	// 			}
	// 		</style>
	// 	';
	// } elseif (!is_active_sidebar('sidebar-1')){
	// 	echo '
	// 		<style>
	// 			div#primary.site-content{
	// 				width: 100% !important;
	// 			}
	// 		</style>
	// 	';
	// }
?>
<style>
	/*div#primary.site-content{*/
	/*width: 100% !important;*/
	/*}*/
</style>
<!-- CONTEÚDO PRINCIPAL - QUANDO EM SINGLE, EXIBE CONTENT. SE ESTIVER COMO CARD, EXIBE IMAGEM E DETALHES -->
<section class="container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<article class="row" id="conteudoPrincipal">
		<div class="col-12">
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
			<h2 class="post-titulo"><?php the_title(); ?></h2>
			<?php $category = get_the_category(); ?>
			<a href="<?php esc_url($category[0]->post_name); ?>">
				<h2 class="post-categoria"><?php echo esc_attr_e($category[0]->cat_name); ?></h2>
			</a>
			<?php
				if ( is_single()) {
					// Define apresentação do post caso esteja sendo exibido na tela
					esc_attr_e(the_content());
				} elseif (!is_single()) {
					// Define apresentação do post caso seja exibido em uma categoria
					esc_attr_e(the_excerpt());
					echo '<a href="'.esc_url(get_permalink()).'" rel="next" target="_self" alt="Ler o artigo inteiro" title="Ler o artigo inteiro">Ler "<i>';
					esc_attr_e(the_title());
					echo '</i>" completo  <i class="fa fa-plus-circle" style="color:'; esc_attr_e(the_field('cor_destaque_primario')); echo '!important;"></i></a>';
					echo '<br/><hr><br/>';
				};
			?>
		</div>
	</article>
</section>
<!-- POSTS RELACIONADOS | INÍCIO -->
<!-- <section class="row">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
	<?php
	// if ( is_sticky() && is_home() ) :
	// 	echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	// endif;
	?>
	
	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<!-- <div class="post-thumbnail">
			<a href="<?php esc_url(the_permalink()); ?>">
				<?php esc_attr_e(the_title()); ?>
				<?php esc_attr_e(the_post_thumbnail( 'capa-card' )); ?>
			</a>
		</div> --><!-- .post-thumbnail -->
	<?php endif; ?>
<!-- </section> -->



	<div class="entry-content">
		<?php
		/* translators: %s: Name of current post */
		// the_content( sprintf(
		// 	__( 'Saiba mais<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
		// 	get_the_title()
		// ) );

		// wp_link_pages( array(
		// 	'before'      => '<div class="page-links">' . __( 'Páginas:', 'twentyseventeen' ),
		// 	'after'       => '</div>',
		// 	'link_before' => '<span class="page-number">',
		// 	'link_after'  => '</span>',
		// ) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		//twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
