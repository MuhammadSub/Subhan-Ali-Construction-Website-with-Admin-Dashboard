 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction - Apka Yakeen Hamara Sath</title> 
		 
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/about.css" rel="stylesheet" type="text/css">
		 <link href="css/apply.css" rel="stylesheet" type="text/css">
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
		
			<!---------------Slider section starts------------->
			<?php
			include ("partials/slider.php");
			?>
			<!---Slider section ends--->
			
			<!--- Popular Services--->
			<?php
			include ("partials/popularservices.php");
			?>
			<!------Poupular Service end-------->
			<hr>
			<!--About start-->
			<?php
			include ("partials/about.php");
			?>
			<!--About End-->
			<hr>
			
			<!--Add your bussiness-->
			<?php
			include ("partials/addbusiness.php");
			?><br><br><br>
			<!--Add your bussiness end-->
			
			<!-------------BUILD THE BEST – BE THE BEST------------->
			<?php
			include ("partials/buildbest.php");
			?>
			<!-------------BUILD THE BEST – BE THE BEST End------------->
			
			<!------------blog Starts------------->     
			<?php
			include ("partials/popularblog.php");
			?>
			<!-----------blog end----------------->
			<hr>
			
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