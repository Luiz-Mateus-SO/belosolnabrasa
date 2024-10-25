<?php get_header(); ?> 
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('seo_title'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('seo_description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
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

			<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Belo-Sol.webp" alt="Rest"></h1>
			<?php
			setlocale(LC_TIME, 'pt_BR.UTF-8'); 
			$data = date("Y-m-d");
			$hora_atual = current_time('H');
			$dia_semana = strftime("%A", strtotime($data));
			$dia_semana = ucfirst($dia_semana);

			if ($hora_atual >= 16) {
					$dia_semana = "Fechado";
			} else {
					if ($dia_semana === "Domingo") {
							$dia_semana = "Fechado"; 
					} elseif ($dia_semana === "Sábado") {
							$dia_semana = "Fechado";
					} else {
							$dia_semana = $dia_semana . "-feira";
					}
			}

			echo "<div class='dia-da-semana-container'><h2 id='dia-da-semana'>{$dia_semana}</h2><span class='divisor'></span></div>";
			?>

      <?php $contato = get_page_by_title('contato'); ?>
			<p><?php the_field('header_adress', $contato); ?></p>
			<p class="telefone"><?php the_field('header_phone', $contato); ?></p>
		</header>
