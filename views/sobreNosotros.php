<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nosotros</title>
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
                <a class="cursorEncima" href="../views/index.html">Inicio</a>
            </li>
            <li>
                <a class="cursorEncima" href="../views/citas.html">Citas</a>
            </li>
            <li>
                <a class="cursorEncima" href="todosLosArticulos.html">Artículos</a></li>
            <li>
                <a class="cursorEncima" href="ayudaLinea.html">Ayuda en linea</a>
            </li>
            <li>
                <a class="cursorEncima" href="../views/sobreNosotros.html"><span>Sobre nosotros</span></a>
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
    //validar si una variable tiene informacion isset()
    session_start();
    include("revisarSesion.php"); 
    include_once("header.php");

    ?>

  </header>
</section>

<section>
  <div class="headerColor GreenBlueGradient">
    <div class="conenedorTextoYparrafo">
      <div class="contenedorTexto">
        <br>
        <br>
        <h1 class="fuenteConoceEquipo">¡Conoce a nuestro equipo!</h1>
      </div>

      <div class="contendorParrafo">
        <br>
        <p class="fuenteParrafo">Nos comprometemos a ofrecer un ambiente acogedor y profesional donde puedas recibir el apoyo necesario para tu bienestar mental y emocional. </p>
      </div>
    </div>


    <div class="contenedorImagen">
      <img class="imagenPersonaSobreNosotrosStyle imagen2" src="../assets/img/figuras.png" alt="">
      <img class="imagenPersonaSobreNosotrosStyle imagen1" src="../assets/img/girlSobreNosotros.png" alt="">

    </div>
  </div>

 <section> 
  <div class="contenedorSobreNosotros">
    <div class="tituloSobreNosotros">
      <h2 class="H2Style">¿Quiénes somos?</h2>
      <br>
    </div>
    <div class="parrafoSobreNosotros">

      <p>Nuestra misión es empoderar a las personas para que puedan enfrentar y superar los desafíos emocionales y mentales, promoviendo una vida plena y saludable. Nos comprometemos a ofrecer un enfoque personalizado y basado en la evidencia para garantizar que cada uno de nuestros clientes reciba el cuidado adecuado.</p>

      <br>

      <h2 class="H2Style">Nuestros Valores</h2>

      <br>

      <p> <strong>Empatía y Compasión:</strong> Creemos en la importancia de escuchar y entender las experiencias únicas de cada individuo. Tratamos a todos nuestros clientes con el mayor respeto y consideración.</p>

      <p><strong>Excelencia Profesional:</strong> Nos esforzamos por mantener los más altos estándares de profesionalismo y ética en nuestra práctica. Nuestro equipo está compuesto por psicólogos altamente calificados y con vasta experiencia.</p>

      <p> <strong>Confidencialidad:</strong> La privacidad de nuestros clientes es primordial. Nos comprometemos a mantener la confidencialidad de toda la información compartida durante las sesiones.</p>

      <p><strong>Innovación y Aprendizaje Continuo:</strong> Nos mantenemos actualizados con los últimos avances en psicología y salud mental, asegurando que nuestras prácticas estén basadas en la evidencia más reciente.</p>

      <p><strong>Inclusión y Diversidad:</strong> Valoramos y respetamos la diversidad de nuestros clientes. Nos esforzamos por crear un entorno inclusivo donde todas las personas se sientan bienvenidas y valoradas.</p>

      <h2 class="H2Style">Nuestro Compromiso</h2>
      <p>Estamos comprometidos a acompañarte en tu camino hacia una vida más saludable y equilibrada. Creemos que con el apoyo adecuado, cada persona tiene el potencial de superar los desafíos y lograr un bienestar duradero.</p>
      <h2 class="H2Style">Contacta con Nosotros</h2>
      <p>Si deseas saber más sobre nosotros o agendar una cita, no dudes en contactarnos. En MenteTec, estamos aquí para ayudarte en cada paso de tu viaje hacia el bienestar. ¡Esperamos poder ser parte de tu camino hacia una vida mejor!</p>
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