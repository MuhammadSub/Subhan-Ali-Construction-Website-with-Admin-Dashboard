<section class="book-area">
           <div class="container">
                 <div class="row wow fadeInUp">
                     <div class="bookus col-xs-12">
						 <div class="col-md-6 col-md-offset-3 text-center">
							 <div class="section-heading wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
							   <h2 class="section-title"><b>Apply Now</b></h2>
								<p>We are here to help you 7 days a week and respond within 24 hours.</p>
							   <div class="border-bottom-now"></div> 
						     </div> 
						 </div>
						 <div class="col-md-4 col-md-offset-1 bookintro">
                              <h3>Subhan Ali Construction</h3>
                              <p>
                                  Subhan Ali Construction is an online service providing platform primarily based in twin city Rawalpindi and Islamabad. We are enhancing quality of life for all, be it people or a service. Our services will build people’s life easier and convenient. We developed or build the platform wherever find the services easily while not having to fret concerning trait and quality of labor. We do acknowledge and perceive verity challenges that each home face daily. You can get best experience from our teams they are professionally skilled workers that employment 100% safety with full dedication
                              </p>
                          </div>
						 
                         <form class="col-md-6  book-form" action="handler/applyhandler.php" method="post">
                             <div class="row content">
								 <div class="vl"></div>
								 <div class="col-sm-5"><br>
									 <input class="form-control" type="text" name="name" placeholder="Name">
                                 </div>
								 <div class="col-sm-5"><br>
									 <input class="form-control" type="tel" name="number" placeholder="Mobile Number">
                                 </div>
                                 <div class="col-sm-10"><br>
									 <input class="form-control" type="text" name="email" placeholder="Your Email Address">
                                 </div>
								 <div class="col-sm-10 form-select">
									 <label for="category"><br><p>Choose Category</p></label>
									 <select class="form-control" name="category">
										 <?php 
											include('partials/connect.php');
										    $cat="SELECT * from categories";
											$results=mysqli_query($connect,$cat);
											while($row=mysqli_fetch_assoc($results)){
											echo "<option value=".$row['name'].">".$row['name']."</option>";
										  }
										 ?>
									 </select> 
								 </div>
                                 <div class="col-sm-10"><br>
									 <textarea class="form-control" rows="8" name="msg" placeholder="How Can We Help?"></textarea>   
                                 </div>
                                 <div class="col-sm-10 text-center"><br><br>
                                     <button class="bookbtn" type="submit"> Submit </button>                                    
                                 </div>   
                             </div>
                         </form>
                     </div>
			   </div>
			</div>   
         </section>