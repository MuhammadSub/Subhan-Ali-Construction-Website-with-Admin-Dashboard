<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">
          <?php
          include('../partials/connect.php');

          $id=$_GET['services'];
          $sql="SELECT * from services WHERE id='$id'";
          $results=$connect->query($sql);

          $final=$results->fetch_assoc();        
          ?>
			<h3> Name : <?php echo $final['name']?> </h3><hr>
			<h3> Description : <?php echo $final['description']?> </h3><hr>
			<h3> Category : <?php echo $final['category']?> </h3><hr>
			<img src="<?php echo $final['picture'] ?>" alt="No File" style="height:500px;"><hr>
			<img src="<?php echo $final['picture1'] ?>" alt="No File" style="height:200px">
			<img src="<?php echo $final['picture2'] ?>" alt="No File" style="height:200px">
			<img src="<?php echo $final['picture3'] ?>" alt="No File" style="height:200px">
			<img src="<?php echo $final['picture4'] ?>" alt="No File" style="height:200px">
			<img src="<?php echo $final['picture5'] ?>" alt="No File" style="height:200px">
			<img src="<?php echo $final['picture6'] ?>" alt="No File" style="height:200px"><hr>
			<h3> Long Description : <?php echo $final['titledesc']?> </h3><hr>
			<h3> FAQS</h3><hr>
			<h4> Question 1 : <?php echo $final['question1']?> ?</h4>
			<h4> Answer 1 : <?php echo $final['answer1']?> .</h4><hr>
			<h4> Question 2 : <?php echo $final['question2']?> ?</h4>
			<h4> Answer 2 : <?php echo $final['answer2']?> .</h4><hr>
			<h4> Question 3 : <?php echo $final['question3']?> ?</h4>
			<h4> Answer 3 : <?php echo $final['answer3']?> .</h4><hr>
			<h4> Question 4 : <?php echo $final['question4']?> ?</h4>
			<h4> Answer 4 : <?php echo $final['answer4']?> .</h4><hr>
		  </div>
		  <div class="col-sm-3"></div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
