<div class="wrap">
        <ul class="right_menu">
          <li class="menu_item col1">
            <span>Items</span>
            <strong>2</strong>
          </li>
          <li class="menu_item col2">
            <div class="droped">
             <a class="your_cart"><i class="icon-shopping-cart icon-large"></i> Your Cart </a> 
              
              <div class="dropdown">
                <div class="item">
                  <div class="foto"><a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/small_bask-foto.jpg" alt="" /></a></div>
                  <a class="del" href="#">Delete</a>
                  <div class="info">
                    <a href="product.html">Samsung Galaxy S II I9100</a>
                    Smartphone
                    <span>$750.00</span>
                  </div>
                </div>
                <div class="item">
                  <div class="foto"><a href="product.html"><img src="<?php echo base_url();?>frontend/tmp/small_bask-foto.jpg" alt="" /></a></div>
                  <a class="del" href="#">Delete</a>
                  <div class="info">
                    <a href="product.html">Samsung Galaxy S II I9100</a>
                    Smartphone
                    <span>$750.00</span>
                  </div>
                </div>
                
                <div class="bot_row">
                  <div class="total">
                    total:
                    <strong>$1650.00</strong>
                  </div>
                  <input class="but but_orange" type="button" value="Purchase" />
                </div>
              </div>
            </div>
            
            <span class="price">$ 1650.00</span>
          </li>
        </ul>
        
<!--============================== Menu =================================-->
        <ul class="left_menu">
          <li class="menu_item droped">
            <a class="top_link" href="catalog.html">Shop</a>
            
            <div class="dropdown">
              <ul>
              <?php foreach($categories as $c):?>
                <li><a href="#"><?php echo $c->category_name;?></a></li>
                
               <?php endforeach;?>

              </ul>
            </div>
          </li>
          
          <li class="menu_item droped">
            <a class="top_link" href="#">Pages</a>
            
            <div class="dropdown">
              <ul>
                <li><a href="catalog.html">Catalog</a></li>
                <li><a href="product.html">Pruduct</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="blog2.html">Blog Detail</a></li>
                <li class="last"><a href="layout.html">Layout</a></li>
              </ul>
            </div>
          </li>
          <li class="menu_item last"><a class="top_link" href="contact_us.html">Contact Us</a></li>
        </ul>
      </div>