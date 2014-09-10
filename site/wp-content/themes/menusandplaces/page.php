<?php get_header(); ?>

  <!-- PAGE -->
  <div class="container cont-sup">
    <div class="row">
        <div class="titulo"><h1> <img src="<?php bloginfo('template_url')?>/img/icono-tit.png" alt=""> <?php the_title(); ?> <img src="<?php bloginfo('template_url')?>/img/icono-tit.png" alt=""> </h1></div>
    </div>
  </div>

    <div class="container"> 
      <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-12 col-sm-9">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
           <div class="col-md-12 col-sm-6 " class="img-responsive">
              <?php the_content(); ?>
            </div>

          <?php endwhile; else: ?>
             <h1>No se encontraron articulos</h1>
          <?php endif; ?>
         
        </div>
      </div> 
    </div> 
    <!-- END / PAGE -->

<?php get_footer(); ?>