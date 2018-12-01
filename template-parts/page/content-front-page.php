<?php
/**
 * Displays content for front page
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

<section class="container-fluid banner-container">
	<article class="row" id="bannerTopo">
		<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

			<?php //CODE ?>

		<?php endif; ?>
	</article>
</section>

	<span class="clearfix"></span>

<section class="container-fluid" id="vitrineSolucoes">
		
	<?php if( have_rows('solucoes') ): ?>

		<div class="container">
			<h3 class="col-12">Soluções</h3>
			<div class="row">
				<?php //while( have_rows('solucoes') ): the_row(); 

					// vars
					// $imagemSolucao = get_sub_field('imagem_solucao');
					// $tituloSolucao = get_sub_field('titulo_solucao');
					// $chamadaSolucao = get_sub_field('chamada_solucao');
					// $linkSolucao = get_sub_field('link_solucao');
					// if ($linkSolucao['target'] == '_blank'){ $linkRel = 'noreferrer'; } else { $linkRel = 'next'; };
					?>

					<article class="col-12 col-sm-6 col-md-4 col-lg-3">
						
					</article>

				<?php //endwhile; ?>
			</div>
		</div>

	<?php endif; ?>

	</article>
</section>

<span class="clearfix"></span>

<!-- ## CLIENTES - INÍCIO -->
<?php include_once(ABSPATH.'wp-content/themes/konrad/inc/inc-clientes.php') ?>
<!-- ## CLIENTES - FIM -->

<span class="clearfix"></span>
<section class="container-fluid" id="postsRecentes">
	<h3 class="col-12">Artigos</h3>
	<div class="row">
		
		
    <?php 
		$postsRecentes = wp_get_recent_posts(array(
        'numberposts' => 10, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
		foreach ($postsRecentes as $recent) {
			echo '
				<article class="col-12 col-sm-6 col-md-4 col-lg-3">
				<div>
					<a class="" href="'. get_permalink($recent['ID']).'">
						'.get_the_post_thumbnail($recent['ID'], 'full').'
					</a>
					<div class="">
					    <a class="" href="'.get_permalink($recent['ID']).'">
							<h4>'.$recent['post_title'].'</h4>
						</a>
						<a class="" href="'.get_permalink($recent['ID']).'">
					    	<caption>'.$recent['post_excerpt'].' </caption>
						</a>
						<a class="recent" href="'.get_permalink($recent['ID']).'">
							<button>
								saiba mais
							</button>
						</a>
					</div>
				</div>
			</article>
			';
		}; ?>


	</div>

</section>