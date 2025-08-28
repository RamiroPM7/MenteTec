<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artículo</title>
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
                <a class="cursorEncima" href="todosLosArticulos.html"><span>Artículos</span></a></li>
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
  <div class="contenedorImagenFondo">
    <div class="contenedorTituloArticulo">
      <h1 class="H2Style ubicacion">Formas de enfrentar el miedo al hablar en público.</h1>

    </div>
    <img class="cubrirFondoImg" src="https://www.psicologosmadridcapital.com/wp-content/uploads/2018/01/en-que-consiste-depresion.jpg" alt="">

    <!--  <div class="contenedorAutor">
            <div class="foto">

            </div>
            <div class="descricionAutor">
                <h3>Juan</h3>
                <P>Lorem ipsum dolor sit amet consectetur.</P>
            </div>-->
  </div>
</section>
  </div>

<section>
  <div class="contenedorSobreNosotros">
    <div class="tituloSobreNosotros">
      <h2 class="H2Style">Siento terror cuando tengo que hablar en público</h2>
    </div>
    <div class="parrafoSobreNosotros">
      <p>El miedo escénico, o la ansiedad asociada con hablar en público, es una experiencia común que afecta a personas de todas las edades y ámbitos de la vida. Desde presentaciones en el trabajo hasta discursos en eventos sociales, el temor a ser juzgado o hacer el ridículo frente a una audiencia puede paralizar incluso a los más seguros de sí mismos. Sin embargo, aprender a manejar este miedo puede ser una habilidad invaluable que no solo mejora nuestras habilidades de comunicación, sino que también abre puertas tanto en nuestra vida personal como profesional.
      </p>

      <p>

        En este artículo, exploraremos diversas estrategias efectivas para enfrentar y superar el miedo al hablar en público. Desde técnicas prácticas hasta enfoques psicológicos, descubriremos cómo podemos transformar el miedo en confianza y convertirnos en oradores seguros y convincentes. Ya sea que seas un estudiante nervioso antes de una presentación en clase o un profesional que enfrenta el desafío de hablar en una conferencia, estas herramientas te ayudarán a superar tus temores y a brillar en el escenario.
      </p>

      <h2>1. Práctica constante</h2>

      <p>Practicar tu discurso repetidamente es clave para ganar confianza. Además de memorizar el contenido, también debes practicar la entonación, los gestos y la postura. Realiza ensayos frente a un espejo para observar tu lenguaje corporal y haz simulacros de presentación con amigos o familiares para recibir retroalimentación constructiva. Cuanto más te familiarices con tu material y con la experiencia de hablar en público, menos ansiedad sentirás cuando llegue el momento de la presentación real.</p>

      <h2>2. Respiración profunda</h2>

      <p>La respiración profunda puede ser una herramienta poderosa para controlar la ansiedad antes y durante una presentación. La técnica de respiración diafragmática implica inhalar profundamente por la nariz, permitiendo que el abdomen se expanda, y luego exhalar lentamente por la boca. Practica esta técnica regularmente para entrenar tu cuerpo para que se relaje automáticamente en situaciones estresantes.</p>

      <h2>3. Visualización positiva</h2>

      <p>Antes de la presentación, tómate unos minutos para visualizar el éxito. Cierra los ojos y visualiza la audiencia escuchando atentamente tus palabras, asintiendo y sonriendo en respuesta a tus ideas. Imagina a ti mismo hablando con confianza, manteniendo contacto visual con los espectadores y transmitiendo tu mensaje de manera efectiva. Esta técnica de visualización puede ayudarte a reducir la ansiedad y a prepararte mentalmente para el evento.</p>

      <h2>4. Familiarízate con el entorno</h2>

      <p>Si es posible, visita el lugar donde se llevará a cabo tu presentación antes del evento. Observa la disposición de la sala, la iluminación, el equipo audiovisual y cualquier otro detalle relevante. Practica moverte por el espacio y hacer ajustes técnicos si es necesario. Cuanto más familiarizado estés con el entorno, menos sorpresas desagradables enfrentarás el día de la presentación.</p>

      <h2>5. Concentración en el mensaje, no en ti mismo</h2>


      <p>En lugar de centrarte en tus propios nervios, enfoca tu atención en el mensaje que estás entregando y en cómo puedes beneficiar a tu audiencia. Recuerda que estás allí para compartir información valiosa, inspirar a tus espectadores o persuadirlos a tomar una acción específica. Mantén el enfoque en el propósito de tu presentación y en el valor que puedes aportar, en lugar de preocuparte por tu desempeño personal.</p>


      <h2>6. Practica el poder del "y sin embargo": </h2>


      <p>Reconoce que es normal sentir nervios antes de hablar en público, pero no permitas que esos nervios te impidan actuar. En lugar de negar o reprimir tus emociones, acéptalas y luego enfócate en seguir adelante a pesar de ellas. Dite a ti mismo: "Sí, estoy nervioso, y sin embargo, puedo hacerlo"</p>

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