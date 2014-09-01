<?php get_header(); ?>


  <!-- POST --> <br><br><br><br>
  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="restaurantes-en-chihuahua.php"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="<?php bloginfo('template_url')?>/img/icono-tit.png" > <?php the_title(); ?>  <img src="<?php bloginfo('template_url')?>/img/icono-tit.png" > </h1></div>
        </div>
        <div class="col-md-4">
          <div class="iconos">
				<div class="iconos-img">
				   <a href="#" class="element1"  data-toggle="tooltip" data-placement="top" title="Restaurantes"><img src="<?php bloginfo('template_url')?>/img/iconos/i-1.png" class="img-responsive" alt="Restaurantes de comida en chihuahua" title=""></a>
				   <a href="#" class="element2"  data-toggle="tooltip" data-placement="top" title="Bares"><img src="<?php bloginfo('template_url')?>/img/iconos/i-2.png" class="img-responsive" alt="Vida nocturna en chihuahua" title=""></a>
				   <a href="#" class="element3"  data-toggle="tooltip" data-placement="top" title="Antros"><img src="<?php bloginfo('template_url')?>/img/iconos/i-3.png" class="img-responsive" alt="Lugares en chihuahua" title=""></a>
				   <a href="#" class="element4"  data-toggle="tooltip" data-placement="top" title="Food Trucks"><img src="<?php bloginfo('template_url')?>/img/iconos/i-4.png" class="img-responsive" alt="Comida callejera en chihuahua" title=""></a>
				   <a href="#" class="element5"  data-toggle="tooltip" data-placement="top" title="Cafés y Postres"><img src="<?php bloginfo('template_url')?>/img/iconos/i-5.png" class="img-responsive" alt="Cafés y Postres en chihuahua" title=""></a>
				   <a href="#" class="element6"  data-toggle="tooltip" data-placement="top" title="Comida Rápida"><img src="<?php bloginfo('template_url')?>/img/iconos/i-6.png" class="img-responsive" alt="Comida rápida en chihuahua" title=""></a>
				</div>
			</div>
        </div>
      </div>
    </div> 

    <div class="container"> 
      <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-12 col-sm-9">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
           <div class="col-md-12 col-sm-6 " class="img-responsive">
              <div><p><?php //the_category();?> <?php the_content(); ?></p></div>
            </div>

          <?php endwhile; else: ?>
             <h1>No se encontraron articulos</h1>
          <?php endif; ?>
         
        </div>
      </div> 
    </div> 
    <!-- END / POST -->


<?php get_footer(); ?>