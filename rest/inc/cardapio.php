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
                            data-exibir-prato="<?php the_sub_field('exibir-prato'); ?>"
                            <?php if( get_sub_field('exibir-prato') ) echo 'class="ativo"'; ?>>
                            <span><sup>R$</sup><?php the_sub_field('price'); ?></span>
                            <div>
                                <h3><?php the_sub_field('food_name'); ?></h3>
                                <p class="food_description"><?php the_sub_field('food_description'); ?></p>
                            </div>
                            <button class="whatsapp-buy-btn"><a href="<?php the_sub_field('product_link'); ?>" class="whatsapp-buy-btn__link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ed5c5c" d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64l0 48-128 0 0-48zm-48 48l-64 0c-26.5 0-48 21.5-48 48L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-208c0-26.5-21.5-48-48-48l-64 0 0-48C336 50.1 285.9 0 224 0S112 50.1 112 112l0 48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg></a></button>
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

