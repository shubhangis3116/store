    <!-- seperated  header" -->
    <?php include('header.php'); ?>
    <?php include('config.php'); 
    /*product module-products aree added through database */
    $man=array();
    $cat="man";
    $stmt=$conn->prepare("SELECT name,newprice,oldprice,image FROM newproductlist WHERE category=?");
    $stmt->bind_param("s",$cat);
    $stmt->bind_result($m_name,$m_newprice,$m_oldprice,$m_image);
    $stmt->execute();
    while($stmt->fetch())
    {
      array_push($man,array("name"=>$m_name,"newprice"=>$m_newprice,"oldprice"=>$m_oldprice,"image"=>$m_image));
    }


    $woman=array();
    $cat="woman";
    $stmt=$conn->prepare("SELECT name,newprice,oldprice,image FROM newproductlist WHERE category=?");
    $stmt->bind_param("s",$cat);
    $stmt->bind_result($w_name,$w_newprice,$w_oldprice,$w_image);
    $stmt->execute();
    while($stmt->fetch())
    {
      array_push($woman,array("name"=>$w_name,"newprice"=>$w_newprice,"oldprice"=>$w_oldprice,"image"=>$w_image));
    }
      

    $sports=array();
    $cat="sports";
    $stmt=$conn->prepare("SELECT name,newprice,oldprice,image FROM newproductlist WHERE category=?");
    $stmt->bind_param("s",$cat);
    $stmt->bind_result($s_name,$s_newprice,$s_oldprice,$s_image);
    $stmt->execute();
    while($stmt->fetch())
    {
      array_push($sports,array("name"=>$s_name,"newprice"=>$s_newprice,"oldprice"=>$s_oldprice,"image"=>$s_image));
    }
      

    $electronics=array();
    $cat="electronics";
    $stmt=$conn->prepare("SELECT name,newprice,oldprice,image FROM newproductlist WHERE category=?");
    $stmt->bind_param("s",$cat);
    $stmt->bind_result($e_name,$e_newprice,$e_oldprice,$e_image);
    $stmt->execute();
    while($stmt->fetch())
    {
      array_push($electronics,array("name"=>$e_name,"newprice"=>$e_newprice,"oldprice"=>$e_oldprice,"image"=>$e_image));
    }
    $stmt->close();
    $conn->close();

    ?>
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
      </section>
      <!-- / menu -->
     <!-- Start slider -->
      <section id="aa-slider">
        <div class="aa-slider-area">
          <div id="sequence" class="seq">
            <div class="seq-screen">
              <ul class="seq-canvas">
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
                  </div>
                  <div class="seq-title">
                   <span data-seq>Save Up to 75% Off</span>                
                    <h2 data-seq>Men Collection</h2>                
                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                  </div>
                </li>
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img data-seq src="img/slider/2.jpg" alt="Wristwatch slide img" />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 40% Off</span>                
                    <h2 data-seq>Wristwatch Collection</h2>                
                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                  </div>
                </li>
                <!-- single slide item -->
                <li>
                  <div class="seq-model">
                    <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 75% Off</span>                
                    <h2 data-seq>Jeans Collection</h2>                
                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                  </div>
                </li>
                <!-- single slide item -->           
                <li>
                  <div class="seq-model">
                    <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 75% Off</span>                
                    <h2 data-seq>Exclusive Shoes</h2>                
                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                  </div>
                </li>
                <!-- single slide item -->  
                 <li>
                  <div class="seq-model">
                    <img data-seq src="img/slider/5.jpg" alt="Male Female slide img" />
                  </div>
                  <div class="seq-title">
                    <span data-seq>Save Up to 50% Off</span>                
                    <h2 data-seq>Best Collection</h2>                
                    <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                  </div>
                </li>                   
              </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
              <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
              <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
          </div>
        </div>
      </section>
      <!-- / slider -->
      <!-- Start Promo section -->
      <section id="aa-promo">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-promo-area">
                <div class="row">
                  <!-- promo left -->
                  <div class="col-md-5 no-padding">                
                    <div class="aa-promo-left">
                      <div class="aa-promo-banner">                    
                        <img src="img/promo-banner-1.jpg" alt="img">                    
                        <div class="aa-prom-content">
                          <span>75% Off</span>
                          <h4><a href="#">For Women</a></h4>                      
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- promo right -->
                  <div class="col-md-7 no-padding">
                    <div class="aa-promo-right">
                      <div class="aa-single-promo-right">
                        <div class="aa-promo-banner">                      
                          <img src="img/promo-banner-3.jpg" alt="img">                      
                          <div class="aa-prom-content">
                            <span>Exclusive Item</span>
                            <h4><a href="#">For Men</a></h4>                        
                          </div>
                        </div>
                      </div>
                      <div class="aa-single-promo-right">
                        <div class="aa-promo-banner">                      
                          <img src="img/promo-banner-2.jpg" alt="img">                      
                          <div class="aa-prom-content">
                            <span>Sale Off</span>
                            <h4><a href="#">On Shoes</a></h4>                        
                          </div>
                        </div>
                      </div>
                      <div class="aa-single-promo-right">
                        <div class="aa-promo-banner">                      
                          <img src="img/promo-banner-4.jpg" alt="img">                      
                          <div class="aa-prom-content">
                            <span>New Arrivals</span>
                            <h4><a href="#">For Kids</a></h4>                        
                          </div>
                        </div>
                      </div>
                      <div class="aa-single-promo-right">
                        <div class="aa-promo-banner">                      
                          <img src="img/promo-banner-5.jpg" alt="img">                      
                          <div class="aa-prom-content">
                            <span>25% Off</span>
                            <h4><a href="#">For Bags</a></h4>                        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Promo section -->
      <!-- Products section -->
      <section id="aa-product">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-product-area">
                  <div class="aa-product-inner">
                    <!-- start prduct navigation -->
                     <ul class="nav nav-tabs aa-products-tab">
                        <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                        <li><a href="#women" data-toggle="tab">Women</a></li>
                        <li><a href="#sports" data-toggle="tab">Sports</a></li>
                        <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                      </ul>
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <!-- Start men product category -->
                        <div class="tab-pane fade in active" id="men">
                          <ul class="aa-product-catg">
                            <!-- start single product item -->
                            <?php foreach($man as $key=> $value): ?>
                            <li>
                              <figure>
                                <a class="aa-product-img" href="#"><img src="img/man/<?php echo $value['image']; ?>" alt="polo shirt img"></a>
                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?php echo $value['name']; ?></a></h4>
                                  <span class="aa-product-price"><?php echo $value['newprice']; ?></span><span class="aa-product-price"><del><?php echo $value['oldprice']; ?></del></span>
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
                            
                          <a class="aa-browse-btn" href="product.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                        <!-- / men product category -->
                        <!-- start women product category -->
                        <div class="tab-pane fade" id="women">
                          <ul class="aa-product-catg">
                            <!-- start single product item -->
                            <?php foreach($woman as $key=> $val): ?>
                            <li>
                              <figure>
                                <a class="aa-product-img" href="#"><img src="img/women/<?php echo $val['image']; ?>" alt="polo shirt img"></a>
                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?php echo $val['name']; ?></a></h4>
                                  <span class="aa-product-price"><?php echo $val['newprice']; ?></span><span class="aa-product-price"><del><?php echo $val['oldprice']; ?></del></span>
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
                           
                          <a class="aa-browse-btn" href="product.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                        <!-- / women product category -->
                        <!-- start sports product category -->
                        <div class="tab-pane fade" id="sports">
                          <ul class="aa-product-catg">
                            <!-- start single product item -->
                            <?php foreach($sports as $key => $v): ?>
                            <li>
                              <figure>
                                <a class="aa-product-img" href="#"><img src="img/sports/<?php echo $v['image']; ?>" alt="polo shirt img"></a>
                                <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?php echo $v['name']; ?></a></h4>
                                  <span class="aa-product-price"><?php echo $v['newprice']; ?></span><span class="aa-product-price"><del><?php echo $v['oldprice']; ?></del></span>
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
                              <a class="aa-browse-btn" href="product.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                              </div>
                        <!-- / sports product category -->
                        <!-- start electronic product category -->
                        <div class="tab-pane fade" id="electronics">

                           <ul class="aa-product-catg">
                            <!-- start single product item -->
                            <?php foreach($electronics as $key => $value1): ?>

                            <li>
                              <figure>
                                <a class="aa-product-img" href="#"><img src="img/electronics/<?php echo $value1['image']; ?>" alt="polo shirt img"></a>
                                <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                <figcaption>
                                  <h4 class="aa-product-title"><a href="#"><?php echo $value1['name']; ?></a></h4>
                                  <span class="aa-product-price"><?php echo $value1['newprice']; ?></span><span class="aa-product-price"><del><?php echo $value1['oldprice']; ?></del></span>
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
                           
                          <a class="aa-browse-btn" href="product.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                        </div>
                        <!-- / electronic product category -->
                   
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
                      </div><!-- / quick view modal -->              
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Products section -->
      <!-- banner section -->
      <section id="aa-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">        
              <div class="row">
                <div class="aa-banner-area">
                <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- popular section -->
      <section id="aa-popular-category">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="aa-popular-category-area">
                  <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                    <li><a href="#featured" data-toggle="tab">Featured</a></li>
                    <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men popular category -->
                    <div class="tab-pane fade in active" id="popular">
                      <ul class="aa-product-catg aa-popular-slider">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
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
                         <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                      
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          </figure>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                      
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>    
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
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
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / popular product category -->
                    
                    <!-- start featured product category -->
                    <div class="tab-pane fade" id="featured">
                     <ul class="aa-product-catg aa-featured-slider">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
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
                         <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                      
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          </figure>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                      
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>    
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
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
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / featured product category -->

                    <!-- start latest product category -->
                    <div class="tab-pane fade" id="latest">
                      <ul class="aa-product-catg aa-latest-slider">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
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
                         <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>                      
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          </figure>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                      
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>    
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>                     
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li> 
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
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
                      </ul>
                       <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / latest product category -->              
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </section>
      <!-- / popular section -->
      <!-- Support section -->
      <section id="aa-support">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-support-area">
                <!-- single support -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="aa-support-single">
                    <span class="fa fa-truck"></span>
                    <h4>FREE SHIPPING</h4>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                  </div>
                </div>
                <!-- single support -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="aa-support-single">
                    <span class="fa fa-clock-o"></span>
                    <h4>30 DAYS MONEY BACK</h4>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                  </div>
                </div>
                <!-- single support -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="aa-support-single">
                    <span class="fa fa-phone"></span>
                    <h4>SUPPORT 24/7</h4>
                    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Support section -->
      <!-- Testimonial -->
      <section id="aa-testimonial">  
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-testimonial-area">
                <ul class="aa-testimonial-slider">
                  <!-- single slide -->
                  <li>
                    <div class="aa-testimonial-single">
                    <img class="aa-testimonial-img" src="img/testimonial-img-2.jpg" alt="testimonial img">
                      <span class="fa fa-quote-left aa-testimonial-quote"></span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                      <div class="aa-testimonial-info">
                        <p>Allison</p>
                        <span>Designer</span>
                        <a href="#">Dribble.com</a>
                      </div>
                    </div>
                  </li>
                  <!-- single slide -->
                  <li>
                    <div class="aa-testimonial-single">
                    <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                      <span class="fa fa-quote-left aa-testimonial-quote"></span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                      <div class="aa-testimonial-info">
                        <p>KEVIN MEYER</p>
                        <span>CEO</span>
                        <a href="#">Alphabet</a>
                      </div>
                    </div>
                  </li>
                   <!-- single slide -->
                  <li>
                    <div class="aa-testimonial-single">
                    <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                      <span class="fa fa-quote-left aa-testimonial-quote"></span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                      <div class="aa-testimonial-info">
                        <p>Luner</p>
                        <span>COO</span>
                        <a href="#">Kinatic Solution</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Testimonial -->

      <!-- Latest Blog -->
      <section id="aa-latest-blog">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-latest-blog-area">
                <h2>LATEST BLOG</h2>
                <div class="row">
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                      <figure class="aa-blog-img">                    
                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>  
                          <figcaption class="aa-blog-img-caption">
                          <span href="#"><i class="fa fa-eye"></i>5K</span>
                          <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                          <a href="#"><i class="fa fa-comment-o"></i>20</a>
                          <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                        </figcaption>                          
                      </figure>
                      <div class="aa-blog-info">
                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                        <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                      </div>
                    </div>
                  </div>
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                      <figure class="aa-blog-img">                    
                        <a href="#"><img src="img/promo-banner-3.jpg" alt="img"></a>  
                          <figcaption class="aa-blog-img-caption">
                          <span href="#"><i class="fa fa-eye"></i>5K</span>
                          <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                          <a href="#"><i class="fa fa-comment-o"></i>20</a>
                          <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                        </figcaption>                          
                      </figure>
                      <div class="aa-blog-info">
                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                         <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>         
                      </div>
                    </div>
                  </div>
                  <!-- single latest blog -->
                  <div class="col-md-4 col-sm-4">
                    <div class="aa-latest-blog-single">
                      <figure class="aa-blog-img">                    
                        <a href="#"><img src="img/promo-banner-1.jpg" alt="img"></a>  
                          <figcaption class="aa-blog-img-caption">
                          <span href="#"><i class="fa fa-eye"></i>5K</span>
                          <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                          <a href="#"><i class="fa fa-comment-o"></i>20</a>
                          <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                        </figcaption>                          
                      </figure>
                      <div class="aa-blog-info">
                        <h3 class="aa-blog-title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, ad? Autem quos natus nisi aperiam, beatae, fugiat odit vel impedit dicta enim repellendus animi. Expedita quas reprehenderit incidunt, voluptates corporis.</p> 
                        <a href="#" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
      </section>
      <!-- / Latest Blog -->

      <!-- Client Brand -->
      <section id="aa-client-brand">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-client-brand-area">
                <ul class="aa-client-brand-slider">
                  <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                  <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                  <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                  <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                  <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                  <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
                  <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                  <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                  <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                  <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                  <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- / Client Brand -->

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

      <!-- footer -->  
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