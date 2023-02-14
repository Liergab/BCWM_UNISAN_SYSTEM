<?php
include '../../connection/connection.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bdate = $_POST['bdate'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $bapt = $_POST['bapt'];
    $acl = $_POST['acl'];

    $queryUpdate ="UPDATE tbl_member SET fname = '$fname', lname ='$lname', gender = '$gender', bdate ='$bdate', age = $age, address = '$address', position = '$position', bapt = '$bapt', acl = '$acl' WHERE id = $id ";
    $sqlUpdate =$con->query($queryUpdate);
    echo"<script>alert('Successfully Updated')</script>";
    echo"<script>window.location.href='member.php'</script>";


}

 ?>