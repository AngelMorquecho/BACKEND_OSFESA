
<?php
// Database configuration
$dbHost     = "162.241.62.132";
$dbUsername = "grupoosf_admin_pro";
$dbPassword = "rQbp2RZAPK7KSBs";
$dbName     = "grupoosf_db_prototype";

// Create database connection
$connection= new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>
