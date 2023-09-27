<?php 

$conexion = mysqli_connect('localhost','loginlab4_user','16022004Santi@','usuarios');

if(!$conexion){
    echo "error de conexion";
}

$nombre =$_POST['nombre'];
$oassword =$_POST['password'];
$username =$_POST['username'];


?>