<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Antros Delorean 5 en Chihuahua</title>

    <meta name="description" content=".">
    <meta name="keywords" content="">
    <?php include('modules/head.php'); ?>
  </head>
  <body>

    <!-- MENU -->
    <?php include('modules/menu.php'); ?> <br>
        <?php include('modules/publicidad.php'); ?>
    <!-- NOMBRE -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="antros-chihuahua.php"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Delorean 5 <img src="img/icono-tit.png" > </h1></div>
        </div>
        <div class="col-md-4">
          <?php include('modules/iconos.php'); ?>
        </div>
      </div>
    </div> 
    <!-- END / NOMBRE -->
      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive" ></div>
          <div class="row"> 
            <div class="col-md-12">
              <img src="img/antros/delorean/delorean.jpg" class="img-responsive" alt="Antro Delorean 5 Chihuahua">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/antros/delorean/logo.jpg" alt="Logotipo Delorean 5">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Delorean está en el corazón de esta ciudad; silencioso por fuera, ruidoso por dentro. Al pasar por su peculiar entrada se descubre el diseño innovador y diferente que lleva los sentidos a otro nivel. la música alternativa, moderna y lejos de lo comercial ofrece una noche única. Un concepto interesante con una decoración ecléctica y una barra amplia para servir sus bebidas preparadas exóticamente.</p>

            <p>Delorean is a special spot that hides in the middle of the city. Silent from the outside, noise on the inside. The modern and electronic music, far from commercial, is what makes it different and definitely worth the visit. Decorated in an eclectic way, with a long bar to serve the exotic drinks, this unique place is good option for a good night out.</p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 131.2374 <br><br>
                   <span class="info-rest">Dirección: </span>Calle 17 No. 5 Col. Centro   <br> Chihuahua, México. <br><br>
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

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a>
                </p> 
              </div>
              <div class="col-md-12">
                <a href="#" class="element2"  data-toggle="tooltip" data-placement="top" title="Bar"><img src="img/iconos/2.png" alt="bar"></a>
                <a href="#" class="element3"  data-toggle="tooltip" data-placement="top" title="TV"><img src="img/iconos/3.png" alt="tv"></a>
                <a href="#" class="element4"  data-toggle="tooltip" data-placement="top" title="Área de fumar"><img src="img/iconos/4.png" alt="area de fumar"></a>
                <a href="#" class="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="img/iconos/6.png" alt="estacionamiento"></a>
                <a href="#" class="element8"  data-toggle="tooltip" data-placement="top" title="Eventos privados"><img src="img/iconos/8.png" alt="eventos privados"></a>
                <a href="#" class="element10"  data-toggle="tooltip" data-placement="top" title="Reservaciones"><img src="img/iconos/10.png" alt="reservaciones"></a>
              </div>
            </div> 
          </div> <br>
        </div>

      <?php include('modules/footer.php'); ?>

  </body>
</html>
