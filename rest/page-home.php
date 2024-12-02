<?php
// Template Name: Menu da Semana
?>

<style>
.acompanhamentos-container {
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding-top: 40px;
}

.acompanhamentos-titulo {
    color: rgb(237, 92, 92);
    text-align: center;
    font-size: 1.5em;
}

.acompanhamentos-do-dia {
    color: white;
    text-align: center;
    font-size: 1.2em;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
</style>

<?php get_header(); ?>
<section class="acompanhamentos-container">
    <h2 class="acompanhamentos-titulo">Acompanhamentos do dia:</h2>
    <p class="acompanhamentos-do-dia"><?php the_field('acompanhamentos'); ?></p>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if(have_rows('category_menu')): ?>
			<?php include(TEMPLATEPATH . "/inc/cardapio.php"); ?>
	<?php endif; ?>
<?php endwhile; else: endif ?>
<?php get_footer(); ?>
		