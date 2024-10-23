<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1>DEU TUDO CERTO</h1>
	<?php if(have_rows('category_menu')): ?>
			<?php include(TEMPLATEPATH . "/inc/cardapio.php"); ?>
	<?php endif; ?>

	<?php $contato = get_page_by_title('contato'); ?>
	<div class="contact-btn__container">
		<button class="contact_btn">
			<a href="<?php the_field('contact_link', $contato); ?>">Faça seu Pedido</a>
		</button>
	</div>
<?php endwhile; else: endif ?>
<?php get_footer(); ?>
		