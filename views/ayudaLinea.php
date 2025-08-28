<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda en linea</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"/>
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
                <a class="cursorEncima" href="todosLosArticulos.html">Artículos</a></li>
            <li>
                <a class="cursorEncima" href="ayudaLinea.html"><span>Ayuda en linea</span></a>
            </li>
            <li>
                <a class="cursorEncima" href="../views/sobreNosotros.html">Sobre Nosotros</a>
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
    <div class="contenedorTituloCuadros">
        <div class="tituloPsicologos">
        <h1 class="centrar H2Style ">Ayuda remota las 24h</h1>    
        </div>

        <div class="titulo2Psicologos ">
                <h2 class="centrar textoStyle">En este espacio puedes encontrar organizaciones que se encargan de atenderte en cualquier momento</h2>
        </div>

        <div class="contenedorPsicologos">
                <div class="contnedorTodo">
                   <div class="cuadroColores">      
                    <img class="senor" src="https://www.saptel.org.mx/images/logp2.png" alt="">
                   </div> 

                   <div class="contenedorNombreDescripcion">
                     <h2>SAPTEL</h2>
                     <p class="justificar fuenteAyudaDescri">Horario de Atención: 24 hrs. los 365 días. 
                        <strong>Tel: 5552598121 ó 8004727835</strong></p>
                     
                   </div>
                </div>


                <div class="contnedorTodo">
                    <div class="cuadroColores2">      
                     <img class="senor" src="https://pbs.twimg.com/profile_images/1542856929101221889/Qdla_LGT_400x400.jpg" alt="">
                    </div> 
 
                    <div class="contenedorNombreDescripcion">
                      <h2>Locatel</h2>
                      <p class="justificar fuenteAyudaDescri" >Horario de Atención: 24 hrs. los 365 días. <strong>Tel: *0311 ó 5556581111</strong></p>
                    </div>
                 </div>


                 <div class="contnedorTodo">
                    <div class="cuadroColores3">      
                     <img class="senor" src="https://consejociudadanomx.org/images/share/logo.png" alt="">
                    </div> 
 
                    <div class="contenedorNombreDescripcion">
                      <h2>Consejo Ciudadano de la CDMX </h2>
                      <p class="justificar fuenteAyudaDescri" >Horario de Atención: 24 hrs. los 365 días. <strong>Tel: 5555335533 ó 8000005428</strong></p>
                    </div>
                 </div>
  
        </div>

        <div class="contenedorPsicologos">
            <div class="contnedorTodo">
               <div class="cuadroColores">      
                <img class="senor" src="https://www.la-prensa.com.mx/metropoli/y1om7m-conadic/ALTERNATES/LANDSCAPE_960/CONADIC" alt="">
               </div> 

               <div class="contenedorNombreDescripcion">
                 <h2>CONADIC</h2>
                 <p class="justificar fuenteAyudaDescri">Horario de Atención: 24 hrs. los 365 días. 
                    <strong>Tel: 8009112000 ó 8007100900</strong></p>
                 
               </div>
            </div>


            <div class="contnedorTodo">
                <div class="cuadroColores2">      
                 <img class="senor" src="https://yosoyjoven.com//wp-content/uploads/2018/06/centrosdeintegracion.jpg" alt="">
                </div> 

                <div class="contenedorNombreDescripcion">
                  <h2>Centros de integración juvenil</h2>
                  <p class="justificar fuenteAyudaDescri" >Horario de Atención: 24 hrs. los 365 días. <strong>Tel: 5552121212 ó 5559994949</strong></p>
                </div>
             </div>


             <div class="contnedorTodo">
                <div class="cuadroColores3">      
                 <img class="senor" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoFFxQ0aAM4Bbi3IcSnoYQTblyXcFni9XcnlobUHkocA&s" alt="">
                </div> 

                <div class="contenedorNombreDescripcion">
                  <h2>3er. Milenio, Regreso a la Vida</h2>
                  <p class="justificar fuenteAyudaDescri" >Horario de Atención: 24 hrs. los 365 días. <strong>Tel: 5558134171</strong></p>
                </div>
             </div>

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