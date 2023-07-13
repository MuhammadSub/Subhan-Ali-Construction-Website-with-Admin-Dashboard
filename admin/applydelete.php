<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from apply where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: applywork.php');
}else{
	echo "Not Deleted";
}
?>