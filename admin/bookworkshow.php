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

          $id=$_GET['book'];
          $sql="SELECT * from book WHERE id='$id'";
          $results=$connect->query($sql);

          $final=$results->fetch_assoc();        
          ?>
          <h3> Name : <strong style="color:blue;"><?php echo $final['name']?></strong></h3><hr>
          <h3> Number : <strong style="color:blue;"><?php echo $final['number']?></strong> </h3><hr>
		  <h3> Category : <strong style="color:blue;"><?php echo $final['category']?></strong> </h3><hr>
		  <h3> Email : <strong style="color:blue;"><?php echo $final['email']?></strong> </h3><hr>
          <h3> Mesage : <strong style="color:blue;"><?php echo $final['msg']?></strong> </h3><hr>
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
