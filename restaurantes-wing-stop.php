<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Restaurantes Wing Stop en Chihuahua</title>

    <meta name="description" content="Wing Stop es un lugar con un ambiente que te hará salirte de la rutina, ideal para disfrutar">
    <meta name="keywords" content="Restaurantes en chihuahua, wing stop, wing stop chihuahua, alitas, salsas, cerveza, sandwich, papas fritas, eventos deportivos, pantallas hd">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Wing Stop <img src="img/icono-tit.png" > </h1></div>
        </div>
        <div class="col-md-4">
          <?php include('modules/iconos.php'); ?>
        </div>
      </div>
    </div> 
    <!-- END / NOMBRE -->
      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive"></div>
        <div class="row"> 
          <div class="col-md-12">
            <img src="img/restaurantes/wingstop/wingstop.jpg" class="img-responsive" alt="Restaurante Wing Stop Chihuahua">
          </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row"
          <div class="col-md-12">
            <img src="img/restaurantes/wingstop/logo.jpg" alt="Logotipo Wing Stop">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Wing Stop es un lugar con un ambiente que te hará salirte de la rutina, ideal para
              disfrutar de cualquier evento deportivo en cualquiera de sus 14 pantallas. Sus alitas con 11 diferentes tipos de salsas
              lo han hecho famoso, sin embargo los sándwiches, papas fritas y demás platillos no se quedan fuera de las jugada. Acompaña
              que pidas con una cerveza de su amplia variedad. Ven con los expertos en alitas.<br>(Cuenta con servicio a domicilio).</p>

            <p>Wing stop you've probably been here with your friends watching "the game" in any of their 14 T.V. screens. Sit down, sip that
              cold beer, get some world-famous chicken wings, or any other thing from the menu and just enjoy not having any worry in your head.
              Located very close to the main hotels, you can ask for its delivery service if you don't feel like going out. Come with the wing experts.</p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 430.3710 / 614 413.2886<br><br>
                   <span class="info-rest">Dirección: </span>Fashion Mall, Planta Baja / Av. Américas y Perif. Ortiz Mena No. 300, Plaza San felipe  <br> Chihuahua, México. <br><br>
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
                    
                    L - D: 12pm a 1.30am  <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a> 
              </div>
              <div class="col-md-12">
                <a href="#" id="element1"  data-toggle="tooltip" data-placement="top" title="Wifi"><img src="img/iconos/1.png" alt="wifi"></a>
                <a href="#" id="element2"  data-toggle="tooltip" data-placement="top" title="Bar"><img src="img/iconos/2.png" alt="bar"></a>
                <a href="#" id="element3"  data-toggle="tooltip" data-placement="top" title="TV"><img src="img/iconos/3.png" alt="tv"></a>
                <a href="#" id="element9"  data-toggle="tooltip" data-placement="top" title="Área de niños"><img src="img/iconos/9.png" alt="área de niños"></a>
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
