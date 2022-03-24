<?php //van a recivir los datos ingresados por el teclado y valida los datos mandados del index
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();//inicio de sesion
$_SESSION['usuario']=$usuario;



$conexion=mysqli_connect("localhost","root","","login");   //variable para la conexion de la base de datos(servidor,nombre del mysql,contraseña,nombre de la base de datos)

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña' ";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);//se almacena el resultado

if($filas){
	header("location:home.php");

}else{

	?>
	<?php
	include("index.php");
	?>
	<h1>Usuario o contraseña invalido!</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);










 ?>