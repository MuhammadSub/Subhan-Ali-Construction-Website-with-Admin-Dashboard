<?php
include("../partials/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO contact(email,msg) VALUES('$email','$msg')";

if (mysqli_query($connect,$sql)) {
	header('location: ../contact.php');
}else{
	echo "Not Sent";
}

?>