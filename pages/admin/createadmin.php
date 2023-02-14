<?php 

include"../../connection/connection.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
   

    $queryAdmin ="INSERT INTO admin (username,password,name) VALUES ('$username','$password','$name')";
    $sqlAdmin = $con->query($queryAdmin);
    echo"<script>alert('Successfully added')</script>";
    echo"<script>window.location.href='admin.php'</script>";

    

}