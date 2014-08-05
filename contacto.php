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
    <div class="container cont-sup">
      <div class="row">
          <div class="titulo"><h1> <img src="img/icono-tit.png" alt=""> Contacto <img src="img/icono-tit.png" alt=""> </h1></div>
      </div>
    </div>
      <div class="container"> 
        <div class="lines"> <img src="img/lines.png" class="img-responsive" alt=""></div>
          <div class="row"> 
            <div class="col-md-12">
              
            </div> 
        </div> 
      </div> 

      <div class="container">
        <div class="row">
          <div class="col-md-7 texto">
            <h4><strong>Envianos tus dudas</strong></h4>
            <form class="form-horizontal" role="form" action="enviar.php">
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
            <div class="col-lg-10">
              <input name="name" type="" class="form-control" id="inputEmail1" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword1" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input name="email" type="" class="form-control" id="inputPassword1" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword1" class="col-lg-2 control-label">Teléfono</label>
            <div class="col-lg-10">
              <input name="phone" type="" class="form-control" id="inputPassword1" placeholder="Teléfono">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword1" class="col-lg-2 control-label">Servicios</label>
            <div class="col-lg-10">
              <select name="service" id="service" name="service" class="form-control">
                <option selected >Seleccionar una opción</option>
                <option value="Dudas">Restaurantes</option>
                <option value="Dudas">Night Life</option>
                <option value="Ventas">Places</option>
                <option value="Otros">Callejeros</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword1" class="col-lg-2 control-label">Mensaje</label>
            <div class="col-lg-10">
              <textarea name="message" type="" class="form-control" rows="10" id="inputPassword1" placeholder=""></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>
        </form> 

          </div>
          <div class="col-md-5 texto">
            <div class="col-md-6"> <br><br>
              <p><strong>Teléfono:</strong> 614 458 8585 <br><br>

              <strong>Dirección: </strong>Aqui va la direccion del lugar con #5485 <br>
              Chihuahua, México. </p>
            </div>
            <div class="col-md-6"> <br><br>
              <p><strong>Ver Menu:</strong> Descargar <br><br>

              <strong>Ubicación:</strong> Ver</p>
            </div>
          </div> 
        </div> <br>
      </div>

      <?php include('modules/footer.php'); ?>

        <script type="text/javascript">
    $(document).ready(function(){
         $("#myCarousel2").carousel();
    });
    </script>

  </body>
</html>
