<?php get_header(); ?>

  <div align="center" class="cont-sup">
    <div class="publicidad-rest"><a href="http://fordchihuahua.com/site" target="_blank"><img src="<?php bloginfo('template_url')?>/img/publicidad-5.jpg" class="img-responsive" alt="Ford Chihuahua Motors"></a></div>
</div>
  <!-- POST --> 
  <div class="container">
      <div class="row">
        <div class="col-md-4">
         <!-- <a href="#"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a> -->
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
      <div class="lines"> <img src="<?php bloginfo('template_url');?>/img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-12 col-sm-9">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <img src="<?php echo CFS()->get('imagen_central'); ?>" class="img-responsive" alt="<?php the_title();?> Chihuahua"> 
        </div><br /><br />
      </div>
    </div>
        <div class="container">
        <div class="row">
          <div class="col-md-12">
          <img src="<?php echo CFS()->get('logotipo'); ?>" alt="Logotipo <?php the_title();?>"> 
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <br />
            <?php the_content();?>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> <?php echo CFS()->get('telefono'); ?> <br><br>
                   <span class="info-rest">Dirección: </span><?php echo CFS()->get('direccion'); ?><br><br>
                   <span class="info-rest">Ubicación:</span>
                   <a href="#"  data-toggle="modal" data-target="#myModal"> Ver ubicación </a>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Ubicación</h4>
                          </div>
                          <div class="modal-body">
                            <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;ll=28.664288,-106.130719&amp;spn=0.017209,0.017145&amp;t=m&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?ie=UTF8&amp;ll=28.664288,-106.130719&amp;spn=0.017209,0.017145&amp;t=m&amp;z=16&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                      </div>
                    </div>              
                </address>
              </div>
              <div class="col-md-6 text-info"> <br>
                <p>
                  <span class="info-rest">Horario: </span><br>
                    <?php echo CFS()->get('horario'); ?><br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a> 
              </div>
              <div class="col-md-12">
               <?php $path = get_bloginfo('template_url') ?>
               <?php if(CFS()->get('wifi')) echo '<a href="#" class="element1"  data-toggle="tooltip" data-placement="top" title="Wifi"><img src="'.$path.'/img/iconos/1.png" alt="wifi"></a>'; ?>
               <?php if(CFS() ->get('bar'))  echo '<a href="#" class="element2"  data-toggle="tooltip" data-placement="top" title="Bar"><img src="'.$path.'/img/iconos/2.png" alt="bar"></a>';?> 
               <?php if(CFS() ->get('tv')) echo '<a href="#" class="element3"  data-toggle="tooltip" data-placement="top" title="TV"><img src="'.$path.'/img/iconos/3.png" alt="tv"></a>'; ?> 
                <?php if(CFS() ->get('area_de_fumar')) echo '<a href="#" class="element4"  data-toggle="tooltip" data-placement="top" title="Área de fumar"><img src="'.$path.'/img/iconos/4.png" alt="area de fumar"></a>';?> 
                <?php if(CFS() ->get('valet_parking')) echo '<a href="#" class="element5"  data-toggle="tooltip" data-placement="top" title="Valet Parking"><img src="'.$path.'/img/iconos/5.png" alt="valet parking"></a>'; ?>
                <?php if(CFS() ->get('estacionamiento')) echo '<a href="#" class="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="'.$path.'/img/iconos/6.png" alt="estacionamiento"></a>'; ?> 
                <?php if(CFS() ->get('terraza')) echo '<a href="#" class="element7"  data-toggle="tooltip" data-placement="top" title="Terraza"><img src="'.$path.'/img/iconos/7.png" alt="terraza"></a>';?> 
                <?php if(CFS() ->get('eventos_privados')) echo '<a href="#" class="element8"  data-toggle="tooltip" data-placement="top" title="Eventos privados"><img src="'.$path.'/img/iconos/8.png" alt="eventos privados"></a>'; ?> 
                <?php if(CFS() ->get('area_de_ninos')) echo '<a href="#" class="element9"  data-toggle="tooltip" data-placement="top" title="Área de Niños"><img src="'.$path.'/img/iconos/9.png" alt="area de niños"></a>';?> 
                <?php if(CFS() ->get('reservaciones')) echo '<a href="#" class="element10"  data-toggle="tooltip" data-placement="top" title="Reservaciones"><img src="'.$path.'/img/iconos/10.png" alt="reservaciones"></a>';?> 
                <?php if(CFS() ->get('musica')) echo '<a href="#" class="element10"  data-toggle="tooltip" data-placement="top" title="Música en Vivo"><img src="'.$path.'/img/iconos/11.png" alt="musica en vivo"></a>';?> 
              </div>
          <?php endwhile; else: ?>
             <h1>No se encontraron articulos</h1>
          <?php endif ?>
          
         </div>
        </div> <br />
      </div>
    <!-- END / POST -->
<?php get_footer(); ?>