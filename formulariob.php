<?php
/*
		Made by Javier.
*/
 include_once "encabezado.php"
 ?>
<body class="">

  <?php include_once "menu.php" ?>

<div class="col-xs-9 ">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevob.php">
		<label for="marca">Marca:</label>
		<input class="form-control" name="marca" required type="text" id="marca" placeholder="Código o palabra clave">

		<label for="nombre">Nombre del provedore:</label>
    <input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Código o palabra clave">

		<label for="telefono">Telefono:</label>
		<input class="form-control" name="telefono" required type="text" id="telefono" placeholder="Precio de venta">

		<label for="correo">Correo:</label>
		<input class="form-control" name="correo" required type="text" id="correo" placeholder="Precio de compra">

		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form> <br>
</div> <hr> <br>
</body> <hr>
<?php include_once "pie.php" ?>
