<?php
    session_start();
    if ($_SESSION['id'] == "" or $_SESSION['id'] == null) { //el codigo se ejecuta si $validadar no tiene ningun valor, osea que no se inicio session 
         session_destroy(); // destruyo la session que debe venir nula, para que no haya conflicto una ves lo rediriga al index
         header("location: index.php"); // redirigo al index
         die(); // impido que el resto del codigo se ejecute en la pagina si no tiene una session iniciada
    }
?>
<!DOCTYPE HTML>
<HTML lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial_scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/imagenes_probar/logoMytour.png">

     <!-- estilos de las letras  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&family=Rubik+Bubbles&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
     <!--  -->
     
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/estilos_admin.css">
 	<title>Administrador</title> 
</head>
<body style="background-color: #fff; cursor: grab;">
  <style>
     nav{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 23px;
      padding-left: -8%;
      }
     
      ul li{
      display: inline-block;
      padding: 0% 20px;
      }
      a{
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-size: 16px;
        font-family: 'Gloock', serif;

        
      }
      a:hover{
        color: #000;
      }

      @media(min-width: 700px){
        nav{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 23px;
      padding-left: -8%;
      }
      
      ul li{
      display: inline-block;
      padding: 0% 20px;
      }
      a{
        color: rgb(0, 0, 0);
        text-decoration: none;
        font-size: 16px;
        border: none;
        
         
      }
      a:hover{
        color:  #000;
        transition: all .3s;
        border: 1px solid teal;
        background-color: rgb(212, 212, 212);
        padding: 7px 10px 10px 7px;
        border-radius: 12px;

        
      }
      a:focus {
        border: 1px solid teal;
        background-color: rgb(218, 218, 218);
        padding: 7px 10px 10px 7px;
        border-radius: 12px;

      }
      b:hover{
        color: #000;
        
      }
      
      }
  </style>
  <header>  
    <nav class="nave">
      <h1 class="tit" id="estiloh1">My tour 13</h1>
      <ul>
        <li><a href="chat_admin.php" target="iframe_menu">Chats</a></li>
        <li><a href="listareportes.php" target="iframe_menu">Lista de reportes</a></li>
        <li><a href="admin_galeria.php" target="iframe_menu"><b style="color:red
          ">Galeria</b> <b style="color: rgb(21, 255, 0)">De</b> <b style="color:rgb(0, 60, 255);">Arte</b></a></li>
        <li><a onclick="cerrar()">Cerrar sesion</a></li>
      </ul>
    </nav>
    <hr class="Linea_menu">
  </header>
  <iframe name="iframe_menu" src="chat_admin.php" frameborder="0" width="100%" height="85%" border:none;></iframe>
  <script src="js/alerta.js"></script>
</body> 
</html> 