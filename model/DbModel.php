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

class DbModel{
    private $usuario = 'root';
    private $pass = '';
    private $host = '127.0.0.1';
    private $db = 'mentetec';
    private $conexion;
    
    //-----------------------------------Métodos que sirven -------------------

    public function __construct()
    {
        try {
            $this->conexion = new mysqli($this->host, $this->usuario, $this->pass, $this->db);
            echo "";
        } catch(Exception $e) {
            echo "";
        }
    }


    function BuscarUsuario($REQ){

        $correo = $REQ['correoLoginName'];
        $contrasena = $REQ['contraLoginName'];

        try{
            $SQL = "SELECT * FROM cuenta WHERE email = '$correo' AND contrasena = '$contrasena' ";
            $result = $this->conexion->query($SQL);
            
            if ($result->num_rows > 0) {
                // Usuario encontrado
                session_start();
                $usuario = $result->fetch_assoc();
                $_SESSION["idUserSesion"] = $usuario['idCuenta'];
                $_SESSION["nombreUser"] = $usuario['usuario'];
                $_SESSION["correoUser"] = $usuario['email'];
                $_SESSION["contraUser"] = $usuario['contrasena'];
                return  $usuario;
            } else {
                // Usuario no encontrado
                return false;              
            }

        }catch(Exception $e) {
             // Manejo de errores
             echo "Error: " . $e->getMessage();
             return false;
        }
    }
    function BuscarUsuarioDuplicado($REQ){

        $usuario = $REQ['usuarioCrearCuentaName']; 
        $correo = $REQ['correoCrearCuentaName'];
        

        try{
            //$SQL = "SELECT * FROM cuenta WHERE usuario = '$usuario' AND email = '$correo' ";
            //verifica si el usuario está duplicado
            $SQL = "SELECT * FROM cuenta WHERE usuario = '$usuario'";
            $result = $this->conexion->query($SQL);
            //verifica si el correo está duplicado
            $SQL2 = "SELECT * FROM cuenta WHERE email = '$correo' ";
            $result2 = $this->conexion->query($SQL2);


            if ($result->num_rows > 0 || $result2->num_rows > 0) {
                // Usuario encontrado
                return true;
            } else {
                // Usuario no encontrado
                return false;
                
            }

        }catch(Exception $e) {
             // Manejo de errores
             echo "Error: " . $e->getMessage();
             
        }
    }  
    function insert_Usuario($REQ)
    {
        try {
            $SQL = "INSERT INTO cuenta(usuario, email, contrasena)
            VALUES('".$REQ['usuarioCrearCuentaName']."','".$REQ['correoCrearCuentaName']."','".$REQ['contraCrearCuentaName']."')";
            $this->conexion->query($SQL);//Ejecuta el insert
            return true;
        } catch(Exception $e) {
            echo "error al insertar" ;
            return false;
        }
    }

