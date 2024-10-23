<footer>
			<nav class="nav-footer">
        <?php
          $args = array(
            'menu' => 'principal',
            'container' => false
          );
          wp_nav_menu( $args );
        ?>
			</nav>

			<p><?php bloginfo('name'); ?> © <?php echo date("Y"); ?>. Todos os direitos reservados.</p>
			<p>Desenvolvido com ❤️ por <a class="lm" href="https://www.layoutandmedia.com.br">Layout and Media</a></p>

		</footer>
    <?php wp_footer(); ?>
	</body>
</html>
