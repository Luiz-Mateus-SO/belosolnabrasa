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

.prato {
	position: relative;
}

.whatsapp-buy-btn {
	border-radius: 100px;
	padding: 6px;
	margin-left: 14px;
	position: absolute;
	left: 0px;
	border: 2px dashed #505050;
	transition: .2s all ease-in-out;

}

.whatsapp-buy-btn:hover {
	background: none;
	border: 2px dashed white;
	transform: scale(1.123);
	transition: .2s all ease-in-out;
}

.whatsapp-buy-btn svg {
	display: block;
	width: 22px;
	height: 22px;
}

@media(max-width: 768px) {
	.container .menu-prato li {
		display: flex;
		flex-direction: column;
		align-items: flex-end;
		gap: 8px;
	}
	
	.whatsapp-buy-btn {
		margin-left: 0;
	}

	.menu-prato span {
		margin-right: 0;
	}
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
		