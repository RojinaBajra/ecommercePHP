
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php $this->load->view("admin/include/top");?> 
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
      	<div id="colorchanger">
        	<a href="../dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="../dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="../dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<?php $this->load->view("admin/include/header");?>   
<div class="grid_16" id="header">
<!-- MENU START -->
	<?php $this->load->view("admin/include/menu");?>  
<!-- MENU END -->
</div>
	<?php $this->load->view("admin/include/submenu");?>  


<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="<?php echo base_url();?>admin/product" class="inline_calendar">Add Data</a>
    	<div class="hidden_calendar"></div>
    </div>
    <!--RIGHT TEXT/CALENDAR END-->
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
		      
      <!--THIS IS A PORTLET-->
        <div class="portlet">
        <div class="portlet-header fixed"><img src="../images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" />View All Category</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="136" scope="col">SN</th>
                <th width="136" scope="col">Category</th>
                <th width="136" scope="col">Product Name</th>
                <th width="102" scope="col">Description</th>
                <th width="109" scope="col">Image</th>
                 <th width="109" scope="col">Brand</th>
                  <th width="109" scope="col">Price</th>
                   <th width="109" scope="col">Quantity</th>
                    <th width="109" scope="col">Feature</th>
                <th width="129" scope="col">Publish</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            
            <?php 
			$sn=1;
			foreach($products as $p):?>
            
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox" id="checkbox" />
                </label></td>
                <td><?php echo $sn++;?></td>
                <td><?php echo $p->category_name;?></td>
                <td><?php echo $p->product_name;?></td>
                <td><?php echo $p->product_description;?></td>
                <td><img src="<?php echo base_url();?>upload/product/<?php echo $p->product_image;?>"  width="100"/></td>
                <td><?php echo $p->product_brand;?></td>
                <td><?php echo $p->product_price;?></td>
                <td><?php echo $p->product_quantity;?></td>
                <td><?php echo $p->product_feature;?></td>
                <td><?php echo $p->product_publish;?></td>
                <td width="90"> 
                <a href="<?php echo base_url();?>admin/product/edit/<?php echo $p->product_id;?>" class="edit_icon" title="Edit"></a> 
                <a href="#" class="delete_icon" title="Delete"></a></td>
              </tr>
              
             <?php endforeach; ?>

            </tbody>
          </table>
        </form>
		</div>
      </div>
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">
      <!--THIS IS A PORTLET-->        
          
      <!--THIS IS A PORTLET--> 
                               
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<?php $this->load->view("admin/include/footer");?>
<!-- FOOTER END -->
</body>
</html>
