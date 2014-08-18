<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Bares Sports Garden en Chihuahua</title>

    <meta name="description" content="Sports Garden es uno de los bares deportivos con más tradición en la ciudad, toda una vida reuniendo amigos">
    <meta name="keywords" content="bares en chihuahua, bar sports garden, sports garden chihuahua, bar deportivo, botanas, cerveza, bebidas preparadas, música en vivo, buen ambiente">
    <?php include('modules/head.php'); ?>
  </head>
  <body>

    <!-- MENU -->
    <?php include('modules/menu.php'); ?> <br>
        <?php include('modules/publicidad.php'); ?>
    <div class="container">
      <div class="row">
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Sports Garden <img src="img/icono-tit.png" > </h1></div>
      </div>
    </div>
      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive"></div>
        <div class="row"> 
          <div class="col-md-12">
            <img src="img/bares/sports-garden/sports-garden.jpg" class="img-responsive" alt="Bar Sports Garden Chihuahua">
          </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/bares/sports-garden/logo.jpg" alt="Logotipo Sports Garden">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Sports Garden es uno de los bares deportivos con más tradición en la ciudad, toda una vida reuniendo amigos para ver los juegos importantes en cualquier deporte. Este mundial ven y vive el buen ambiente mientras pides una rica botana o destapas unas heladas. Si tienes antojo de tomar enserio, prueba sus bebidas preparadas y diviértete con la música en vivo durante los fines de semana.</p>

            <p>Sports Garden is one of the classics around here, a traditional spot and favorite among locals. Friends have gathered here to watch ‘’the game’’ for years. Take advantage of the atmosphere during this world cup, come and enjoy some cold beers and snacks on its bar; if you’re planning of going heavy, try their prepared drinks and enjoy the live music during the weekends.</p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 414.5286 <br><br>
                   <span class="info-rest">Dirección: </span>Av. San Felipe Col. San Felipe No. 1008-D  <br> Chihuahua, México. <br><br>
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
                    L - S: 6pm a 2am   <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a> 
              </div>
              <div class="col-md-12">
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
