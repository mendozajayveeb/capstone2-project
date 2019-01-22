<?php 

$host = 'db4free.net';
$username = 'ecommdb_roots';
$password = 'ecommdb_roots';
$dbname = 'ecomms_dbs';



// $host = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'ecomm_db';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'connected succesfully';

 ?>