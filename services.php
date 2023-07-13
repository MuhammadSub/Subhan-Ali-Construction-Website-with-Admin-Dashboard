 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Services</title>  
		 
		 <link href="css/style.css" rel="stylesheet" type="text/css">
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
			<?php
			 include ("partials/services.php");
			 ?>
			<!------------Services end------------->
			
	    	<!-------------BUILD THE BEST – BE THE BEST------------->
			<?php
			include ("partials/buildbest.php");
			?>
			<!-------------BUILD THE BEST – BE THE BEST End------------->
			
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