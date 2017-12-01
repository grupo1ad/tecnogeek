<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="shortcut icon" type="image/ png" href="../img/logo.png"> 
<?php
  session_start();
if(!isset($_SESSION['User'])){
  header("location: ../index.html");
}
?>
	<title>technogeek</title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- Logo -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">TECHNOGEEK</a></li>
        <li><a href="#Categorias">CATEGORIAS</a></li>
        <li><a href="#Productos">PRODUCTO</a></li>
        <li><a href="#Contacto">CONTACTO</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['User'];?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModal">Editar Perfil</a></li>
            <li><a href="../fin_sesion.php">Cerrar Sesion</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- login -->
 <form method="POST" action="clases/login.php">
  <!-- ModalR -->
  <div class="modal fade" id="myModalIS" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4><span class="glyphicon glyphicon-user"></span> Iniciar Sesion </h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <center>
                Usuario:<br><input type="text" name="usuario" placeholder="Digite Nombre Usuario" required/><br>
                Contraseña:<br><input type="password" name="pass" placeholder="***********" required/><br><br>
                <button type="submit" class="btn btn-block">Enviar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </center>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
          <p>¿Necesita <a href="#">Ayuda?</a></p>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../img/2.jpg">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="../img/3.jpg">
        <div class="carousel-caption">
        </div>      
      </div>
    
      <div class="item">
        <img src="../img/4.png">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Container  -->
<div id="Categorias" class="container text-center">
  <h3>CATEGORIAS</h3>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Computadores</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="../img/1.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Celulares</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="../img/2.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Accesorios</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="../img/3.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
    </div>
  </div>
</div>
  
<!-- Container -->
<div id="Productos" class="bg-1">
  <div class="container">
    <h3 class="text-center">PRODUCTOS</h3>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <br>
          <div id="imagen">
            <div id="info">
              <p id="headline"> Predator 15 </p>
              <p id="descripcion"></p>
              <li>Acer</li>
              <li>Windows 10</li>
              <li>Intel Core i7 6700HQ</li>
              <li>Nvidia GTX 980M</li>
              <li>39,1 x 29,9 x 3,85 cm</li>
            </div>
          </div>
          <button class="btn" data-toggle="modal" data-target="#myModal1">Comprar</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <br>
          <div id="imagen1">
            <div id="info">
              <p id="headline"> Huawei P10 DS </p>
              <p id="descripcion"></p>
              <li>5.1"</li>
              <li>Android 7.0</li>
              <li>LEICA Dual 12MP+20MP</li>
              <li>Nvidia GTX 980M</li>
              <li>32 GB</li>
              <li>8 core 2.4GHz</li>
              <li>Sensor de huella</li>
            </div>
          </div>
          <button class="btn" data-toggle="modal" data-target="#myModal2">Comprar</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <br>
          <div id="imagen2">
            <div id="info">
              <p id="headline"> Teclado Gaming </p>
              <p id="descripcion"></p>
              <li>Silver KGT-095</li>
              <li>105 Teclas</li>
              <li>Multimedia</li>
              <li>Retro-iluminado</li>
              <li>Conexion USB</li>
              <li>Windows: XP,Vista,7,8,10</li>
              </div>
          </div>
          <button class="btn" data-toggle="modal" data-target="#myModal3">Comprar</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal1 -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4><span class="glyphicon glyphicon-shopping-cart"></span> Compra </h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Precio $ 9.866.600 </label>
              <input type="number" class="form-control" id="psw" placeholder="¿Cuantos Productos?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Enviar A: </label>
              <input type="text" class="form-control" id="usrname" placeholder="Email">
            </div>
              <button type="submit" class="btn btn-block">Pagar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
          <p>¿Necesita <a href="#">Ayuda?</a></p>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal2 -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4><span class="glyphicon glyphicon-shopping-cart"></span> Compra </h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Precio $ 1.599.900 </label>
              <input type="number" class="form-control" id="psw" placeholder="¿Cuantos Productos?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Enviar A: </label>
              <input type="text" class="form-control" id="usrname" placeholder="Email">
            </div>
              <button type="submit" class="btn btn-block">Pagar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
          <p>¿Necesita <a href="#">Ayuda?</a></p>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal3 -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">X</button>
          <h4><span class="glyphicon glyphicon-shopping-cart"></span> Compra </h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Precio $ 359.000 </label>
              <input type="number" class="form-control" id="psw" placeholder="¿Cuantos Productos?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Enviar A: </label>
              <input type="text" class="form-control" id="usrname" placeholder="Email">
            </div>
              <button type="submit" class="btn btn-block">Pagar 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancelar
          </button>
          <p>¿Necesita <a href="#">Ayuda?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="Contacto" class="container">
  <h3 class="text-center">Contacto</h3>
  <p class="text-center"><em>Reclamos o Sugerencias!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>Bogota, Colombia</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefono: +57 3175895083</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: tecnogeek@soporte.com.co</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comemtarios" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">TechnoGeek</h3>  
  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#menu1">Contactenos En:</a></li>
  </ul>

  <div class="tab-content">
      <div id="menu1" class="tab-pane fade in active">
        <p><a href="https://www.facebook.com/" target="_blank"><img src="../img/face.png" width="50" height="50" align="left"></a></p>
        <p><a href="https://twitter.com/?lang=es" target="_blank"><img src="../img/twit.png" width="50" height="50" align="left"></a></p>
        <p><a href="https://www.instagram.com/?hl=es" target="_blank"><img src="../img/insta.png" width="50" height="50" align="left"></p>
        <p><a href="https://www.youtube.com/?hl=es" target="_blank"><img src="../img/you.png" width="50" height="50" align="left"></p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Inicio">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Volver A Inicio <a href="#" data-toggle="tooltip" title="Visit w3schools"></a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>