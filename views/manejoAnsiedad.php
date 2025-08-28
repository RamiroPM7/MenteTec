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
      <h1 class="H2Style ubicacion">Ansiedad en la Universidad: Identificación y Manejo</h1>

    </div>
    <img class="cubrirFondoImg" src="https://idmphsmkuxkn.compat.objectstorage.us-ashburn-1.oraclecloud.com/cdn-bucket/uploads/2023/04/ansiedad-ficha_0099b826_1280x720.jpg" alt="">

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
      <h2 class="H2Style">Síntomas de la ansiedad en el contexto universitario</h2>
    </div>
    <div class="parrafoSobreNosotros">
      <p>La ansiedad es una experiencia común entre los estudiantes universitarios, afectando tanto el bienestar emocional como el rendimiento académico. Las exigencias académicas, las expectativas personales y la vida social pueden contribuir a niveles elevados de ansiedad. En este artículo, exploraremos cómo identificar los síntomas de la ansiedad y ofreceremos estrategias efectivas para manejarla. Ya sea que te enfrentes a la ansiedad antes de los exámenes o a una ansiedad generalizada, estas herramientas te ayudarán a mantener la calma y a prosperar en tu vida universitaria.</p>

      <h2>1. Reconocimiento de los Síntomas de la Ansiedad</h2>

      <p>El primer paso para manejar la ansiedad es reconocer sus síntomas. Los síntomas comunes de la ansiedad incluyen preocupación excesiva, tensión muscular, fatiga, dificultad para concentrarse, irritabilidad y problemas para dormir. Identificar estos signos en ti mismo puede ayudarte a tomar medidas tempranas para gestionarla antes de que se intensifique.</p>

      <h2>2. Establecimiento de una Rutina de Bienestar</h2>

      <p>Una rutina diaria que incluya actividades de bienestar puede ser muy beneficiosa para manejar la ansiedad. Asegúrate de incluir tiempo para el ejercicio físico, una alimentación equilibrada y suficiente descanso. El ejercicio regular, en particular, ha demostrado ser efectivo para reducir los niveles de ansiedad. Además, dedica tiempo a actividades que disfrutes y que te ayuden a relajarte.</p>

      <h2>3. Técnicas de Relajación y Mindfulness</h2>

      <p>Practicar técnicas de relajación como la respiración profunda, la meditación y el mindfulness puede ayudarte a reducir la ansiedad. La respiración diafragmática, por ejemplo, implica inhalar profundamente por la nariz, permitiendo que el abdomen se expanda, y luego exhalar lentamente por la boca. Incorporar prácticas de mindfulness en tu rutina diaria puede ayudarte a mantener la calma y la concentración.</p>

      <h2>4. Gestión del Tiempo y Organización</h2>

      <p>La ansiedad a menudo se intensifica cuando te sientes abrumado por las tareas académicas. Desarrolla habilidades de gestión del tiempo y organización para mantener el control sobre tus responsabilidades. Utiliza agendas, listas de tareas y técnicas como la Técnica Pomodoro para dividir el trabajo en intervalos manejables. Planificar y priorizar tus tareas puede reducir el estrés y la ansiedad.</p>

      <h2>5. Búsqueda de Apoyo Social</h2>

      <p>No enfrentes la ansiedad solo. Hablar con amigos, familiares o compañeros de clase sobre tus sentimientos puede aliviar la carga emocional. Además, considera unirte a grupos de apoyo o actividades extracurriculares que te interesen. Construir una red de apoyo puede proporcionarte una sensación de comunidad y reducir los sentimientos de aislamiento.</p>

      <h2>6. Uso de Recursos Profesionales</h2>

      <p>Si la ansiedad se vuelve abrumadora, no dudes en buscar ayuda profesional. La mayoría de las universidades ofrecen servicios de consejería y apoyo psicológico. Los profesionales de la salud mental pueden ofrecerte técnicas y estrategias específicas para manejar la ansiedad. Además, considera la posibilidad de participar en talleres o seminarios sobre manejo del estrés y la ansiedad que tu universidad pueda ofrecer.</p>




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