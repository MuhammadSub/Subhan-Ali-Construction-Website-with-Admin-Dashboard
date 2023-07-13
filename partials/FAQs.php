<?php
include('partials/connect.php');
$id=$_GET['services'];
$sql="SELECT * from services WHERE id='$id'";
$results=$connect->query($sql);

 $final=$results->fetch_assoc();   
?>
			 
				<section class="faq" id="faq">
					<div class="container">
						<div class="row">
							<div class="title col-md-12 text-center wow zoomIn" data-wow-duration=".4s" data-wow-delay=".4s">
								<h2><b>GENERAL FAQs</b></h2>
							</div>
						</div>
					</div>
					<div class="container wow bounceInLeft" data-wow-duration=".6s" data-wow-delay=".6s">
						<div class="row"> 
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="panel-group" id="FQS">                    
									<div class="panel panel-default">
									  <div class="panel-heading" id="headingTwo">
										  <h4 class="panel-title">
											  <a href="#collapseOne" class="collapsed" data-toggle="collapse" data-parent="#FQS"><?php echo $final['question1']?></a>
										  </h4>
										 </div>  
										<div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne">
											<div class="panel-body">
												<p>
												   <?php echo $final['answer1']?>
												</p>                                        
											</div>                                    
										</div>                              
									</div>
									 <div class="panel panel-default">
									  <div class="panel-heading" id="headingTwo">
										  <h4 class="panel-title">
											  <a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#FQS"><?php echo $final['question2']?></a>
										  </h4>
										 </div>  
										<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
											<div class="panel-body">
												<p>
													<?php echo $final['answer2']?>
												</p>                                        
											</div>                                    
										</div>                         
									</div> 
									<div class="panel panel-default">
									  <div class="panel-heading" id="headingTwo">
										  <h4 class="panel-title">
											  <a href="#collapseThree" class="collapsed" data-toggle="collapse" data-parent="#FQS"><?php echo $final['question3']?></a>
										  </h4>
										 </div>  
										<div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree">
											<div class="panel-body">
												<p>
												   <?php echo $final['answer3']?>
												</p>                                        
											</div>                                    
										</div>                           
									</div>
									<div class="panel panel-default">
									  <div class="panel-heading" id="headingFour">
										  <h4 class="panel-title">
											  <a href="#collapseFour" class="collapsed" data-toggle="collapse" data-parent="#FQS"><?php echo $final['question4']?></a>
										  </h4>
										 </div>  
										<div id="collapseFour" class="panel-collapse collapse" aria-labelledby="headingFour">
											<div class="panel-body">
												<p>
												   <?php echo $final['answer4']?>
												</p>                                        
											</div>                                    
										</div>                        
									</div>
								</div>
							</div>
						</div>
					</div>
				</section><hr>