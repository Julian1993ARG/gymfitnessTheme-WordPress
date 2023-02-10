<?php

function gymfitness_setup()
{
  // Esta funcion nos permite agregar imagenes destacadas a los post
  add_theme_support('post-thumbnails');
  
  // Esta funcion nos permite agregar un titulo a la pagina
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');

// Aqui podemos crear funciones para nuestro tema
// Esta funcion nos permite registrar los menus que vamos a utilizar en nuestro tema
function gymfitness_menus()
{
  // Aqui le decimos que queremos registrar un menu llamado menu-principal
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'gymfitness')
  ));
}
// Aqui le decimos que queremos que se ejecute la funcion gymfitness_menus cuando se ejecute la accion init
// init es un hook de wordpress que se ejecuta cuando se inicia el tema
add_action('init', 'gymfitness_menus');

// Esta funcion nos permite registrar los estilos y scripts que vamos a utilizar en nuestro tema
function gymfitness_scripts_styles(){
  // la funcion wp_enqueue_style nos permite encolar hojas de estilo, debemos colocarle un nombre, la ruta de la hoja de estilo, un array con las dependencias y la version
  // En este caso la hoja se llama normalize, la ruta esta vinculada al github de normalize, no tiene dependencias y la version es 8.0.1
  // La version es para que cuando se haga un cambio en la hoja de estilo se pueda actualizar la version y asi el navegador sepa que debe descargar la nueva version, ya que wordpress guarda en cache las hojas de estilo
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css',array(),'8.0.1');
  // en este caso se pasa una dependencia, es decir primero carga normalize y luego style, nom importa el orden en que se llamen las funciones
  wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),'1.0.0');
};

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
?>