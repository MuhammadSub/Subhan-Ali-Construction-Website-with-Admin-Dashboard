<?php
include("../partials/connect.php");
$name=$_POST['name'];
$number=$_POST['number'];
$category=$_POST['category'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO apply(name,number,category,email,msg) VALUES('$name','$number','$category','$email','$msg')";

if (mysqli_query($connect,$sql)) {
	header('location: ../apply.php');
}else{
	echo "Not Sent";
}

?>