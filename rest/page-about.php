<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('restaurant_photo'); ?>" alt="<?php the_field('restaurant_photo_description'); ?>">
			</div>

			<div class="grid-8">
				<?php if(have_rows('about_content')): while(have_rows('about_content')) : the_row(); ?>
					<h2><?php the_sub_field('about_title'); ?></h2>
					<?php the_sub_field('about_text'); ?>
				<?php endwhile; else : endif; ?>
			</div>
		</section>
<?php endwhile; else: endif ?>
<?php get_footer(); ?>