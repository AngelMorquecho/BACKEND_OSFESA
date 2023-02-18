<?php

include 'index.php';

header("Content-Type:application/json");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

$obj=json_decode(file_get_contents('php://input'), true);
$response = array();
//$admin['admin'] =false;
//$captura['captura'] =false;
$recpcion['recepcion'] =null;
$direccion['direccion'] =null;
$response['status'] =false;


$usuarioId = $obj["userId"];
$password= $obj["password"];
$sql= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='RECEPCION'";
$sql2= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='DIRECCION'";
//$sql3= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='VENTAS'";
//$sql4= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='DIRECCION'";
$resultado = mysqli_query($connection, $sql);
$resultado2 = mysqli_query($connection, $sql2);
//$resultado3 = mysqli_query($connection, $sql3);
//$resultado4 = mysqli_query($connection, $sql4);


$row_cnt = $resultado->num_rows;
$row_cnt2 = $resultado2->num_rows;
//$row_cnt3= $resultado3->num_rows;
//$row_cnt4= $resultado4->num_rows;

if($row_cnt){

    $recepcion['recepcion'] = 'recepcion';
 
    $password!=$password;
    echo json_encode($recepcion);
    exit;

}else if($row_cnt2){
    $direccion['direccion'] ='direccion';
   
    echo json_encode($direccion);
 
    exit;

   

}else  {
    $usuarioId != $obj["userId"];
   $password!= $obj["password"];
    echo json_encode('Usuario y/o Contraseña No coinciden');
   
}


?>
