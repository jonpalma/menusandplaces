<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Cafés y Postres en Chihuahua</title>

    <meta name="description" content="Conoce algunos de los mejores Restaurantes en Chihuahua, excelentes lugares y platillos que disfrutaras.">
    <meta name="keywords" content="Cafés y postres en chihuahua, lugares chihuahua, el hojaldre chihuahua, el elefante de la bastilla chihuahua, betty cookie chihuahua, café méxico corazón chihuahua">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Cafés y Postres <img src="img/icono-tit.png" > </h1></div>
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
              <a href="cafes-y-postres-hojaldre.php"><img src="img/cafes-y-postres/hojaldre/thumb.jpg" class="img-responsive" alt="Cafés y Postres El Hojaldre Chihuahua"></a>
              <div class="info"><h4>EL HOJALDRE</h4><p>El Hojaldre es un lugar que muestra a nuestra ciudad tal y como es. Pequeño, acogedor y con pocas mesas le dan...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="cafes-y-postres-elefantebastilla.php"><img src="img/cafes-y-postres/elefantebastilla/thumb.jpg" class="img-responsive" alt="Cafés y Postres El Elefante De La Bastilla Chihuahua"></a>
              <div class="info"><h4>EL ELEFANTE DE LA BASTILLA</h4><p>Elefante de la Bastilla es una pequeña...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="restaurantes-akari.php"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Cafés y Postres Betty Cookie Chihuahua"></a>
              <div class="info"><h4>BETTY COOKIE</h4><p>Lorem ipsum dolor sit lectus, ratione ipsum invelis, reiciendis consequatur iste dolorum tempora dicta.</p></div>
            </div>
          </div>
          <div class="">
            <div class="col-md-4 col-sm-6">
              <a href="cafes-y-postres-cafemexico.php"><img src="img/cafes-y-postres/cafemexico/thumb.jpg" class="img-responsive" alt="Cafés y Postres Café México Corazón Chihuahua"></a>
              <div class="info"><h4>CAFÉ MÉXICO CORAZÓN</h4><p>Café México Corazón de Melón es un encantador y auténtico lugar que tiene una esencia única...</p></div>
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
