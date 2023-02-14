<?php
include '../../connection/connection.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    

    $queryUpdate ="UPDATE admin SET username = '$username', password ='$password', name = '$name' WHERE id = $id ";
    $sqlUpdate =$con->query($queryUpdate);
    echo"<script>alert('Successfully Updated')</script>";
    echo"<script>window.location.href='admin.php'</script>";


}

 ?>