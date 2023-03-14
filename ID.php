<?php
include_once 'db_admin.php';
$ref=@$_GET['m'];
$name = $_POST['name'];
$num = $_POST['number'];
$lG = $_POST['local-govenrment'];
$ministry = $_POST['ministry'];
$complain = $_POST['complain'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$identify = $_POST['identify'];
$q=mysqli_query($con,"INSERT INTO identify VALUES  ('$id' , '$lG', '$ministry' , '$complain', '$feedback' , '$date' , '$time')")or die ("Error");
header("location:$ref?q=Thank you for your complain");
?>