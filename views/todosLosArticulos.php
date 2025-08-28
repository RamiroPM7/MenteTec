<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artículos</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>

<body class="bodyTodosArticulos body">

  <!--

 <header>
        <nav class="NavBar">
        <div class="MenteTecContainer">
            <a class="FuenteLogo" href="">MenteTec</a>
        </div>
    
     
        <ul class="ulNoneStyle ListContainer">
            <li>
                <a class="cursorEncima" href="../views/index.html">Inicio</a>
            </li>
            <li>
                <a class="cursorEncima" href="../views/citas.html">Citas</a>
            </li>
            <li>
                <a class="cursorEncima" href="articulos.html"><span>Artículos</span></a></li>
            <li>
                <a class="cursorEncima" href="ayudaLinea.html">Ayuda en linea</a>
            </li>
            <li>
                <a class="cursorEncima" href="../views/sobreNosotros.html">Sobre nosotros</a>
            </li>
            <li>
                <a class="cursorEncima" href="psicologos.html">Psicólogos</a>
            </li>
            <li>
              <div class="dropdown">
                <button class="btn  dropdown-toggle transparente" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <a class="cursorEncima" href="">Opciones</a>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cuenta.html">Cuenta</a></li>
                  <li><a class="dropdown-item" href="misCitas.html">Mis reportes</a></li>
                  <li><a class="dropdown-item" href="login.html">Cerrar Sesión</a></li>
                </ul>
              </div>         
            </li>
            <div>
              <form class="d-flex" role="search">
               <input class=" me-2 border" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
             </form> 
             </div>
        </ul>
       </nav>
    </header>

  -->
<section>
  <header>

    <?php
    
    //validar si una variable tiene informacion isset()
     session_start();
    include("revisarSesion.php");  
    include_once("header.php");
    ?>

  </header>
</section>

