<?php 
header("Content-Type: application/json");
$host="192.168.100.13";
$user="ANGEL";
$password="Root1Angel";
$dataBase="OSFESA";
$obj=json_decode(file_get_contents('php://input'), true);
$response = array();
$response['status'] = false;


$connection=new mysqli($host,$user,$password,$dataBase);

$usuarioId = $obj["userId"];
$password = $obj["password"];
$user_name = $obj["nombre"];
$level = $obj["level"];
$estatus = $obj["estatus"];


if(!$connection){
    die("Connection failed: " . mysqli_connect_error());

}
$sql = "INSERT INTO user_admin VALUES ('$usuarioId','$password','$user_name','$level','$estatus')";



if (mysqli_query($connection, $sql)) {
      echo ("Creado");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
};


?>