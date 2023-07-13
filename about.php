 <!DOCTYPE html>
 <html><head>
         <title>Subhan Ali Construction -  About Us</title>         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/about.css" rel="stylesheet" type="text/css">
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
			<section class="slider abouthead text-center">              
				<div class="abouthead-overlay">
					<div class="abouthead-content text-center">
							<h2><strong>About Us</strong></h2>                   
					</div>                  
				</div>       
			</section>  
			<!---Book head section ends--->
			
			<!--About start-->
			<?php
			include ("partials/about.php");
			?>
			<!--About End-->
			
			<!--vision start-->
			<?php
			include ("partials/vision.php");
			?>
			<!--vision End-->
			
			<!--mission start-->
			<?php
			include ("partials/mission.php");
			?>
			<!--mission End-->
			<!--How we Work start-->
			<?php
			include ("partials/Hownework.php");
			?>
			<!--How we Work End-->
			
			<!------------Ask question Starts------------->     
			<?php
			include ("partials/askquestion.php");
			?>
			<!-----------ask question end----------------->
			
			<!--Team start-->
			<?php
			include ("partials/Team.php");
			?>
			<!---Team end-->
       
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