<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Restaurantes Taco Baja en Chihuahua</title>

    <meta name="description" content="Taco Baja comenzó su historia en un pequeño local escondido, ahora son todo un favorito de la gente, sinónimo de buena comida y buen ambiente.">
    <meta name="keywords" content="Restaurantes en chihuahua, taco baja, taco baja chihuahua, buena comida, buen ambiente, agradable terraza, cerveza, frescos platillos, aguachiles, ceviches, tacos, quesadillas">
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
          <a href="restaurantes-en-chihuahua.php"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Taco Baja <img src="img/icono-tit.png" > </h1></div>
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
              <img src="img/restaurantes/tacobaja/large.jpg" class="img-responsive" alt="Restaurante Taco Baja Chihuahua">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/restaurantes/tacobaja/logo.jpg" alt="Logotipo Taco Baja">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Taco Baja comenzó su historia en un pequeño local escondido, ahora son todo un favorito de la gente, sinónimo de buena comida y buen ambiente. Este mundial te reciben en su agradable terraza para disfrutar los partidos con una cerveza bien helada junto con cualquiera de sus frescos platillos: aguachiles, ceviches, tacos, quesadillas y más. Un lugar con sabor a playa, ideal para pasar un rato relajado este verano. </p>

            <p>Taco Baja started its history in a small establishment hidden somewhere in the city, now they’re a favorite among locals looking for good food and better atmosphere. Its cozy terrace invites you to sit down, grab a cold beer and order some of their fresh seafood while enjoying the game during this World Cup. A spot with that beach vibe, perfect to spend a summer evening. </p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 430.1064  <br><br>
                   <span class="info-rest">Dirección: </span>Perif. Ortiz Mena No. 3204 Lomas del Santuario. <br><br>
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
                  L - S  : 10am a 6pm <br>
                  D: 10am a 7pm     <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a> 
              </div>
              <div class="col-md-12">
                <a href="#" class="element1"  data-toggle="tooltip" data-placement="top" title="Wifi"><img src="img/iconos/1.png" alt="wifi"></a>
                <a href="#" class="element2"  data-toggle="tooltip" data-placement="top" title="Bar"><img src="img/iconos/2.png" alt="bar"></a>
                <a href="#" class="element3"  data-toggle="tooltip" data-placement="top" title="TV"><img src="img/iconos/3.png" alt="tv"></a>
                <a href="#" class="element4"  data-toggle="tooltip" data-placement="top" title="Área de fumar"><img src="img/iconos/4.png" alt="area de fumar"></a>
                <a href="#" class="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="img/iconos/6.png" alt="estacionamiento"></a>
                <a href="#" class="element7"  data-toggle="tooltip" data-placement="top" title="Terraza"><img src="img/iconos/7.png" alt="terraza"></a>
              </div>
            </div> 
          </div> <br>
        </div>

      <?php include('modules/footer.php'); ?>

  </body>
</html>
