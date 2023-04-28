<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--  -->
     <link rel="stylesheet" href="css/estilos_admin.css">
    <link rel="stylesheet" href="css/admin/mensajes.css">
    <link rel="stylesheet" href="css/admin/file.css">
    <link rel="stylesheet" href="css/admin/file2.css">
    <link rel="stylesheet" href="css/admin/foto_perfil.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <!--  -->
    <title></title>
    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <!--  -->  

   
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background-color: #FFF ; cursor: pointer  ;">   


  
<?php 
    session_start();
    include('php/conexion.php');
    
    $id= $_SESSION['id'];
    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario='$id'");
    $valores = mysqli_fetch_array($consulta);  

    $ape = mysqli_query($conexion,"SELECT apellido_usuario from usuario where id_usuario='$id'");
    $valor2 = mysqli_fetch_array($ape);
?>

      <!-- input file "boton" -->
      <div class="posicion_img">
        <abbr title="Subir Archivo" >
            <input type="file" name="" id="imagen_Card" class="inputfile" onchange="return Exten()" >
            <label for="imagen_Card" ><img src="img/gif/carpeta.gif" width="25px" height="25px" ></label>
        </abbr>
      </div>
      
      <h3 class="pos_titulo1" style="font-family: 'Rubik Bubbles', cursive;">Chat Guía</h3>

      <!-- LA CLASE MENSAJE LA USAMOS DENTRO DE ESTILOS_ADMIN PARA ACOMODAR EL INPUT Y DARLE ESTILOS COMO EL REDONDEADO -->

      <input type="text" class="mensaje" placeholder="!!Mensaje">

      <!-- foto de perfil donde el usuario pobra cambiarla cuanto guste -->
      <section class="perfil-usuario">
        <div class="avatar-perfil">
            <img src="<?php echo $valores ['foto_usuario']; ?>" id="fotico">
        </div>
      </section>

      <!--  -->
      <h1 class="posicion"><?php echo $valores ['nombre_usuario']; echo '   '; echo $valor2['apellido_usuario'];  ?><i class="share teal icon"></i></h1>
      <div class="ui container">

        <!-- TABLA QUE USAMOS PARA GUARDAR INFORMACION Y QUE SEA MAS VISTOSA -->
        <table class="ui very basic collapsing celled table" style="width: 50%;">
          <thead>
            <tr>
              <th> DESCRIPCIÓN DEL PROBLEMA <i class="archive icon"></i></th>
            </tr>
          </thead>
          <td>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ea laborum molestias assumenda! Saepe tempore, quasi aperiam placeat praesentium ipsum doloremque dolorem quos optio dolore id illum iure dignissimos quam! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem praesentium blanditiis iusto tenetur, architecto impedit possimus eius ducimus quod necessitatibus iure fugit! Aut assumenda nam sit fugit quod tempora ipsam?
          </td>
        </table><br><br><br><br>

        <!-- LA CLASE POS LA USAMOS DENTRO DE ESTILOS_ADMIN PARA ACOMODAR LA POSICION DE LOS 3 BOTONES -->
        <div class="pos_botones">
          <button class="ui primary inverted button">Aceptar Reporte</button>
          <button class="ui red inverted button">Rechazar Reporte</button>
          <button class="ui green inverted button">Contatar al reportado</button>
        </div>

        <!-- LA CLASE POS2 LA USAMOS DENTRO DE ESTILOS_ADMIN  PARA ACOMODAR EN LA MISMA POSICION DE LOS ICONOS -->
        <div class="pos2">
          <abbr title="Subir Archivo">
              <button class="galeria">
                        <img src="img/gif/carpeta.gif" width="25px" height="25px" >
                        <input  class="ocultar"  type="file" name="" id="imagen_Card" onchange="return Exten()" required>      
              </button> 
          </abbr>
        </div>

        
        <!-- titulo  turista -->
        <h3 class="pos_titulo" style="font-family: 'Rubik Bubbles', cursive;">Chat turista</h3>
        <!-- LA CLASE MENSAJE LA USAMOS DENTRO DE ESTILOS_ADMIN PARA ACOMODAR EL INPUT Y DARLE ESTILOS COMO EL REDONDEADO -->
        <input type="text" class="mensaje2" placeholder="!!Mensaje">
      </div>
      <script>
        $('.ui.dropdown').dropdown();
      </script>

      <!-- script que permite extraer la informacion de js -->
      <script src="js/subvalidacion/valida.js"></script>
       <!-- script que permite extraer la informacion de js -->
      <script src="js/mostrartext.js"></script>



      <!-- https://cdn-icons-png.flaticon.com/128/3820/3820184.png -->
      
      
</body>
</html>