<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'api';

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connection){
    die('failed to connect'.mysqli_connect_error());
}
?>