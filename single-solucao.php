<?php
/**
 *Template name: Soluções
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content-solucao', 'page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

	<!-- </main> #main 
</div> #primary -->

<?php get_footer();
