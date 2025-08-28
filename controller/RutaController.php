<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/css/style.css">
</head>
<body>
    
</body>
</html>


<?php 
include_once('../model/DbModel.php');


class ClassController{

    private $objmodel;

    //-----------------------------------Métodos que sirven -------------------
    function __construct()
    {
        $this->objmodel = new DbModel();
    }

    function buscarUsuarioLogin($REQ){
        $usuario = $this->objmodel->BuscarUsuario($REQ);
        //$username =   $_SESSION["idUser"];
        $cad = "Location:../views/index.php?user=".$REQ['correoLoginName'];
        
        if($usuario){
            //$this->Select();    
            //include("../views/cuenta.php");
            header($cad);
        } else {
            header("Location:../login.html");  
        }
        //include("../views/header.php");
    }
    
    function CierreSesion(){
        session_start();
        session_destroy();
        header("Location:../login.html");
    }


    function insertarCrearCuenta($REQ){
    //buscamos si esos fatos ya existe, el correo y contrasena
    $usuarioDuplicado = $this->objmodel->BuscarUsuarioDuplicado($REQ);//modelo

    if($usuarioDuplicado){
        echo '<script>
        window.addEventListener("load", function() {
            alert("El usuario o el correo ya existen");
        });
         </script>';
        // header("Location:../crearCuenta.html");     
    }else{
        $usuario = $this->objmodel->insert_Usuario($REQ);//inserta el usuario que ya se verificó si existe
            if($usuario){
                header("Location:../login.html");
            }else{
                header("Location:../crearCuenta.html");
            }
    }
    }


    //-----------------------------------Métodos que sirven -------------------


  function insertarCita($REQ){
         $insertar = $this->objmodel->insertCita($REQ);
        if($insertar){
         header("Location:../views/citas.php");
         //include("../views/cuenta.php");    
        }else{
            echo '<script>
            window.addEventListener("load", function() {
                alert("error al insertar la cita");
            });
             </script>';    
        }
        
    }

    function SelectDatosUser($id){

    /*    $datosUsuario = $this->objmodel->selectDatosUsuarios();
        include("../views/cuenta.php");
        include("../views/header.php");*/
    }


    function Select(){
        $datosUsuariO = $this->objmodel->select();
        include("../views/cuenta.php");
        //include("../views/cuenta.php");
        //require("../views/header.php");
    }

    function Delete($REQ){
        $datosBorrados = $this->objmodel->delete($REQ);
        if($datosBorrados){
                $this->CierreSesion();
        }else{
            echo '<script>
            window.addEventListener("load", function() {
                alert("No se pudo borrar el usuario");
            });
             </script>';   
        }

    }

    function Editar($REQ){
        $usuario = $this->objmodel->modificarDatosCuentaContra($REQ);

        if($usuario){
            header("Location:../views/cuenta.php");    
        }else{
            echo '<script>
        window.addEventListener("load", function() {
            alert("No se pudo actualizar la contraseña");
        });
         </script>';
        }
        //include("../View/editar.php");
    }

    function Editar2($REQ){
        $usuario = $this->objmodel->modificarDatosCuentaCorreo($REQ);

        if($usuario){
            header("Location:../views/cuenta.php");    
        }else{
            echo '<script>
        window.addEventListener("load", function() {
            alert("No se pudo actualizar la contraseña");
        });
         </script>';
        }
        //include("../View/editar.php");
    }

    function Editar3($REQ){
        $usuario = $this->objmodel->modificarDatosCuentaNombre($REQ);

        if($usuario){
            header("Location:../views/cuenta.php");    
        }else{
            echo '<script>
        window.addEventListener("load", function() {
            alert("No se pudo actualizar la contraseña");
        });
         </script>';
        }
        //include("../View/editar.php");
    }

    function Actualizar($REQ){

     /* $id = $REQ['id'];
        $nombre = $REQ['nombre'];
        $edad = $REQ['edad'];

        // Depuración: Mostrar los datos recibidos
        echo "ID: $id, Nombre: $nombre, Edad: $edad";

        // Llamada al método update de DbModel
        $this->objmodel->update($id, $nombre, $edad);
        // Redirección
        header("Location: RutaController.php?ruta=7");*/
    }

 

    function inicio($REQ){ //verifique el usuario y extraiga los datos del mismo
         $datosUsuario = $this->objmodel->verificarUsuarioExistente($REQ);  
            
         if($datosUsuario){     
             
             header("Location:../views/index.php"); 

         }else{
            echo "ayyyyy";
            header("Location:../login.html");  
         }
       // $datoss = $this->objmodel->select();
       // include("../views/index.php");
       //include("../views/header.php");        
             
    }
    function inicio2(){ //verifique el usuario y extraiga los datos del mismo                     
            header("Location:../views/index.php");          
            
   }

