<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["marca"]) || !isset($_POST["nombre"]) || !isset($_POST["telefono"]) || !isset($_POST["correo"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$marca = $_POST["marca"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$sentencia = $base_de_datos->prepare("INSERT INTO provedores(marca, nombre, telefono, correo) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->execute([$marca, $nombre, $telefono, $correo]);

if($resultado === TRUE){
	header("Location: ./provedores.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";

/*
		Made by Javier.
*/
?>
<?php include_once "pie.php" ?>
