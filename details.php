 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Services</title>       
         <link rel="shortcut icon" href="img/favicon.ico">         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/services.css" rel="stylesheet" type="text/css">
		 
         <?php
		 include ("partials/head.php");
		 ?>
 
     </head>
     <body>
        <div class="entire-content">  
        <!---------------Navigation starts------------->
			<?php
			include ("partials/navigation.php");
			?>
			<!---------------Navigation End------------->
        
          <!---------------contacthead section starts------------->
          <section class="slider servicehead text-center">              
              <div class="servicehead-overlay">
                  <div class="servicehead-content text-center">
                          <h2><strong>Services</strong></h2>                   
                  </div>                  
              </div>       
          </section>  
         <!---contact head section ends--->
			
		<!------------services Starts------------->  
        <section class="latest-services-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title wow zoomIn" data-wow-duration=".2s" data-wow-delay=".2s">
                            <h2><b>Services</b></h2>
                            <div class="sub-heading">
                                Thorough assessments, complete designs, and detailed proposals enable a smooth and surprise-free construction effort from concept through completion. Customers benefit from cost effective, aesthetically pleasing, energy efficient and environmentally sound buildings that facilitate a relationship among people, technology and space.
                            </div>  
                        </div>
                    </div>                    
                </div><br><br> 
                <div class="row">
                    <div class="services-active">
						<?php
						  include('partials/connect.php');

						  $sql="SELECT * from services";
						  $results=$connect->query($sql);
						
						  while ($final=$results->fetch_assoc()) {
						?>
                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft <?php echo $final['category'] ?>" data-wow-duration=".4s" data-wow-delay=".4s">
                           <div class="latest-services-wrap">
                               <div class="services-img">
                                   <img class="img-responsive" src="admin/<?php echo $final['picture'] ?>" alt="No File">  
                               </div>
                               <div class="services-content">
								   <h3><?php echo $final['name'] ?></h3>
                                   <p>
                                       <?php echo $final['description'] ?>
                                   </p><br>
								   <form action="details.php?details_id=<?php echo $final['id']?>">
                                   <button class="serbtn" tupe="submit">Read More</button></form>
							   </div> 
						   </div> 
						</div>
                        <?php } ?>
						</div>
					</div> 
				</div>  
			</div>
			</section>
        <!------------Services end------------->
			
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