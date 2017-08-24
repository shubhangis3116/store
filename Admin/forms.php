<?php include('header.php'); ?>

<?php $page=basename($_SERVER['PHP_SELF']); ?>
		
<?php include('sidebar.php'); ?>
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			
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

					
						<form action="db.php" method="POST" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<!-- form changed -->
								
								<p>
									<label> Product Name </label>
									<input class="text-input small-input" type="text" id="small-input" name="name" /> 
								</p>
								
								<p>
									<label>Product Price</label>
									<input class="text-input small-input" type="text" id="small-input" name="price" />
								</p>
								
								<p>
									<label>Product Image</label>
									<input type="file" name="image" class="text-input small-input"/>
									
							
								</p>
								
								
								
								<p>
									<label>Select Category</label>              
									<select name="dropdown" class="small-input">
										<option> Select </option>
										<option> Western </option>
										<option> Indian </option>
										<option> Indo-Western</option>
										
										
									</select> 
								</p>
								
								
								<p>
									<input class="button" type="submit" value="Submit" name="submit" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<?php include('footer.php'); ?>