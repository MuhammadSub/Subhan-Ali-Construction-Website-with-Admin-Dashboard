<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from book where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: bookwork.php');
}else{
	echo "Not Deleted";
}
?>