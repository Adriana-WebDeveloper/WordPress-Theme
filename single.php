<?php get_header(); ?>

    <div class="row">

      <!-- Entradas -->
      <div class="col-lg-9">

        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="card-body">
          <h2> <?php the_title(); ?> </h2>
          </a>
          <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?> </p>
          <p class="small mb-0">Autor: <?php the_author(); ?> </p>
          <p class="small">Categorias: <?php the_category(' / '); ?> Etiquetas:
          <?php the_tags('', ' / ', '');?>
          </p>
          <img src="img/horitzontal.png" alt="" class="img-fluid mb-3">
          <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>

      </div>
      <!-- Entradas -->

      <!-- Aside -->
      <div class="col-lg-3">
        <div class="card-body">
          <h4>Publicidad</h4>
          <hr>
          <img src="img/vertical.png" alt="" class="img-fluid">
        </div>
      </div>
      <!-- Aside -->

    </div>
  <!-- Blog -->

<?php get_footer(); ?>
