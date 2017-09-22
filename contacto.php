<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rental">
    <meta name="author" content="John Bolorinos">

    <link rel="shortcut icon" href="ico/logo.png">

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42939527-1', 'tabarcaisland.com');
  ga('send', 'pageview');

</script>

<!-- Adding script for reCaptcha -->
<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>

    <title>Contacto - Tabarca Island</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


    <style>
    .navbar {
     margin: 0;
     background: url('background.jpg');
     background-size: 100% 100%;
     background-repeat:no-repeat;
    display: compact;
     font: 13px/18px "Helvetica Neue", Helvetica, Arial, sans-serif;
   }

     .navbar-inverse .navbar-brand {
        color: #e7d2aa;
        background:url('stiched-cloth.jpg');
        background-size: 100% 100%;
        background-repeat:no-repeat;
        display: compact;
        text-shadow: 1px 1px 3px black;
     }

.navbar-btn {
      background:url('british_flag.jpg');
      background-size: 100% 100%;
      background-repeat:no-repeat;
      display: compact;
     }
      .navbar-inverse .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #f4e4d9;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > li > a{
        color:#e7d2aa;
      }

      .carousel-caption {
        color:#e7d2aa;
      }

      .footer {
        background-color:#d1be94;
        text-align:center;
      }
</style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.html">Tabarca Island</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sobre.html">Sobre Tabarca</a></li>
            <li><a href="galeria.html">Galeria</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li class="active"><a href="contacto.php">Contacto</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Idioma<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="contact.php">English</a></li>
                <li><a href="#">Español</a></li>
              </ul>
            </li>          
          </ul>
            
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contacto</h1>
          <ol class="breadcrumb">
            <li><a href="inicio.html">Inicio</a></li>
            <li class="active">Contacto</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=38.166778,-0.480687&amp;num=1&amp;t=h&amp;ie=UTF8&amp;ll=38.164289,-0.476918&amp;spn=0.01181,0.018239&amp;z=15&amp;output=embed"></iframe>
        </div>
      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Contacta con nosotros!</h3>
          <p>Tarifa: €145/día, mínima estancia una semana. Ofrecemos descuentos especiales fuera de temporada.</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" name="contacto" action="contact-form-submission.php">
              <div class="form-group col-lg-4">
                <label for="input1">Nombre y Apellidos</label>
                <input type="text" name="contact_name" class="form-control" id="input1">
              </div>
              <div class="form-group col-lg-4">
                <label for="input2">Email</label>
                <input type="email" name="contact_email" class="form-control" id="input2">
              </div>
              <div class="form-group col-lg-4">
                <label for="input3">Teléfono (opcional)</label>
                <input type="phone" name="contact_phone" class="form-control" id="input3">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label for="input4">Mensaje</label>
                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" name="save" value="contacto">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <div class="g-recaptcha" data-sitekey="6Ld-mgATAAAAAKSQ1G4PTtoHWFK665x4_fA-a2pK"></div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Tabarca Island</h3>
          <p>
            Pou del Pal 6<br>
            Tabarca, Alicante 03138<br>
            España<br>
          </p>
          <p><i class="icon-phone"></i> <abbr title="Phone">Oficina</abbr>: (+34) 916-562-584</p>
          <p><i class="icon-phone"></i> <abbr title="Phone">Móvil</abbr>: (+34) 639-783-629</p>
          <p><i class="icon-envelope-alt"></i> <abbr title="Email">E</abbr>: <a href="mailto:gayle@tabarcaisland.com">gayle@tabarcaisland.com</a></p>
          
          <div class="well well-sm">
          <h4>Como llegar:</h4>
          <ul>
            <li><i>Desde el Puerto de <strong>Santa Pola</strong>: </i><a href="http://tabarbus.com.es/">Tabarbus</a> (tel: 687-916-450) - Travesía 15 minutos </li> 
            <br>
            <li><i>Desde el Puerto de <strong>Alicante</strong>: </i><a href="http://cruceroskontiki.com/">Cruceros Kontiki</a> (tel: 686-994-538) - Travesía 55 minutos </li>
          </div>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

<div class="footer">
 <hr>
            <a href="http://tabarcaisland.com/sobre.html">Sobre Tabarca</a> |
            <a href="http://tabarcaisland.com/contacto.php">Contacto</a>  |
            <a href="http://tabarcaisland.com/sobre.html">Terminos de Servicio</a>
            
           <div class="center">
            <a href="http://www.facebook.com/tabarcaisland"><img src="ico/facebook.png"></a>
            <a href="http://plus.google.com/+Tabarcaisland"><img src="ico/googleplus.png"></a> 
          </div>
            <p>&copy; Tabarca Island 2017 <a href="http://cbolorinos.com/">cbolorinos</a> <a href="http://jkbolorinos.com/">jbolorinos</a></p>
          
        
    
</div><!-- footer -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modern-business.js"></script>

    <!-- Language selector button script -->
    <script src=""
  </body>
</html>