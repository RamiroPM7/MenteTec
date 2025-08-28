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
      <h1 class="H2Style ubicacion">Estrategias de Manejo del Estrés para Estudiantes Universitarios</h1>

    </div>
    <img class="cubrirFondoImg" src="https://acconsultors.com/wp-content/uploads/Manejo-del-estres.jpg" alt="">

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
      <h2 class="H2Style">Técnicas efectivas para gestionar el estrés académico</h2>
    </div>
    <div class="parrafoSobreNosotros">
      <p>El estrés académico es una experiencia común para muchos estudiantes universitarios. La presión de las fechas límite, los exámenes y las expectativas académicas pueden ser abrumadoras. Sin embargo, aprender a manejar este estrés es crucial para mantener la salud mental y el rendimiento académico. En este artículo, exploraremos diversas estrategias efectivas para enfrentar y superar el estrés en la universidad. Desde técnicas prácticas hasta enfoques psicológicos, descubriremos cómo los estudiantes pueden transformar la ansiedad en productividad y bienestar. Ya sea que estés luchando con la carga de trabajo o con la presión de las expectativas, estas herramientas te ayudarán a manejar el estrés y a prosperar en tu vida académica.</p>

      <h2>1. Planificación y Gestión del Tiempo</h2>

      <p>Practicar técnicas de estudio y repasar regularmente el material puede ayudarte a sentirte más preparado y menos ansioso. Además de memorizar el contenido, también debes practicar habilidades como la gestión del tiempo y la organización. Realiza simulacros de exámenes y presenta trabajos a amigos o familiares para recibir retroalimentación constructiva. Cuanto más te familiarices con el material y con las expectativas académicas, menos estrés sentirás cuando enfrentes exámenes o entregas importantes.</p>

      <h2>2. Técnicas de Relajación y Respiración</h2>

      <p>La respiración profunda puede ser una herramienta poderosa para controlar la ansiedad antes y durante los exámenes. La técnica de respiración diafragmática implica inhalar profundamente por la nariz, permitiendo que el abdomen se expanda, y luego exhalar lentamente por la boca. Practica esta técnica regularmente para entrenar tu cuerpo para que se relaje automáticamente en situaciones estresantes. Esto puede ayudarte a mantener la calma y la concentración durante momentos de alta presión.</p>

      <h2>3. Visualización y Pensamiento Positivo</h2>

      <p>Antes de un examen o una presentación, tómate unos minutos para visualizar el éxito. Cierra los ojos y visualiza a ti mismo completando el examen con confianza o presentando tu trabajo de manera efectiva. Imagina la sensación de logro y satisfacción después de haber dado lo mejor de ti. Esta técnica de visualización puede ayudarte a reducir la ansiedad y a prepararte mentalmente para los desafíos académicos.</p>

      <h2>4. Familiarización con el Entorno Académico</h2>

      <p>Si es posible, visita el lugar donde se llevará a cabo el examen o la presentación antes del evento. Observa la disposición de la sala, la iluminación, el equipo necesario y cualquier otro detalle relevante. Practica moverte por el espacio y asegúrate de que todo el material que necesitas esté en orden. Cuanto más familiarizado estés con el entorno, menos sorpresas desagradables enfrentarás el día del examen o la presentación.</p>

      <h2>5. Enfoque en el Contenido y el Propósito</h2>

      <p>En lugar de centrarte en tus propios nervios, enfoca tu atención en el contenido del examen o en el mensaje que estás entregando. Recuerda que tu objetivo es demostrar tu conocimiento y habilidades, no solo para obtener una calificación, sino también para tu propio aprendizaje y crecimiento. Mantén el enfoque en el propósito de tu trabajo y en cómo puedes beneficiar a tu futuro profesional, en lugar de preocuparte por el estrés del momento.</p>

      <h2>6. Aceptación y Resiliencia Emocional</h2>

      <p>Reconoce que es normal sentir estrés antes de los exámenes o presentaciones, pero no permitas que esos nervios te impidan actuar. En lugar de negar o reprimir tus emociones, acéptalas y luego enfócate en seguir adelante a pesar de ellas. Dite a ti mismo: "Sí, estoy nervioso, y sin embargo, puedo hacerlo". Esta aceptación activa puede ayudarte a manejar el estrés de manera más efectiva y a mantener la calma bajo presión.</p>


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