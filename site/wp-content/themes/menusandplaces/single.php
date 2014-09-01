<?php get_header(); ?>




          <!-- RESTAURANTES -->
    <div class="container"> 
      <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-12 col-sm-9">

    <?php the_post(); ?>
    
     <div class="col-md-12 col-sm-6" class="img-responsive">

        <div class="info"><a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a><p><?php //the_category();?> <?php the_content(); ?></p></div>
      </div>

      </div>

    </div> 
    <!-- END / RESTAURANTES -->


<?php get_footer(); ?>