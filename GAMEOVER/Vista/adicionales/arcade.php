<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Página principal - GAME STORE</title>

  <!-- CSS  -->
  <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../js/materialize.js"></script>
  <script src="../../js/init.js"></script>
  <script src="../../js/fontawesome-all.js"></script>
</head>
<body>

<!--*********************************************BARRA DE NAVEGACIÓN**************************************************************-->
<header>
  <div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper white">
          <a href="#" class="brand-logo center"><img src="../../imagenes/log.jpg" width="150px" align="center"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="icono fas fa-bars"></i></a>

          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="Index.php" class="black-text black-darken-2"><i class="fas fa-home"></i> Inicio</a></li>
          <li><a class="dropdown-trigger black-text black-darken-2" href="#categorias" data-target="dropdown1"> Categorías</a></li>
          <a class="waves-effect waves-light btn">Ingresar</a>

          </ul>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#acerca" class="black-text black-darken-2">Nuestros beneficios</a></li>
          <li><a href="#acerca" class="black-text black-darken-2">Acerca de</a></li>
          </ul>
        </div>
    </nav>
  </div>

<!--BARRA DE NAVEGACIÓN LATERAL PARA DISPOSITIVOS PEQUEÑOS-->
    <ul class="side-nav" id="mobile-demo">
      <li><a href="Index.php" class="black-text black-darken-2"><i class="fas fa-home"></i> Inicio</a></li>
      <li><a href="#acerca" class="black-text black-darken-2"><i class="fas fa-smile"></i> Categorías</a></li>
      <li><a href="#acerca" class="black-text black-darken-2">Nuestros beneficios</a></li>
      <li><a href="#acerca" class="black-text black-darken-2">Acerca de nosotros</a></li>
      <li><a class="waves-effect waves-light btn">Ingresar</a></li>
    </ul>
</header>

<!--**************************************************PARALLAX********************************************************************-->
<div class="banner">
  <img class="responsive-img" src="../../imagenes/CArcade.jpg">
</div>
 <br><br><br>
<!--**********************************************CONTENIDO***********************************************************************-->
<div class="categ container">
  <div class="row center">
    <div class="a1 col s12 m4 l4">
      <div class="imag">
        <img src="../../imagenes/arcade1.jpg" class="materialboxed responsive-img" width="650">
      </div>
      <div class="caption">
        <h4 align="center">PAC-MAN </h4>
        <p>Este videojuego es acerca de un circulo amarillo al que le falta un sector simulando su boca, el objetivo es comerse todos los puntos en la pantalla para pasar de nivel, pero es perseguido por cuatro fantasmas los cuales tratan de atraparlo.</p>
        <a class="waves-effect waves-light btn disabled" style="margin: 0"><i class="fas fa-cart-plus"></i> Agregar a carrito </a>
      </div>
        <br>
    </div>

    <div class="a1 col s12 m4 l4">
      <div class="imag2">
        <img src="../../imagenes/arcade2.png" class="materialboxed responsive-img" width="650">
      </div>
      <h4 align="center"> GEOMETRY DASH </h4>
        <p>Es un juego donde debes ser ágil para saltar y sobrepasar los obstáculos puntiagudos para poder obtener puntos y avanzar en los niveles.<br></p>
        <a class="waves-effect waves-light btn"><i class="fas fa-cart-plus"></i> Agregar a carrito </a>
        <br>
    </div>

    <div class="a1 col s12 m4 l4">
      <div class="imag">
        <img src="../../imagenes/arcade3.png" class="materialboxed responsive-img" width="650">
      </div>
      <h4 align="center"> FLOW FREE </h4>
        <p>Es un juego donde se te muestra en la pantalla distintos puntos de colores, en pares, debes conectarlos por medio de una tubería, las cuales se rompen si se cruzan.</p>
        <a class="waves-effect waves-light btn"><i class="fas fa-cart-plus"></i> Agregar a carrito </a>
        <br>
    </div>
  </div>

  <div class="row center">
    <div class="a1 col s12 m4 l4">
      <div class="imag2">
        <img src="../../imagenes/arcade4.png" class="materialboxed responsive-img" width="650">
      </div>
      <h4 align="center">TETRIS </h4>
        <p>Es un juego en el cual debes ordenar las cadenas que caen de tal forma que puedas llegar lo mas alto que puedas e ir sumando puntos para subir de nivel.  </p>
        <a class="waves-effect waves-light btn"><i class="fas fa-cart-plus"></i> Agregar a carrito </a>
        <br>
    </div>

    <div class="a1 col s12 m4 l4">
      <div class="imag">
        <img src="../../imagenes/arcade5.jpg" class="materialboxed responsive-img" width="650">
      </div>
      <h4 align="center">  BLOCK HEXAPUZZLE </h4>
        <p>Este juego  consiste en ordenar las cadenas de los hexágonos de colores, en los espacios que quepan, debes ir combinando los colores para que estos desaparezcan y para ir obteniendo mas puntos.</p>
        <a class="waves-effect waves-light btn"><i class="fas fa-cart-plus"></i> Agregar a carrito </a>
        <br>
    </div>
    <div class="a1 col s12 m4 l4">
    <div class="imag">
      <img src="../../imagenes/arcade6.jpg" class="materialboxed responsive-img" width="650">
    </div>
      <h4 align="center"> SNAKE </h4>
        <p>Es un juego donde debes ir guiando a la serpiente para comerse las manzanas, debes comer todas las manzanas que puedas y evitar que se muerda su propia cola .</p>
        <a class="waves-effect waves-light btn"><i class="fas fa-cart-plus"></i> Agregar a carrito </a>
        <br>
    </div>
  </div>
</div>

<!--**********************************************FOOTER***********************************************************************-->
<footer class="page-footer black">
    <div class="container">
        <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text"> Game Over Store</h5>
                <p class="grey-text text-lighten-4"> Kenya Mejia <br> Andrea Morales <br> Gabriela Burgos</p>
              </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            GAME OVER © 2018 Copyright 
        </div>
    </div>
</footer>
</body>
</html>