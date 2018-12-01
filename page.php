<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- <div id="primary" class="content-area">
	<main id="main" class="site-main" role="main"> -->

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

	<!-- </main> #main 
</div> #primary -->

<?php get_footer();
