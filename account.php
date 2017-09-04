
  <?php include('functions.php'); ?>

  <?php
/* account module- registration and login done */
  session_start();
  $register=true;
  $login=false;
  $page=basename(__FILE__);
  $page=isset($_GET["pagename"])?$_GET["pagename"]:"";
  if(isset($_POST["register"]))
  {
     $uname=isset($_POST["username"])?$_POST["username"]:"";
     $pass=isset($_POST["password"])?$_POST["password"]:"";
     $register=register($uname,$pass);
  }

  if(isset($_POST["login"]))
  {
      $uname=isset($_POST["username"])?$_POST["username"]:"";
      $pass=isset($_POST["password"])?$_POST["password"]:"";
       $page=isset($_POST["pagename"])?$_POST["pagename"]:"";
       if($login=login($uname,$pass))
       {
        $_SESSION["usern"]=$uname;
        if($page=="checkout.php")
       {
         header("Location:checkout.php");
       }
           else
       {
          header("Location:product.php");
       }
      }  
   }
  
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
                    <li><a href="#">Kurta & Kurti</a></li>                                                                
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
                            <li><a href="#">Wallets & Belts</a></li>                        
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
          <h2>Account Page</h2>
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>                   
            <li class="active">Account</li>
          </ol>
        </div>
       </div>
     </div>
    </section>
    <!-- / catg header banner section -->

   <!-- Cart view section -->
   <section id="aa-myaccount">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
          <div class="aa-myaccount-area">         
              <div class="row">
                <div class="col-md-6">
                  <div class="aa-myaccount-login">
                  <h4>Login</h4>
                  <span><?php if($login==true) echo "Invalid user or password";?></span>
                   <form action="account.php" class="aa-login-form" method="POST">
                    <label for="" >Username<span>*</span></label>
                     <input type="text" placeholder="Username" name="username">
                     <label for="">Password<span>*</span></label>
                      <input type="password" placeholder="Password" name="password">
                      <input type="hidden" name="pagename" value="<?php echo $page; ?>">
                      <button type="submit" class="aa-browse-btn" name="login">Login</button>
                      <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                      <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="aa-myaccount-register">                 
                   <h4>Register</h4>
                  <span><?php if($register==false) echo "Successfully Registered!" ?></span>
                   <form action="account.php" class="aa-login-form" method="POST">
                      <label for="">Username<span>*</span></label>
                      <input type="text" placeholder="Username" name="username">
                      <label for="">Password<span>*</span></label>
                      <input type="password" placeholder="Password" name="password">
                      <button type="submit" class="aa-browse-btn" name="register">Register</button>                    
                    </form>
                  </div>
                </div>
              </div>          
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / Cart view section -->

    <!-- footer -->  
    <footer id="aa-footer">
      <!-- footer bottom -->
      <div class="aa-footer-top">
       <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-top-area">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <h3>Main Menu</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Our Services</a></li>
                      <li><a href="#">Our Products</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>Knowledge Base</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Special Offer</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>Useful Links</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">FAQ</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>Contact Us</h3>
                      <address>
                        <p> 25 Astor Pl, NY 10003, USA</p>
                        <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                        <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                      </address>
                      <div class="aa-footer-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-youtube"></span></a>
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
      <!-- footer-bottom -->
      <div class="aa-footer-bottom">
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-bottom-area">
              <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
              <div class="aa-footer-payment">
                <span class="fa fa-cc-mastercard"></span>
                <span class="fa fa-cc-visa"></span>
                <span class="fa fa-paypal"></span>
                <span class="fa fa-cc-discover"></span>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->
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