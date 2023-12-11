<?php

$sname= "blqomszo0ekvtxstlyhg-mysql.services.clever-cloud.com";
$unmae= "uxrzu3kym2ugznft";
$password = "5i3TDz1DsX4YoQ8Z7Kaz";

$db_name = "blqomszo0ekvtxstlyhg";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}