    function insertCita($REQ)
    {          
        try {
            
    
            $SQL = "INSERT INTO citas(
                nombreUsuarioCita, 
                apellidoPaterno,
                apellidoMaterno,
                sexo,
                noTelefono,
                horario,
                noControl,
                carrera,
                semestre,
                descripcion,
                fecha,
                idCuenta

            ) VALUES(
                '".$REQ['nombreCitasName']."',
                '".$REQ['apellidoPaternoCitasName']."',
                '".$REQ['apellidoMaternoCitasName']."',
                '".$REQ['opcionesSexoCitasName']."',
                '".$REQ['numeroCelularCitasName']."',
                '".$REQ['opcionesHorarioCitasName']."',
                '".$REQ['numeroControlCitasName']."',
                '".$REQ['carreraCitasName']."',
                '".$REQ['semestreCitasName']."',
                '".$REQ['descripcionCitasName']."',
                '".$REQ['fechaCitasName']."',
                '".$REQ['idUserCitaName']."'
            )";
    
            $resultado = $this->conexion->query($SQL); // Ejecuta el insert
            if($resultado){

             /*  $buscarCitas = $this->BuscarCita($REQ);    
                    if($buscarCitas){
                        echo "Los datos fueron extraidos de la tabla citas de forma exitosa";
                    }else{
                        echo "Los datos fueron extraidos sin éxito";    
                    }*/
                return true;
            }else{
                return false;
            }
            
        } catch(Exception $e) {
            echo "Error al insertar: " . $e->getMessage();
            
        }
    }


    function BuscarCita($idUsuarioActivo){

        $id = $idUsuarioActivo;
        

        try{
            $SQL = "SELECT * FROM citas WHERE idCuenta = '$id'";
            $result = $this->conexion->query($SQL);
            
            if ($result->num_rows > 0) {
                // Usuario encontrado
                //session_start();
                //$cita = $result->fetch_assoc();
                $cita = $result;
            //  $_SESSION["resultSesion"] = $cita;
            //$_SESSION['resultSesion'] = serialize($result);


           /*     $_SESSION["idCitasSesion"] =             $cita['idCitas'];
                $_SESSION["nombreUsuarioCitaSesion"] =   $cita['nombreUsuarioCita'];
                $_SESSION["apellidoPaternoSesion"] =     $cita['apellidoPaterno'];
                $_SESSION["apellidoMaternoSesion"] =     $cita['apellidoMaterno'];
                $_SESSION["sexoSesion"] =                $cita['sexo'];
                $_SESSION["noTelefonoSesion"] =          $cita['noTelefono'];
                $_SESSION["horarioSesion"] =             $cita['horario'];
                $_SESSION["noControlSesion"] =           $cita['noControl'];
                $_SESSION["carreraSesion"] =             $cita['carrera'];
                $_SESSION["semestreSesion"] =            $cita['semestre'];
                $_SESSION["descripcionSesion"] =         $cita['descripcion'];
                $_SESSION["fechaSesion"] =               $cita['fecha'];*/
                return  $cita;
            } else {
               // echo "No se encontraron los datos en la tabla citas";
                return false;              
            }

        }catch(Exception $e) {
             // Manejo de errores
             echo "Error: " . $e->getMessage();
             return false;
        }
    }



    function verificarUsuarioExistente($REQ){

        //se extraen los datos que colocó el usuario en el login (correo y contraseña)
        $correologin = $REQ['correoLoginName'];
        $contrasenalogin = $REQ['contraLoginName'];

        try{
            //Dame todos los datos de la tabla cuenta que correspondan al email y contraseña que está en el login
            $SQL = "SELECT * FROM cuenta WHERE email = '$correologin' AND contrasena = '$contrasenalogin' ";
            $result = $this->conexion->query($SQL);  //recogemos los datos
                if ($result->num_rows > 0) {//si se encontró el usuario
                
                    session_start();//si el usuario existe ya puede pasar, entonces inicamos su sesión     
                    $usuario = $result->fetch_assoc();
                    $_SESSION['idUserSesion']     = $usuario['idCuenta'];
                    $_SESSION['usuarioUserSesion']     = $usuario['usuario'];
                    $_SESSION['correoUserSesion'] = $usuario['email'];
                    $_SESSION['contraUserSesion'] = $usuario['contrasena'];
                
                return  true;
             } else {
                // Usuario no encontrado
               echo "Usuario no encontrado";
               return false;
                
            }

        }catch(Exception $e){
            echo "Algo salió mal: -> ".$e->getMessage();
        }
   }//verificarUsuarioExistente

   function modificarDatosCuentaContra($REQ)
    {
        $contrasena = $REQ['nuevaContraCuentaName'];
        $id = $REQ['iduserCuentaEditar'];

        try {
            $SQL = "UPDATE cuenta SET contrasena = '$contrasena' WHERE idCuenta = '$id'";
            $resultado = $this->conexion->query($SQL);

            if ($resultado) {//si la consulta es exitosa
                //$usuario = $resultado->fetch_assoc();
                //$_SESSION['contraUserSesion'] = $usuario['contrasena'];
                $resultadoExtraerContra=$this->extraerContrasenaCuenta($id);
                if($resultadoExtraerContra){
                        echo "contraseña actualizada y modificada";
                        return true;
                }else{
                    echo "contraseña actualizada pero no se cambio la variable sesion";
                }

                //return true; // Actualización exitosa
            } else {
                echo "No se actualizó ningún registro. Puede que los datos sean los mismos.";
                return false;
            }

        } catch(Exception $e) {
            echo "Error al actualizar: " . $e->getMessage();
        }
    }
  
    function extraerContrasenaCuenta($id){
        try{
            $SQL = "SELECT * FROM cuenta WHERE idCuenta = '$id'";
            $result = $this->conexion->query($SQL);
            if($result->num_rows > 0){
                $usuario = $result->fetch_assoc();
                session_start();
                $_SESSION['contraUserSesion'] = $usuario['contrasena'];
                return true;
            }else{
               echo "Usuario no encontrado";
               return false;
            }
        }catch(Exception $e){
            echo "Algo salió mal: -> ".$e->getMessage();
        }

    }


    function modificarDatosCuentaCorreo($REQ)
    {
        $correo = $REQ['nuevoCorreoCuentaName'];
        $id = $REQ['iduserCuentaEditar'];

        try {
            $SQL = "UPDATE cuenta SET email = '$correo' WHERE idCuenta = '$id'";
            $resultado = $this->conexion->query($SQL);

            if ($resultado) {//si la consulta es exitosa
                //$usuario = $resultado->fetch_assoc();
                //$_SESSION['contraUserSesion'] = $usuario['contrasena'];
                $resultadoExtraerCorreo=$this->extraerCorreoCuenta($id);
                if($resultadoExtraerCorreo){
                        echo "Correo actualizado y modificado";
                        return true;
                }else{
                    echo "Correo actualizado pero no se cambio la variable sesion";
                }

                //return true; // Actualización exitosa
            } else {
                echo "No se actualizó ningún registro. Puede que los datos sean los mismos.";
                return false;
            }

        } catch(Exception $e) {
            echo "Error al actualizar: " . $e->getMessage();
        }
    }

    function extraerCorreoCuenta($id){
        try{
            $SQL = "SELECT * FROM cuenta WHERE idCuenta = '$id'";
            $result = $this->conexion->query($SQL);
            if($result->num_rows > 0){
                $usuario = $result->fetch_assoc();
                session_start();
                $_SESSION['correoUserSesion'] = $usuario['email'];
                return true;
            }else{
               echo "Usuario no encontrado";
               return false;
            }
        }catch(Exception $e){
            echo "Algo salió mal: -> ".$e->getMessage();
        }

    }

    function modificarDatosCuentaNombre($REQ)
    {
        $Nombre = $REQ['nuevoNombreCuentaName'];
        $id = $REQ['iduserCuentaEditar'];

        try {
            $SQL = "UPDATE cuenta SET usuario = '$Nombre' WHERE idCuenta = '$id'";
            $resultado = $this->conexion->query($SQL);

            if ($resultado) {//si la consulta es exitosa
                //$usuario = $resultado->fetch_assoc();
                //$_SESSION['contraUserSesion'] = $usuario['contrasena'];
                $resultadoExtraerNombre=$this->extraerNombreCuenta($id);
                if($resultadoExtraerNombre){
                        echo "Nombre actualizado y modificado";
                        return true;
                }else{
                    echo "Nombre actualizado pero no se cambio la variable sesion";
                }

                //return true; // Actualización exitosa
            } else {
                echo "No se actualizó ningún registro. Puede que los datos sean los mismos.";
                return false;
            }

        } catch(Exception $e) {
            echo "Error al actualizar: " . $e->getMessage();
        }
    }

    function extraerNombreCuenta($id){
        try{
            $SQL = "SELECT * FROM cuenta WHERE idCuenta = '$id'";
            $result = $this->conexion->query($SQL);
            if($result->num_rows > 0){
                $usuario = $result->fetch_assoc();
                session_start();
                $_SESSION['usuarioUserSesion'] = $usuario['usuario'];
                return true;
            }else{
               echo "Usuario no encontrado";
               return false;
            }
        }catch(Exception $e){
            echo "Algo salió mal: -> ".$e->getMessage();
        }

    }

    function delete($REQ)
    {
        $id = $REQ['iduserCuentaBorrar'];
        try {
            $SQL = "DELETE FROM cuenta where idCuenta = '$id'";
            $result = $this->conexion->query($SQL);
            if($result){
                echo"borrado con éxito";
                    return true;
            }else{
                echo"no pudo borar";
                return false;
            }
        } catch(Exception $e) {
             echo "$e";
        }
    }

    //-----------------------------------Métodos que sirven -------------------
    
    function delete2($id)
    {
        try {
            $SQL = "DELETE FROM informacion where id = '$id'";
            $this->conexion->query($SQL);
        } catch(Exception $e) {
             echo "$e";
        }
    }
    
    function update($id, $nombre, $edad)
    {
        try {
            $SQL = "UPDATE informacion SET nombre = '$nombre', edad = '$edad' WHERE id = '$id'";           
            // Depuración: Mostrar la consulta SQL
            echo "SQL de actualización: $SQL";

            $this->conexion->query($SQL);
        } catch(Exception $e) {
            echo "Error al actualizar: " . $e->getMessage();
        }
    } 
  
  
    
    function selectDatosUsuarios()
{
    try {
        $SQL = "SELECT * FROM cuenta";
        $datosUsuario = $this->conexion->query($SQL);
        return $datosUsuario->fetch_assoc();
    } catch(Exception $e) {
        echo "";
    }
}

function select()
{
    try {
        $SQL = "SELECT * FROM cuenta";
      $datoss=$this->conexion->query($SQL);
      return $datoss;
    } catch (Exception $e) {
      
    }
    
  }
/************************************************************/
 

  function select2($id)
{
    try {
      $SQL = "SELECT * FROM cuenta WHERE idCuenta = '$id'";
      $datoss2=$this->conexion->query($SQL);
      
      if ($datoss2->num_rows > 0) {
        // Devuelve los datos del usuario encontrado
        return $datoss2->fetch_assoc();
    } else {
        // No se encontró ningún usuario con ese ID
        return null;
    }
    } catch (Exception $e) {
      
    }
    
  }

/* CHIDOOOOO
function select()
{
    try {
      $SQL = "SELECT * FROM cuenta";
      $datoss=$this->conexion->query($SQL);
      return $datoss;
    } catch (Exception $e) {
      
    }
    
  }*/


  /*  
   function select()
    {
        try {
            $SQL = "SELECT * FROM informacion";
            $datos = $this->conexion->query($SQL);
            return $datos;
        } catch(Exception $e) {
            echo "HOLAAAAAAAAAAAA";
        }
    }   
     

    function getUsuario($id)
    {
        try {
            $SQL = "SELECT * FROM informacion WHERE id = '$id'";
            $result = $this->conexion->query($SQL);
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            } else {
                return null;
            }
        } catch(Exception $e) {
            echo "$e";
        }
    } */
}


