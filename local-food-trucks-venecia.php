<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Local Food Trucks Venecia en Chihuahua</title>

    <meta name="description" content="">
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
          <a href="local-food-trucks-chihuahua.php"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Venecia <img src="img/icono-tit.png" > </h1></div>
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
              <img src="img/local-food-trucks/venecia/venecia.jpg" class="img-responsive" alt="Venecia Chihuahua">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/local-food-trucks/venecia/logo.jpg" alt="Donmauri">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Ubicado a pocos metros de la plaza mayor, el palacio de gobierno y el famoso edificio “La Silla de King Kong”. Este lugar lleva mas de 40 años sirviendo comida casera. Un favorito entre los locales que frecuentan la zona centro. Se sirve comida corrida de 1:00pm a 7:00pm y también tienen un desayuno buffet ampliamente recomendado. El lugar abre todos los días, sea desayuno, comida o cena el sazón de este lugar tiene un toque especial y muy tradicional.</p>


          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                   <span class="info-rest">Dirección: </span>----    <br> Chihuahua, México. <br><br>
                   <span class="info-rest">Ubicación:</span>
                   <a href="#"  data-toggle="modal" data-target="#myModal"> No disponible </a>
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
                 <a href="#" class="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="img/iconos/6.png" alt="estacionamiento"></a>
               
              </div>
            </div> 
          </div> <br>
        </div>

      <?php include('modules/footer.php'); ?>

  </body>
</html>
