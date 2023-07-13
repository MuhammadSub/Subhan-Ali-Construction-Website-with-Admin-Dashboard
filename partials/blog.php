<section class="latest-services-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title wow zoomIn" data-wow-duration=".2s" data-wow-delay=".2s">
                            <h2><b>Blog</b></h2>
                            <div class="sub-heading">
                                A blog (a truncation of "weblog") is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page.
                            </div>  
                        </div>
                    </div>                    
                </div><br><br> 
				<div class="row">
                    <div class="services-active">
						<?php
						  include('partials/connect.php');

						  $sql="SELECT * from blog";
						  $results=$connect->query($sql);
						
						  while ($final=$results->fetch_assoc()) {
						?>
                       <div class="col-md-4 col-md-6 col-md-12 wow fadeInLeft" style="margin-bottom: 60px;" data-wow-duration=".4s" data-wow-delay=".4s">
                           <div class="latest-services-wrap">
                               <div class="services-img">
                                   <img class="img-responsive" src="admin/<?php echo $final['picture'] ?>" alt="No File" style="height: 250px;">  
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
					</div> 
				</div>   
			</div>
			</section>