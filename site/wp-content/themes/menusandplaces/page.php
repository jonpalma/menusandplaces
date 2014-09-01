<?php get_header(); ?>


<br><br>

          <!-- RESTAURANTES -->
    <div class="container"> 
      <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-12 col-sm-9">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
     <div class="col-md-12 col-sm-6" class="img-responsive">


        <div class=""><a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a><p><?php //the_category();?> <?php the_content(); ?></p></div>
      </div>

    <?php endwhile; else: ?>
    
    <h1>No se encontraron articulos</h1>
    <?php endif; ?>
        

      </div>
      </div> 
    </div> 
    <!-- END / RESTAURANTES -->


<?php get_footer(); ?>