<section>
  <div id="carouselExampleDark" class="carousel carousel-dark slide contenedorTodo" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <a href="../controller/RutaController.php?ruta=26" class="aa">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="https://conecta.tec.mx/sites/default/files/styles/header_full/public/2022-04/tips-estudiar-desde-casa.jpg.webp?itok=ZJ8yVmje" class="d-block w-100 tamanoImagenPrincipal imagenOscura" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fuenteArticuloBlanco">Técnicas de Estudio Efectivas para el Éxito Académico</h5>
            <p class="fuenteArticuloBlancoSub">Pasos para tener mejores sesiones de estudio</p>
          </div>
        </div>

      </a>

      <a href="../controller/RutaController.php?ruta=27" class="aa">

        <div class="carousel-item" data-bs-interval="2000">
          <img src="https://cdn0.psicologia-online.com/es/posts/0/4/2/como_no_juzgar_a_los_demas_6240_orig.jpg" class="d-block w-100 tamanoImagenPrincipal imagenOscura" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fuenteArticuloBlanco">Manejo de la Presión de las Expectativas Académicas y Personales</h5>
            <p class="fuenteArticuloBlancoSub">La presión de las expectativas</p>
          </div>
        </div>

      </a>

      <a href="../controller/RutaController.php?ruta=28">
        <div class="carousel-item">
          <img src="https://www.ge.com/news/sites/default/files/Reports/2020-03/Gullans-hero-475525999.jpg" class="d-block w-100 tamanoImagenPrincipal imagenOscura" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fuenteArticuloBlanco">Adaptación a la Vida Universitaria: Desafíos y Estrategias de Superación</h5>
            <p class="fuenteArticuloBlancoSub">Pasos que te llevarán a adaptarte a la universidad de una mejor manera </p>
          </div>
        </div>

      </a>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section>
  <div class="contTodosArticulos">

    <a href="../controller/RutaController.php?ruta=22" class="aa">
      <div class="tarjetaArticulo">

        <img class="formatoimagenArti" src="https://www.psicologosmadridcapital.com/wp-content/uploads/2018/01/en-que-consiste-depresion.jpg" alt="">
        <div>
          <h2 class="fuenteArticulo">Siento terror cuando tengo que hablar en público</h2>
          <p>El miedo escénico, o la ansiedad asociada con hablar en público, es una experiencia común que afecta a personas de todas las edades y ámbitos de la...</p>
        </div>

        <div class="contenedorfotoCircular">
          <img class="formatoimagenArtiAutor" src="https://i1.sndcdn.com/avatars-WrN6GBph7VRnfdCG-KA5xJQ-t500x500.jpg" alt="">
          <p>Jesus Rivera Cornejo 10 jun 2020</p>
        </div>

      </div>

    </a>

    <a href="../controller/RutaController.php?ruta=23" class="aa">

      <div class="tarjetaArticulo">

        <img class="formatoimagenArti" src="https://acconsultors.com/wp-content/uploads/Manejo-del-estres.jpg" alt="">
        <div>
          <h2 class="fuenteArticulo">Estrategias de Manejo del Estrés para Estudiantes Universitarios</h2>
          <p>Explora técnicas efectivas para gestionar el estrés académico y las presiones sociales en la universidad, mejorando la salud mental y el rendimiento académico.</p>
        </div>

        <div class="contenedorfotoCircular">
          <img class="formatoimagenArtiAutor" src="https://media.istockphoto.com/id/1319763895/es/foto/sonriente-raza-mixta-hombre-maduro-sobre-fondo-gris.jpg?s=612x612&w=0&k=20&c=sGBwMEZr8RdyFuOF0084teSTc1TwMzdpHjowP9QRWTw=" alt="">
          <p>Juan Estrada 24 Enero 2019</p>
        </div>

      </div>

    </a>

    <a href="../controller/RutaController.php?ruta=24" class="aa">
      <div class="tarjetaArticulo">

        <img class="formatoimagenArti" src="https://mitsloanreview.mx/wp-content/uploads/2024/05/procrastinacion-y-dejar-algo-para-el-dia-siguiente.jpg" alt="">
        <div>
          <h2 class="fuenteArticulo">La Procrastinación en la Universidad: Causas y Estrategias para Superarla</h2>
          <p>Examina las razones detrás de la procrastinación entre los estudiantes y proporciona técnicas para mejorar la gestión del tiempo y la productividad.</p>
        </div>

        <div class="contenedorfotoCircular">
          <img class="formatoimagenArtiAutor" src="https://definicion.de/wp-content/uploads/2015/07/adulto.jpg" alt="">
          <p>Jesus Rivera Cornejo 10 jun 2020</p>
        </div>

      </div>

    </a>

    <a href="../controller/RutaController.php?ruta=25" class="aa">
      <div class="tarjetaArticulo">

        <img class="formatoimagenArti" src="https://idmphsmkuxkn.compat.objectstorage.us-ashburn-1.oraclecloud.com/cdn-bucket/uploads/2023/04/ansiedad-ficha_0099b826_1280x720.jpg" alt="">
        <div>
          <h2 class="fuenteArticulo">Ansiedad en la Universidad: Identificación y Manejo</h2>
          <p>Describe los síntomas de la ansiedad en el contexto universitario, sus posibles causas y estrategias para manejarla de manera efectiva.</p>
        </div>

        <div class="contenedorfotoCircular">
          <img class="formatoimagenArtiAutor" src="https://cdn.aarp.net/content/aarpe/es/home/recursos-para-el-cuidado/prestar-cuidado/info-2018/cambios-sensoriales-en-adultos-mayores-lyda-arevalo-flechas/_jcr_content/root/container_main/container_body_main/container_body1/container_body_cf/container_image/articlecontentfragment/cfimage.coreimg.50.932.jpeg/content/dam/aarp/home-and-family/caregiving/2018/03/1140-sensory-changes-older-adults-esp.jpg" alt="">
          <p>Jesus Rivera Cornejo 10 jun 2020</p>
        </div>

      </div>
    </a>


  </div>
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
<section>
  <footer class="footer">

    <div class="contenedorFooter">

      <div>
        <a class="FuenteLogo FuenteLogoColor" href="">MenteTec</a>
      </div>

      <div class="redesSociales">
        <h2 class="H2StyleFooter">Síguenos:</h2>
        <ul class="">
          <li><a href="">Facebook</a></li>
          <li><a href="">Twitter</a></li>
          <li><a href="">Instagram</a></li>
        </ul>
      </div>

      <div>

        <div class="redesSociales">
          <h2 class="H2StyleFooter">Enlaces Legales:</h2>
          <ul class="">
            <li><a href="">Política de Privacidad</a></li>
            <li><a href="">Términos y Condiciones</a></li>
            <li><a href="">Política de Cookies</a></li>
          </ul>
        </div>

      </div>

      <div>
        <p class="redesSociales">© 2024 MenteTec. Todos los derechos reservados.</p>
      </div>


    </div>

  </footer>
</section>
</body>

</html>