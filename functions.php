<?php

//Includes
require get_template_directory() . '/includes/widgets.php';

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
function gymfitness_scripts_styles()
{
  // la funcion wp_enqueue_style nos permite encolar hojas de estilo, debemos colocarle un nombre, la ruta de la hoja de estilo, un array con las dependencias y la version
  // En este caso la hoja se llama normalize, la ruta esta vinculada al github de normalize, no tiene dependencias y la version es 8.0.1
  // La version es para que cuando se haga un cambio en la hoja de estilo se pueda actualizar la version y asi el navegador sepa que debe descargar la nueva version, ya que wordpress guarda en cache las hojas de estilo
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
  // en este caso se pasa una dependencia, es decir primero carga normalize y luego style, nom importa el orden en que se llamen las funciones
  // agregamos libreria de lightbox
  wp_enqueue_style('lightboxcss', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css', array(), '2.11.1');
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
  // archivos javascript
  wp_enqueue_script('lightboxjs', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js', array('jquery'), '2.11.1', true);
  
};

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

// Widgets

function gymfitness_widgets()
{
  register_sidebar([
    'name' => 'Sidebar 1',
    'id' => 'sidebar_1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ]);
}

add_action('widgets_init', 'gymfitness_widgets');
