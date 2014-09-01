<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Local Food Trucks en Chihuahua</title>

    <meta name="description" content="Conoce algunos de los mejores Restaurantes en Chihuahua, excelentes lugares y platillos que disfrutaras.">
    <meta name="keywords" content="Restaurantes en chihuahua, deli burger chihuahua, burritos el chapo chihuahua, hamburguesas hechas como dios manda chihuahua">
    <?php include('modules/head.php'); ?>
  </head>
  <body>

    <!-- MENU -->
    <?php include('modules/menu.php'); ?> <br>
    <!-- END / MENU -->
    <!-- NOMBRE -->
    <div class="container cont-sup">
      <div class="row">
        <div class="col-md-4">
          <a href="local-food-trucks-chihuahua.php"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
        </div>
        <div class="col-md-4">
          <div class="titulo"><h1> <img src="img/icono-tit.png"> Local Food Trucks <img src="img/icono-tit.png" > </h1></div>
        </div>
        <div class="col-md-4">
          <?php include('modules/iconos.php'); ?>
        </div>
      </div>
    </div> 
    <!-- END / NOMBRE -->
    <!-- RESTAURANTES -->
    <div class="container"> 
      <div class="lines"> <img src="img/lines.png" class="img-responsive" ></div>
      <div class="row"> 
        <div class="col-md-9 col-sm-9">
          <div class="">
              <div class="col-md-4 col-sm-6">
              <a href="local-food-trucks-deli.php"><img src="img/local-food-trucks/deli/thumb.jpg" class="img-responsive" alt="Callejero Deli Burger Chihuahua"></a>
              <div class="info"><h4>DELI BURGER</h4><p>DELI TEAM &amp; GRILL desde 1994 y mejor conocidas como Las hamburguesas que causan adicción, se han destacado...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="local-food-trucks-chapo.php"><img src="img/local-food-trucks/chapo/thumb.jpg" class="img-responsive" alt="Callejero Burritos El Chapo Chihuahua"></a>
              <div class="info"><h4>BURRITOS EL CHAPO</h4><p>Los mejores Burritos de la Tecnológico y sus alrededores. Disfruta con familiares y amigos de su exquisito...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="local-food-trucks-donmauri.php"><img src="img/local-food-trucks/donmauri/thumb.jpg" class="img-responsive" alt="Callejero Burritos El Chapo Chihuahua"></a>
              <div class="info"><h4>DON MAURI</h4><p>Este establecimiento atrajo nuestra atención por su fama de servir unos de los mejores tacos de la ciudad. Además de esto...</p></div>
            </div>
          </div>
          <div class="">
              <div class="col-md-4 col-sm-6">
              <a href="local-food-trucks-venecia.php"><img src="img/local-food-trucks/venecia/thumb.jpg" class="img-responsive" alt="Callejero Burritos El Chapo Chihuahua"></a>
              <div class="info"><h4>RESTAURANT VENECIA</h4><p>Ubicado a pocos metros de la plaza mayor, el placaio de gobierno y el famoso edificio "La Silla de king Kong"...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="local-food-trucks-thai-food.php"><img src="img/local-food-trucks/thai-food/thumb.jpg" class="img-responsive" alt="Callejero Burritos El Chapo Chihuahua"></a>
              <div class="info"><h4>THAI FOOD</h4><p>La comida tailandesa no es algo muy típico de Chihuahua pero que Wan, un inmigrante tailandes, llego, instituyo Thai Food como un...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="local-food-trucks-juarez.php"><img src="img/local-food-trucks/burritos-juarez/thumb.jpg" class="img-responsive" alt="Callejero Burritos El Chapo Chihuahua"></a>
              <div class="info"><h4>BURRITOS JUÁREZ</h4><p>Nuestro amigo fotógrafo/escalador "Tiny" nos recomendó estos burritos. Su descripción fue tan convincente que decidimos...</p></div>
            </div>
          </div>
   <!--   <div class="">
              <div class="col-md-4 col-sm-6">
              <a href="#"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Callejero Venecia Chihuahua"></a>
              <div class="info"><h4>DON MAURI</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus illo explicabo...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="#"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Callejero Thai Food Chihuahua"></a>
              <div class="info"><h4>MEMONTADOS</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic commodi dignissimos...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="#"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Callejero Burritos Juarez Chihuahua"></a>
              <div class="info"><h4>RUDDI'S HOT DOGS</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing enemo commodi. Autem veritatis culpa rerum ea nesciunt.</p></div>
            </div>
          </div> -->
      </div>
        <div class="col-md-3 col-sm-3">
          <?php include('modules/publicidad-lateral.php'); ?>
       </div> <br><br>
      </div> 
    </div> 
    <!-- END / RESTAURANTES -->

    <!-- FOOTER -->
      <?php include('modules/footer.php'); ?>
    <!-- END / FOOTER -->
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
