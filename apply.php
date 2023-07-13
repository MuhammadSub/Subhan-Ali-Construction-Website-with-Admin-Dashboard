 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Apply Now</title>       
         <link rel="shortcut icon" href="img/favicon.ico">         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/book.css" rel="stylesheet" type="text/css">
		 <link href="css/apply.css" rel="stylesheet" type="text/css">
		 
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
          	<!---------------contact head section starts------------->
			<section class="slider bookhead text-center">              
				<div class="bookhead-overlay">
					<div class="bookhead-content text-center">
						 <h2><strong>Apply Now</strong></h2>                   
					</div>                  
				</div>       
			</section>  
         <!---contact head section ends--->
			
	     <!--Add your bussiness-->
		 <?php
		 include ("partials/addbusiness.php");
		 ?>
		 <!--Add your bussiness end-->		
			
		<!--Apply start-->
		<?php
		 include ("partials/apply.php");
		 ?>
		<!--Apply End-->
		
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