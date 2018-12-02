<?php

$args = array(
	'post_type' => 'page',
	'post_parent' => '113', // ID página Soluções
);
// var_dump(wp_get_theme()->get_page_templates());
// exit;
$query = new WP_query ( $args );
if ( $query->have_posts() ) {
	echo '<section class="solucoes container" id="solucoesVitrineContainer">';
		echo '<h3 class="col-12">Consultoria, Auditoria e Capacitação</h3>';
		echo '<h6 class="col-12">Especialistas em Sistemas de Qualidade e Certificações</h6>';
		echo '<div class="row">';
			while ( $query->have_posts() ) : $query->the_post();
				//contents of loop
				echo '
					<article class="solucao col-12 col-md-6 col-xl-4">
						<a class="" href="'. get_permalink().'">
							<div>'.
								get_the_post_thumbnail()
							.'</div>
							<div class="">
								<h2>'.get_the_title().'</h2>';
								the_excerpt('<small>','</small>');
								echo '<button class="cta-button">
									saiba mais
								</button>
							</div>
						</a>
					</article>
				';
			endwhile;  
			wp_reset_postdata();
		echo '</div>';
	echo '</section>';
}; ?>