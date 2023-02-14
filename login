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
$admin['admin'] =false;
$captura['captura'] =false;
$ventas['ventas'] =false;
$direccion['direccion'] =false;
$response['status'] =false;

$connection=new mysqli($host,$user,$password,$dataBase);

$usuarioId = $obj["userId"];
$password= $obj["password"];
$sql= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='ADMINISTRADOR'";
$sql2= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='CAPTURA'";
$sql3= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='VENTAS'";
$sql4= "SELECT* from USER_ADMIN  where user = '$usuarioId'and password ='$password' and LEVEL='DIRECCION'";
$resultado = mysqli_query($connection, $sql);
$resultado2 = mysqli_query($connection, $sql2);
$resultado3 = mysqli_query($connection, $sql3);
$resultado4 = mysqli_query($connection, $sql4);


$row_cnt = $resultado->num_rows;
$row_cnt2 = $resultado2->num_rows;
$row_cnt3= $resultado3->num_rows;
$row_cnt4= $resultado4->num_rows;

if($row_cnt){

    $admin['admin'] = true;
    echo json_encode($admin);
    exit;

}else if($row_cnt2){
    $captura['captura'] =true;
   
    echo json_encode($captura);
    exit;

   

}else if($row_cnt3){
    $ventas['ventas'] =true;
   
    echo json_encode($ventas);
    exit;
}else if($row_cnt4){
    $direccion['direccion'] =true;
   
    echo json_encode($direccion);
    exit;
}else{
$response['status'] =false;
echo json_encode($admin);

}


?>
