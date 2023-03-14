<?php
include_once 'db_admin.php';
$ref=@$_GET['m'];
$lG = $_POST['local govenrment'];
$ministry = $_POST['ministry'];
$complain = $_POST['complain'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("h:i:sa");
$feedback = $_POST['feedback'];
$q=mysqli_query($con,"INSERT INTO feedback VALUES  ('$id' , '$lG', '$ministry' , '$complain', '$feedback' , '$date' , '$time')")or die ("Error");
header("location:$ref?q=Thank you for your complain");
?>