    function citas(){
       // $datoss = $this->objmodel->select();
      //  include("../views/citas.php");
        header("Location:../views/citas.php"); 
    }
    function articulos(){
      //  $datoss = $this->objmodel->select();
     //   include("../views/todosLosArticulos.php");
        header("Location:../views/todosLosArticulos.php"); 
    }
    function ayudaLinea(){
       // $datoss = $this->objmodel->select();
      //  include("../views/ayudaLinea.php");
        header("Location:../views/ayudaLinea.php"); 
    }
    
    function sobreNosotros(){
       // $datoss = $this->objmodel->select();
      //  include("../views/sobreNosotros.php");
        header("Location:../views/sobreNosotros.php"); 
    }
    
    function psicologos(){
       // $datoss = $this->objmodel->select();
      //  include("../views/psicologos.php");
        header("Location:../views/psicologos.php"); 

    }

    function cuenta(){
       // $usuario = $this->objmodel->BuscarUsuario($REQ);
       // $_SESSION["idUser"] = $usuario['idCuenta'];
      //  $datoss = $this->objmodel->select2($id);
      //  include("../views/cuenta.php");
        //$datos = $this->objmodel->selectDatosUsuarios();
        header("Location:../views/cuenta.php"); 

    }
    function reportes() {
     //   session_start();
      //  $idUserSesion = $_SESSION['idUserSesion'];
        //header("Location: ../views/misCitas.php?idActivo=$idUserSesion");
        header("Location:../views/misCitas.php");
    }
    
    function miedoHablar(){
      //  $datoss = $this->objmodel->select();
      //  include("../views/miedoHablar.php");
        header("Location:../views/miedoHablar.php"); 

    }
    function manejoEstres(){
      //  $datoss = $this->objmodel->select();
      //  include("../views/manejoEstres.php");
        header("Location:../views/manejoEstres.php"); 

    }
    function procrastinacion(){
       // $datoss = $this->objmodel->select();
      //  include("../views/procrastinacion.php");
        header("Location:../views/procrastinacion.php"); 

    }
    function manejoAnsiedad(){
       // $datoss = $this->objmodel->select();
      //  include("../views/manejoAnsiedad.php");
        header("Location:../views/manejoAnsiedad.php"); 

    }
    function tecnicasEstudio(){
       // $datoss = $this->objmodel->select();
       // include("../views/tecnicasEstudio.php");
        header("Location:../views/tecnicasEstudio.php"); 

    }
    function expectativas(){
       // $datoss = $this->objmodel->select();
       // include("../views/expectativas.php");
        header("Location:../views/expectativas.php"); 

    }
    function adaptacion(){
      //  $datoss = $this->objmodel->select();
      //  include("../views/adaptacion.php");
        header("Location:../views/adaptacion.php"); 

    }

}

$objController = new ClassController();

switch($_REQUEST["ruta"]) {
   
    case 4:
    /*    $objController->Autentifica($_REQUEST);*/
        break;   
    case 5:
        $objController->CierreSesion();
        break;    
    case 6:
       /* $objController->Insert($_REQUEST);*/
        break;
    case 7:
        $objController->SelectDatosUser($_REQUEST['id']);
        break;
    case 8:
        $objController->Delete($_REQUEST);
        break;
    case 10:
        $objController->Editar($_REQUEST);
        break;
    case 11:
        $objController->Actualizar($_REQUEST);
        break;
    case 12:
        $objController->inicio($_REQUEST); 
        break;
    case 13:
        $objController->insertarCrearCuenta($_REQUEST);
        break;
        
    case 14:
        $objController->buscarUsuarioLogin($_REQUEST);
        break;
        
    case 15:
        $objController->citas(); 
        break;
    case 16:
        $objController->articulos(); 
        break;
    case 17:
        $objController->ayudaLinea(); 
        break; 
        
    case 18:
        $objController->sobreNosotros(); 
        break;  
    case 19:
        $objController->psicologos(); 
        break;   
    case 20:
        $objController->cuenta(); 
        break;
    case 21:
        $objController->reportes(); 
        break; 
    case 22:
            $objController->miedoHablar(); 
            break; 
    case 23:
            $objController->manejoEstres(); 
            break; 
    case 24:
            $objController->procrastinacion(); 
            break; 
    case 25:
            $objController->manejoAnsiedad(); 
            break;  
    case 26:
            $objController->tecnicasEstudio(); 
            break; 
    case 27:
            $objController->expectativas(); 
            break; 
    case 28:
            $objController->adaptacion(); 
            break; 
    case 29:
            $objController->insertarCita($_REQUEST); 
            break;
    case 30:
            $objController->inicio2(); 
            break;
    case 31:
            $objController->Editar2($_REQUEST);
            break;
            
    case 32:
            $objController->Editar3($_REQUEST);
            break;          
     
            
            
            
}

?>
