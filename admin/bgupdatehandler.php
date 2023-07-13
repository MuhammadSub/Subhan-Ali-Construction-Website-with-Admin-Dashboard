<?php
include('../partials/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newdesc=$_POST['description'];


//Picture
$target="upload/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="upload/".$file_name;

move_uploaded_file($file_tmp, $file_store);
	

$sql="UPDATE blog set name='$newname', description='$newdesc',picture='$file_path' where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: blogshow.php');
}else{
	header('location: adminindex.php');
}


}
?>