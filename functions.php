<?php

/* Carregando o estilo do tema filho */
function konrad_enqueue_styles() {

	$parent_style = 'twentyseventeen-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'konrad-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}
add_action( 'wp_enqueue_scripts', 'konrad_enqueue_styles' );

/* Permitindo definir o resumo (excerpt) para página - por padrão é só para posts */
add_post_type_support( 'page', 'excerpt' );
/* ACF Post Object */
// function my_post_object_result( $title, $post, $field, $post_id ) {
//	// add post type to each result
//	$title .= '(' . $post->post_type .  ')';
//	return $title;
// }
// add_filter('acf/fields/post_object/result', 'my_post_object_result', 10, 4);

/* Página de opções */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações Gerais',
		'menu_title'	=> 'Configurações Gerais',
		'menu_slug' 	=> 'configuracoes-gerais',
		// 'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-admin-tools',
		'position' => 3
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Soluções',
		'menu_title'	=> 'Soluções',
		'menu_slug' 	=> 'solucoes',
		// 'capability'	=> 'edit_posts',
		'redirect'		=> true,
		'icon_url' => 'dashicons-chart-area',
		'position' => 4
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Clientes',
		'menu_title'	=> 'Clientes',
		'menu_slug' 	=> 'clientes',
		// 'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-groups',
		'position' => 5
	));
}

/* Image Sizes */
function konrad_setup() {
	remove_image_size('twentyseventeen-featured-image');
	add_image_size('konrad-featured-image', 1200, 900, true);
	add_image_size('capa-card', 225, 165, true);
	add_image_size('img-destaque', 1200, 450, true);
}
add_action( 'after_setup_theme', 'konrad_setup', 11 );

/* Custom Logo */
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 70,
        'width'       => 243,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


/* Google Maps API + ACF */
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyAjo6MUHEQdu_mumzRSSMhY_wXMRLnG3JI');
}
add_action('acf/init', 'my_acf_init');

/* Tira o termo prefixo - como 'Categoria: ' - antes do título da vitrine */
function konrad_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	}
	return $title;
} 
add_filter( 'get_the_archive_title', 'konrad_archive_title' );

## LOGIN (ABSPATH/wp-admin)

	/* Logo */
	function konrad_login_logo() { ?>
		<style type="text/css">
			#login h1 a, .login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
				width:243px;
				height:70px;
				background-size: 243px 70px;
				background-repeat: no-repeat;
				/*padding-bottom: 30px;*/
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'konrad_login_logo' );

	/* Link */
	function konrad_login_logo_url() {
		return home_url();
	}
	add_filter( 'login_headerurl', 'konrad_login_logo_url' );

	/* Link Title */
	function konrad_login_logo_url_title() {
		return 'Konrad | Consultoria, Treinamento e Auditoria em Sistemas de Gestão';
	}
	add_filter( 'login_headertitle', 'konrad_login_logo_url_title' );

	/* Mensagem */
	function konrad_login_message(){
		return '<h3 style="text-align:center;">Consultoria, Treinamento e Auditoria em Sistemas de Gestão</h3>';
	}
	add_filter( 'login_message', 'konrad_login_message' );

	/* Botão */
	function konrad_login_stylesheet() {
		wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
		// wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
	}
	add_action( 'login_enqueue_scripts', 'konrad_login_stylesheet' );

	/* Links no Rodapé (Bottom) */
	function konrad_login_bottom_link(){
		if ( $GLOBALS['pagenow'] === 'wp-login.php' ) {
		echo '<p style="text-align:center;">Dúvidas? <a href="mailto:contato@djament.com.br?Subject=Contato%20via%20login%20do$20painel%20da%20Konrad&Cc=marcelo@djament.com.br" target="_blank" title="Enviar email para Djament Comunicação" alt="Enviar email para Djament Comunicação" rel="nofollow"><b>Envie sua dúvida</b></a> para a agência <b><a href="https://djament.com.br" rel="noopener" target="_blank" title="Djament Comunicação" alt="Djament Comunicação">Djament</a><b></p>';
		};
	}
	add_action('the_privacy_policy_link', 'konrad_login_bottom_link');

## PAINEL ADMINISTRATIVO

/* Admin Panel Style */
function my_admin_theme_style() {
	wp_enqueue_style('my-admin-style', get_stylesheet_directory_uri() . '/style-login.css');
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');

/* Adicionando widget ao Dashboard */
	function add_custom_dashboard_widgets() { 
		wp_add_dashboard_widget(
			'konrad_dashboard_widget', // Widget slug.
			'Seja bem vindo(a) ao painel de gerenciamento Konrad', // Title.
			'custom_dashboard_widget_content' // Display function.
		);
	}
	add_action( 'wp_dashboard_setup', 'add_custom_dashboard_widgets' );

	/* 'Printa' o conteúdo no widget do Dashboard (complementa a action add_custom_dashboard_widgets) */
	function custom_dashboard_widget_content() {
		echo '
			<a href="https://konrad.com.br" rel="next" target="_blank" title="Acessar o site da Konrad" alt="Acessar o site da Konrad">
				<img src="' . get_stylesheet_directory_uri() . '/images/logo.png)" title="Acessar o site da Konrad (interface visitante)" alt"Konrad | Consultoria, Treinamento e Auditoria em Sistemas de Gestão" height="70" width="243px" style="height:70px;width:243px;padding:10% 20%"/>
			</a>
			<p style="text-align:justify;">É aqui onde se <b>administra o conteúdo do site</b>, tanto a parte visível - como <b>páginas e posts</b> - como recursos de <b>SEO e performance</b>.</p>
			<p>Em caso de dúvidas, entre em contato com a <a href="https://djament.com.br" rel="noopener" target="_blank" title="Djament Comunicação" alt="Djament Comunicação"><b>Djament Comunicação</b></a> através do email <a href="mailto:contato@djament.com.br" title="Enviar email para Djament"><b>contato@djament.com.br</b></a>. Obrigado!</p>
		';
	}