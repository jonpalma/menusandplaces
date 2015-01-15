<?php get_header();?>


  <div align="center" class="cont-sup">
    <div class="publicidad-rest"><?php echo do_shortcode('[cycloneslider id="publicidad-top"]');?></div>
</div>

    <!-- RESTAURANTES --> 
  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!-- <a href="#"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a> -->
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="<?php bloginfo('template_url')?>/img/icono-tit.png" > <?php wp_title(''); ?>  <img src="<?php bloginfo('template_url')?>/img/icono-tit.png" > </h1></div>
        </div>
        <div class="col-md-4">
          <div class="iconos">
        <div class="iconos-img">
           <a href="<?php echo esc_url( get_category_link( 3 ) ); ?>" class="element1"  data-toggle="tooltip" data-placement="top" title="Restaurantes"><img src="<?php bloginfo('template_url')?>/img/iconos/i-1.png" class="img-responsive" alt="Restaurantes de comida en chihuahua" title=""></a>
           <a href="<?php echo esc_url( get_category_link( 4 ) ); ?>" class="element2"  data-toggle="tooltip" data-placement="top" title="Bares"><img src="<?php bloginfo('template_url')?>/img/iconos/i-2.png" class="img-responsive" alt="Vida nocturna en chihuahua" title=""></a>
           <a href="<?php echo esc_url( get_category_link( 5 ) ); ?>" class="element3"  data-toggle="tooltip" data-placement="top" title="Antros"><img src="<?php bloginfo('template_url')?>/img/iconos/i-3.png" class="img-responsive" alt="Lugares en chihuahua" title=""></a>
           <a href="<?php echo esc_url( get_category_link( 8 ) ); ?>" class="element4"  data-toggle="tooltip" data-placement="top" title="Food Trucks"><img src="<?php bloginfo('template_url')?>/img/iconos/i-4.png" class="img-responsive" alt="Comida callejera en chihuahua" title=""></a>
           <a href="<?php echo esc_url( get_category_link( 6 ) ); ?>" class="element5"  data-toggle="tooltip" data-placement="top" title="Cafés y Postres"><img src="<?php bloginfo('template_url')?>/img/iconos/i-5.png" class="img-responsive" alt="Cafés y Postres en chihuahua" title=""></a>
           <a href="<?php echo esc_url( get_category_link( 7 ) ); ?>" class="element6"  data-toggle="tooltip" data-placement="top" title="Comida Rápida"><img src="<?php bloginfo('template_url')?>/img/iconos/i-6.png" class="img-responsive" alt="Comida rápida en chihuahua" title=""></a>
        </div>
      </div>
        </div>
      </div>
    </div> 

    <div class="container"> 
      <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-9 col-sm-9">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
           <div class="col-md-4 col-sm-6" class="img-responsive">
              <a href="<?php the_permalink();?>">
              <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); }?></a>
              <div class="info"><a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a><p><?php echo get_excerpt(); ?></p></div>
            </div>

          <?php endwhile; else: ?>
          <h1>No se encontraron articulos</h1>
          <?php endif; ?>

      </div>
        <div class="col-md-3 col-sm-3">
	  <div class="sideAds"><?php echo do_shortcode('[cycloneslider id="publicidad-lateral"]');?></div>
        </div> <br><br>
      </div> 
    </div> 
    <!-- END / RESTAURANTES -->





<?php get_footer(); ?>