<?php include('config.php'); 
$catarray=array();
$stmt=$conn->prepare("SELECT name FROM newcategory WHERE parentid=?");
$select=0;
$stmt->bind_param("i",$select);
$stmt->bind_result($new);
        $stmt->execute();
        while($stmt->fetch())
        {
          array_push($catarray,array("name"=>$new));
        }

        ?>
<div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
            <aside class="aa-sidebar">
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Category</h3>
                <ul class="aa-catg-nav">
                <?php foreach($catarray as $key => $value): ?>

                  <li><a href="filterbycategory.php?cat=<?php echo $value['name']; ?>&pageid=1"><?php echo $value['name']; ?></a></li>
                  <?php endforeach; ?>
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
         