<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MenteTec</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="FillMaxWidth backgroundColor body">

  <!--
   <header>
      <nav class="NavBar">
        <div class="MenteTecContainer">
          <a class="FuenteLogo" href="">MenteTec</a>
        </div>

        <ul class="ulNoneStyle ListContainer">
          <li>
            <a class="cursorEncima" href="../views/index.html"
              ><span>Inicio</span></a
            >
          </li>
          <li>
            <a class="cursorEncima" href="../views/citas.html">Citas</a>
          </li>
          <li>
            <a class="cursorEncima" href="todosLosArticulos.html">Artículos</a></li>
          </li>
          <li>
            <a class="cursorEncima" href="ayudaLinea.html">Ayuda en linea</a>
          </li>
          <li>
            <a class="cursorEncima" href="../views/sobreNosotros.html">Sobre nosotros</a>
          </li>
          <li>
            <a class="cursorEncima" href="../views/psicologos.html">Psicólogos</a>
          </li>

          <li>
            <div class="dropdown">
              <button class="btn  dropdown-toggle transparente" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <a class="cursorEncima" href="">Opciones</a>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="cuenta.html">Perfil</a></li>
                <li><a class="dropdown-item" href="misCitas.html">Mis reportes</a></li>
                <li><a class="dropdown-item" href="login.html">Cerrar Sesión</a></li>
              </ul>
            </div>         
          </li>

        </ul>
      </nav>
    </header> 
  -->
<section>
  <header>

    <?php
    session_start();
    include("revisarSesion.php");   
    include_once("header.php");
    //validar si una variable tiene informacion isset()
    //if (isset($_GET['correoLoginName'])){
    //$_SESSION['correoLoginName'] = $_GET['correoLoginName'];}
    // $registro=$datoss->fetch_assoc();

    ?>

    <!-- PARA MOSTRAR EL usuario

<p>usuario autentificado : <php echo $_SESSION['idUserSesion']; ?></p> 
<p>usuario autentificado : <php echo $_SESSION['usuarioUserSesion']; ?></p> 
<p>usuario autentificado : <php echo $_SESSION['correoUserSesion']; ?></p> 
<p>usuario autentificado : <php echo $_SESSION['contraUserSesion']; ?></p> -->

  </header>
</section>
<section>
  <div class="WelcomeGirlHome">
    <div class="GirlContainerHome">
      <img class="imagenPersonaHomeStyle" src="../assets/img/HomeGirl.png" alt="" />
    </div>
    <div class="WelcomeContainerHome">
      <div class="contenedorBienvenidos">
        <h1 class="gradientTextColor">¡Bienvenido a MenteTec!</h1>
      </div>
      <div class="containerH2Home">
        <h2>¿Necesitas ayuda? Agenda una cita con nosotros.</h2>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="secondPartHome">
    <div class="formatoTituloYParrafo">
      <div class="AgendarCita">
        <h2 class="H2Style text-AlignCenter">Agenda tu cita</h2>
      </div>
      <div class="parrafoAgendarCita">
        <p>
          En MenteTec, entendemos la importancia de cuidar tu mente y tu cuerpo, y nos dedicamos a proporcionar servicios de alta calidad que te ayuden a alcanzar un estado óptimo de bienestar.
        </p>
      </div>
    </div>

    <div class="GirlContainerHome2">
      <img class="imagenPersonaHomeStyle" src="../assets/img/HomeGirl2.png" alt="" />
    </div>
  </div>
</section>
  <!--***********************************-->
<section>
  <div class="ThirdPartHome">
    <div class="PsicologoContainerHome">
      <img class="imagenPersonaHomeStyle" src="../assets/img/HomeMan.png" alt="" />
    </div>

    <div class="formatoTituloYParrafo">
      <div class="ConocePsicologos">
        <h2 class="H2Style text-AlignCenter">Conoce a nuestros Psicólogos</h2>
      </div>

      <div class="parrafoAgendarCita">
        <p>
          En MenteTec, estamos orgullosos de contar con un equipo excepcional de psicólogos altamente calificados y dedicados a proporcionar el mejor cuidado posible. Nuestro equipo está compuesto por profesionales con diversas especialidades y experiencias, lo que nos permite ofrecer un enfoque integral y personalizado para cada uno de nuestros clientes.
        </p>
      </div>
    </div>
  </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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