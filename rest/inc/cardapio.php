<?php $menu = get_page_by_title('Menu'); ?>
<?php if(have_rows('category_menu')): while(have_rows('category_menu')) : the_row(); ?>
    <section class="container">
        <h2 class="subtitulo"><?php the_sub_field('section_name'); ?></h2>
        <?php if(have_rows('menu')): while(have_rows('menu')) : the_row(); ?>
            <div class="menu-prato grid-8">
                <h2><?php the_sub_field('category_name'); ?></h2>
                <ul>
                    <?php if(have_rows('options')): while(have_rows('options')) : the_row(); ?>
                        <li class="prato" 
                            data-exibir-prato="<?php the_sub_field('exibir_prato'); ?>"
                            <?php if( get_sub_field('exibir_prato') ) echo 'class="ativo"'; ?>>
                            <span><sup>R$</sup><?php the_sub_field('price'); ?></span>
                            <div>
                                <h3><?php the_sub_field('food_name'); ?></h3>
                                <p class="food_description"><?php the_sub_field('food_description'); ?></p>
                            </div>
                            <button class="whatsapp-buy-btn"><a href="<?php the_sub_field('product_link'); ?>" class="whatsapp-buy-btn__link"><i class="fa-solid fa-bag-shopping"></i></a></button>
                        </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>
        <?php endwhile; else : endif; ?>
    </section>
		<?php $contato = get_page_by_title('Contato'); ?>
		<div class="contact-btn__container">
				<button class="contact_btn">
						<a href="<?php the_field('contact_link', $contato); ?>">Faça seu pedido</a>
				</button>
		</div>
<?php endwhile; else: endif; ?>

