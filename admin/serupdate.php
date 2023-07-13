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
        <form role="form" action="serupdatehandler.php" method="post" enctype="multipart/form-data">
          <?php
          $newid=$_GET['services'];
          include('../partials/connect.php');
          $sql="Select * from services WHERE id='$newid'";
          $results=$connect->query($sql);
          $final=$results->fetch_assoc();
		  ?>
          <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $final['name'] ?>" name="name">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file" value="<?php echo $final['picture']?>">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture1">File input</label>
                  <input type="file" id="picture" name="file1" value="<?php echo $final['picture1']?>">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture2">File input</label>
                  <input type="file" id="picture" name="file2" value="<?php echo $final['picture2']?>">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture3">File input</label>
                  <input type="file" id="picture" name="file3" value="<?php echo $final['picture3']?>">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture4">File input</label>
                  <input type="file" id="picture" name="file4" value="<?php echo $final['picture4']?>">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture5">File input</label>
                  <input type="file" id="picture" name="file5" value="<?php echo $final['picture5']?>">
                </div>
				<div class="form-group col-sm-4">
                  <label for="picture6">File input</label>
                  <input type="file" id="picture" name="file6" value="<?php echo $final['picture6']?>">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" name="description"><?php echo $final['description']?></textarea>
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category" value="<?php echo $final['category'] ?>">
                    <?php
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['name'].">".$row['name']."</option>";
                  }
                    ?>
                  </select>
              </div>
				<div class="form-group">
                  <label for="titledesc">Long Description</label>
                  <textarea id="titledesc" class="form-control" rows="10" placeholder="Enter Description" name="titledesc"><?php echo $final['titledesc']?></textarea>
                </div>
				  
				   <div class="form-group ">
                  <label for="question1">FAQ Question</label>
                  <textarea id="question1" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question1"><?php echo $final['question1']?></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer1">FAQ Answer</label>
                  <textarea id="answer1" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer1"><?php echo $final['answer1']?></textarea>
                </div>
				<div class="form-group ">
                  <label for="question2">FAQ Question</label>
                  <textarea id="question2" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question2"><?php echo $final['question2']?></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer2">FAQ Answer</label>
                  <textarea id="answer2" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer2"><?php echo $final['answer2']?></textarea>
                </div>
			    <div class="form-group ">
                  <label for="question3">FAQ Question</label>
                  <textarea id="question3" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question3"><?php echo $final['question3']?></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer3">FAQ Answer</label>
                  <textarea id="answer3" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer3"><?php echo $final['answer3']?></textarea>
                </div>
				<div class="form-group ">
                  <label for="question4">FAQ Question</label>
                  <textarea id="question4" class="form-control" rows="2" placeholder="Enter FAQ Question" name="question4"><?php echo $final['question4']?></textarea>
                </div>
				<div class="form-group ">
                  <label for="answer4">FAQ Answer</label>
                  <textarea id="answer4" class="form-control" rows="3" placeholder="Enter FAQ Answer" name="answer4"><?php echo $final['answer4']?></textarea>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
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
