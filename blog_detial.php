 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Blog</title>         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/blog.css" rel="stylesheet" type="text/css">
		 <link href="css/services.css" rel="stylesheet" type="text/css">
		 
         <?php
		 include ("partials/head.php");
		 ?>
     </head>
     <body>
		 <div class="entire-content">  
			  <!--------Navigation starts-------->
			  <?php
			  include ("partials/navigation.php");
			  ?>
			  <!--------Navigation Ends-------->
			 
			  <!---------------blog starts------------->
				 <?php
				  include('partials/connect.php');

				  $id=$_GET['blog'];
				  $sql="SELECT * from blog WHERE id='$id'";
				  $results=$connect->query($sql);

				  $final=$results->fetch_assoc();   
				?>
			  <section class="bloghead text-center"> 
				  <img class="img-responsive" src="admin/<?php echo $final['picture']?>"style="width:100%; height: 500px;" alt="No File">  
				  <div class="col-md-9 col-xs-12"></div>
						<div class="date col-md-3 col-xs-12 wow zoomIn">
							<p><?php echo $final['created_at']?></p>
						</div>
			  </section>  
			<section class="content">
				<div class="container">
					<div class="row">
							<div class="col-xs-12">
								<div class="section-title wow zoomIn" data-wow-duration=".2s" data-wow-delay=".2s">
									<br><h2><b><?php echo $final['name']?></b></h2>
									<div class="sub-heading">
										<?php echo $final['description']?>
									</div>  
								</div>
							</div> 
					</div>
				</div>
			</section>
			<br><hr>
			 <!-----Blog end--->
			 
			 <!------------blog Starts------------->     
			<?php
			include ("partials/popularblog.php");
			?><hr>
			<!-----------blog end----------------->
			 
			<!------------Ask question Starts------------->     
			<?php
			include ("partials/askquestion.php");
			?>
			<!-----------ask question end----------------->
			 
       		<!-----------Footer start----------------->
			<?php
			include ("partials/footer.php");
			?>
			<!-----------Footer End----------------->
			 	
			 <!-----------Scroll Top----------------->
			<?php
			include ("partials/BackToTop.php");
			?>
       </div>
		 
  		 <?php
		 include ("partials/script.php");
		 ?>
     </body>
 </html>