<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from categories where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: categoriesshow.php');
}else{
	echo "Not Deleted";
}
?>