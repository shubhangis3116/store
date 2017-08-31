      <?php include('config.php'); ?>
      <?php include('functions.php'); ?>
    

      <?php
      /*product module-pagination complete */
                
                global $conn,$products;
                

             $total=getProductCount();
             $catarray=array();
             $pro=array();
             $limit=9;
             $offset=0;
             $all=array();
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

             $products = getProducts($offset,$limit); 
             
              if(isset($_POST['submit']))
              {
                if(isset($_POST['check']))
                {
                  $all=$_POST['check'];
                  $catarray=allcategory($_POST['check']);
                  
                }
              }

 
                
              getCategory();

             
            $products=getProducts($offset,$limit);
         
      ?>
      <?php include('header.php'); ?>
      <!-- menu -->
      <section id="menu">
        <div class="container">
          <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>          
              </div>
              <div class="navbar-collapse collapse">
                <!-- Left nav -->
                <ul class="nav navbar-nav">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#">Men <span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                      <li><a href="#">Casual</a></li>
                      <li><a href="#">Sports</a></li>
                      <li><a href="#">Formal</a></li>
                      <li><a href="#">Standard</a></li>                                                
                      <li><a href="#">T-Shirts</a></li>
                      <li><a href="#">Shirts</a></li>
                      <li><a href="#">Jeans</a></li>
                      <li><a href="#">Trousers</a></li>
                      <li><a href="#">And more.. <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Sleep Wear</a></li>
                          <li><a href="#">Sandals</a></li>
                          <li><a href="#">Loafers</a></li>                                      
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Women <span class="caret"></span></a>
                    <ul class="dropdown-menu">  
                      <li><a href="#">Kurta and Kurti</a></li>                                                                
                      <li><a href="#">Trousers</a></li>              
                      <li><a href="#">Casual</a></li>
                      <li><a href="#">Sports</a></li>
                      <li><a href="#">Formal</a></li>                
                      <li><a href="#">Sarees</a></li>
                      <li><a href="#">Shoes</a></li>
                      <li><a href="#">And more.. <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Sleep Wear</a></li>
                          <li><a href="#">Sandals</a></li>
                          <li><a href="#">Loafers</a></li>
                          <li><a href="#">And more.. <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Rings</a></li>
                              <li><a href="#">Earrings</a></li>
                              <li><a href="#">Jewellery Sets</a></li>
                              <li><a href="#">Lockets</a></li>
                              <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>                       
                              <li><a href="#">Jeans</a></li>
                              <li><a href="#">Polo T-Shirts</a></li>
                              <li><a href="#">SKirts</a></li>
                              <li><a href="#">Jackets</a></li>
                              <li><a href="#">Tops</a></li>
                              <li><a href="#">Make Up</a></li>
                              <li><a href="#">Hair Care</a></li>
                              <li><a href="#">Perfumes</a></li>
                              <li><a href="#">Skin Care</a></li>
                              <li><a href="#">Hand Bags</a></li>
                              <li><a href="#">Single Bags</a></li>
                              <li><a href="#">Travel Bags</a></li>
                              <li><a href="#">Wallets and Belts</a></li>                        
                              <li><a href="#">Sunglases</a></li>
                              <li><a href="#">Nail</a></li>                       
                            </ul>
                          </li>                   
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Kids <span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                      <li><a href="#">Casual</a></li>
                      <li><a href="#">Sports</a></li>
                      <li><a href="#">Formal</a></li>
                      <li><a href="#">Standard</a></li>                                                
                      <li><a href="#">T-Shirts</a></li>
                      <li><a href="#">Shirts</a></li>
                      <li><a href="#">Jeans</a></li>
                      <li><a href="#">Trousers</a></li>
                      <li><a href="#">And more.. <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Sleep Wear</a></li>
                          <li><a href="#">Sandals</a></li>
                          <li><a href="#">Loafers</a></li>                                      
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">Sports</a></li>
                 <li><a href="#">Digital <span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                      <li><a href="#">Camera</a></li>
                      <li><a href="#">Mobile</a></li>
                      <li><a href="#">Tablet</a></li>
                      <li><a href="#">Laptop</a></li>                                                
                      <li><a href="#">Accesories</a></li>                
                    </ul>
                  </li>
                  <li><a href="#">Furniture</a></li>            
                 <li><a href="blog-archive.html">Blog <span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                      <li><a href="blog-archive.html">Blog Style 1</a></li>
                      <li><a href="blog-archive-2.html">Blog Style 2</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>                
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">                
                      <li><a href="product.html">Shop Page</a></li>
                      <li><a href="product-detail.html">Shop Single</a></li>                
                      <li><a href="404.html">404 Page</a></li>                
                    </ul>
                  </li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div> 
          </div>
        </div>
      </section>
      <!-- / menu -->  
     
      <!-- catg header banner section -->
      <section id="aa-catg-head-banner">
       <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
       <div class="aa-catg-head-banner-area">
         <div class="container">
          <div class="aa-catg-head-banner-content">
            <h2>Fashion</h2>
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>         
              <li class="active">Women</li>
            </ol>
          </div>
         </div>
       </div>
      </section>
      <!-- / catg header banner section -->

      <!-- product category -->
      <section id="aa-product-category">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
              <div class="aa-product-catg-content">
                <div class="aa-product-catg-head">
                  <div class="aa-product-catg-head-left">
                    <form action="" class="aa-sort-form">
                      <label for="">Sort by</label>
                      <select name="">
                        <option value="1" selected="Default">Default</option>
                        <option value="2">Name</option>
                        <option value="3">Price</option>
                        <option value="4">Date</option>
                      </select>
                    </form>
                    <form action="" class="aa-show-form">
                      <label for="">Show</label>
                      <select name="">
                        <option value="1" selected="12">12</option>
                        <option value="2">24</option>
                        <option value="3">36</option>
                      </select>
                    </form>
                  </div>
                  <div class="aa-product-catg-head-right">
                    <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                    <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                  </div>
                </div>
                <div class="aa-product-catg-body">
                  <ul class="aa-product-catg">
                    <!-- start single product item -->
                    <?php foreach($products as $key => $value): 

                    ?>
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/images/<?php echo $value['image']; ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#"><?php echo $value['name']; ?></a></h4>
                          <span class="aa-product-price"><?php echo $value['price']; ?></span>
                          <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                        </figcaption>
                      </figure>                         
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                  <?php endforeach; ?>
                    <!-- start single product item -->
                    
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div>
                  <!-- / quick view modal -->   
                </div>
                <div class="aa-product-catg-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                    <?php for($i=1;$i<=$totalpages;$i++): ?>
                       <a href="product.php?pageid=<?php echo $i; ?>"
                     <?php if(isset($pageid) && $pageid==$i) : ?>
                      class='number current' title='1'<?php endif ; ?>><?php echo $i; ?></a>
                     <?php endfor ; ?>
                                      
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
            <aside class="aa-sidebar">
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Category</h3>
                <ul class="aa-catg-nav">
                <form action="filterbycategory.php" method="POST">
                <?php 
                $cat=getCategory();
              
                foreach($cat as $key => $value): ?>

                 
                  <input type="checkbox" name="check[]" value="<?php echo $value['name']?>"><?php echo $value['name'] ?>
                  </li>

                  <?php endforeach; ?>
                   <button class="aa-filter-btn" type="submit" name="submit">Filter</button>
                   </form>
                </ul>
              </div>
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Tags</h3>
                <div class="tag-cloud">
                  <a href="#">Fashion</a>
                  <a href="#">Ecommerce</a>
                  <a href="#">Shop</a>
                  <a href="#">Hand Bag</a>
                  <a href="#">Laptop</a>
                  <a href="#">Head Phone</a>
                  <a href="#">Pen Drive</a>
                </div>
              </div>
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Shop By Price</h3>              
                <!-- price range -->
                <div class="aa-sidebar-price-range">
                 <form action="">
                    <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                    </div>
                    <span id="skip-value-lower" class="example-val">30.00</span>
                   <span id="skip-value-upper" class="example-val">100.00</span>
                   <button class="aa-filter-btn" type="submit">Filter</button>
                 </form>
                </div>              

              </div>
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Shop By Color</h3>
                <div class="aa-color-tag">
                  <a class="aa-color-green" href="#"></a>
                  <a class="aa-color-yellow" href="#"></a>
                  <a class="aa-color-pink" href="#"></a>
                  <a class="aa-color-purple" href="#"></a>
                  <a class="aa-color-blue" href="#"></a>
                  <a class="aa-color-orange" href="#"></a>
                  <a class="aa-color-gray" href="#"></a>
                  <a class="aa-color-black" href="#"></a>
                  <a class="aa-color-white" href="#"></a>
                  <a class="aa-color-cyan" href="#"></a>
                  <a class="aa-color-olive" href="#"></a>
                  <a class="aa-color-orchid" href="#"></a>
                </div>                            
              </div>
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Recently Views</h3>
                <div class="aa-recently-views">
                  <ul>
                    <li>
                      <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>                    
                    </li>
                    <li>
                      <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>                    
                    </li>
                     <li>
                      <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>                    
                    </li>                                      
                  </ul>
                </div>                            
              </div>
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Top Rated Products</h3>
                <div class="aa-recently-views">
                  <ul>
                    <li>
                      <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>                    
                    </li>
                    <li>
                      <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-1.jpg"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>                    
                    </li>
                     <li>
                      <a href="#" class="aa-cartbox-img"><img alt="img" src="img/woman-small-2.jpg"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>                    
                    </li>                                      
                  </ul>
                </div>                            
              </div>
            </aside>
          </div>
         
           
          </div>
        </div>
      </section>
      <!-- / product category -->


      <!-- Subscribe section -->
      <section id="aa-subscribe">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-subscribe-area">
                <h3>Subscribe our newsletter </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                <form action="" class="aa-subscribe-form">
                  <input type="email" name="" id="" placeholder="Enter your Email">
                  <input type="submit" value="Subscribe">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Subscribe section -->

     <?php include('footer.php'); ?>
      <!-- Login Modal -->  
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">                      
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4>Login or Register</h4>
              <form class="aa-login-form" action="">
                <label for="">Username or Email address<span>*</span></label>
                <input type="text" placeholder="Username or email">
                <label for="">Password<span>*</span></label>
                <input type="password" placeholder="Password">
                <button class="aa-browse-btn" type="submit">Login</button>
                <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                <div class="aa-register-now">
                  Don't have an account?<a href="account.html">Register now!</a>
                </div>
              </form>
            </div>                        
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>


        

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>  
      <!-- SmartMenus jQuery plugin -->
      <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
      <!-- SmartMenus jQuery Bootstrap Addon -->
      <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
      <!-- To Slider JS -->
      <script src="js/sequence.js"></script>
      <script src="js/sequence-theme.modern-slide-in.js"></script>  
      <!-- Product view slider -->
      <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
      <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
      <!-- slick slider -->
      <script type="text/javascript" src="js/slick.js"></script>
      <!-- Price picker slider -->
      <script type="text/javascript" src="js/nouislider.js"></script>
      <!-- Custom js -->
      <script src="js/custom.js"></script> 
      

      </body>
    </html>