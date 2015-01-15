<?php 
/*
Template Name: Inicio
*/
        get_header(); 
?>

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
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p1"><img src="<?php echo CFS()->get('publicidad_1_small'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_1_empresa'); ?>"></a></div>
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p2"><img src="<?php echo CFS()->get('publicidad_2_small'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_2_empresa'); ?>"></a></div>
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p3"><img src="<?php echo CFS()->get('publicidad_3_small'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_3_empresa'); ?>"></a></div>
            <div class="col-md-6 col-sm-6 marketing"><a href="#" data-toggle="modal" data-target="#p4"><img src="<?php echo CFS()->get('publicidad_4_small'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_4_empresa'); ?>"></a></div>
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
              <img src="<?php echo CFS()->get('publicidad_1_large'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_1_empresa'); ?>">
              <p>Visitar sitio web <a href="<?php echo CFS()->get('publicidad_1_url'); ?>" target="_blank">aquí</a></p>
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
              <img src="<?php echo CFS()->get('publicidad_2_large'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_1_empresa'); ?>">
              <p>Visitar sitio web <a href="<?php echo CFS()->get('publicidad_2_url'); ?>" target="_blank">aquí</a></p>
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
              <img src="<?php echo CFS()->get('publicidad_3_large'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_1_empresa'); ?>">
              <p>Visitar sitio web <a href="<?php echo CFS()->get('publicidad_3_url'); ?>" target="_blank">aquí</a></p>
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
              <img src="<?php echo CFS()->get('publicidad_4_large'); ?>" class="img-responsive" alt="<?php echo CFS()->get('publicidad_1_empresa'); ?>">
              <p>Visitar sitio web <a href="<?php echo CFS()->get('publicidad_4_url'); ?>" target="_blank">aquí</a></p>
            </div>

          </div>
        </div>
      </div> 

      <?php wp_link_pages();?>

<?php get_footer(); ?>