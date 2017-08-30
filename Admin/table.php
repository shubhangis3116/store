					<?php include('config.php'); ?>
					<?php include('functions.php'); ?>

				<?php 
				     /*pagination */
						$total=getProductCount();
						 $limit=9;
						 $offset=0;
						 $totalpages=ceil($total/$limit);
						 if(isset($_GET['pageid']))
						 {
						 	$pageid = $_GET['pageid'];
							for($i=1;$i<=$totalpages;$i++)
							{
								if($pageid==$i)
								{
									$offset=($i-1) * $limit;
								}
							}
						 }
						 
						$products=getProducts($offset,$limit);
				?>
				<?php $page=basename($_SERVER['PHP_SELF']); ?>

				<?php include('header.php'); ?>
				<?php include('sidebar.php'); ?>


				
				<!--
			
				
				//pagination with  page no.//
					$stmt=$conn->prepare("SELECT COUNT(*) FROM products");
					$stmt->bind_result($num);
					$limit=4;
					$offset=0;
					$stmt->execute();

					while($stmt->fetch())
					{
						$total=$num;
					}

					
					$totalpages=ceil($total/$limit);

					if(isset($_GET['pageid']))
					{
						for($i=1;$i<=$totalpages;$i++)
						{
							if($i==$_GET['pageid'])
							{
								$offset=($i-1)*$limit;
							}
						}
					}

				 $product=array();

				 $stmt=$conn->prepare("SELECT * FROM products LIMIT ?,?");
				 $stmt->bind_param("ii",$offset,$limit);
				 $stmt->execute();

				 $stmt->bind_result($id,$name,$price,$image,$category);
				 while($stmt->fetch())
				 {
				 	array_push($product,array("id"=>$id,"name"=>$name,"price"=>$price,"image"=>$image,"dropdown"=>$category));
				 }

				 $stmt->close();
				 $conn->close();
				 -->
				
				



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
										<li><a href="#tab1" class="default-tab">Table</a></li> 
										-->
										<!-- href must be unique and match the id of target div -->
									<!--	<li><a href="#tab2">Forms</a></li>
									</ul>
								
									<div class="clear"></div>
									-->
									
								</div> <!-- End .content-box-header -->
								
								<div class="content-box-content">
									
									<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
										<!--tables and forms separated -->
										
										
										<table id="pr">
											
											<thead>
												<tr>
												   <th><input class="check-all" type="checkbox" /></th>
												   <th>Product ID</th>
												   <th>Product Name</th>
												   <th>Product Price</th>
												   <th>Product Image</th>
												   <th>Category</th>
												   <th>Action</th>
												</tr>
												
											</thead>
										 
											<tfoot>
												<tr>
													<td colspan="6">
														<div class="bulk-actions align-left">
															<select name="dropdown">
																<option value="option1">Choose an action...</option>
																<option value="option2">Edit</option>
																<option value="option3">Delete</option>
															</select>
															<a class="button" href="#">Apply to selected</a>
														</div>
														
														<div class="pagination">
													
														<?php for($i=1;$i<=$totalpages;$i++):
														 ?>
														 <a href="table.php?pageid=<?php echo $i; ?>"
														 <?php if(isset($pageid) && $pageid==$i) : ?>
														 	class='number current' title='1'<?php endif ; ?>><?php echo $i; ?></a>
														 <?php endfor ; ?>
														</div>
														</div>

															
														<!-- End .pagination -->
														<div class="clear"></div>
													</td>
												</tr>
											</tfoot>
										 
											<tbody>
										
											<?php
											foreach($products as $key => $value): 
																									?>
												<tr>
													<td><input type="checkbox" /></td>
													<td><?php echo $value['id']; ?></td>
													<td><?php echo $value['name']; ?></td>
													<td><?php echo $value['price']; ?></td>
													<td><img src="pictures/<?php echo $value['image']; ?>"></td>
													<td><?php echo $value['dropdown']; ?></td>

													<td>
														<!-- Icons -->
														 <a href="forms.php?uid=<?php echo $value['id'];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
														 <a href="delete.php?delid=<?php echo $value['id'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
														 
													</td>
												</tr>
											<?php endforeach; ?>
											
												
												
											</tbody>
											
										</table>
										
									 <!-- End #tab1 -->
									   
									
								</div> <!-- End .content-box-content -->
								
							</div> <!-- End .content-box -->
							
							<div class="content-box column-left">
								
								<div class="content-box-header">
									
									<h3>Content box left</h3>
									
								</div> <!-- End .content-box-header -->
								
								<div class="content-box-content">
									
									<div class="tab-content default-tab">
									
										<h4>Maecenas dignissim</h4>
										<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
										</p>
										
									</div> <!-- End #tab3 -->        
									
								</div> <!-- End .content-box-content -->
								
							</div> <!-- End .content-box -->
							
							<div class="content-box column-right closed-box">
								
								<div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->
									
									<h3>Content box right</h3>
									
								</div> <!-- End .content-box-header -->
								
								<div class="content-box-content">
									
									<div class="tab-content default-tab">
									
										<h4>This box is closed by default</h4>
										<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
										</p>
										
									</div> <!-- End #tab3 -->        
									
								</div> <!-- End .content-box-content -->
								
							</div> <!-- End .content-box -->
							<div class="clear"></div>
							
							<?php include('footer.php'); ?>
							