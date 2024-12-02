<?php $menu = get_page_by_title('Menu'); ?>
<?php if (have_rows('category_menu')) : while (have_rows('category_menu')) : the_row(); ?>
    <section class="container">
        <h2 class="subtitulo"><?php the_sub_field('section_name'); ?></h2>
        <?php if (have_rows('menu')) : while (have_rows('menu')) : the_row(); ?>
            <div class="menu-prato grid-8">
                <h2><?php the_sub_field('category_name'); ?></h2>
                <ul>
                    <?php if (have_rows('options')) : while (have_rows('options')) : the_row(); ?>
                        <?php 
                        // Verificar o campo 'ativo'
                        $ativo = get_sub_field('exibir-prato'); ?>
                            <li>
                                <span><sup>R$</sup><?php the_sub_field('preço'); ?></span>
                                <div>
                                    <h3><?php the_sub_field('nome_do_alimento'); ?></h3>
                                    <p class="descrição_do_alimento"><?php the_sub_field('descrição_do_alimento'); ?></p>
                                </div>
                            </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>
        <?php endwhile; else : endif; ?>
    </section>
<?php endwhile; else : endif; ?>

<?php $contato = get_page_by_title('Contato'); ?>
<div class="contact-btn__container">
    <button class="contact_btn">
        <a href="<?php the_field('contact_link', $contato); ?>">Faça seu pedido</a>
    </button>
</div>
