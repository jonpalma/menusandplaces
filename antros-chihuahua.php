<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Antros en Chihuahua</title>

    <meta name="description" content="Conoce algunos de los mejores Restaurantes en Chihuahua, excelentes lugares y platillos que disfrutaras.">
    <meta name="keywords" content="Antros en chihuahua, vida nocturna chihuahua, lotus chihuahua, barezzito chihuahua, delorean chihuahua">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Antros <img src="img/icono-tit.png" > </h1></div>
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
              <a href="antros-lotus.php"><img src="img/antros/lotus/thumb.jpg" class="img-responsive" alt="Antro Lotus Chihuahua"></a>
              <div class="info"><h4>LOTUS</h4><p>Lotus es un lugar perfecto para ir a disfrutar de unos tragos y soltar el estrés de la semana con los buenos amigos...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="antros-barezzito.php"><img src="img/antros/barezzito/thumb.jpg" class="img-responsive" alt="Antro Barezzito Chihuahua"></a>
              <div class="info"><h4>BAREZZITO</h4><p>Todo un clásico en la ciudad, se ha hecho popular entre los que no sólo buscan tomar unas copas y escuchar música...</p></div>
            </div>
           <div class="col-md-4 col-sm-6">
              <a href="antros-delorean.php"><img src="img/antros/delorean/thumb.jpg" class="img-responsive" alt="Antro Delorean Chihuahua"></a>
              <div class="info"><h4>DELOREAN</h4><p>Delorean está en el corazón de esta ciudad; silencioso por fuera, ruidoso por dentro. Al pasar por su...</p></div>
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
