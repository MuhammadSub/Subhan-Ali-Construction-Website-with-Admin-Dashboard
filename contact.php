 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Contact Us</title>       
         <link rel="shortcut icon" href="img/favicon.ico">         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/contact.css" rel="stylesheet" type="text/css">
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
			<section class="slider contacthead text-center">              
				<div class="contacthead-overlay">
					<div class="contacthead-content text-center">
						 <h2><strong>Contact Us</strong></h2>                   
					</div>                  
				</div>       
			</section>  
			<!---contact head section ends--->
			
			<!--contact start-->
			<?php
			include ("partials/contact.php");
			?>
			<!--contact End-->
			
			<!-----------Markup for Maps----------------->
		    <section class="maps wow fadeInUp" id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26546.632505304264!2d72.81855223673782!3d33.7263061084552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa38b91e665db%3A0x336f6bfa405908b3!2sTaxila%20Cantt%2C%20Taxila%2C%20Rawalpindi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1633757378947!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>"</iframe>    
			</section> 
		   <!-------------Map end--------------->
			
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