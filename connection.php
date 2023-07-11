<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'datapekerja';
$con = mysqli_connect($localhost, $username, $password, $database);
if (!$con) {
	echo "Connection failed!";
}
?>