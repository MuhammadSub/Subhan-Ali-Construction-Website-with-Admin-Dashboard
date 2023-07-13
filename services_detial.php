 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Services</title>       
         <link rel="shortcut icon" href="img/favicon.ico">         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/services.css" rel="stylesheet" type="text/css">
		 <link href="css/services_detials.css" rel="stylesheet" type="text/css">
		 
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
        
          <!---------------services detial head section starts------------->
			 <?php
			  include('partials/connect.php');

			  $id=$_GET['services'];
			  $sql="SELECT * from services WHERE id='$id'";
			  $results=$connect->query($sql);

			  $final=$results->fetch_assoc();   
			?>
          <section class="slider servicehead text-center">              
              <div class="servicehead-overlay">
                  <div class="servicehead-content text-center">
                          <h2><strong><?php echo $final['category']?></strong></h2>                   
                  </div>                  
              </div>       
          </section>  
         <!---services head section ends--->
        <!-- Main content -->
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
					</div><br><br> 
				<div class="row">
					<div class="col-md-12 wow zoomIn">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services_detials-img">
								<img class="img-responsive" src="admin/<?php echo $final['picture1']?>" alt="No File" style="height: 250px;"> 
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services_detials-img">
								<img class="img-responsive" src="admin/<?php echo $final['picture2']?>" alt="No File" style="height: 250px;"> 
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services_detials-img">
								<img class="img-responsive" src="admin/<?php echo $final['picture3']?>" alt="No File" style="height: 250px;"> 
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services_detials-img">
								<img class="img-responsive" src="admin/<?php echo $final['picture4']?>" alt="No File" style="height: 250px;"> 
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services_detials-img">
								<img class="img-responsive" src="admin/<?php echo $final['picture5']?>" alt="No File" style="height: 250px;"> 
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="services_detials-img">
								<img class="img-responsive" src="admin/<?php echo $final['picture6']?>" alt="No File" style="height: 250px;"> 
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center wow fadeInLeft">
						<div class="detial_description">
							<?php echo $final['titledesc']?>
						</div><br>
						<a class="lmbtn" href="book.php">Book Now</a></br>
					</div>
				</div>
			</div>
		</section>
			 <br><hr>
			 <!--- Popular Services--->
			<?php
			include ("partials/popularservices.php");
			?>
			<!------Poupular Service end-------->
			 <br><hr>
		
			 <!--- FAQs start--->
			<?php
			include ("partials/FAQs.php");
			?>
			<!------FAQs end-------->
		 
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
		 </div>
		 
		 <?php
		 include ("partials/script.php");
		 ?>
     
     </body>
 </html>