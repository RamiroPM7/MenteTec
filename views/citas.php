<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Citas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
            <a class="cursorEncima" href="../views/citas.html"
              ><span>Citas</span></a
            >
          </li>
          <li>
            <a class="cursorEncima" href="todosLosArticulos.html">Artículos</a>
          </li>
          <li>
            <a class="cursorEncima" href="ayudaLinea.html">Ayuda en linea</a>
          </li>
          <li>
            <a class="cursorEncima" href="../views/sobreNosotros.html"
              >Sobre nosotros</a
            >
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
      session_start();
      include("revisarSesion.php"); 
      include_once("header.php");
      //validar si una variable tiene informacion isset()
   
      ?>
    </header>
</section> 

      
<section>
    <div class="contenedorEncabezadoVerde">
      <div class="EncabezadoVerde GreenBlueGradient">
        <h1 class="centrar">Agendar cita</h1>
      </div>
    </div>
</section>

        <h1 class="H2Style centrar">Da el primer paso al cambio</h1>
   <section>  
      <div class="formularioCita">
  <form method="post" action="../controller/RutaController.php?ruta=29" class="">

              <div class="alinearCita">
              <input type="hidden" name="idUserCitaName" value="<?php echo $_SESSION['idUserSesion'];?>">
              <input class="inputStyle" type="text" name="nombreCitasName" id="idnombreCitas" placeholder="Nombre" required>
              <input class="inputStyle" type="text" name="apellidoPaternoCitasName" id="idapellidoPaternoCitas" placeholder="Apellido Paterno" required>
              <input class="inputStyle" type="text" name="apellidoMaternoCitasName" id="idapellidoMaternoCitas" placeholder="Apellido materno" required>
              <label for="">Sexo</label>
              <select class="inputStyle" name="opcionesSexoCitasName" id="idopcionesSexoCitas">
                <option class="inputStyle" type="text" name="" id="" value="Hombre">Hombre</option>
                <option class="inputStyle" type="text" name="" id="" value="Mujer">Mujer</option>
              </select>            
              <input class="inputStyle" type="number" name="numeroCelularCitasName" id="idnumeroCelularCitas"  placeholder="Número celular" required>
              <label for="">Horario</label>            
              <select class="inputStyle" name="opcionesHorarioCitasName" id="idopcionesHorarioCitas">
                <option class="inputStyle" type="text" name="" id="" value="Matutino">Matutino</option>
                <option class="inputStyle" type="text" name="" id="" value="Verpertino">Verpertino</option>
              </select>
              <input class="inputStyle" type="text" name="numeroControlCitasName" id="idnumeroControlCitas" placeholder="No. Control" required>
  
              <input class="inputStyle" type="text" name="carreraCitasName" id="idcarreraCitas" placeholder="Carrera" required>
              <input class="inputStyle" type="number" name="semestreCitasName" id="idsemestreCitas" placeholder="Semestre" required>
              <input class="inputStyle" type="date" name="fechaCitasName" id="idfechaCitas" required>
              <label for="">Descripción de tu situación</label>
              <textarea class="inputStyle2" name="descripcionCitasName" id="iddescripcionCitas" cols="30" rows="10"></textarea>
              <input class="inputStyleButton" type="submit" value="Guardar">   
             </div>                              
      </form>
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
          <ul  class="">
            <li><a href="">Facebook</a></li>
            <li><a href="">Twitter</a></li>
            <li><a href="">Instagram</a></li>
          </ul>
        </div>

        <div>

          <div class="redesSociales">
            <h2 class="H2StyleFooter">Enlaces Legales:</h2>
            <ul  class="">
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
