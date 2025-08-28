<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Citas</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
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
              >Citas</a
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
    include_once("../model/DbModel.php");
   /* include_once("../model/DbModel.php");
    //include("../model/DbModel.php");
    if(isset($_GET['idActivo'])) {
      $idActivo = $_GET['idActivo'];
      $con = new DbModel();
      $result = $con->BuscarCita($idActivo); 
    }else{
      echo "el id sel usuario en la url no está disponible";
    }*/

    $objModel = new DbModel();
    $resultadoTodaCitas = $objModel->BuscarCita($_SESSION['idUserSesion']);

    
  
      

    ?>

  </header>
</section>
<section>
  <div class="contenedorEncabezadoVerde">
    <div class="EncabezadoVerde GreenBlueGradient">
      <h1 class="centrar">Mis reportes</h1>
    </div>
  </div>
</section>


<section>
  <div class="contenedorCitasReportes">



    <?php if (isset($resultadoTodaCitas) && !is_bool($resultadoTodaCitas)) { ?>

         
      <div class="accordion" id="accordionExample">
    <?php 
    $i = 0;
    while ($datosCitas = $resultadoTodaCitas->fetch_assoc()) { 
        $collapseId = "collapse" . $i;
        $headingId = "heading" . $i;
        $i++;
    ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="true" aria-controls="<?php echo $collapseId; ?>">
                    Reporte <?php echo $datosCitas['fecha']; ?>
                </button>
            </h2>
            <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $headingId; ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="contenedorFormulario">
                        <div class="formularioReporte GreenBlueGradientTenue">
                            <div class="contnedorPrimerPasoCambio">
                                <h1 class="H2Style">Reporte <?php echo $datosCitas['fecha']; ?></h1>
                            </div>
                            <div class="contenedorFormularioDirecto">
                                <div class="hola">
                                    <div class="textArribaInputAbajo">
                                        <label for="">Nombre</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['nombreUsuarioCita']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Apellido Paterno</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['apellidoPaterno']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Apellido Materno</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['apellidoMaterno']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Sexo</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['sexo']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Número celular</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['noTelefono']; ?>" />
                                    </div>
                                </div>
                                <div class="hola">
                                    <div class="textArribaInputAbajo">
                                        <label for="">Horario</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['horario']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Matrícula</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['noControl']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Carrera</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['carrera']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Semestre</label>
                                        <input type="text" readonly value="<?php echo $datosCitas['semestre']; ?>" />
                                    </div>
                                    <div class="textArribaInputAbajo">
                                        <label for="">Fecha</label>
                                        <input type="date" readonly value="<?php echo $datosCitas['fecha']; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="textArribaInputAbajo contnedor">
                                <label for="">Descripción de tu situación</label>
                                <textarea name="" id="" cols="30" rows="5" readonly><?php echo $datosCitas['descripcion']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

      


    <?php } else { ?>

      <h1 class="ordenHorizontal">No hay ningún reporte de cita que mostrar</h1>

    <?php  } ?>






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