<!-- ## CLIENTES -->
<!-- ** Se houver clientes cadastrados dentro das opções customizadas no tema filho (clientes), cria a sessão (section) de clientes -->
<?php if( have_rows('clientes', 'option') ): ?>
	<?php if (is_front_page()){ ?>
		<section class="container clientes">
			<!-- Concatena 'Clientes de ' com o título da página, que deve ser uma das soluções cadastradas -->
			<h4>Principais Clientes</h4>
			<article class="row" id="vitrineClientes">
				<!-- Loop 'enquanto houver cliente' -->
				<?php while( have_rows('clientes', 'option')): the_row(); ?>
					<!-- Define a variável $servicos -->
					<?php if (get_sub_field('cliente_servicos')) { $servicos = get_sub_field('cliente_servicos'); };
					// Condição (garantia) 'caso haja serviço cadastrado'
					if( $servicos ):
						// Cria array para os serviços atrelados ao cliente (por enquanto vazio)
						$listaServicos = array();
						// Loop 'para cada serviço atrelado'
						foreach ($servicos as $servico) {
							// Loop 'para cada serviço como "chave" => "valor"'
							foreach ($servico as $key => $value):
								// Se a chave for 'post_title' (ou seja, se for a string referente ao título)
						  		if ($key === 'post_title'){
						  			// Inclui o serviço à lista dos Serviços atrelados a esse cliente
						   			array_push($listaServicos, $value);
						   		}
						   	// Fim do loop do serviço como "chave" => "valor"
							endforeach;
						// Fim do loop de serviços
						};
					// Fim da condição de que há serviços cadastrados
					endif;
					// Se houver uma lista de serviços
					if ($listaServicos):
						// if (in_array(the_title(), $listaServicos)) {
					?>
						<!-- Card do cliente -->
						<div class="col-12 col-md-6">
							<div class="row">
								<!-- Se houver logo cadastrado -->
								<?php if ( get_sub_field('cliente_logo') ):
									$clienteLogo = get_sub_field('cliente_logo'); ?>
									<img class="col-6 cliente-logo" src="<?php echo $clienteLogo['url'] ?>" alt="<?php the_sub_field('cliente'); ?>" title="<?php the_sub_field('cliente'); ?>" width="225" height="165">
									<div class="col-6">
										<!-- Nome do cliente -->
										<h6 class="cliente"><?php the_sub_field('cliente'); ?></h6>
										<!-- Serviços prestados (links de páginas) -->
										<?php if ($servicos): ?>
											<?php foreach ($servicos as $servico): ?>
												<a href="<?php echo esc_url(home_url()).'/'.$servico->post_name; ?>" title="<?php echo $servico->post_title; ?>" alt="<?php echo $servico->post_title; ?>" class="cliente-servicos" style="font-weight:bold; color: <?php esc_attr_e(the_field('cor_destaque_secundario')); ?> !important">
													<?php echo $servico->post_title .' '; ?>
												</a>
											<?php endforeach ?>
										<?php endif ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<?php //}; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</article>
		</section>
	<?php } else { ?>
		<section class="container clientes">
			<!-- Concatena 'Clientes de ' com o título da página, que deve ser uma das soluções cadastradas -->
			<h4>Clientes de <?php the_title(); ?> </h4>
			<article class="row" id="vitrineClientes">
				<!-- Loop 'enquanto houver cliente' -->
				<?php while( have_rows('clientes', 'option')): the_row(); ?>
					<!-- Define a variável $servicos -->
					<?php if (get_sub_field('cliente_servicos')) { $servicos = get_sub_field('cliente_servicos'); };
					// Condição (garantia) 'caso haja serviço cadastrado'
					if( $servicos ):
						// Cria array para os serviços atrelados ao cliente (por enquanto vazio)
						$listaServicos = array();
						// Loop 'para cada serviço atrelado'
						foreach ($servicos as $servico) {
							// Loop 'para cada serviço como "chave" => "valor"'
							foreach ($servico as $key => $value):
								// Se a chave for 'post_title' (ou seja, se for a string referente ao título)
						  		if ($key === 'post_title'){
						  			// Inclui o serviço à lista dos Serviços atrelados a esse cliente
						   			array_push($listaServicos, $value);
						   		}
						   	// Fim do loop do serviço como "chave" => "valor"
							endforeach;
						// Fim do loop de serviços
						};
					// Fim da condição de que há serviços cadastrados
					endif;
					// Se houver uma lista de serviços
					if ($listaServicos):
						// if (in_array(the_title(), $listaServicos)) {
					?>
						<!-- Card do cliente -->
						<div class="col-12 col-md-6">
							<div class="row">
								<!-- Se houver logo cadastrado -->
								<?php if ( get_sub_field('cliente_logo') ):
									$clienteLogo = get_sub_field('cliente_logo'); ?>
									<img class="col-6 cliente-logo" src="<?php echo $clienteLogo['url'] ?>" alt="<?php the_sub_field('cliente'); ?>" title="<?php the_sub_field('cliente'); ?>" width="250" heigh="165">
									<div class="col-6">
										<!-- Nome do cliente -->
										<h6 class="cliente"><?php the_sub_field('cliente'); ?></h6>
										<!-- Serviços prestados (links de páginas) -->
										<?php if ($servicos): ?>
											<?php foreach ($servicos as $servico): ?>
												<a href="<?php echo esc_url(home_url()).'/'.$servico->post_name; ?>" title="<?php echo $servico->post_title; ?>" alt="<?php echo $servico->post_title; ?>" class="cliente-servicos" style="font-weight:bold; color: <?php esc_attr_e(the_field('cor_destaque_secundario')); ?>!important">
													<?php echo $servico->post_title .' '; ?>
												</a>
											<?php endforeach ?>
										<?php endif ?>
										<?php if (get_sub_field('cliente_comentario') && get_sub_field('cliente_depoimento') == null): ?>
											<p class="cliente-comentario"><?php echo get_sub_field('cliente_comentario'); ?></p>
										<?php endif ?>		
									</div>
								<?php else: ?>
									<div class="col-12">
										<!-- Nome do cliente -->
										<h6 class="cliente"><?php the_sub_field('cliente'); ?></h6>
										<!-- Serviços prestados (links de páginas) -->
										<?php if ($servicos): ?>
											<?php foreach ($servicos as $servico): ?>
												<a href="<?php echo esc_url(home_url()).'/'.$servico->post_name; ?>" title="<?php echo $servico->post_title; ?>" alt="<?php echo $servico->post_title; ?>" class="cliente-servicos" style="font-weight:bold; color: <?php esc_attr_e(the_field('cor_destaque_secundario')); ?> ">
													<?php echo $servico->post_title .' '; ?>
												</a>
											<?php endforeach ?>
										<?php endif ?>		
										<?php if (get_sub_field('cliente_comentario') && get_sub_field('cliente_depoimento') == null): ?>
											<p class="cliente-comentario"><?php echo get_sub_field('cliente_comentario'); ?></p>
										<?php endif ?>
									</div>
								<?php endif; ?>
							</div>
							<?php if (get_sub_field('cliente_depoimento')): ?>
								<div class="row">
									<?php if (get_sub_field('cliente_comentario')): ?>
										<div class="col-12">
											<p class="cliente-comentario"><?php echo get_sub_field('cliente_comentario'); ?></p>
										</div>
									<?php endif; ?>
										<div class="col-12">
											<i class="fas fa-quote-left cliente-depoimento" style="display:inline;color:<?php esc_attr_e(the_field('cor_destaque_secundario')); ?> !important;"><?php echo get_sub_field('cliente_depoimento'); ?></i>
											<p id="clienteDepoimentoTitulo"><?php echo get_sub_field('cliente'); ?></p>
										</div>
								</div>
							<?php endif ?>
						</div>
						<?php //}; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</article>
		</section>
	<?php }; ?>
<?php endif; ?>