<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de reportes</title>

    <!-- Otros estilos -->
    <link rel="stylesheet" href="css/admin/reportes.css">

    <!--  -->
    <link rel="stylesheet" href="css/estilos_admin.css">
    <link rel="stylesheet" href="css/semantic.min.css">
</head>
<body class="fondo">

  <?php
  include('php/conexion.php');
 
  ?>
    <div class="ui secondary  menu">
        <div class="ui container">
            <div class="contenedor2">
                <h1><B>Lista de reportes</B><span>&#160;</span> <img src="img/gif/cerrar-con-llave.gif"  width="35px" height="35px" > </h1>
           </div>
           
           <div class="tabla_pos">
            <table class="ui teal table" style="text-align: center; font-family: cursive; cursor: pointer;">
                <thead>
                  <tr><th>Persona Afectada</th>
                  <th>Persona Acusada</th>
                  <th>DESCRIPCIÓN DEL PROBLAME</th>
                  <td style="text-align: end;">
                    <a class="animation" href="" style="color: purple; font-size: 30px;" >...</a>
                  </td>
                </tr></thead>
                <tbody>
                  <tr>
                    <td>
                        <h4 class="ui image header">
                            <img src="img/imagenes_probar/lena.png" class="ui mini rounded image">
                            <div class="content">
                              Lena
                              <div class="sub header">Guía</div>
                             </div>
                        </h4>
                    </td>
                    <td>
                        <h4 class="ui image header">
                            <img src="img/imagenes_probar/daniel.jpg" class="ui mini rounded image">
                            <div class="content">
                              Daniel
                              <div class="sub header">Turista</div>
                             </div>
                        </h4>
                    </td>
                    <td>
                        No llego al punto de encuentro y me insulto por pedirle una explicacion del motivo de no haver llegado al recorrido
                    </td>
                    <td>
                        <a href=""><button class="ui inverted pink button">Comunicarse</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <h4 class="ui image header">
                            <img src="img/imagenes_probar/kristy.png" class="ui mini rounded image">
                            <div class="content">
                              Kristy
                              <div class="sub header">Turista</div>
                             </div>
                        </h4>
                    </td>
                    <td>
                        <h4 class="ui image header">
                            <img src="img/imagenes_probar/helen.jpg" class="ui mini rounded image">
                            <div class="content">
                              Helen
                              <div class="sub header">Guía</div>
                             </div>
                        </h4>
                    </td>
                    <td>
                        No llego al punto de encuentro y me insulto por pedirle una explicacion del motivo de no haver llegado al recorrido
                    </td>
                    <td>
                        <a href=""><button class="ui inverted purple button">Comunicarse</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <h4 class="ui image header">
                            <img src="img/imagenes_probar/elyse.png" class="ui mini rounded image">
                            <div class="content">
                              Elyse
                              <div class="sub header">Turista</div>
                             </div>
                        </h4>
                    </td>
                    <td>
                        <h4 class="ui image header">
                            <img src="img/imagenes_probar/daniel.jpg" class="ui mini rounded image">
                            <div class="content">
                              Halfonso
                              <div class="sub header">Guía</div>
                             </div>
                        </h4>
                    </td>
                    <td>
                        Me insulto sin motivos , me dejo botada en pleno recorrido y tras de eso me tiro mi celular al piso 
                    </td>
                    <td>
                        <a href=""><button class="ui inverted primary button">Comunicarse</button></a>
                    </td>
                  </tr>
                </tbody>
              </table>

           </div>
        </div>
</body>
</html>