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
$sql="INSERT INTO user_admin values ('LMG','1234567','AGMHE','INGE','LIBRE')";
if(mysqli_query($connection,$sql)){
  echo('creado');
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
};


?>