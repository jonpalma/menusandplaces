<?php get_header(); ?>

	<!-- SLIDE -->
	<?php include (TEMPLATEPATH. '/slideshow.php'); ?>
    <!-- END / SLIDE -->

      <div class="container"> 
        <div class="lines"> <img src="<?php bloginfo('template_url')?>/img/lines.png" class="img-responsive" alt=""></div>
        <div class="row"> 
          <div class="">
            
            <div class="col-md-2 col-sm-6">
              <a href="<?php echo esc_url( get_category_link( 3 ) ); ?>"><img src="<?php bloginfo('template_url')?>/img/1.png" class="img-responsive imgcentrado" alt="Restaurantes de comida en chihuahua" title="Ver Revista Online"></a>
            </div>
            <div class="col-md-2 col-sm-6">
              <a href="<?php echo esc_url( get_category_link( 4 ) ); ?>"><img src="<?php bloginfo('template_url')?>/img/2.png" class="img-responsive imgcentrado" alt="Vida nocturna en chihuahua" title="Ver Revista Online"></a>
            </div>
            <div class="col-md-2 col-sm-6">
              <a href="<?php echo esc_url( get_category_link( 5 ) ); ?>"><img src="<?php bloginfo('template_url')?>/img/3.png" class="img-responsive imgcentrado" alt="Lugares en chihuahua" title="Ver Revista Online"></a>
            </div>
            <div class="col-md-2 col-sm-6">
              <a href="<?php echo esc_url( get_category_link( 8 ) ); ?>"><img src="<?php bloginfo('template_url')?>/img/4.png" class="img-responsive imgcentrado" alt="Comida callejera en chihuahua" title="Ver Revista Online"></a>
            </div>
            <div class="col-md-2 col-sm-6">
              <a href="<?php echo esc_url( get_category_link( 6 ) ); ?>"><img src="<?php bloginfo('template_url')?>/img/5.png" class="img-responsive imgcentrado" alt="Cafés y Postres en chihuahua" title="Ver Revista Online"></a>
            </div>
            <div class="col-md-2 col-sm-6">
              <a href="<?php echo esc_url( get_category_link( 7 ) ); ?>"><img src="<?php bloginfo('template_url')?>/img/6.png" class="img-responsive imgcentrado" alt="Comida rápida en chihuahua" title="Ver Revista Online"></a>
            </div>
          </div> 
        </div> <br><br>
      </div> 

      <div class="container">
        <div class="row">
          <div class="">
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p1"><img src="<?php bloginfo('template_url')?>/img/publicidad-1.png" class="img-responsive" alt="Buffalo Wild Wins"></a></div>
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p2"><img src="<?php bloginfo('template_url')?>/img/publicidad-2.png" class="img-responsive" alt="Coca Cola"></a></div>
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p3"><img src="<?php bloginfo('template_url')?>/img/publicidad-3.png" class="img-responsive" alt="Fashion Mall"></a></div>
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p4"><img src="<?php bloginfo('template_url')?>/img/publicidad-4.png" class="img-responsive" alt="Automotiz Touche Jeep"></a></div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="p1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <img src="<?php bloginfo('template_url')?>/img/publicidad-1-1.png" alt="Publicidad" class="img-responsive">
              <p>Visitar sitio web <a href="http://buffalowildwings.com.mx" target="_blank">www.buffalowildwings.com.mx/</a></p>
            </div>
          </div>
        </div>
      </div> 
      <!-- Modal -->
      <div class="modal fade" id="p2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <img src="<?php bloginfo('template_url')?>/img/publicidad-2-1.png" alt="Publicidad" class="img-responsive">
              <p>Visitar sitio web <a href="http://coca-cola.com.mx" target="_blank">www.coca-cola.com.mx</a></p>
            </div>
          </div>
        </div>
      </div> 
      <!-- Modal -->
      <div class="modal fade" id="p3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <img src="<?php bloginfo('template_url')?>/img/publicidad-3-1.png" alt="Publicidad" class="img-responsive">
              <p>Visitar sitio web <a href="https://es-es.facebook.com/FashionMallChihuahua" target="_blank"> Fashion Mall Facebook</a></p>
            </div>
          </div>
        </div>
      </div> 
      <!-- Modal -->
      <div class="modal fade" id="p4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
              <img src="<?php bloginfo('template_url')?>/img/publicidad-4-1.png" alt="Publicidad" class="img-responsive">
              <p>Visitar sitio web <a href="http://automotriz-touche.com.mx" target="_blank">www.automotriz-touche.com.mx</a></p>
            </div>

          </div>
        </div>
      </div> 

      <?php wp_link_pages();?>

<?php get_footer(); ?>