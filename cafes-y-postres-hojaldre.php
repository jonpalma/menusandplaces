<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Cafés y Postres El Hojaldre en Chihuahua</title>

    <meta name="description" content="El Hojaldre es un lugar que muestra a nuestra ciudad tal y como es. Pequeño, acogedor y con pocas mesas le dan esa atmósfera personal">
    <meta name="keywords" content="Cafés y postres en chihuahua, Lugares en chihuahua, cafetería el hojaldre, el hojaldre chihuahua, desayunos, cenas, respostería, cuadripastes rellenos, sazón, exposiciones de arte, música, poesía, venta de objetos artísticos">
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
          <a href="../"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="img/icono-tit.png"> El Hojaldre <img src="img/icono-tit.png" > </h1></div>
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
              <img src="img/cafes-y-postres/hojaldre/hojaldre.jpg" class="img-responsive" alt="Cafetería El Hojaldre Chihuahua">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/cafes-y-postres/hojaldre/logo.jpg" alt="Logotipo El Hojaldre">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> El Hojaldre es un lugar que muestra a nuestra ciudad tal y como es. Pequeño, acogedor y con pocas mesas le dan esa atmósfera personal y totalmente casul. Perfecto para ir a relajarse desde el desayuno hasta la cena. La especialidad son los cuadripastes rellenos y una excelente repostería. El arte y el talento local son parte de sus sazón ya que hay exposiciones de arte y se venden objetos artísticos que son únicos. Prepara tus cuerdas vocales por que los martes son de música y poesía.</p>

            <p>El Hojaldre it is a place that shows our city as it is. Small, cozy, and with few tables is what gives this spot its originality. The atmosphere is totally casual, perfect to go and relax from breakfast till dinner while you enjoy delicious puff pastry patties filled with stews. Art and local talent are also part of the ingredients here: exhibitions and unique art piecesare also sold in here. Prepare your vocal cord because Tuesdays are for music and poetry. </p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 413.4329 <br><br>
                   <span class="info-rest">Dirección: </span>Calle Morelos No. 106, Centro   <br> Chihuahua, México. <br><br>
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
                    M - D: 9am a 9.30pm <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a> 
              </div>
              <div class="col-md-12">
                <a href="#" id="element8"  data-toggle="tooltip" data-placement="top" title="Eventos privados"><img src="img/iconos/8.png" alt="eventos privados"></a>
                <a href="#" id="element10"  data-toggle="tooltip" data-placement="top" title="Reservaciones"><img src="img/iconos/10.png" alt="reservaciones"></a>
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
