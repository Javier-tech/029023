<?php
/*
		Made by Javier.
*/
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM provedores WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
<body class="navbar navbar-default">
	<div class="col-xs-12 alert alert-warning">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditadosb.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">

			<label for="marca">Código de barras:</label>
			<input value="<?php echo $producto->marca ?>" class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe el código">

			<label for="nombre">Descripción:</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el código">

			<label for="telefono">Precio de venta:</label>
			<input value="<?php echo $producto->telefono ?>" class="form-control" name="telefono" required type="text" id="telefono" placeholder="Precio de venta">

			<label for="correo">Precio de compra:</label>
			<input value="<?php echo $producto->correo ?>" class="form-control" name="correo" required type="text" id="correo" placeholder="Precio de compra">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./provedores.php">Cancelar</a>
		</form>
	</div>
</body>
<?php include_once "pie.php" ?>
