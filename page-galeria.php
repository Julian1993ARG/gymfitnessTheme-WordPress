<?php

/**
 * Template Name: Galeria
 */
get_header();
?>

<main class="contenedor section">
  <?php

  while (have_posts()) : the_post();

    the_title('<h1 class= "text-center text-primary">', '</h1>');
    // obtener la galeria de la pagina actual
    $galeria = get_post_gallery(get_the_ID(''), false);
    $galeria_imagenes_id = explode(',', $galeria['ids']);

  ?>
    <ul class="galeria-imagenes">
      <?php
      foreach ($galeria_imagenes_id as $id) {
        $large_image = wp_get_attachment_image_src($id, 'large')[0];
        $full_image = wp_get_attachment_image_src($id, 'full')[0];
      ?>
        <li>
          <a data-lightbox="roadtrip" href="<?php echo $full_image; ?>">
            <img src="<?php echo $large_image; ?>" alt="imagen galería">
          </a>
        </li>

      <?php
      }
      ?>
    </ul>
  <?php
  endwhile;
  ?>

</main>
<?php
get_footer();
?>