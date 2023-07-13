<?php
include("../partials/connect.php");
$name=$_POST['name'];
$description=$_POST['description'];

// Picture
$target="upload/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="upload/".$file_name;

move_uploaded_file($file_tmp, $file_store);

$sql="INSERT INTO blog(name,picture,description) VALUES('$name','$file_path','$description')";

$connect->query($sql);

header('location: blogshow.php');
?>