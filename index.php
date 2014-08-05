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
    <?php include('modules/menu.php'); ?>
    <div class="container cont-sup-i">
      <div class="row">
        <div class="col-md-12">
          <!-- SLIDE -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/banner/1.jpg" class="img-responsive" alt="">
                <div class="container">
                  <div class="carousel-caption">
                    <h1></h1>
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="img/banner/2.jpg" class="img-responsive" alt="">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="img/banner/3.jpg" class="img-responsive" alt="">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
             
              <div class="item">
                <img src="img/banner/4.jpg" class="img-responsive" alt="">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="img/banner/5.jpg" class="img-responsive" alt="">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
           </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
          </div><!-- END / SLIDE -->
        </div>
      </div>
    </div>

      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive" alt=""></div>
        <div class="row"> 
          <div class="">
            
            <div class="col-md-3 col-sm-6">
              <a href="restaurantes.php"><img src="img/1.png" class="img-responsive" alt="Restaurante de comida en chihuahua" title="Ver Revista Online"></a>
              <div class="info"><p>Lorem ipsum dolor sit amet, consectecto in, abusto nobis nam eligendi quibusdam voluptatum dololuta maxime deserunt.</p></div>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="revista.php"><img src="img/2.png" class="img-responsive" alt="Restaurante de comida en chihuahua" title="Ver Revista Online"></a>
              <div class="info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing enemo commodi. Autem veritatis culpa rerum ea nesciunt.</p></div>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="revista.php"><img src="img/3.png" class="img-responsive" alt="Restaurante de comida en chihuahua" title="Ver Revista Online"></a>
              <div class="info"><p>Lorem ipsum dolor sit lectus, ratione ipsum invelis, reiciendis consequatur iste dolorum tempora dicta.</p></div>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="revista.php"><img src="img/4.png" class="img-responsive" alt="Restaurante de comida en chihuahua" title="Ver Revista Online"></a>
              <div class="info"><p>Lorem ipsum dolor  ratione accusamus ipsa ut facere fugit voluptatum odio assumenda quidem eaque incidunt optio.</p></div>
            </div>
          </div> 
        </div> <br><br>
      </div> 

      <div class="container">
        <div class="row">
          <div class="">
            <div class="col-md-6 col-sm-6 marketing"><img src="img/publicidad-1.png" class="img-responsive" alt=""></div>
            <div class="col-md-6 col-sm-6 marketing"><img src="img/publicidad-2.png" class="img-responsive" alt=""></div>
            <div class="col-md-6 col-sm-6 marketing"><img src="img/publicidad-3.png" class="img-responsive" alt=""></div>
            <div class="col-md-6 col-sm-6 marketing"><img src="img/publicidad-4.png" class="img-responsive" alt=""></div>
          </div>
        </div>
      </div>

      <?php include('modules/footer.php'); ?>

        <script type="text/javascript">
    $(document).ready(function(){
         $("#myCarousel2").carousel();
    });
    </script>

  </body>
</html>
