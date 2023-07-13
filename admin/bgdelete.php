<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from blog where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: blogshow.php');
}else{
	echo "Not Deleted";
}
?>