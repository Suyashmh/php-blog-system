<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'php_blog';

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
