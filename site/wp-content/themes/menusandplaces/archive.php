<?php get_header();?>

          <!-- RESTAURANTES -->
    <div class="container"> 
      <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-9 col-sm-9">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
     <div class="col-md-4 col-sm-6" class="img-responsive">
            <a href="<?php the_permalink();?>">
              <!-- IMAGEN RESTAURANT THUMB -->
              <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); }?></a>

        <div class="info"><a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a><p><?php //the_category();?> <?php the_excerpt(); ?></p></div>
      </div>

    <?php endwhile; else: ?>
    
    <h1>No se encontraron articulos</h1>
    <?php endif; ?>
        

      </div>
      <div class="col-md-3 col-sm-3">
          <a href="http://thewaterhouse.com" target="_blank"><img src="<?php bloginfo('template_url')?>/img/restaurantes/publicidad.jpg" class="img-responsive" alt=""></a>       </div>
       <br><br>
      </div> 
    </div> 
    <!-- END / RESTAURANTES -->


<?php get_footer(); ?>