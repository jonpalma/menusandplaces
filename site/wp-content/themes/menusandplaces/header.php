<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('the_title');?></title>

    <meta name="description" content="Conoce algunos de los mejores Restaurantes en Chihuahua, excelentes lugares y platillos que disfrutaras.">
    <meta name="keywords" content="Restaurantes en chihuahua, vida nocturna en chihuahua, lugares en chihuahua, comida callejera en chihuahua, revista de restaurantes, quiero comer en chihuahua">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Agencia Mixen - www.mixen.mx">
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
    </head>
  <body>

    <!-- MENU -->
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=517641501684803&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <header>  
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container" style="height:90px; padding-top:25px;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Menus And Places</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="<?php bloginfo('template_url')?>/img/logo.png" class="img-responsive" alt="Logo Menus and Places"></a>
          </div>
          <nav class="navbar-collapse collapse" >
            
            <?php wp_nav_menu(
                      array(
                        'container' => false,
                        'items_wrap' => '<ul class="nav navbar-nav navbar-right" id="menu-top">%3$s</ul>',
                        'theme_location' => 'menu',
                        )); ?>
             
          </nav>
        </div>
      </div>
    </header>