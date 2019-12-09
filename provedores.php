<?php include_once "encabezado.php" ?>
<?php
/*
		Made by Javier.
*/
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM provedores;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<body class="">

	<div class="container-fluid">

		<?php include_once "menu.php" ?>


		<div class="col-xs-9 navbar navbar-inverse">
			<h1>Provedores</h1>
			<div>
				<a class="btn btn-success" href="./formulariob.php">Nuevo <i class="fa fa-plus"></i></a>
			</div>
			<br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Marca</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($productos as $producto){ ?>
					<tr>
						<td><?php echo $producto->marca ?></td>
						<td><?php echo $producto->nombre ?></td>
						<td><?php echo $producto->telefono ?></td>
						<td><?php echo $producto->correo ?></td>
						<td><a class="btn btn-warning" href="<?php echo "editarb.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
						<td><a class="btn btn-danger" href="<?php echo "eliminarb.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>


	</div>

</body>
<?php include_once "pie.php" ?>
