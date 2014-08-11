<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Night Life El Aguafuerte en Chihuahua</title>

    <meta name="description" content="El Aguafuerte es una cantina que te transporta al Chihuahua antiguo, su esencia lo convierten en un lugar con aires culturales">
    <meta name="keywords" content="vida nocturna en chihuahua, el aguafuerte, el aguafuerte chihuahua, cantina, tiempos dorados, estilo antiguo, botana">
    <?php include('modules/head.php'); ?>
  </head>
  <body>

    <!-- MENU -->
    <?php include('modules/menu.php'); ?> <br>
        <div align="center" class="cont-sup">
              <div class="publicidad-rest"><img src="img/publicidad-5.jpg" class="img-responsive" alt=""></div>
        </div>
    <div class="container">
      <div class="row">
          <div class="titulo"><h1> <img src="img/icono-tit.png" > El Aguafuerte <img src="img/icono-tit.png" > </h1></div>
      </div>
    </div>
      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive"></div>
        <div class="row"> 
          <div class="col-md-12">
            <img src="img/nightlife/aguafuerte/aguafuerte.jpg" class="img-responsive" alt="Night Life El Aguafuerte Chihuahua">
          </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/nightlife/aguafuerte/logo.jpg" alt="Logotipo El Aguafuerte">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> El Aguafuerte es una cantina que te transporta al Chihuahua antiguo, su esencia lo convierten en un lugar con aires culturales e históricos sin hacer de lado la diversión. Las tradicionales botanas complementan la experiencia perfectamente y es ideal para pasar un muy buen tiempo con los amigos y contar las novedades, discutir los resultados de los equipos favoritos o quejarse de la pareja y el desamor. ¡Salud!</p>

            <p>El Aguafuerte is a bar that takes you to the old Chihuahua: filled with a cultural and historic atmosphere without leaving the good fun behind. A traditional cantina in all ways, located at the historic city center, this building now hosts a new and ideal spot to come with friends, have some drinks, order some delicious starters and snacks or just get hammered with shots and complain about your love life: cheers!</p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 123.4567 <br><br>
                   <span class="info-rest">Dirección: </span>Calle Victoria No. 823, Col. Centro  <br> Chihuahua, México. <br><br>
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
                    L - D: 1pm a 2am   <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Descargar</a> 
              </div>
              <div class="col-md-12">
                <a href="#" id="element1"  data-toggle="tooltip" data-placement="top" title="Wifi"><img src="img/iconos/1.png" alt="wifi"></a>
                <a href="#" id="element2"  data-toggle="tooltip" data-placement="top" title="Bar"><img src="img/iconos/2.png" alt="bar"></a>
                <a href="#" id="element3"  data-toggle="tooltip" data-placement="top" title="TV"><img src="img/iconos/3.png" alt="tv"></a>
                <a href="#" id="element4"  data-toggle="tooltip" data-placement="top" title="Área de fumar"><img src="img/iconos/4.png" alt="area de fumar"></a>
                <a href="#" id="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="img/iconos/6.png" alt="estacionamiento"></a>
                <a href="#" id="element8"  data-toggle="tooltip" data-placement="top" title="Eventos privados"><img src="img/iconos/8.png" alt="eventos privados"></a>
                <a href="#" id="element10"  data-toggle="tooltip" data-placement="top" title="Reservaciones"><img src="img/iconos/10.png" alt="reservaciones"></a>
                <a href="#" id="element11"  data-toggle="tooltip" data-placement="top" title="Música en vivo"><img src="img/iconos/11.png" alt="música en vivo"></a>
              </div>
            </div> 
          </div> <br>
        </div>

      <?php include('modules/footer.php'); ?>

        <script>
          $(document).ready(function(){
            $('#element1').tooltip('hide');
            $('#element2').tooltip('hide');
            $('#element3').tooltip('hide');
            $('#element4').tooltip('hide');
            $('#element5').tooltip('hide');
            $('#element6').tooltip('hide');
            $('#element7').tooltip('hide');
            $('#element8').tooltip('hide');
            $('#element9').tooltip('hide');
            $('#element10').tooltip('hide');
            $('#element11').tooltip('hide');
          });
        </script>

  </body>
</html>
