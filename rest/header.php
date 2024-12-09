<?php get_header(); ?> 
<!DOCTYPE html>
<html lang="pt-br">
	<head>
				<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KBKMKNKT');</script>
		<!-- End Google Tag Manager -->

		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('seo_title'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('seo_description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBKMKNKT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header>
				<nav>
					<?php
						$args = array(
							'menu' => 'principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
				</nav>

				<h1><img class="logotipo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Belo-Sol.webp" alt="<?php bloginfo('name'); ?>"></h1>
				<div class='dia-da-semana-container'>
					<h2 id='dia-da-semana'></h2>
					<span class='divisor'></span>
				</div>

				<?php $contato = get_page_by_title('contato'); ?>
				<p><?php the_field('header_adress', $contato); ?></p>
				<p class="telefone"><?php the_field('header_phone', $contato); ?></p>
		</header>
