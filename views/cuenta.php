<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mi cuenta</title>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="FillMaxWidth backgroundColor body">


<section>
  <header>

    <?php
    session_start();
    include("revisarSesion.php"); 
    include("header.php");


    // $registro=$datoss->fetch_assoc();
    //validar si una variable tiene informacion isset()
    // if (isset($_GET['user'])){
    // $_SESSION['user'] = $_GET['user'];}

    //include ('../model/DbModel.php');

    //$con = new DbModel();

    //$usuario = $con->BuscarUsuario($_REQUEST);

    //$usuario = $_SESSION["idUser"];

    ?>

  </header>
</section>

<section>
  <div class="contenedorEncabezadoVerde">
    <div class="EncabezadoVerde GreenBlueGradient">
      <h1 class="centrar">Mi cuenta</h1>
    </div>
  </div>
</section>

<section>
  <div class="contenedorMiCuenta">
    <div class="">
      <h1 class="H2Style centrar paddingTop">Datos de mi cuenta</h1>
    </div>




    <div class="textArribaInputAbajo paddingTop">
      <label for="">Nombre</label>

      <div class="ordenHorizontal">
        <input id="inputEditar" class="tamanoInput" type="text" readonly value="<?php echo $_SESSION['usuarioUserSesion']; ?>"/>
        <!--/////////////////////////////////////////////////////////////////////////////////-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdropNombre">
          Editar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdropNombre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelNombre" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabelNombre">Coloca el nuevo nombre de usuario</h1>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <!--Los datos que mandará esto son nuevaContraCuentaName y iduserCuentaEditar --> 
              <form action="../controller/RutaController.php?ruta=32" method="post">
                <input class="inputStyle" type="text"    id="" name="nuevoNombreCuentaName" placeholder="Nuevo nombre de usuario" required>             
              </div>
              <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>-->
                <input type="hidden" name="iduserCuentaEditar" value="<?php echo $_SESSION['idUserSesion']; ?>">
                <input class="inputStyleButton" type="submit" value="Aceptar">
                <input data-bs-dismiss="modal" class="inputStyleButton" type="button" value="Cancelar">
               <!-- <button type="button" class="btn btn-primary">Aceptar</button>-->
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<!---->
    <div class="textArribaInputAbajo">
      <label for="">Correo</label>
      <div class="ordenHorizontal">
        <input id="inputEditar2" class="tamanoInput" type="email" readonly value="<?php echo $_SESSION['correoUserSesion']; ?>" />

        <!--/////////////////////////////////////////////////////////////////////////////////-->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdropCorreo">
          Editar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdropCorreo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelCorreo" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabelCorreo">Coloca el correo nuevo</h1>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <!--Los datos que mandará esto son nuevaContraCuentaName y iduserCuentaEditar --> 
              <form action="../controller/RutaController.php?ruta=31" method="post">
                <input class="inputStyle" type="text"    id="" name="nuevoCorreoCuentaName" placeholder="Nuevo correo" required>             
              </div>
              <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>-->
                <input type="hidden" name="iduserCuentaEditar" value="<?php echo $_SESSION['idUserSesion']; ?>">
                <input class="inputStyleButton" type="submit" value="Aceptar">
                <input data-bs-dismiss="modal" class="inputStyleButton" type="button" value="Cancelar">
               <!-- <button type="button" class="btn btn-primary">Aceptar</button>-->
              </div>
              </form>
            </div>
          </div>
        </div>
        <!--/////////////////////////////////////////////////////////////////////////////////-->

      </div>
    </div>
<!---->
    <div class="textArribaInputAbajo">
      <label for="">Contraseña</label>
      <div class="ordenHorizontal">
        <input  id="contrasena" class="tamanoInput " type="password" readonly value="<?php echo $_SESSION['contraUserSesion']; ?>"/>
        <button id="toggleButton" class="btn" ><img id="eyeIcon" src="../assets/img/eye.png" alt=""></button>
        <!--////////////////////////////////////////////////////////////////////////////////////
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdropContrasena">
          Editar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdropContrasena" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelContrasena" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabelContrasena">Coloca la nueva contraseña</h1>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               <!--Los datos que mandará esto son nuevaContraCuentaName y iduserCuentaEditar --> 
              <form action="../controller/RutaController.php?ruta=10" method="post">
                <input class="inputStyle" type="text"    id="" name="nuevaContraCuentaName" placeholder="Nueva contraseña" required>             
              </div>
              <div class="modal-footer">
                <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>-->
                <input type="hidden" name="iduserCuentaEditar" value="<?php echo $_SESSION['idUserSesion']; ?>">
                <input class="inputStyleButton" type="submit" value="Aceptar">
                <input data-bs-dismiss="modal" class="inputStyleButton" type="button" value="Cancelar">
               <!-- <button type="button" class="btn btn-primary">Aceptar</button>-->
              </div>
              </form>
            </div>
          </div>
        </div>
        

        <!--////////////////////////////////////////////////////////////////////////////////////-->
      </div>
    </div>
<!---->
    <div class="textArribaInputAbajo">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalBorrar">
        Borrar Cuenta
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalBorrar" tabindex="-1" aria-labelledby="exampleModalLabelBorrar" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabelBorrar">
                ¡Alerta!
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Estás seguro que quieres borrar tu cuenta?</div>
              
            
            <div class="ordenBotones">
              <form  method="post" action="../controller/RutaController.php?ruta=8">
              <input type="hidden" name="iduserCuentaBorrar" value="<?php echo $_SESSION['idUserSesion']; ?>">  
              <input class="inputStyleButton" type="submit" value="Aceptar">
              <input data-bs-dismiss="modal" class="inputStyleButton" type="button" value="Cancelar"> 
              </form>
             <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Aceptar</button>-->
            </div>
          </div>
        </div>
      </div>
    </div>
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