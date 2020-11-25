<?php
$databaseHost = 'localhost';
$databaseName = 'kk4b'; 
$databaseUsername = 'root'; 
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (mysqli_connect_errno()) {
    printf("%s \n", mysqli_connect_error());
    exit();
}
