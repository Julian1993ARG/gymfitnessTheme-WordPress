<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
    <header class="header">
      <div class="contenedor barra-navegacion">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?> /img/logo.svg" alt="logotipo">
        </div>

        <?php
        // Es una variable de argumento para pasarme a la funcion que crea y  muestra el menu dinamicamente, si deseamos tener mas menus solo debemos crear mas keys en el array de la funcion register_nav_menus
        $args = array(
          'theme_location' => 'menu-principal',
          'container' => 'nav',
          'container_class' => 'menu-principal'
        );

          wp_nav_menu($args)
        ?>

      </div>
    </header>