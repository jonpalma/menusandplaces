<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menus and Places | Bares en Chihuahua</title>

    <meta name="description" content="Conoce algunos de los mejores Restaurantes en Chihuahua, excelentes lugares y platillos que disfrutaras.">
    <meta name="keywords" content="Bares en chihuahua, vida nocturna chihuahua, moma chihuahua, sports garden chihuahua, rock and bowl chihuahua, el viejo refugio chihuahua, maria diablita">
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
          <div class="titulo"><h1> <img src="img/icono-tit.png" > Bares <img src="img/icono-tit.png" > </h1></div>
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
              <a href="bares-moma.php"><img src="img/bares/moma/thumb.jpg" class="img-responsive" alt="Bares Moma Chihuahua"></a>
              <div class="info"><h4>MOMA</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing enemo commodi. Autem veritatis culpa rerum ea nesciunt.</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="bares-sports-garden.php"><img src="img/bares/sports-garden/thumb.jpg" class="img-responsive" alt="Bar Sports Garden Chihuahua"></a>
              <div class="info"><h4>SPORTS GARDEN</h4><p>Sports Garden es uno de los bares deportivos con más tradición en la ciudad, toda una vida reuniendo...</p></div>
            </div>
           <div class="col-md-4 col-sm-6">
              <a href="bares-rockandbowl.php"><img src="img/bares/rockandbowl/thumb.jpg" class="img-responsive" alt="Bar Rock And Bowl Chihuahua"></a>
              <div class="info"><h4>ROCK AND BOWL</h4><p>Rock &amp; Bowl es el único club de boliche en la ciudad, punto de encuentro para amigos y familias...</p></div>
            </div>
          </div>
          <div class="">
            <div class="col-md-4 col-sm-6">
              <a href="bares-viejo-refugio.php"><img src="img/bares/viejo-refugio/thumb.jpg" class="img-responsive" alt="Bar El Viejo Refugio Chihuahua"></a>
              <div class="info"><h4>EL VIEJO REFUGIO</h4><p>El Viejo Refugio es un lugar donde se reúne gente adulta y madura. Una cantina que nos hacia falta...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="bares-aguafuerte.php"><img src="img/bares/aguafuerte/thumb.jpg" class="img-responsive" alt="Bar El Aguafuerte Chihuahua"></a>
              <div class="info"><h4>AGUAFUERTE</h4><p>El Aguafuerte es una cantina que te transporta al Chihuahua antiguo, su esencia lo convierten en un lugar...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="bares-maria-diablita.php"><img src="img/bares/maria-diablita/thumb.jpg" class="img-responsive" alt="Bar Delorean Chihuahua"></a>
              <div class="info"><h4>MARÍA DIABLITA</h4><p>María Diablita es concepto de cantina-restaurante que combina la buena comida con los buenos tragos...</p></div>
            </div>
          </div>
          <!--<div class="">
            <div class="col-md-4 col-sm-6">
              <a href="#"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Bar The Beer Box Chihuahua"></a>
              <div class="info"><h4>THE BEER BOX</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laudantium exercitationem nostrum...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="#"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Bar The Beer Box Chihuahua"></a>
              <div class="info"><h4>MEZCALERÍA DON FERNANDO</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laudantium exercitationem nostrum...</p></div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="#"><img src="img/restaurantes/prueba.jpg" class="img-responsive" alt="Bar The Beer Box Chihuahua"></a>
              <div class="info"><h4>DR. ARACLES</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laudantium exercitationem nostrum...</p></div>
            </div>
          </div>-->
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
