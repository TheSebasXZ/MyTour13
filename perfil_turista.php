<!DOCTYPE html>
<html lang="es-en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTour 13</title>
    <link rel="stylesheet" href="css/estilos_chat_turi.css"> 
    <link rel="stylesheet" href="css/turista/perfil_turista.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/semantic.js"></script>
  
</head>
<body style="background-color: #fff;">

  <?php 
    session_start();
    include('php/conexion.php');
    
    $id= $_SESSION['id'];
    $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario='$id'");
    $valores = mysqli_fetch_array($consulta);
  

  
  ?>
    <section>
        <br>
        <div class="ui one column grid">
            <div class="imagennn" class="column">
              <div class="ui fluid image" >
                <!-- foto de perfil donde el usuario pobra cambiarla cuanto guste -->
                <h4 class="estilo_h4"><i style="position: relative; top: 4px; " class="user black icon"></i> <b style="color: #fff ; position: relative; top: 4px; " >Turista</b></h4>
                <section class="perfil-usuario">
                  <div class="avatar-perfil">
                      <img  src="<?php echo $valores ['foto_usuario']; ?>" id="fotico">
                      <a href="cambiarfoto.php" class="cambiar-foto">
                          
                          <span><b style="color: white; font-family: cursive;font-size: 15px;" >CAMBIAR FOTO</b></span>
                      </a>
                  </div>
                </section>
                <!--  -->
              </div>
            </div>
        </div>
        <div>
        <div class="caja1">
            <form action="" class="ui form">
                <div>
                  <a class="item model" id="test3">
                    <b class="estilos_button">Editar</b>
                    <div class="ui modal test3">
                        <i class="close icon"></i>
                        <header>
                            <h3 class="estilos_h3" style="text-align: center; color: #fff;"> Atualiza Tus Datos </h3>
                        </header> <br><br><br><br><br>    
                            <div class="description">
                              <div class="ui form">
                                <div class="three fields">
                                  <div class="field">
                                    <label>Nombre</label>
                                    <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text" placeholder="<?php echo $valores ['nombre_usuario']; ?>" name="" id="">
                                  </div>
                                  <div class="field">
                                    <label>Apellido </label>
                                    <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text" placeholder="<?php echo $valores ['apellido_usuario']; ?>" name="" id="">
                                  </div>
                                  <div class="field">
                                    <label>Telefono</label>
                                    <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="number" placeholder="Telefono" name="" id="">
                                  </div>
                                </div>
                                <div class="one field">
                                  <div class="field">
                                    <label>Correo</label>
                                    <input style="background-color: rgba(117, 250, 255, 0.349); text-align:center;" type="text" placeholder="<?php echo $valores ['gmail_usuario']; ?>"  name="" id="">
                                  </div>
                                </div>
                              </div>
                            </div> <br><br><br>                     
                        <div class="actions">
                            <div class="ui red deny button" onclick="swal('Datos no Actualizados','','warning')">
                                <a style="color: #fff; font-family:cursive;" name="" id="" >
                                  Cancelar
                                </a>
                            </div>
                            <div class="ui blue right labeled icon button"  >
                                <a style="color: #fff; font-family:cursive;" name="" id="" >
                                  Atualizar 
                                </a> 
                                <i class="checkmark green icon"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="two fields">
                    <div class="field">
                        <label for="">Nombres</label>
                         <p class="cajaa"> <?php echo $valores ['nombre_usuario']; ?></p>
                    </div>
                    <div class="field">
                        <label for="">Apellidos</label>
                        <p class="cajaa"><?php echo $valores ['apellido_usuario']; ?></p>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label for="">Numero de documento</label>
                        <p class="cajaa">   <?php echo $valores ['id_usuario']; ?>  </p>
                    </div>
                    <div class="field">
                        <label for="">Telefono</label>
                        <p class="cajaa">   51251151  </p>
                    </div>
                </div>
            </form>
        </div>
        <div class="caja3">
            <form action="" class="ui form">
                <div class=" one field">
                    <div class="field">
                        <label for="">Correo activo</label>
                        <p class="cajaa"><?php echo $valores ['gmail_usuario']; ?></p>
                    </div>
                </div>
                <div class="one field">
                  <div class="field">
                    <label for="">Fecha de creación</label>
                    <p class="cajaa">10/2/2022</p>
                  </div>
                </div>
                
            </form>
        </div>
        </div>
        
 
        
    </section>

    <script>
        $('.ui.dropdown').dropdown();
    </script>
    <script>
        $("#test3").click(function(){
                $(".test3").modal('show');
        });
    </script>
    <script src="js/valida_perfil.js"></script>
</body>


</html>