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
									<button class="cta-button">
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