 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Book Now</title>         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/book.css" rel="stylesheet" type="text/css">
		 
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
        
			<!---------------contacthead section starts------------->
	        <section class="slider bookhead text-center">              
				<div class="bookhead-overlay">
					<div class="bookhead-content text-center">
							<h2><strong>Book Now</strong></h2>                   
					</div>                  
				</div>       
			</section>  
			<!---Book head section ends--->
			
			<!--Book start-->
			<?php
			include ("partials/Book.php");
			?>
			<!--Book End-->
	
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