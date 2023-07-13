<section class="service-area">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="section-title text-center wow zoomIn" data-wow-duration=".3s" data-wow-delay=".3s">
                              <h2><b>Blog</b></h2>
                          </div>
                      </div>                      
                  </div><br>
                  <div class="row wow bounceInUp"  data-wow-duration=".5s" data-wow-delay=".5s">
                     <div class="services-active">
						<?php
						  include('partials/connect.php');

						  $sql="SELECT * from blog";
						  $results=$connect->query($sql);
						  $i = 0;
						  while (($final=$results->fetch_assoc())&& ( $i < 3 )) {
							  $i++;
							  
						?>
                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft" style="margin-bottom: 50px;" data-wow-duration=".4s" data-wow-delay=".4s">
                           <div class="latest-services-wrap">
                               <div class="services-img">
                                   <img class="img-responsive" src="admin/<?php echo $final['picture'] ?>" alt="No File" style="width: 100%; height: 250px;">  
                               </div>
                               <div class="services-content">
								   <h3><?php echo $final['name'] ?></h3>
                                   <p>
                                       <?php echo $final['description'] ?>
                                   </p><br>
                                   <a class="lmbtn" href="blog_detial.php?blog=<?php echo $final['id']?>">Read More</a><br><br><br>
							   </div> 
						   </div> 
						</div>
                        <?php } ?>
						</div>
                      <div class="col-xs-12">
                          <div class="text-center load">
                              <a href="blog.php" class="lmbtn">Load More</a>
                          </div>
                      </div>                      
                  </div>
              </div>                                     
          </section>