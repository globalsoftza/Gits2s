<?php

$server = "localhost";
$user="root";
$pass="";
$db="s2sdatabase";

$conn= mysqli_connect($server, $user, $pass, $db)or 
        die("No connection");

echo"connection successful";

?>

