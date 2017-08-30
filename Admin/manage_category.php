<?php include('config.php'); ?>
							<?php include('functions.php'); ?>
							<?php include('header.php'); ?>
						<?php $page=basename($_SERVER['PHP_SELF']); ?>
						<?php include('sidebar.php'); ?>
						
						<?php
						
						getCategory();
						
			
			
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
														  
														   <th>Category ID</th>
														   <th>Category Name</th>
														   <th>Parent ID</th>
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
																<a href="" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
																<?php 
																/*for($i=1;$i<=$totalpage;$i++)
																	{
																		echo '<a href="manage_category.php?pageid='.$i.'" class="number" title="1"> '.$i.' </a>';
																	}*/ ?>

																	
																</div> <!-- End .pagination -->
																<div class="clear"></div>
															</td>
														</tr>
													</tfoot>
												 
													<tbody>
													<?php global $catarray; ?>
													<?php foreach($catarray as $key => $value):?>
												
													
														<tr>
															<td><input type="checkbox"></td>
															<td><?php echo $catarray[$key]['id']; ?> </td>
															<td><?php echo $catarray[$key]['name']; ?></td>
															<td><?php echo $catarray[$key]['parentid']; ?></td>
															
															

															<td>
																<!-- Icons -->
																
																 <a href="del_category.php?deid=<?php echo $catarray[$key]['id'];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
																 
															</td>
														</tr>
													<?php endforeach; ?>
													
													
														
														
													</tbody>
													
												</table>
												
											</div> <!-- End #tab1 -->
											   
											
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
									