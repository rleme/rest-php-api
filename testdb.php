<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

$dbname = 'allphptricks';
$dbuser = 'api';
$dbpass = 'Bi@06gata';
$dbhost = 'apidb1979.mysql.database.azure.com';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {