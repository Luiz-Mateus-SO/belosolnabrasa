<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>
<section class="acompanhamentos-container">
    <h2 class="acompanhamentos-titulo">Acompanhamentos do dia: </h2>
    <p class="acompanhamentos-do-dia"><?php the_field('acompanhamentos'); ?></p>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if(have_rows('category_menu')): ?>
			<?php include(TEMPLATEPATH . "/inc/cardapio.php"); ?>
	<?php endif; ?>
<?php endwhile; else: endif ?>
<?php get_footer(); ?>
		