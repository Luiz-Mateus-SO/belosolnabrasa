<?php get_header(); ?> 
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('seo_title'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('seo_description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
	</head>

	<body>
		
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
