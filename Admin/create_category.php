			<?php include('header.php'); ?>

			<?php $page=basename($_SERVER['PHP_SELF']); ?>
					
			<?php include('sidebar.php'); ?>
			<?php 
			include('config.php');
			
			$catarray=array();
			getCategory();
			function getCategory()
			{
				global $conn, $catarray;
				$stmt=$conn->prepare("SELECT * FROM category");
				$stmt->bind_result($id,$name,$parentid);
				$stmt->execute();
				while($stmt->fetch())
				{
					array_push($catarray,array("id"=>$id,"name"=>$name,"parentid"=>$parentid));
				}
				
			}
			?>
				
					<div id="main-content"> <!-- Main Content Section with everything -->
						
						<noscript> <!-- Show a notification if the user has disabled javascript -->
							<div class="notification error png_bg">
								<div>
									Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
								</div>
							</div>
						</noscript>
						
						<!-- Page Head -->
						<h2>Welcome User</h2>
						
						<div class="clear"></div> <!-- End .clear -->
						
						<div class="content-box"><!-- Start Content Box -->
							
							<div class="content-box-header">
								
								<h3>Content box</h3>
								
								<!--
								<ul class="content-box-tabs">
								
									<li><a href="#tab2">Forms</a></li>
								</ul>
								-->
							
								
								
							</div> <!-- End .content-box-header -->
							
							<div class="content-box-content">
								
								<div class="tab-content-default-tab" id="tab1">
								
										
									</div>

								
									<form action="create_category.php" method="POST">
									
										
										<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
											<!-- form changed -->
											
											<p>
												<label> Category Name </label>
												<input class="text-input small-input" type="text" id="small-input" name="cname"  required/> 
											</p>
										
											<p>
												<label>Select Parent Category</label>              
												<select name="newdropdown" class="small-input">
													<option value=" "> Select </option>
													<?php 
													global $catarray;
													foreach($catarray as $key=> $value): ?>


													<option value="<?php echo $catarray[$key]['name'];?>" data-optionid="<?php echo $catarray[$key]['id'];?>" data-oparentid="<?php echo $catarray[$key]['parentid'];?>" ><?php echo $catarray[$key]['name'];?></option>
												<?php endforeach;?>
													
													
												</select> 
											</p>
											
											<p>
												
												<input class="button" name="add" type="submit" value="Add" />
											</p>
											
											
										</fieldset>
										
										<div class="clear"></div><!-- End .clear -->
										
									</form>
									
								</div> <!-- End #tab2 -->        
								
							</div> <!-- End .content-box-content -->
							
						</div> <!-- End .content-box -->
						
						<?php include('footer.php'); ?>