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
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mende+Kikakui&family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
    <!--  -->

    <link rel="shortcut icon" href="img/imagenes_probar/logoMytour.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/semantic.min.css">
 	<title>Guía</title> 
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
    .tit{
    color: #000;
    font-size: 25px;
    position: relative;
    left: 400px;
    top: 10px;
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
      transition: all .3s;
      border: 1px solid teal;
      background-color: rgb(212, 212, 212);
      padding: 7px 10px 10px 7px;
      border-radius: 12px;
    }
    a:focus{
      color: #0f9184;
      border: 1px solid teal;
      background-color: rgb(212, 212, 212);
      padding: 7px 10px 10px 7px;
      border-radius: 12px;
    }
  </style>
  <header>
    <nav class="nave">
      <h1 class="tit" id="estiloh1"> My tour 13</h1>
      <ul>
        <li><a href="index_guia.php" target="iframe_menu">Mi perfil</a></li>
        <li><a href="listacontratos.html" target="iframe_menu">Lista contratos</a></li>
        <li><a href="chat.html" target="iframe_menu">Chat</a></li>
        <li><a onclick="cerrar()">Cerrar sesion</a></li>
      </ul>
    </nav>
    <hr class="Linea_menu">
  </header>
  <iframe name="iframe_menu" src="index_guia.php" frameborder="0" width="100%" height="85%" border:none;></iframe>
  <script src="js/alerta.js"></script>

</body> 
</html> 