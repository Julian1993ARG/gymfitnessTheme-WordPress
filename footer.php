<footer class="contenedor footer">
  <hr>
  <div class="contenido-footer">
    <?php
        // Es una variable de argumento para pasarme a la funcion que crea y  muestra el menu dinamicamente, si deseamos tener mas menus solo debemos crear mas keys en el array de la funcion register_nav_menus
        $args = array(
          'theme_location' => 'menu-principal',
          'container' => 'nav',
          'container_class' => 'menu-principal'
        );

          wp_nav_menu($args)
        ?>
        <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y')  ?></p>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>