<?php $menu = get_page_by_title('Menu'); ?>


<?php if(have_rows('category_menu')): while(have_rows('category_menu')) : the_row(); ?>
	<section class="container">
		<h2 class="subtitulo"><?php the_sub_field('section_name'); ?></h2>
		
		<?php if(have_rows('menu')): while(have_rows('menu')) : the_row(); ?>
			<div class="menu-prato grid-8">
				<h2><?php the_sub_field('category_name'); ?></h2>
				<ul>
					<?php if(have_rows('options')): while(have_rows('options')) : the_row(); ?>
						<li>
							<span><sup>R$</sup><?php the_sub_field('price'); ?></span>
							<div>
								<h3><?php the_sub_field('food_name'); ?></h3>
								<p class="food_description"><?php the_sub_field('food_description'); ?></p>
							</div>
						</li>
					<?php endwhile; else : endif; ?>
				</ul>
			</div>
		<?php endwhile; else : endif; ?>
	</section>
<?php endwhile; else : endif; ?>


