<?php include_once "encabezado.php" ?>
<?php
/*
		Made by Javier.
*/
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<body class="">

	<div class="container-fluid">

		<div class="col-xs-2 navbar navbar-inverse">

				<div class="">
					<div id="" class="">
						<ul class="nav navbar-nav"> <br>
							<li><a href="index.php">Inicio</a> <br> </li><br>
							<li><a href="provedores.php">Provedores</a> <br> </li><br>
							<li><a href="listar.php">Productos</a> <br> </li><br>
							<li><a href="vender.php">Vender</a><br> </li><br>
							<li><a href="ventas.php">Registro de Ventas</a><br> </li><br>
							<li><a href="ventas.php">Contacto</a><br> </li><br>

						</ul>
					</div>
					<img src="logo.jpg" width="150px" alt="">
		</div> <br>
			</div>

			<div class="col-xs-1">

			</div>

		<div class="col-xs-9 navbar navbar-inverse">
			<h1>Contacto</h1>
			<br><br><hr>
<h3>Facebook:</h3><br>
<h3>Correo:</h3><br>
<h3>Telefono</h3><br>
		</div>


	</div>

</body>
<?php include_once "pie.php" ?>
