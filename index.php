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
			<h1>Inicio</h1>
			   <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h1>
			<br>

		</div>


	</div>

</body>
<?php include_once "pie.php" ?>
