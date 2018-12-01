<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<span class="clearfix"></span>
<div class="container-fluid footer-contatos">
	<ul class="row">
		<a href="" class="col-4">
			<li> <i class="fa fa-phone"></i> <?php the_field('telefone_contato', 'option') ?> </li>
		</a>
		<a href="" class="col-4">
			<li> <i class="fa fa-envelope"></i> <?php the_field('email_contato', 'option') ?> </li>
		</a>
		<a href="" class="col-4">
			<li> <i class="fab fa-whatsapp"></i> <?php the_field('celular_contato', 'option') ?> </li>
		</a>
		<!-- <a href="" class="col-3">
			<li> <i class="fa fa-pin"></i> <?php the_field('endereco_completo', 'option') ?> </li>
		</a> -->
	</ul>
</div>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	Konrad &copy; <?php echo date(Y); ?>
	<a href="https://djament.com.br" class="imprint">
		Desenvolvido por Djament Comunicação
	</a>
</div><!-- .site-info -->
