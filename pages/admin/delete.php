<?php 
include "../../connection/connection.php";

$id = $_GET['id'];

$queryDeleteM = "DELETE FROM admin WHERE id=$id";
$sqlDeleteM = $con->query($queryDeleteM);

echo"<script>alert('Successfully Delete')</script>";
echo"<script>window.location.href='admin.php'</script>";
?>
