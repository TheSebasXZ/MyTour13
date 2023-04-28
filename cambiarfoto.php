<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/aaa.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>Cambiar foto de perfil</title>
</head>
<body class="fondo">
	<style>
		*{
			text-align:center;
		}
	</style>
	<?php 
		session_start();
		$id = $_SESSION['id'];
		include ('php/conexion.php');
		$consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE id_usuario='$id'");
		$valores = mysqli_fetch_array($consulta);
	?><br><br>
		<h1 class="efecto3d" >Cambiar foto</h1><br><br>
		<img src="<?php echo $valores ['foto_usuario']; ?>" width="250px" class="img_estilo"><br><br>
		<form action="php/foto.php" method="post" enctype="multipart/form-data">
			<button class="galeria">
				<label  class="distorcion" for="">Cambiar Foto</label> 
                <input  class="ocultar"  type="file" name="foto" id="afoto"  onchange="return Exten()">     
            </button><br><br>
			<button   type="submit" class="boton">Actualizar</button>
			

			
		</form>
<script src="js/turista/foto_valida.js"></script>
</body>
</html>


