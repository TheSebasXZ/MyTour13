<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil guia</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/guia/foto_perfil.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.js"></script>
  
</head>
<body style="background-color: #fff">
<?php 
    session_start();
    include('php/conexion.php');
    
    $id= $_SESSION['id'];
    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario='$id'");
    $valores = mysqli_fetch_array($consulta);  
?>
    <section>
        <br>
        <div class="imagennn" class="column">
            <div class="ui fluid image" >
              <!-- foto de perfil donde el usuario pobra cambiarla cuanto guste -->
              <h4 class="estilo_h4"><i style="position: relative; top: 4px; " class="user black icon"></i> <b style="color: #fff ; position: relative; top: 4px; " >Guía</b></h4>
              <section class="perfil-usuario">
                <div  class="avatar-perfil">
                    <img src="<?php echo $valores ['foto_usuario']; ?>" id="fotico">
                    <a href="cambiarfoto.php"  class="cambiar-foto">
                        
                        <span><b style="color: white; font-family: cursive;font-size: 15px;" >CAMBIAR FOTO</b></span>
                    </a>
                </div>
              </section>
              <!--  -->
        </div>
        <div>
            <div class="caja3">
                <form action="" class="ui form">
                    <div class="two fields">
                        <div class="field">
                            <label for="" style="text-align: center;">Nombres</label>
                             <p class="cajaa"><?php echo $valores ['nombre_usuario']; ?></p>
                        </div>
                        <div class="field">
                            <label for="">Apellidos</label>
                            <p class="cajaa" style="text-align: center;"><?php echo $valores ['apellido_usuario']; ?></p>
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label for="" style="text-align: center;">Numero de documento</label>
                            <p class="cajaa" ><?php echo $valores ['id_usuario']; ?>  </p>
                        </div>
                        <div class="field">
                            <label for="" style="text-align: center;">Telefono</label>
                            <p class="cajaa">   51251151  </p>
                        </div>
                    </div>
                    <div class="one field">
                        <div class="field">
                            <label for="" style="text-align: center;">description</label>
                            <p class="cajaa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, accusantium labore, provident adipisci velit, libero sed mollitia eum eius corrupti veniam molestiae illo. Hic deleniti quasi fuga aut eveniet minima
                                lore </p>
                        </div> 

                    </div>
                    <div class=" one field">
                        <div class="field">
                            <label for="" style="text-align: center;">Correo activo</label>
                            <p class="cajaa"><?php echo $valores ['gmail_usuario']; ?></p>
                        </div>
                    </div>
                    <div class="one field">
                      <div class="field">
                        <label for="" style="text-align: center;">Fecha de creación</label>
                        <p class="cajaa">10/2/2022</p>
                      </div>
                    </div>
                    
                    
                    
                </form>
            </div>
        </div>
        <div class="star_ratingg">
            <button class="starr">&#9734;</button>
            <button class="starr">&#9734;</button>
            <button class="starr">&#9734;</button>
            <button class="starr">&#9734;</button>
            <button class="starr">&#9734;</button>
            <p> 0 de 5</p>
        </div>
        <br>
        <br>
    </section>

    <script>
        $('.ui.dropdown').dropdown();
    </script>
    
</body>


</html>