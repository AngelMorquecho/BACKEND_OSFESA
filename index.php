<?php 
$mysqli = new mysqli("192.168.100.13", "ANGEL", "Root1Angel", "osfesa", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo "<p>Conectado<p>";

 ?>