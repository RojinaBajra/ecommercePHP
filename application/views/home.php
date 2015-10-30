<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
 	<?php $this->load->view("include/top");?>
  
</head>

<body>

<!--============================== Header =================================-->
  <div id="wrapper">
    <div id="top_panel">
     <?php $this->load->view("include/toppanel");?>
    </div>
    
    <div id="header">
      <?php $this->load->view("include/header");?>
    </div>
    
<!--============================== Slider =================================-->
    <div id="top_slider_block">
      <div class="wrap">
        <a id="top_slider_prev">Previos</a>
        <a id="top_slider_next">Next</a>
      </div>
      
      <ul id="top_slider">
        <li class="slide1">
          <div class="wrap">
            <a href="#"><img src="<?php echo base_url();?>frontend/tmp/top_slider/slide1_img.png" alt="" /></a>
          </div>
        </li>
        <li class="slide2">
          <div class="wrap">
            <a href="#"><img src="<?php echo base_url();?>frontend/tmp/top_slider/slide2_img.png" alt="" /></a>
          </div>
        </li>
        <li class="slide3">
          <div class="wrap">
            <a href="#"><img src="<?php echo base_url();?>frontend/tmp/top_slider/slide3_img.png" alt="" /></a>
          </div>
        </li>
      </ul>
    </div>
    
<!--============================== Your Cart =================================-->
    <div id="top_menu">
      <?php $this->load->view("include/topmenu");?>
    </div>
    
<!--============================== Banners =================================-->
    <div id="top_baners">
      <div class="wrap">
         <ul class="ca-menu">
                    <li class="banner1">
                        <a href="#">
                            <span class="ca-icon"><i class="icon-gift icon-large"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Customer Loyalty</h2>
                                <h3 class="ca-sub">Programs</h3>
                            </div>
                        </a>
                    </li>
                     <li class="banner2">
                        <a href="#">
                            <span class="ca-icon"><i class="icon-plane icon-large"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Worldwide</h2>
                                <h3 class="ca-sub">Shipping</h3>
                            </div>
                        </a>
                    </li>
                    
                     <li class="last banner3">
                        <a href="#">
                            <span class="ca-icon"><i class="icon-cogs icon-large"></i></span>
                            <div class="ca-content">
                                <h2 class="ca-main">24/7 Technical</h2>
                                <h3 class="ca-sub">support</h3>
                            </div>
                        </a>
                    </li>
                    
                    </ul>
      </div>
    </div>
    
<!--============================== Content =================================-->
    <div class="mainContent">
      <div class="wrap">
        <div class="text">
          <div class="title">About Shopping</div>
          <p>
            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque 
            laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto 
            beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur 
            aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi 
            nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, 
            adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam 
            aliquam quaerat voluptatem.
            
          <p>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, 
          nisi ut aliquid ex ea commodi consequatur? </p>
        </div>
      
        <div class="list">
          <div class="title">Important Information</div>
          <ul>
            <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
            <li><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium</a></li>            
            <li><a href="#">Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse</a></li>
          </ul>
        </div>
      
      
      
        <div class="clear"></div>
        <div class="meta_info_shaddow">
            <div class="shaddow_right"></div>
            <div class="shaddow_left"></div>
            <div class="shaddow_center"></div>
          </div>
        
<!--============================== Hot Deals =================================-->
        <div class="hor_slider">
          <div class="title">
            <a id="slider2_next">Next</a>
            <a id="slider2_prev">Previos</a>
            Hot Deals
          </div>
          
          <ul class="goods_list" id="slider2">
            <li>
              <div class="goods_item">
                  <div class="foto">
                    <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                    <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto.jpg" alt="" /></a>
                  </div>
                  <div class="bot">
                    <a class="name" href="product.html">BlackBerry Curve 9320</a>
                    
                    <div class="stars"></div>
                    
                    <div class="order">
                      <a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                      <span class="price">$399.00</span>
                    </div>
                  </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto2.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Samsung Galaxy Mega</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto3.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Apple iPhone 5 32Gb</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto4.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Nokia Asha 210</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto5.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">HTC Sensation XE</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto6.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Samsung Galaxy La Fleur</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto7.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Sony Ericsson Xperia arc S</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto8.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Sony Xperia S</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
            
            <li>
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div> <p>GSM, 3G, smartphone, Android 2.3, weight 172 g, ShhVhT: 65.5x130x11.7 mm screen is 4.3 ", 540x960, FM-radio, Bluetooth, NFC, Wi-Fi, GPS, 8 megapixel camera, 16GB of memory, a slot microSD</p>
                  <a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/goods_foto9.jpg" alt="" /></a>
                </div>
                <div class="bot">
                  <a class="name" href="product.html">Nokia N9</a>
                  
                  <div class="stars"></div>
                  
                  <div class="order"><a class="but_buy"><i class="icon-shopping-cart icon-large"></i> Buy </a>
                    <span class="price">$399.00</span>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  
<!--============================== Footer =================================-->
    <div id="footer">
      <?php $this->load->view("include/footer");?>
    </div>
  </div>
</body>
</html>