<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("res-php-api1979.mysql.database.azure.com","api","Bi@06gata","allphptricks");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>