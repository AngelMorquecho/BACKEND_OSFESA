<?php 

header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$host="162.241.62.132";
$user="grupoosf_admin_pruebas";
$password="rQbp2RZAPK7KSBs";
$dataBase="grupoosf_db_pruebas";
$obj=json_decode(file_get_contents('php://input'), true);
$response = array();
$response['status'] = false;


$connection=new mysqli($host,$user,$password,$dataBase);

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

