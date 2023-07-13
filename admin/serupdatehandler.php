<?php
include('../partials/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newdesc=$_POST['description'];
	$newcat=$_POST['category'];
	$newtitledesc=$_POST['titledesc'];
	$newquestion1=$_POST['question1'];
	$newanswer1=$_POST['answer1'];
	$newquestion2=$_POST['question2'];
	$newanswer2=$_POST['answer2'];
	$newquestion3=$_POST['question3'];
	$newanswer3=$_POST['answer3'];
	$newquestion4=$_POST['question4'];
	$newanswer4=$_POST['answer4'];


//Picture
$target="upload/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="upload/".$file_name;

move_uploaded_file($file_tmp, $file_store);

//Picture 1
$target="upload/";
$file_path1=$target.basename($_FILES['file1']['name']);
$file_name1=$_FILES['file1']['name'];
$file_tmp1=$_FILES['file1']['tmp_name'];
$file_store1="upload/".$file_name1;

move_uploaded_file($file_tmp1, $file_store1);
	
//Picture 2
$target="upload/";
$file_path2=$target.basename($_FILES['file2']['name']);
$file_name2=$_FILES['file2']['name'];
$file_tmp2=$_FILES['file2']['tmp_name'];
$file_store2="upload/".$file_name2;

move_uploaded_file($file_tmp2, $file_store2);
	
//Picture 3
$target="upload/";
$file_path3=$target.basename($_FILES['file3']['name']);
$file_name3=$_FILES['file3']['name'];
$file_tmp3=$_FILES['file3']['tmp_name'];
$file_store3="upload/".$file_name3;

move_uploaded_file($file_tmp3, $file_store3);
	
//Picture 4
$target="upload/";
$file_path4=$target.basename($_FILES['file4']['name']);
$file_name4=$_FILES['file4']['name'];
$file_tmp4=$_FILES['file4']['tmp_name'];
$file_store4="upload/".$file_name4;

move_uploaded_file($file_tmp4, $file_store4);
	
//Picture 5
$target="upload/";
$file_path5=$target.basename($_FILES['file5']['name']);
$file_name5=$_FILES['file5']['name'];
$file_tmp5=$_FILES['file5']['tmp_name'];
$file_store5="upload/".$file_name5;

move_uploaded_file($file_tmp5, $file_store5);

//Picture 6
$target="upload/";
$file_path6=$target.basename($_FILES['file6']['name']);
$file_name6=$_FILES['file6']['name'];
$file_tmp6=$_FILES['file6']['tmp_name'];
$file_store6="upload/".$file_name6;

move_uploaded_file($file_tmp6, $file_store6);
	

$sql="UPDATE services set name='$newname', description='$newdesc', category='$newcat',titledesc='$newtitledesc', picture='$file_path',picture1='$file_path1',picture2='$file_path2',picture3='$file_path3',picture4='$file_path4',picture5='$file_path5',picture6='$file_path6',question1='$newquestion1',answer1='$newanswer1',question2='$newquestion2',answer2='$newanswer2',question3='$newquestion3',answer3='$newanswer3',question4='$newquestion4',answer4='$newanswer4' where id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: servicesshow.php');
}else{
	header('location: adminindex.php');
}
}
?>