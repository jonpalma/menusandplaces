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
          <a href="../"><span class="glyphicon glyphicon-circle-arrow-left back">  </span></a>
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
              <a href="restaurantes-akari.php"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Callejero Hamburguesas Hechas Como Dios Manda Chihuahua"></a>
              <div class="info"><h4>HAMBURGUESAS HECHAS COMO DIOS MANDA</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing enemo commodi. Autem veritatis culpa rerum ea nesciunt.</p></div>
            </div>
          </div>
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
