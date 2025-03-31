<?php
$host = '127.0.0.1';
$name = 'root';
$password = '';
$database = 'hometeq';
$port = '3307';

$conn = mysqli_connect($host, $name, $password, $database, $port);

if (!$conn) {
    die("error conntecting to the database" . mysqli_connect_error($conn));
}
