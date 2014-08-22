<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Local Food Trucks Thai Food en Chihuahua</title>

    <meta name="description" content="La comida tailandesa no es algo muy típico de Chihuahua pero desde que Wan, un inmigrante tailandés, llegó, instituyó Thai Food como un favorito entre locales.">
    <meta name="keywords" content="Locales en chihuahua, callejeros thai food, thai food chihuahua, pollo teriyaki, sopa de camarón, ensalada thai, noodles con camarón, comida tailandesa">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Thai Food <img src="img/icono-tit.png" > </h1></div>
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
              <img src="img/local-food-trucks/thai/thai.jpg" class="img-responsive" alt="Thai  Food Chihuahua">
            </div> <br><br>
        </div> 
      </div> 
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="img/local-food-trucks/thai/logo.jpg" alt="Logotipo Thai Food">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-7 text-rest">
            <h4></h4>
            <p><span class="titulo-rest"></span> La comida tailandesa no es algo muy típico de Chihuahua pero desde que Wan, un inmigrante tailandés, llegó, instituyó Thai Food como un favorito entre locales. Un lugar único donde chocan dos culturas. Por un lado Wan se encarga de deleitar paladares con sus platillos ricos en sabor, ingredientes tailandeses como la "galanga" y el gengibre. Mientras que el tradicional Bar San Luis se encarga de proveer el cómodo ambiente de una cantina mexicana. En palabras más simples del maestro Enrique Servín: "Wan ha sido lo mas interesante que ha pasado en Chihuahua en los últimos años".</p>

            <p>Thai food is definitely not part of Chihuahua's traditions, but ever since Wan, a Thai inmigrant, came to the city, this is one of the local's favorites. It is quite an interesting place, you can nejoy an exotic combination of cultures. Wan is in charge of delighting costumers with his dishes rich in flavor: Thai ingredients such as "galanga", ginger or spicy stuff. Then the traditional Bar San Luis provides the comfortable environment of a Mexican cantina. Put in simple words by locals scholar Enrique Servín "Wan is one the most interesting things that has happened to Chihuahua over the last years".</p>

          </div>
          <div class="col-md-5 text-info-1">
            <div class="col-md-6"> <br>
                <address>
                <p><span class="info-rest">Teléfono:</span> 614 410.2687 <br><br>
                   <span class="info-rest">Dirección: </span>Calle Doblado y 15    <br> Chihuahua, México. <br><br>
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
              </div>
            </div> 
          </div> <br>
        </div>

      <?php include('modules/footer.php'); ?>

  </body>
</html>
