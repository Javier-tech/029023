<?php
/*
		Made by Javier.
*/
#Salir si alguno de los datos no está presente
if(
	!isset($_POST["marca"]) ||
	!isset($_POST["nombre"]) ||
	!isset($_POST["telefono"]) ||
	!isset($_POST["correo"]) ||
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$marca = $_POST["marca"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$sentencia = $base_de_datos->prepare("UPDATE provedores SET marca = ?, nombre = ?, telefono = ?, correo = ? WHERE id = ?;");
$resultado = $sentencia->execute([$marca, $nombre, $telefono, $correo, $id]);

if($resultado === TRUE){
	header("Location: ./provedores.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>
