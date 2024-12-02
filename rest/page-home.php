<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>
<section class="acompanhamentos-container" style="display: flex;justify-content: center;flex-direction: column;padding-top: 40px;">
    <h2 class="acompanhamentos-titulo" style="color: hsla(39,100%,68%,1);text-align: center;font-size: 1.5em;">Acompanhamentos do dia:</h2>
    <p class="acompanhamentos-do-dia" style="color: white;text-align: center;font-size: 1.1em;"><?php the_field('acompanhamentos'); ?></p>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if(have_rows('category_menu')): ?>
			<?php include(TEMPLATEPATH . "/inc/cardapio.php"); ?>
	<?php endif; ?>
<?php endwhile; else: endif ?>
<?php get_footer(); ?>
		