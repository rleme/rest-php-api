<?php

$dbuser = getenv("dbuser");
$dbpass = getenv("dbpass");

$con = mysqli_connect("res-php-api1979.mysql.database.azure.com",$dbuser,$dbpass,"allphptricks");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>