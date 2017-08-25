	<?php
	        include("config.php");
	if(isset($_GET['uid']))
	{
	    $uid=$_GET['uid'];
	    $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
	    $stmt->bind_param("i",$uid);

		$stmt->bind_result($eid,$ename,$eprice,$eimage,$ecategory);
		$stmt->execute();
		while($stmt->fetch())
		{
		$proname=$ename;
		$proprice=$eprice;
		
			 
	}

	$stmt->close();
	$conn->close();
	}
	?>

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

						
							<form action="manage.php" method="POST" enctype="multipart/form-data">
							<?php if(isset($_GET['uid'])): ?>

								<input type="hidden" name="edit" value="<?php echo $_GET['uid']; ?>" >
						
								<?php endif; ?>
								
								<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
									<!-- form changed -->
									
									<p>
										<label> Product Name </label>
										<input class="text-input small-input" type="text" id="small-input" name="name" value="<?php if(isset($_GET['uid'])){echo $proname;} ?>" required/> 
									</p>
									
									<p>
										<label>Product Price</label>
										<input class="text-input small-input" type="text" id="small-input" name="price" value="<?php if(isset($_GET['uid'])){echo $proprice;} ?>" required/>
									</p>
									
									<p>
										<label>Product Image</label>
										<input type="file" name="image" class="text-input small-input">
										
								
									</p>
									
									
									
									<p>
										<label>Select Category</label>              
										<select name="dropdown" class="small-input" required>
											<option> Select </option>
											<option> Western </option>
											<option> Indian </option>
											<option> Indo-Western</option>
											
											
										</select> 
									</p>
									
									<p>
										<?php if(!isset($_GET['uid'])): ?>
										<input class="button" name="submit" type="submit" value="Add" />
										<?php endif; ?>

										<?php if(isset($_GET['uid'])): ?>
										<input class="button" name="update" type="submit" value="Update Product" />
										<?php endif; ?>



									</p>
									
									
								</fieldset>
								
								<div class="clear"></div><!-- End .clear -->
								
							</form>
							
						</div> <!-- End #tab2 -->        
						
					</div> <!-- End .content-box-content -->
					
				</div> <!-- End .content-box -->
				
				<?php include('footer.php'); ?>