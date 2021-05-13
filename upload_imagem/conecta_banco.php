<?php 

$db_name = "schoolappdb";
$db_user = "root";
$db_pass = "";
$db_server ="localhost"; 

$con  = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$con) {
	echo "Falha a conectar no banco $db_name";
}

 ?>