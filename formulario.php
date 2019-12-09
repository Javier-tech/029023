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
	<form method="post" action="nuevo.php">
		<label for="codigo">Código o palabra clave:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Código o palabra clave">

		<label for="descripcion">Descripción:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form> <br>
</div> <hr> <br>
</body> <hr>
<?php include_once "pie.php" ?>
