<?php 
include 'index.php';
header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");


$obj=json_decode(file_get_contents('php://input'), true);
$response = array();
$response['status'] = false;



$usuarioId = $obj["userId"];
$password = $obj["password"];
$user_name = $obj["nombre"];
$level = $obj["level"];
//$estatus = $obj["estatus"];


if(!$connection){
    die("Connection failed: " . mysqli_connect_error());

}
$sql = "INSERT INTO USER_ADMIN VALUES ('$usuarioId','$password','$user_name','$level','ACTIVO')";



if (mysqli_query($connection, $sql)) {
      echo ("Creado");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
};


?>
