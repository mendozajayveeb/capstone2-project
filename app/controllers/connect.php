<?php 

/*$host = 'db4free.net';
$username = '';
$password = '';
$dbname = '';
*/


$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecomm_db';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>