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

<?php 
	// if (the_ID()) { $id = get_ID(); };
	// if (the_title()) { $titulo = get_title(); };
	// if (the_content()) { $conteudo = get_content(); };
?>

<section class="container">
	<article class="row" id="topoPagina" style="background-color: <?php esc_attr_e(the_field('cor_fundo')); ?>">
		<div class="col-12 col-md-2">
		<?php
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail( 'capa-card' ); 
			};
		?>
		</div>
		<h1 class="col-12 col-md-10"><?php the_title(); ?></h1>
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
