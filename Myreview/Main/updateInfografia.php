<?php 
    include("../Login/partials/ConexionDB.php");
        $Usuario="SELECT * FROM registrotbl";
        $infografiaa=$_POST['Infografia'];
     $resultado = mysqli_query($Conexion, $Usuario);
     $row = mysqli_fetch_assoc($resultado);
$actualizar="UPDATE registrotbl SET Infografia='infografiaa' ";
$actualizo=mysql_query($Conexion,$actualizar);
if ($actualizo) {
    echo "<script>alert('se ha guardado correctamente'); window.location='/Myreview/Main/index.php'  ";

}

 ?>