<?php 

include"../../connection/connection.php";

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bdate = $_POST['bdate'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $bapt = $_POST['bapt'];
    $acl = $_POST['acl'];

    $querymember ="INSERT INTO tbl_member (fname,lname,gender,age,bdate,address,position,bapt,acl) VALUES ('$fname','$lname','$gender','$bdate','$age','$address','$position','$bapt','$acl')";
    $sqlmember = $con->query($querymember);
    echo"<script>alert('Successfully added')</script>";
    echo"<script>window.location.href='member.php'</script>";

    

}