<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Restaurantes Buffalo Wild Wings en Chihuahua</title>

    <meta name="description" content="Buffalo Wild Wings es un lugar donde hay todos los deportes todas las temporadas; mas de 40 pantallas HD">
    <meta name="keywords" content="Restaurantes chihuahua, buffalo wild wings, buffalo wild wings chihuahua, pantallas hd, cervezas, alitas, salsas, hamburguesas, música, deportes">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Buffalo Wild Wings <img src="img/icono-tit.png" > </h1></div>
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
              <img src="img/restaurantes/buffalo/large.jpg" class="img-responsive" alt="Restaurante Buffalo Wild Wings Chihuahua">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/restaurantes/buffalo/logo.jpg" alt="Logotipo Buffalo Wild Wings">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Buffalo Wild Wings es un lugar donde hay todos los deportes todas las temporadas; mas de 40 pantallas HD distribuidas en sus paredes, cervezas de todas partes del mundo, deliciosas alitas con infinidad de salsas, hamburguesas y otros platillos más. Mientras esperas tu platillo toma una de sus tablets y juega o escoge la música que quieras escuchar en el lugar. Alitas, cerveza y deportes ¿Qué más se puede pedir?</p>

            <p>Buffalo Wild Wings is a place where you can find all sports all seasons. The famous franchise has more than 40 HD monitors, beers from all over the World, thousands of wing flavors, hamburgers and much more. While you wait for you order, grab one of the tablets and play a game or even pick the music you want to hear in the place. Wings, beer and sports, what else can we ask for?. </p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 6144255858 <br><br>
                   <span class="info-rest">Dirección: </span>Perif. de la Juventud
                  Vía Trentino  No. 5700 Plaza Distrito 1  <br><br>
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
                   D - Mi: 12pm a 12am <br>
                    J - S: 12pm a 1am <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Próximamente</a> 
              </div>
              <div class="col-md-12">
                <a href="#" class="element1"  data-toggle="tooltip" data-placement="top" title="Wifi"><img src="img/iconos/1.png" alt="wifi"></a>
                <a href="#" class="element2"  data-toggle="tooltip" data-placement="top" title="Bar"><img src="img/iconos/2.png" alt="bar"></a>
                <a href="#" class="element3"  data-toggle="tooltip" data-placement="top" title="TV"><img src="img/iconos/3.png" alt="tv"></a>
                <a href="#" class="element4"  data-toggle="tooltip" data-placement="top" title="Área de fumar"><img src="img/iconos/4.png" alt="area de fumar"></a>
                <a href="#" class="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="img/iconos/6.png" alt="estacionamiento"></a>
                <a href="#" class="element7"  data-toggle="tooltip" data-placement="top" title="Terraza"><img src="img/iconos/7.png" alt="terraza"></a>
                <a href="#" class="element10"  data-toggle="tooltip" data-placement="top" title="Reservaciones"><img src="img/iconos/10.png" alt="reservaciones"></a>
              </div>
            </div> 
          </div> <br>
        </div>

      <?php include('modules/footer.php'); ?>

  </body>
</html>
