<?php include('header.php'); ?>

<?php $page=basename($_SERVER['PHP_SELF']); ?>
		
<?php include('sidebar.php'); ?>
<?php
      $uid=$_GET['uid'];
      include("config.php");
      $toupdate=array();

      $stmt = $conn->prepare("SELECT name,price,image,category FROM products WHERE id=?");
      $stmt->bind_param("i",$uid);

		$stmt->bind_result($name3,$price3,$image3,$category3);
		$stmt->execute();
		while($stmt->fetch())
		{
		 $name=$name3;
		 $price=$price3;
		 $category=$category3;
		 $image=$image3;
		 
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

					
						<form action="updateform.php" method="POST" enctype="multipart/form-data">
							
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<!-- form changed -->
								
								<p>
									<label> Product Name </label>
									<input class="text-input small-input" type="text" id="small-input" name="n" value="<?php echo $name; ?>" required/> 
								</p>
								
								<p>
									<label>Product Price</label>
									<input class="text-input small-input" type="text" id="small-input" name="p" value="<?php echo $price; ?>" required/>
								</p>
								
								<p>
									<label>Product Image</label>
									<input type="file" name="i" class="text-input small-input" value="<?php echo $image; ?>"/>
									
							
								</p>
								
								
								
								<p>
									<label>Select Category</label>              
									<select name="cat" class="small-input" value="<?php echo $category; ?>" required>
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