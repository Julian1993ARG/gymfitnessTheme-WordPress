<?php
get_header();
?>

<main class="contenedor section con-sidebar">
  <section class="contenido-principal">
  <?php
  get_template_part('template-parts/clase')
  ?>
  </section>
  <aside>
  <?php
  get_sidebar();
  ?>  
  </aside>
  
</main>
<?php
get_footer();
?>