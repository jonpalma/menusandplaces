<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Restaurantes en Chihuahua</title>

    <meta name="description" content="Conoce algunos de los mejores Restaurantes en Chihuahua, excelentes lugares y platillos que disfrutaras.">
    <meta name="keywords" content="Restaurantes en chihuahua, restauratnes de chihuahua, comida en chihuahua, revista de restaurantes, quiero comer en chihuahua">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" alt=""> Café México Corazón <img src="img/icono-tit.png" alt=""> </h1></div>
      </div>
    </div>
      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive" alt=""></div>
          <div class="row"> 
            <div class="col-md-12">
              <img src="img/restaurantes/cafemexico/large.jpg" class="img-responsive" alt="">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/restaurantes/cafemexico/logo.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> Café México Corazón de Melón es un encantador y auténtico lugar que tiene una esencia única. Sirven su propia marca de café artesanal, orgánico y 100% mexicano. En cuanto lo pruebes vas a percibir la frescura del café molido al momento y preparado en variedad de  sabores fríos o calientes. Sí vienes con hambre prueba su rica comida y postres. Los sábados a partir de las 8 pm disfruta de música en vivo en su agradable terraza.</p>

            <p>Café México Corazón de Melón is a charming little spot located very close to the main hotels. They serve their own artisan, organic and Mexican grown coffee, grinded at the moment of your order to keep its freshness. You can ask for a variety of hot or cold beverages and if you’re hungry try their delicious food and desserts, allow yourself a little pleasure. Every Saturday at 8 pm, live music fills its comfortable terrace.</p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614425.1413 <br><br>
                   <span class="info-rest">Dirección: </span>Ave. Francisco Villa No. 6107 / Local 2 Plaza Cimarrón  <br> Chihuahua, México. <br><br>
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
                    L - V: 9am a 10pm  <br>
                    S: 10am a 10pm <br>
                    D: 4pm a 10pm  <br>  <br>

                    <span class="info-rest">Ver Menu:</span> <a href="#">Descargar</a> 
              </div>
              <div class="col-md-12">
                <a href="#" id="element1"  data-toggle="tooltip" data-placement="top" title="Wifi"><img src="img/iconos/1.png" alt="wifi"></a>
                <a href="#" id="element4"  data-toggle="tooltip" data-placement="top" title="Área de fumar"><img src="img/iconos/4.png" alt="area de fumar"></a>
                <a href="#" id="element6"  data-toggle="tooltip" data-placement="top" title="Estacionamiento"><img src="img/iconos/6.png" alt="estacionamiento"></a>
                <a href="#" id="element7"  data-toggle="tooltip" data-placement="top" title="Terraza"><img src="img/iconos/7.png" alt="terraza"></a>
                <a href="#" id="element8"  data-toggle="tooltip" data-placement="top" title="Eventos privados"><img src="img/iconos/8.png" alt="eventos privados"></a>
                <a href="#" id="element10"  data-toggle="tooltip" data-placement="top" title="Reservaciones"><img src="img/iconos/10.png" alt="reservaciones"></a>
                <a href="#" id="element11"  data-toggle="tooltip" data-placement="top" title="Música en vivo"><img src="img/iconos/11.png" alt="musica en vivo"></a>
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
