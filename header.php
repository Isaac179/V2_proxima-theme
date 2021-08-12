<!DOCTYPE html>
<html lang="<?php echo substr(get_bloginfo ( 'language' ), 0, 2);?>">
<head>
	<meta charset="UTF-8">
	<title><?php
		global $page, $paged;
	
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
	
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />

	<!--LIBRERIA FAFA ICON - ISAAC 290721-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--SWIPER PORTADA ISAAC 300721-->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<?php

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('CLTVO_ISLOCAL') || ( CLTVO_ISLOCAL != true) ){ include_once('inc/analytics.php'); }

	?>

	<!--[if gt IE 8]><div class="cltvo-browser-check"><p>Consider <a href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
<!--<![endif]-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/8a815a169a.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <header id="menu">
			<nav>
				<a></a>
				<ul>
					<li><a href="https://www.instagram.com/" target="_Blank">Instagram</a></li>
					<li><a href="https://www.facebook.com/" target="_Blank">Facebook</a></li>
				</ul>
			</nav>          
        <nav>
            <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/proxima-logo2.svg" class="logo"></a>
			<?php $nostros = get_page_by_title('nosotros');?>
            <ul>
                <li><a href="index.html">Boletín</a></li>
                <li><a href="#">Empresa</a></li>
                <li><a href="<?php echo get_post_type_archive_link( 'trabajos_pt' ) ?>">Bolsa de trabajo</a></li>
                <li><a href="index.html">Servicios</a></li>
                <li><a href="<?php echo get_permalink($nostros->ID) ?>">Nosotros</a></li>
            </ul>
        </nav>            
    </header>
