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
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="serviceshandler.php" method="post" enctype="multipart/form-data">
          <h1>Services</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                  <label for="picture col-sm-3">Main Picture</label>
                  <input type="file" id="picture" name="file">
                </div>
				  <div class="form-group col-sm-4">
                  <label for="picture1">Picture 1</label>
                  <input type="file" id="picture" name="file1">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture2">Picture 2</label>
                  <input type="file" id="picture" name="file2">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture3">Picture 3</label>
                  <input type="file" id="picture" name="file3">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture4">Picture 4</label>
                  <input type="file" id="picture" name="file4">
                </div>
				<div class="form-group5 col-sm-4">
                  <label for="picture5">Picture 5</label>
                  <input type="file" id="picture" name="file5">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture6">Picture 6</label>
                  <input type="file" id="picture" name="file6">
                </div>
                <div class="form-group ">
                  <label for="description">Main Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category">
                    <?php
                    include('../partials/connect.php');
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['name'].">".$row['name']."</option>";
                  }
                    ?>
                  </select>
				<div class="form-group ">
                  <label for="titledesc">Long Description</label>
                  <textarea id="titledesc" class="form-control" rows="10" placeholder="Enter Description" name="titledesc"></textarea>
                </div>
					
			    <div class="form-group ">
                  <label for="question1">FAQ Question</label>
                  <textarea id="question1" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question1"></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer1">FAQ Answer</label>
                  <textarea id="answer1" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer1"></textarea>
                </div>
				<div class="form-group ">
                  <label for="question2">FAQ Question</label>
                  <textarea id="question2" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question2"></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer2">FAQ Answer</label>
                  <textarea id="answer2" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer2"></textarea>
                </div>
			    <div class="form-group ">
                  <label for="question3">FAQ Question</label>
                  <textarea id="question3" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question3"></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer3">FAQ Answer</label>
                  <textarea id="answer3" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer3"></textarea>
                </div>
				<div class="form-group ">
                  <label for="question4">FAQ Question</label>
                  <textarea id="question4" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question4"></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer4">FAQ Answer</label>
                  <textarea id="answer4" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer4"></textarea>
                </div>
					
              </div>
              <!-- .box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
</div>
<div class="col-sm-3">
  </div>
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
