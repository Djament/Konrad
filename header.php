<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- INSERIR TAG GA AQUI -->
  <!-- <meta name="google-site-verification" content="t61CI7nodhTTvutGegYzTMIQwAENoPQZa4fcS4um_18" />
  <meta name="msvalidate.01" content="664FE5587421AFE4E8F8B58DDFE7C737" /> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
	<meta name="revisit-after" content="7 days">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- MANIFESTO -->
	<!-- <link rel="manifest" href="../../../../manifest.json"> -->
	<!-- DADOS ESTRUTURADOS - SCHEMA.ORG -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://konrad.com.br",
        "logo": "http://konrad.com.br/img/common/logo.png",
        "description": "Consultoria, Assessoria, Auditoria e Treinamentos em Certificações ISO, PBQP-H, SASSMAQ, IEC, RDC, Sistemas de Gestão da Qualidade e Gestão de Riscos - Especialistas em ISO 45001:2018, ISO 14001:2015, ISO 9001:2015, ISO 22000, Certificação de Produto CE, SASSMAQ, ISO/IEC 17025, PBQP-HABITAT e RDC 16/13 - ISO 13485:2016",
        "additionalType": "http://www.productontology.org/doc/Business_consultant",
        "telephone" : "+55-51-3347-7819",
        "email" : "contato@konrad.com.br",
        "name" : "Konrad",
        "address" : {
          "@type" : "PostalAddress",
          "addressCountry" : "BR",
          "addressLocality" : "Porto Alegre",
          "addressRegion" : "Rio Grande do Sul",
          "postalCode" : "91220-010",
          "streetAddress" : "Avenida Walter Kaufmann, 360 - Jardim Itu-Sabará"
        },
        "sameAs" : [ "https://www.facebook.com/KonradNegocios", "https://www.linkedin.com/company/konradnegocios" ],
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+55-51-3347-7819",
          "email": "contato@konrad.com.br",
          "contactType": "sales",
          "areaServed": "BR",
          "availableLanguage": ["Portuguese"]
        }]
      }
    </script>
	<!-- META DATA -->
    <meta name="identifier-URL" content="https://konrad.com.br">
    <meta name="url" content="https://konrad.com.br">
    <meta name="abstract" content="Consultoria Certificações ISO">
    <meta name="author" content="Marcelo Diament, Djament Comunicação">
    <meta name="robots" content="index,follow">
    <meta name="contact" content="contato@konrad.com.br">
    <meta name="reply-to" content="contato@konrad.com.br">
    <meta name="copyright" content="Konrad">
    <meta name="rating" content="general">
    <meta name="web_author" content="Konrad Negócios">
  	<?php //$categoriaDoPost = get_the_category(); ?>
  	<?php //if (get_post()->post_title) { $metaTitulo = get_post()->post_title . ' | ' . $categoriaDoPost[0]->name; } elseif (the_title()) { $metaTitulo =  the_title(); } else { $metaTitulo =  'Konrad'; }; ?>
  	<!-- <meta name="title" content="<?php //echo $metaTitulo; ?>"> -->
    <!-- Indexação Yandex -->
    <!-- <meta name="yandex-verification" content="283ab20adb485523" /> -->
    <!-- Indexação Bing -->
    <!-- <meta name="msvalidate.01" content="664FE5587421AFE4E8F8B58DDFE7C737" /> -->
    <meta name="identifier-URL" content="https://konrad.com.br">
    <meta name="url" content="https://konrad.com.br">
    <meta name="abstract" content="Consultoria, Auditoria e Capacitação em Sistemas de Qualidade e Certificações como ISO, SASSMAQ e PBQP-H">
    <meta name="author" content="Marcelo Diament, Djament Comunicação">
    <meta name="robots" content="index,follow">
    <meta name="contact" content="contato@konrad.com.br">
    <meta name="reply-to" content="contato@konrad.com.br">
    <meta name="copyright" content="Konrad">
    <meta name="rating" content="general">
    <meta name="web_author" content="Djament Comunicação">
	<!-- MOBILE SPECS -->
    <meta name="application-name" content="Konrad">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Konrad"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#4383bf">
  <!-- ESTILO -->
    <link async defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

  <header id="masthead" class="site-header row" role="banner">

    <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

    <?php if ( has_nav_menu( 'top' ) ) : ?>
      <div class="navigation-top col-12">
        <div class="wrap">
          <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        </div><!-- .wrap -->
      </div><!-- .navigation-top -->
    <?php endif; ?>

  </header><!-- #masthead -->

  <?php

  /*
   * If a regular post or page, and not the front page, show the featured image.
   * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
   */
  // if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
    // echo '<div class="single-featured-image-header">';
    // echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
    // echo '</div><!-- .single-featured-image-header -->';
  // endif;
  ?>

  <div id="content" class="site-content-contain container">
    <div id="primary" class="site-content">
