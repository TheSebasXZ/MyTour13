<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Untitled (1).png" type="image/x-icon">
    <link rel="stylesheet" href="css/stylee.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>My tour 13</title>
</head>

<body>
    <div class="container-form sign-up">
      <div class="formulario_iniciarsesion">
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <img class="imagen_tour1" src="img/Untitled (1).png">
        <b class="create-account1">INICIAR SESIÓN</b>
        <div> 
          <abbr title="Terminos de uso" class="abbrr">
            <a class="iconos1" data-bs-toggle="modal" data-bs-target="#terminos_de_uso">
              <div class="border-icon">
                <i class='bx bx-folder-plus'></i>
              </div>
            </a>
           </abbr>
           <abbr title="Sobre nosotros" class="abbrr">
            <a class="iconos2" data-bs-toggle="modal" data-bs-target="#acerca_de">
              <div class="border-icon">
                <i class='bx bx-group'></i>
              </div>
            </a>
           </abbr>
           <abbr title="Como usar My tour 13" class="abbrr">
            <a class="iconos3" data-bs-toggle="modal" data-bs-target="#manual">
              <div class="border-icon">
                <i class='bx bxs-file-pdf'></i>
              </div>
            </a>
           </abbr>
        </div> 
        <br>
        <form class="formulario_position" action="php/inicio_sesion.php" method="post" onsubmit="return validar2();">
          <br>
          <input class="estilos_boton" type="text" placeholder="Numero de identificación" name="n_identificacionn" id="n_identificacionn">
          <input class="estilos_boton" type="password" placeholder="Contraseña" name="password" id="password">
          <a href="#" id="show-passwords"><img class="boton_ojo" src="img/eyee4.png"></a>
          <br><br>
          <button type="submit" class="boton1" name="btn_iniciar" id="btn2"><b>Iniciar sesión</b></button>
          <br><br>
          <a  data-bs-toggle="modal" data-bs-target="#olvidaste_contra" class="olvidaste_contraseña">
            ¿Olvidaste tu contraseña?
          </a>
        </form> 
        <br><br>
        <div class="welcome-back">
          <div class="message">
              <button class="sign-in-btn">Crear cuenta nueva</button>
          </div>
      </div>
    </div>
    </div>
    <div class="container-form sign-in">
      <div class="formulario_crearcuenta">
        <br>
        <br><br>
        <img class="imagen_tour2" src="img/Untitled (1).png">
          <b class="create-account2">CREAR CUENTA</b> 
          <div> 
           <abbr title="Terminos de uso" class="abbrr">
            <a class="iconos4" data-bs-toggle="modal" data-bs-target="#terminos_de_uso">
              <div class="border-icon">
                <i class='bx bx-folder-plus'></i>
              </div>
            </a>
           </abbr>
           <abbr title="Sobre nosotros" class="abbrr">
            <a class="iconos5" data-bs-toggle="modal" data-bs-target="#acerca_de">
              <div class="border-icon">
                <i class='bx bx-group'></i>
              </div>
            </a>
           </abbr>
           <abbr title="Como usar My tour 13" class="abbrr">
            <a class="iconos6" data-bs-toggle="modal" data-bs-target="#manual">
              <div class="border-icon">
                <i class='bx bxs-file-pdf'></i>
              </div>
            </a>
           </abbr>
          </div> 
          <br><br> 
          <form class="formulario_positionn" action="php/funciones.php" method="POST" enctype="multipart/form-data"  onsubmit="return validar();">
            <input class="estilos_boton" type="text" placeholder="Nombres:" name="nombre" id="nombre" onkeypress="return soloLetras(event)">
            <input class="estilos_boton" type="text" placeholder="Apellidos:" name="apellidos" id="apellidos" onkeypress=" return soloLetras(event)">
            <input class="estilos_boton" type="text" placeholder="Numero de identificación:" name="n_identificacion" id="n_identificacion" >
            <input class="estilos_boton" type="email" placeholder="Correo electrónico:" name="correo" id="correo">
            <input class="estilos_boton" type="password" placeholder="Crea una contraseña:" id="confirm-password" name="confirm-password">
            <a href="#" id="show-confirm-password"><img class="boton_ojo" src="img/eyee4.png"></a>
            <select class="estilos_boton" name="pais" id="pais">
            <option class="color_inputs" value="">Selecciona tu pais:</option>
              <option class="color_inputs" value="Afganistán">Afganistán</option>
              <option class="color_inputs" value="Albania">Albania</option>
              <option class="color_inputs" value="Alemania">Alemania</option>
              <option class="color_inputs" value="Andorra">Andorra</option>
              <option class="color_inputs" value="Angola">Angola</option>
              <option class="color_inputs" value="Antigua y Barbuda">Antigua y Barbuda</option>
              <option class="color_inputs" value="Arabia Saudita">Arabia Saudita</option>
              <option class="color_inputs" value="Argelia">Argelia</option>
              <option class="color_inputs" value="Argentina">Argentina</option>
              <option class="color_inputs" value="Armenia">Armenia</option>
              <option class="color_inputs" value="Australia">Australia</option>
              <option class="color_inputs" value="Austria">Austria</option>
              <option class="color_inputs" value="Azerbaiyán">Azerbaiyán</option>
              <option class="color_inputs" value="Bahamas">Bahamas</option>
              <option class="color_inputs" value="Bangladesh">Bangladesh</option>
              <option class="color_inputs" value="Barbados">Barbados</option>
              <option class="color_inputs" value="Bahréin (Baréin)">Bahréin (Baréin)</option>
              <option class="color_inputs" value="Bélgica">Bélgica</option>
              <option class="color_inputs" value="Belice">Belice</option>
              <option class="color_inputs" value="Benín">Benín</option>
              <option class="color_inputs" value="Bielorrusia">Bielorrusia</option>
              <option class="color_inputs" value="Birmania/Myanmar">Birmania/Myanmar</option>
              <option class="color_inputs" value="Bolivia">Bolivia</option>
              <option class="color_inputs" value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
              <option class="color_inputs" value="Botsuana">Botsuana</option>
              <option class="color_inputs" value="Brasil">Brasil</option>
              <option class="color_inputs" value="Brunéi">Brunéi</option>
              <option class="color_inputs" value="Bulgaria">Bulgaria</option>
              <option class="color_inputs" value="Burkina Faso">Burkina Faso</option>
              <option class="color_inputs" value="Burundi">Burundi</option>
              <option class="color_inputs" value="Bután">Bután</option>
              <option class="color_inputs" value="Cabo Verde">Cabo Verde</option>
              <option class="color_inputs" value="Camboya">Camboya</option>
              <option class="color_inputs" value="Camerún">Camerún</option>
              <option class="color_inputs" value="Canadá">Canadá</option>
              <option class="color_inputs" value="Catar">Catar</option>
              <option class="color_inputs" value="Chad">Chad</option>
              <option class="color_inputs" value="Chile">Chile</option>
              <option class="color_inputs" value="China">China</option>
              <option class="color_inputs" value="Chipre">Chipre</option>
              <option class="color_inputs" value="Ciudad del Vaticano">Ciudad del Vaticano</option>
              <option class="color_inputs" value="Colombia">Colombia</option>
              <option class="color_inputs" value="Comoras">Comoras</option>
              <option class="color_inputs" value="Corea del Norte">Corea del Norte</option>
              <option class="color_inputs" value="Corea del Sur">Corea del Sur</option>
              <option class="color_inputs" value="Costa de Marfil">Costa de Marfil</option>
              <option class="color_inputs" value="Costa Rica">Costa Rica</option>
              <option class="color_inputs" value="Croacia">Croacia</option>
              <option class="color_inputs" value="Cuba">Cuba</option>
              <option class="color_inputs" value="Dinamarca">Dinamarca</option>
              <option class="color_inputs" value="Dominica">Dominica</option>
              <option class="color_inputs" value="Ecuador">Ecuador</option>
              <option class="color_inputs" value="Egipto">Egipto</option>
              <option class="color_inputs" value="El Salvador">El Salvador</option>
              <option class="color_inputs" value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
              <option class="color_inputs" value="Eritrea">Eritrea</option>
              <option class="color_inputs" value="Eslovaquia">Eslovaquia</option>
              <option class="color_inputs" value="Eslovenia">Eslovenia</option>
              <option class="color_inputs" value="España">España</option>
              <option class="color_inputs" value="Estados Unidos">Estados Unidos</option>
              <option class="color_inputs" value="Estonia">Estonia</option>
              <option class="color_inputs" value="Etiopía">Etiopía</option>
              <option class="color_inputs" value="Filipinas">Filipinas</option>
              <option class="color_inputs" value="Finlandia">Finlandia</option>
              <option class="color_inputs" value="Fiyi">Fiyi</option>
              <option class="color_inputs" value="Francia">Francia</option>
              <option class="color_inputs" value="Gabón">Gabón</option>
              <option class="color_inputs" value="Gambia">Gambia</option>
              <option class="color_inputs" value="Georgia">Georgia</option>
              <option class="color_inputs" value="Ghana">Ghana</option>
              <option class="color_inputs" value="Granada">Granada</option>
              <option class="color_inputs" value="Grecia">Grecia</option>
              <option class="color_inputs" value="Guatemala">Guatemala</option>
              <option class="color_inputs" value="Guyana">Guyana</option>
              <option class="color_inputs" value="Guinea">Guinea</option>
              <option class="color_inputs" value="Guinea ecuatorial">Guinea ecuatorial</option>
              <option class="color_inputs" value="Guinea-Bisáu">Guinea-Bisáu</option>
              <option class="color_inputs" value="Haití">Haití</option>
              <option class="color_inputs" value="Honduras">Honduras</option>
              <option class="color_inputs" value="Hungría">Hungría</option>
              <option class="color_inputs" value="India">India</option>
              <option class="color_inputs" value="Indonesia">Indonesia</option>
              <option class="color_inputs" value="Irak">Irak</option>
              <option class="color_inputs" value="Irán">Irán</option>
              <option class="color_inputs" value="Irlanda">Irlanda</option>
              <option class="color_inputs" value="Islandia">Islandia</option>
              <option class="color_inputs" value="Islas Marshall">Islas Marshall</option>
              <option class="color_inputs" value="Islas Salomón">Islas Salomón</option>
              <option class="color_inputs" value="Israel">Israel</option>
              <option class="color_inputs" value="Italia">Italia</option>
              <option class="color_inputs" value="Jamaica">Jamaica</option>
              <option class="color_inputs" value="Japón">Japón</option>
              <option class="color_inputs" value="Jordania">Jordania</option>
              <option class="color_inputs" value="Kazajistán">Kazajistán</option>
              <option class="color_inputs" value="Kenia">Kenia</option>
              <option class="color_inputs" value="Kirguistán">Kirguistán</option>
              <option class="color_inputs" value="Kiribati">Kiribati</option>
              <option class="color_inputs" value="Kuwait">Kuwait</option>
              <option class="color_inputs" value="Laos">Laos</option>
              <option class="color_inputs" value="Lesoto">Lesoto</option>
              <option class="color_inputs" value="Letonia">Letonia</option>
              <option class="color_inputs" value="Líbano">Líbano</option>
              <option class="color_inputs" value="Liberia">Liberia</option>
              <option class="color_inputs" value="Libia">Libia</option>
              <option class="color_inputs" value="Liechtenstein">Liechtenstein</option>
              <option class="color_inputs" value="Lituania">Lituania</option>
              <option class="color_inputs" value="Luxemburgo">Luxemburgo</option>
              <option class="color_inputs" value="Macedonia del Norte">Macedonia del Norte</option>
              <option class="color_inputs" value="Madagascar">Madagascar</option>
              <option class="color_inputs" value="Malasia">Malasia</option>
              <option class="color_inputs" value="Malaui">Malaui</option>
              <option class="color_inputs" value="Maldivas">Maldivas</option>
              <option class="color_inputs" value="Malí">Malí</option>
              <option class="color_inputs" value="Malta">Malta</option>
              <option class="color_inputs" value="Marruecos">Marruecos</option>
              <option class="color_inputs" value="Mauricio">Mauricio</option>
              <option class="color_inputs" value="Mauritania">Mauritania</option>
              <option class="color_inputs" value="México">México</option>
              <option class="color_inputs" value="Micronesia">Micronesia</option>
              <option class="color_inputs" value="Moldavia">Moldavia</option>
              <option class="color_inputs" value="Mónaco">Mónaco</option>
              <option class="color_inputs" value="Mongolia">Mongolia</option>
              <option class="color_inputs" value="Montenegro">Montenegro</option>
              <option class="color_inputs" value="Mozambique">Mozambique</option>
              <option class="color_inputs" value="Namibia">Namibia</option>
              <option class="color_inputs" value="Nauru">Nauru</option>
              <option class="color_inputs" value="Nepal">Nepal</option>
              <option class="color_inputs" value="Nicaragua">Nicaragua</option>
              <option class="color_inputs" value="Níger">Níger</option>
              <option class="color_inputs" value="Nigeria">Nigeria</option>
              <option class="color_inputs" value="Noruega">Noruega</option>
              <option class="color_inputs" value="Nueva Zelanda">Nueva Zelanda</option>
              <option class="color_inputs" value="Omán">Omán</option>
              <option class="color_inputs" value="Países Bajos">Países Bajos</option>
              <option class="color_inputs" value="Pakistán">Pakistán</option>
              <option class="color_inputs" value="Palaos">Palaos</option>
              <option class="color_inputs" value="Panamá">Panamá</option>
              <option class="color_inputs" value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
              <option class="color_inputs" value="Paraguay">Paraguay</option>
              <option class="color_inputs" value="Perú">Perú</option>
              <option class="color_inputs" value="Polonia">Polonia</option>
              <option class="color_inputs" value="Portugal">Portugal</option>
              <option class="color_inputs" value="Reino Unido">Reino Unido</option>
              <option class="color_inputs" value="República Centroafricana">República Centroafricana</option>
              <option class="color_inputs" value="República Checa">República Checa</option>
              <option class="color_inputs" value="República del Congo">República del Congo</option>
              <option class="color_inputs" value="República Democrática del Congo">República Democrática del Congo</option>
              <option class="color_inputs" value="República Dominicana">República Dominicana</option>
              <option class="color_inputs" value="República Sudafricana">República Sudafricana</option>
              <option class="color_inputs" value="Ruanda">Ruanda</option>
              <option class="color_inputs" value="Rumanía">Rumanía</option>
              <option class="color_inputs" value="Rusia">Rusia</option>
              <option class="color_inputs" value="Samoa">Samoa</option>
              <option class="color_inputs" value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
              <option class="color_inputs" value="San Marino">San Marino</option>
              <option class="color_inputs" value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
              <option class="color_inputs" value="Santa Lucía">Santa Lucía</option>
              <option class="color_inputs" value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
              <option class="color_inputs" value="Senegal">Senegal</option>
              <option class="color_inputs" value="Serbia">Serbia</option>
              <option class="color_inputs" value="Seychelles">Seychelles</option>
              <option class="color_inputs" value="Sierra Leona">Sierra Leona</option>
              <option class="color_inputs" value="Singapur">Singapur</option>
              <option class="color_inputs" value="Siria">Siria</option>
              <option class="color_inputs" value="Somalia">Somalia</option>
              <option class="color_inputs" value="Sri Lanka">Sri Lanka</option>
              <option class="color_inputs" value="Suazilandia">Suazilandia</option>
              <option class="color_inputs" value="Sudán">Sudán</option>
              <option class="color_inputs" value="Sudán del Sur">Sudán del Sur</option>
              <option class="color_inputs" value="Suecia">Suecia</option>
              <option class="color_inputs" value="Suiza">Suiza</option>
              <option class="color_inputs" value="Surinam">Surinam</option>
              <option class="color_inputs" value="Tailandia">Tailandia</option>
              <option class="color_inputs" value="Tanzania">Tanzania</option>
              <option class="color_inputs" value="Tayikistán">Tayikistán</option>
              <option class="color_inputs" value="Timor Oriental">Timor Oriental</option>
              <option class="color_inputs" value="Togo">Togo</option>
              <option class="color_inputs" value="Tonga">Tonga</option>
              <option class="color_inputs" value="Trinidad y Tobago">Trinidad y Tobago</option>
              <option class="color_inputs" value="Túnez">Túnez</option>
              <option class="color_inputs" value="Turkmenistán">Turkmenistán</option>
              <option class="color_inputs" value="Turquía">Turquía</option>
              <option class="color_inputs" value="Tuvalu">Tuvalu</option>
              <option class="color_inputs" value="Ucrania">Ucrania</option>
              <option class="color_inputs" value="Uganda">Uganda</option>
              <option class="color_inputs" value="Uruguay">Uruguay</option>
              <option class="color_inputs" value="Uzbekistán">Uzbekistán</option>
              <option class="color_inputs" value="Vanuatu">Vanuatu</option>
              <option class="color_inputs" value="Venezuela">Venezuela</option>
              <option class="color_inputs" value="Vietnam">Vietnam</option>
              <option class="color_inputs" value="Yemen">Yemen</option>
              <option class="color_inputs" value="Yibuti">Yibuti</option>
              <option class="color_inputs" value="Zambia">Zambia</option>
              <option class="color_inputs" value="Zimbabue">Zimbabue</option>
            </select>
            <br>
            <select class="estilos_boton" name="tipo_usu" id="tipo_usu">
              <option class="color_inputs" value="">Seleccione tipo de usuario:</option>
              <option class="color_inputs" value="G">Guia</option>
              <option class="color_inputs" value="T">Turista</option>
            </select>
            <div >            
              <p class="galeria">
                  <b class="text_subir">Subir imagen</b>
                  <input class="ocultar" type="file" name="nfoto" id="foto" onchange="return Exten()">      
              </p>         
            </div>
            <button type="submit" class="boton2" id="btn" name= "btn_enviar_crear_cuenta"><b>Registrarse</b></button>
          </form>  
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <button 
          class="sign-up-btn" 
          style="padding: 1rem;
          font-weight: bold;
          background-color: #39d3ee;
          border-radius: 2rem;
          border: none;
          outline: none;
          text-align: center;
          cursor: pointer;
          font-size: .9rem;
          margin-top: 1rem;
          transition: all .3s ease-in;
          color: #000000;
          position: relative;
          left: 130px;
          top: -1px;
          "
          >Iniciar sesión
          </button> 
      </div>
    </div>
    <div class="modal fade" id="terminos_de_uso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);"><b>Terminos de uso</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <p>
                  Esta plataforma esta creada con el fin de mejorar la experiencia de las <br>
                  personas que visitan y trabajan en la comuna 13; por esto mismo invitamos
                  a los usuarios leer lo que implica el usar nustra plataforma
                  <br>
                  <br>
                  1. Para tranquilidad de nuestros usuarios, queremos que sepan que los datos
                  suministrados en MyTour 13 no seran usados para ningun fin ajeno a las actividades
                  que se realizan dentro de la plataforma, por lo que no seran expuestos a ninguna entidad
                  por fuera de MyTour 13 y la ley, si esta asi lo requiere
                  <br>
                  2. En caso de que alguna entidad legal asi lo requiera, todos los datos y registros de chat
                  de cualquier usuario seran entregados a estos
                  <br>
                  <br>
                </p>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <!--MODAL OLVIDASTE CONTRASEÑA-->
      <div class="modal fade" id="olvidaste_contra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);"><b>¿Olvidaste tu contraseña?</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="" method="post">
                  <label class="olvidaste_contra_label"><b>Ingresa tu numero de identificación:</b></label>
                  <input class="olvidaste_contra_input" type="text" name="Olvidaste_contra" id="Olvidaste_contra">
                  <button type="submit" class="olvidaste_contra_but"><b>Recuperar contraseña</b></button>
                </form>
                <br><br>
                <br>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div
      <!-- MODAL ACERCA DE -->
      <div class="modal fade" id="acerca_de" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);;"><b>Sobre nosotros</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <center>
                  <img src="img/Untitled (1).png" width="40%" height="40%">
                  <img src="img/sena.png" width="17%" height="17%">
                </center>
                <p>
                  Proyecto formativo del SENA <br>
                  Todos los derechos reservados a SENA <br>
                  Creadores: <br>
                  <ul>
                    <li> Jhon Sebastian Lopez </li>
                    <li> Sebastian Patiño </li>
                    <li> Santiago Vargas </li>
                  </ul>
                  MyTour 13 es una plataforma creada para mejorar la comunicacion entre los
                  turistas y guias de la comuna 13 de Medellin, con el fin de generar mas turismo
                  en la zona y mayor oportunidad de trabajo independiente
                </p>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL MANUAL DE USO -->
      <div class="modal fade" id="manual" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel" style="color: rgb(0, 169, 199);;"><b>Como usar MyTour 13</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                La funcionalidad de MyTour 13 esta enfocada en un chat donde te podras comunicar
                para planear tu experiencia en la comuna 13
                <br>
                <br>
                como Turista, podras encontrar una una gran cantidad de guias disponibles y dispuestos
                para ti, con los cuales podras hablar antes de tu recorrido y asi planificar cada detalle
                de este, podras especificar la fecha de inicio y fin de tu experiencia en la comuna 13
                <br>
                <br>
                Como guia, podras trabajar de manera independiente en la comuna 13, cuando un turista te contacte
                tendras disponible un chat donde te diran cada detalle de su recorrido, podran ajustar un precio para este
                entre ambos y al finalizar cada recorrido, el turista podra calificar tu servicio
                <br>
                <br>
                
                <div class="pdf">
                  <a download="Manual de uso" href="pdf/manual-de-uso.pdf">
                    <button class="buttonDownload">Descarga Pdf <i class="file red pdf outline icon"></i> </button>
                  </a>
                </div>
  
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    <script src="js/valida_img.js"></script>
    <script src="js/sololetras.js"></script>
    <script src="js/solonumeros.js"></script>
    <script src="js/solonumeros2.js"></script>
    <script src="js/mostrar_contraseña1.js"></script>
    <script src="js/mostrar_contraseña2.js"></script>
    <script src="js/validar2.js"></script>
    <script src="js/validar.js"></script>
    <script src="js/script.js"></script>
    <script>
        $('.ui.dropdown').dropdown();
    </script>
    <script>
          $('.ui.dropdown').dropdown();
          const myModal = document.getElementById('myModal')
          const myInput = document.getElementById('myInput')
          myModal.addEventListener('shown.bs.modal', () => {
          myInput.focus()
          })
    </script>
</body>
</html>