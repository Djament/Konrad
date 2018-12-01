<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding" style="color:<?php echo esc_attr_e(the_field('cor_fundo')); ?> !important">
	<div class="wrap">
		<a href="<?php  echo esc_url(home_url());?>" title="Acessar Homepage" alt=="Acessar Homepage" target="_self" rel="next">
			<img src="<?php echo esc_url(home_url()).'/wp-content/themes/konrad/images/logo.png'; ?>" alt="Konrad" title="Konrad" height="70" width="243" style="width:243px;height:70px">
		</a>

		<div class="site-branding-text">
			<h1 class="post-titulo" style="color:<?php echo the_field('cor_destaque_primario'); ?>!important;"><?php esc_attr_e(the_title()); ?></h1>

			<?php
				if (get_the_category() && get_the_category()[0]->cat_name != 'Sem categoria'){
					$category = get_the_category(); ?>
					<a href="<?php esc_url($category[0]->post_name); ?>">
						<h2 class="post-categoria"><?php echo esc_attr_e($category[0]->cat_name); ?></h2>
					</a>
				<?php }; ?> 
			<?php
				if(has_excerpt()) {
					echo '<p class="post-resumo" style="color:';
					esc_attr_e(the_field("cor_destaque_secundario"));
					echo '!important">';
					esc_attr_e(get_the_excerpt());
					echo '</p>';
				}; ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
