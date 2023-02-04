<?php
 header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$host="192.168.100.13";
$user="ANGEL";
$password="Root1Angel";
$dataBase="osfesa";
$obj=json_decode(file_get_contents('php://input'), true);
$response = array();
$response['status'] =false;
$connection=new mysqli($host,$user,$password,$dataBase);

$usuarioId = $obj["userId"];
$password= $obj["password"];
$sql= "select * from user_admin  where user = '$usuarioId' and password = '$password'";


$resultado = mysqli_query($connection, $sql);



$row_cnt = $resultado->num_rows;

if($row_cnt){

    $response['status'] = true;
    
    echo json_encode($response);
    exit;

}else{
    $response['status'] =false;
    echo json_encode($response);
    exit;

}

?>
