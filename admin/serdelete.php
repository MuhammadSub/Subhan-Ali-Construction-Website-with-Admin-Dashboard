<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from services where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: servicesshow.php');
}else{
	echo "Not Deleted";
}
?>