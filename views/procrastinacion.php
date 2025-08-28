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
      <h1 class="H2Style ubicacion">La Procrastinación en la Universidad: Causas y Estrategias para Superarla</h1>

    </div>
    <img class="cubrirFondoImg" src="https://mitsloanreview.mx/wp-content/uploads/2024/05/procrastinacion-y-dejar-algo-para-el-dia-siguiente.jpg" alt="">

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
      <h2 class="H2Style">Razones detrás de la procrastinación</h2>
    </div>
    <div class="parrafoSobreNosotros">
      <p>La procrastinación es un desafío común entre los estudiantes universitarios, a menudo resultando en estrés y disminución del rendimiento académico. Retrasar tareas importantes puede parecer tentador a corto plazo, pero puede tener consecuencias negativas a largo plazo. En este artículo, exploraremos las causas de la procrastinación y ofreceremos estrategias efectivas para superarla. Ya sea que te encuentres postergando tareas por miedo al fracaso o por falta de motivación, estas herramientas te ayudarán a tomar el control de tu tiempo y a mejorar tu productividad académica.</p>

      <h2>1. Identificación de las Causas</h2>

      <p>Para superar la procrastinación, es crucial entender sus causas. La procrastinación puede surgir de diversos factores, como el miedo al fracaso, la falta de motivación, el perfeccionismo, la falta de claridad en los objetivos y la gestión deficiente del tiempo. Identificar las razones detrás de tu procrastinación es el primer paso para abordarla de manera efectiva.</p>

      <h2>2. Establecimiento de Metas Claras</h2>

      <p>Establecer metas claras y alcanzables puede ayudarte a mantenerte enfocado y motivado. Divide las tareas grandes en pasos más pequeños y manejables, y asigna plazos específicos para cada uno. Tener un plan claro puede reducir la sensación de estar abrumado y facilitar el inicio del trabajo.</p>

      <h2>3. Técnicas de Gestión del Tiempo</h2>

      <p>La gestión efectiva del tiempo es esencial para superar la procrastinación. Utiliza técnicas como la Técnica Pomodoro, que implica trabajar durante 25 minutos y luego tomar un descanso de 5 minutos. Esta técnica puede ayudarte a mantener la concentración y aumentar tu productividad. Además, crea un horario diario o semanal para organizar tus tareas y asegurarte de que dediques tiempo suficiente a cada una.</p>

      <h2>4. Eliminación de Distracciones</h2>

      <p>Identifica y elimina las distracciones que te impiden concentrarte en tu trabajo. Apaga las notificaciones del teléfono, crea un espacio de estudio libre de distracciones y utiliza aplicaciones que bloqueen sitios web y aplicaciones que no sean esenciales. Al reducir las interrupciones, puedes mantener un enfoque sostenido en tus tareas.</p>

      <h2>5. Uso de Recompensas y Castigos</h2>

      <p>Incorpora un sistema de recompensas y castigos para motivarte a completar tus tareas. Recompénsate con algo que disfrutes después de completar una tarea importante, o impón una pequeña penalización si no logras tus objetivos. Este enfoque puede ayudarte a asociar la finalización de tareas con resultados positivos y a mantener la motivación.</p>

      <h2>6. Fomento de la Auto-Compasión y la Resiliencia</h2>

      <p>Es importante ser compasivo contigo mismo cuando enfrentas la procrastinación. Reconoce que todos procrastinan en algún momento y que no eres el único. En lugar de castigarte por procrastinar, enfócate en lo que puedes aprender de la experiencia y cómo puedes mejorar. Cultivar una actitud resiliente puede ayudarte a recuperarte rápidamente de los contratiempos y a seguir avanzando hacia tus metas.</p>



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