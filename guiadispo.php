<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guias disponibles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <!-- otros esilos de fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos_cartas.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.js"></script>
  
</head>
<body class="imagen_fondo" style="background-repeat: repeat;"> 
    <?php
        include("php/conexion.php");
        $resultado = mysqli_query($conexion, "SELECT id_usuario FROM vista_guia");
        $row = array();
        while ($fila = mysqli_fetch_assoc($resultado)) {
            array_push($row, $fila["id_usuario"]);
        }
        $num_registros = count($row);
        for ($i = 0; $i < $num_registros; $i++) { 
            $foto_user_result = mysqli_query($conexion, ("SELECT foto_usuario from vista_guia where id_usuario = '$row[$i]'"));
            $foto_user_data = mysqli_fetch_assoc($foto_user_result);
            $foto_user = $foto_user_data['foto_usuario'];
            $nombre_result = mysqli_query($conexion, ("SELECT nombre_usuario FROM vista_guia WHERE id_usuario = '$row[$i]'"));
            $nombre_data = mysqli_fetch_assoc($nombre_result);
            $nombre_usuario = $nombre_data['nombre_usuario'];
            $calificacion_result = mysqli_query($conexion, ("SELECT calificacion FROM vista_guia WHERE id_usuario = '$row[$i]'"));
            $calificacion_data = mysqli_fetch_assoc($calificacion_result);
            $calificacion = $calificacion_data['calificacion'];
    ?>
        <div class="margeen">
            <div class="card-client">
                <div class="user-picture">
                    <img src="<?php echo   $foto_user;?>" alt="" width="100px" height="100px">
                </div>
                <p class="name-client"> <?php echo $nombre_usuario;  ?>
                    <span><b style="color:green; font-family: 'Merriweather Sans', sans-serif;">
                        Idiomas:</b> <b> ingles</b>
                        <div class="name-client">
                            <button class="starr">&#9734;</button>
                            <button class="starr">&#9734;</button>
                            <button class="starr">&#9734;</button>
                            <button class="starr">&#9734;</button>
                            <button class="starr">&#9734;</button>
                            <p>  Votos: </p>
                        </div>
                    </span>
                </p>
                <div class="social-media">
                    <a href="#">
                        <label for="" style="font-family: 'Tilt Warp', cursive;">Chatea con el guìa</label>    
                        <span class="tooltip-social">Contacto</span>
                    </a>
                </div>
            </div>
        </div>
          
            <?php
                }
            ?>
    <script>
        $('.special.cards .image').dimmer({
        on: 'hover'
        });
    </script>

    <script>
        $('.ui.dropdown').dropdown();
    </script> 
</body>


</html>