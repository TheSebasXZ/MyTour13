<?php
    include("conexion.php");
  if (isset($_POST["btn_enviar_crear_cuenta"])) { // el codigo se ejcuta si le dan al boton de enviar
    // REGISTRAR USUARIOS
    $nombre = $_POST["nombre"]; // Nombre de usuario
    $apellido = $_POST["apellidos"]; // Apellido del usuario
    $contraseña = $_POST["confirm-password"];  //Contraseña del usuario
    $contraseña2 = md5($contraseña); //Confirmacion de la contraseña
    $gmail = $_POST["correo"]; //Correo del usuario
    $pais = $_POST["pais"]; //Pais del usuario

    $foto = $_FILES['nfoto']['name'];
    $imagen = $_FILES['nfoto']['tmp_name'];
    
    $numero_identificacion = $_POST["n_identificacion"]; //numero de identificacion
    $tipo_usuario = $_POST["tipo_usu"]; // tipo de usuario (guia/turista/admin)

   
    $ruta = "../img/fotoperfil/". $foto;
    $bd_imagen ="img/fotoperfil/". $foto;

    move_uploaded_file($imagen,$ruta);

      
    if ($tipo_usuario == 'G') {
      $existe = mysqli_query($conexion,"SELECT id_usuario FROM usuario WHERE id_usuario = '$numero_identificacion'");
      $existe_consulta = mysqli_fetch_array($existe);
      if ($existe_consulta >= 1) {
          $error_cuanta_existe = true;
          header("location:../index.php");
      }
      else {
        $insert = mysqli_query($conexion,"INSERT INTO usuario(id_usuario, nombre_usuario, pass, apellido_usuario, gmail_usuario, rol_usuario, foto_usuario) VALUES ('$numero_identificacion','$nombre','$contraseña2','$apellido','$gmail','$tipo_usuario','$bd_imagen')");
        header("location:../index.php");
      }
    }
    if ($tipo_usuario == 'T') {
      $existe = mysqli_query($conexion,"SELECT id_usuario FROM usuario WHERE id_usuario = '$numero_identificacion'");
      $existe_consulta = mysqli_fetch_array($existe);
      if ($existe_consulta >= 1) {
          $error_cuanta_existe = true;
          header("location:../index.php");
        }
      else {
        $insert = mysqli_query($conexion,"INSERT INTO usuario(id_usuario, nombre_usuario, pass, apellido_usuario, gmail_usuario, rol_usuario, foto_usuario) VALUES ('$numero_identificacion','$nombre','$contraseña2','$apellido','$gmail','$tipo_usuario','$bd_imagen')");
        header("location:../index.php");
      }
    }
    header("location:../index.php");
  }
?>