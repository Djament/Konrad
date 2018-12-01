<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


<style>
	div#primary.site-content{
		width: 100% !important;
		padding: 0 !important;
	}
</style>

<?php 
	// if (the_ID()) { $id = get_ID(); };
	// if (the_title()) { $titulo = get_title(); };
	// if (the_content()) { $conteudo = get_content(); };
?>
<section class="container">
	<article class="row" id="topoPagina">
		<div class="col-12 col-md-2">
		<?php
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail( 'capa-card' ); 
			};
		?>
		</div>
		<h1 class="col-12 col-md-10" style="color: <?php esc_attr_e(the_field('cor_destaque_primario')); ?>!important"><?php esc_attr_e(the_title()); ?></h1>

	</article>
	<article class="row" id="conteudoPrincipal">
		<?php the_content(); ?>
	</article>
</section>

<span class="clearfix"></span>

<!-- ## CLIENTES - INÍCIO -->
<?php include_once(ABSPATH.'wp-content/themes/konrad/inc/inc-clientes.php') ?>
<!-- ## CLIENTES - FIM -->

<span class="clearfix"></span>

<section class="container">
	<h3>Artigos em Destaque</h3>
	<article class="row">
		<!-- POST DESTACADO -->
		<?php $artigoDestacado = get_field('artigo_relacionado_destaque'); ?>
		<?php
			$args = array( 'posts_per_page' => 1, 'offset'=> 1, 'category' => esc_url($artigoDestacado[0]->id));
		    $myposts = get_posts( $args );
		    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<a href="<?php esc_url(the_permalink()); ?>" class="col-12 col-md-3" style="margin: 0 !important;padding: 0 !important;background-color:<?php echo get_field('cor_fundo'); ?>!important">
					<?php the_post_thumbnail('capa-card'); ?>
					<h5>
						<?php esc_attr_e(the_title()); ?>
					</h5>
				</a>
			<?php endforeach; 
			wp_reset_postdata();
		?>
		<!-- POSTS DAS CATEGORIAS RELACIONADAS -->
		<?php  $artigosRelacionados = get_field('artigos_relacionados'); ?>
		<?php
			for ($i = 0; $i < count($artigosRelacionados); $i++){
				//echo $artigosRelacionados[$i]->name;?>
				<a href="<?php esc_url(the_permalink()); ?>" class="col-12 col-md-3">
					<?php the_post_thumbnail('capa-card'); ?>
						<h5>
							<?php esc_attr_e($artigosRelacionados[$i]->name); ?>
						</h5>
				</a>
			<?php };
		?>
	</article>
</section>