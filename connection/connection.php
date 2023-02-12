<?php
$server = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'Churchdb';

$con = new mysqli($server,$username,$password,$databaseName);

if(!$con){
    echo $con-> connect_error;
}

?>