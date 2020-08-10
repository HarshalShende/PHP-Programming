<?php

$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];
$stu_name=$_POST['sname'];

$conn=mysqli_connect("localhost","root","","crud");

$sql="INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result=mysqli_query($conn,$sql) or die("Query Unsuccessfull");

header("Location: http://localhost/PhpTest/crud/index.php");

mysqli_close($conn);
?>

