<?php
include("revisarSesion.php"); 
//inicio de sesion
/*
if (!isset($_SESSION)) {
  
}
*/
//session_start();
 // $registro=$datoss->fetch_assoc();
  //$registro2= $_SESSION["idUser"]
//require_once '../model/DbModel.php';

//$con = new DbModel();

//$usuario = $con->select();
// Obtener el ID del usuario activo
//$id_usuario = $_SESSION['idCuenta'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>



<header>
      <nav class="NavBar">
        <div class="MenteTecContainer">
          <a class="FuenteLogo" href="">MenteTec</a>
        </div>

        <ul class="ulNoneStyle ListContainer">
          <li>
            <a class="cursorEncima" href="../controller/RutaController.php?ruta=30">Inicio</a>
          </li>
          <li>
            <a class="cursorEncima" href="../controller/RutaController.php?ruta=15">Citas</a>
          </li>
          <li>
            <a class="cursorEncima" href="../controller/RutaController.php?ruta=16">Artículos</a></li>
          </li>
          <li>
            <a class="cursorEncima" href="../controller/RutaController.php?ruta=17">Ayuda en linea</a>
          </li>
          <li>
            <a class="cursorEncima" href="../controller/RutaController.php?ruta=18">Sobre nosotros</a>
          </li>
          <li>
            <a class="cursorEncima" href="../controller/RutaController.php?ruta=19">Psicólogos</a>
          </li>

          <li>
            <div class="dropdown">
              <button class="btn  dropdown-toggle transparente" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <a class="cursorEncima" href="">Opciones</a>
              </button>
              <ul class="dropdown-menu">
              
                <li><a class="dropdown-item" href="../controller/RutaController.php?ruta=20">Perfil</a></li>
                <li><a class="dropdown-item" href="../controller/RutaController.php?ruta=21">Mis reportes</a></li>
                <li><a class="dropdown-item" href="../controller/RutaController.php?ruta=5">Cerrar Sesión</a></li>
              </ul>
            </div>         
          </li>

        </ul>
      </nav>
    </header>
</body>
</html>