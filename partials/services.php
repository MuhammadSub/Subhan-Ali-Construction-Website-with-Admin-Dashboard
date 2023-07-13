<section class="latest-services-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12" style="margin-bottom: 30px;">
                        <div class="section-title wow zoomIn" data-wow-duration=".2s" data-wow-delay=".2s">
                            <h2><b>Services</b></h2>
                            <div class="sub-heading">
                                Thorough assessments, complete designs, and detailed proposals enable a smooth and surprise-free construction effort from concept through completion. Customers benefit from cost effective, aesthetically pleasing, energy efficient and environmentally sound buildings that facilitate a relationship among people, technology and space.
                            </div>  
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="services-active">
						<?php
						  include('partials/connect.php');

						  $sql="SELECT * from services";
						  $results=$connect->query($sql);
						
						  while ($final=$results->fetch_assoc()) {
						?>
                       <div class="col-md-4 col-md-6 col-md-12 wow fadeInLeft <?php echo $final['category'] ?>" style="margin-bottom: 60px;" data-wow-duration=".4s" data-wow-delay=".4s">
                           <div class="latest-services-wrap">
                               <div class="services-img">
                                   <img class="img-responsive" src="admin/<?php echo $final['picture'] ?>" alt="No File" style="height: 250px;">  
                               </div>
                               <div class="services-content">
								   <h3><?php echo $final['name'] ?></h3>
                                   <p>
                                       <?php echo $final['description'] ?>
                                   </p><br>
                                   <a class="lmbtn" href="services_detial.php?services=<?php echo $final['id']?>">Read More</a><br><br><br>
							   </div> 
						   </div> 
						</div>
                        <?php } ?>
						</div>
					</div> 
				</div>  
			</div>
			</section>