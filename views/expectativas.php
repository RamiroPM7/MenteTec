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
      <h1 class="H2Style ubicacion">Manejo de la Presión de las Expectativas Académicas y Personales</h1>

    </div>
    <img class="cubrirFondoImg" src="https://cdn0.psicologia-online.com/es/posts/0/4/2/como_no_juzgar_a_los_demas_6240_orig.jpg" alt="">

    <!--  <div class="contenedorAutor">
            <div class="foto">

            </div>
            <div class="descricionAutor">
                <h3>Juan</h3>
                <P>Lorem ipsum dolor sit amet consectetur.</P>
            </div>-->
  </div>
</section>
  

<section>
  <div class="contenedorSobreNosotros">
    <div class="tituloSobreNosotros">
      <h2 class="H2Style">La presión de las expectativas</h2>
    </div>
    <div class="parrafoSobreNosotros">
      <p>La presión de las expectativas académicas y personales puede ser abrumadora para los estudiantes universitarios, afectando su bienestar emocional y rendimiento académico. Aprender a manejar esta presión es esencial para mantener un equilibrio saludable entre los estudios y la vida personal. En este artículo, exploraremos diversas estrategias para enfrentar y superar la presión de las expectativas, ayudándote a alcanzar tus metas sin comprometer tu salud mental. Ya sea que estés lidiando con la presión de obtener buenas calificaciones, cumplir con las expectativas familiares o equilibrar tus responsabilidades, estas herramientas te serán útiles.</p>

      <h2>1. Establecimiento de Metas Realistas</h2>

      <p>Es importante establecer metas realistas y alcanzables para evitar sentirte abrumado. Define objetivos específicos, medibles y limitados en el tiempo. En lugar de enfocarte en la perfección, concéntrate en el progreso y el esfuerzo. Dividir grandes metas en tareas más pequeñas y manejables puede hacer que tus objetivos parezcan más alcanzables y menos intimidantes.</p>

      <h2>2. Comunicación Abierta y Honesta</h2>

      <p>Hablar abiertamente sobre tus preocupaciones y expectativas con amigos, familiares y profesores puede aliviar la presión. Compartir tus sentimientos puede ayudarte a recibir apoyo y comprensión de quienes te rodean. Además, comunicar tus límites y capacidades puede prevenir malentendidos y expectativas poco realistas por parte de los demás.</p>

      <h2>3. Prácticas de Autocuidado</h2>

      <p>Dedicar tiempo a cuidarte es esencial para manejar la presión. Asegúrate de incluir en tu rutina actividades que te relajen y te hagan sentir bien, como el ejercicio, la meditación, leer por placer o pasar tiempo con amigos. El autocuidado no es un lujo, sino una necesidad para mantener tu bienestar mental y emocional.</p>

      <h2>4. Técnicas de Manejo del Estrés</h2>

      <p>Practicar técnicas de manejo del estrés puede ayudarte a mantener la calma y la concentración. La respiración profunda, la meditación y el yoga son métodos efectivos para reducir el estrés. Dedicar unos minutos cada día a estas prácticas puede tener un impacto significativo en tu capacidad para manejar la presión.</p>

      <h2>5. Gestión Eficiente del Tiempo</h2>

      <p>La gestión eficiente del tiempo puede reducir la sensación de estar abrumado por las responsabilidades. Crea un horario que incluya tiempo para estudiar, descansar y actividades recreativas. Utiliza herramientas de organización como listas de tareas y calendarios para mantener el control de tus compromisos y evitar la procrastinación.</p>

      <h2>6. Aceptación y Resiliencia</h2>

      <p>Es crucial aceptar que no siempre puedes cumplir con todas las expectativas y que está bien cometer errores. Cultivar una actitud resiliente te permitirá recuperarte de los contratiempos y aprender de las experiencias. Reconoce tus logros, por pequeños que sean, y sé compasivo contigo mismo en momentos de dificultad.</p>

      <h2>7. Búsqueda de Apoyo Profesional</h2>

      <p>Si la presión se vuelve abrumadora, considera buscar apoyo profesional. Los servicios de consejería y salud mental de tu universidad pueden ofrecerte recursos y estrategias adicionales para manejar la presión. Hablar con un consejero o terapeuta puede proporcionarte una perspectiva objetiva y herramientas prácticas para enfrentar tus desafíos.</p>




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