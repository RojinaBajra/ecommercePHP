
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
        	<a href="dashboard_red.html"><span class="redtheme">Red Theme</span></a>
            <a href="dashboard.html"><span class="bluetheme">Blue Theme</span></a>
            <a href="dashboard_green.html"><span class="greentheme">Green Theme</span></a>
        </div>
      </div>
  	<?php $this->load->view("admin/include/header");?>   
<div class="grid_16" id="header">
<!-- MENU START -->
	<?php $this->load->view("admin/include/menu");?>  
<!-- MENU END -->
</div>
	<?php $this->load->view("admin/include/submenu");?>  
<!-- HIDDEN SUBMENU START -->
<div class="grid_16" id="hidden_submenu">
	  <ul class="more_menu">
		<li><a href="#">More link 1</a></li>
		<li><a href="#">More link 2</a></li>  
	    <li><a href="#">More link 3</a></li>    
        <li><a href="#">More link 4</a></li>                               
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 5</a></li>
		<li><a href="#">More link 6</a></li>  
	    <li><a href="#">More link 7</a></li> 
        <li><a href="#">More link 8</a></li>                                  
      </ul>
	  <ul class="more_menu">
		<li><a href="#">More link 9</a></li>
		<li><a href="#">More link 10</a></li>  
	    <li><a href="#">More link 11</a></li>  
        <li><a href="#">More link 12</a></li>                                 
      </ul>            
  </div>
<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="<?php echo base_url();?>admin/category" class="inline_calendar">Add Data</a>
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
        <div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" />View All Category</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()" /></th>
                <th width="136" scope="col">SN</th>
                <th width="136" scope="col">Category Name</th>
                <th width="102" scope="col">Description</th>
                <th width="109" scope="col">Image</th>
                <th width="129" scope="col">Publish</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            
            <?php 
			$sn=1;
			foreach($categories as $row):?>
            
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox" id="checkbox" />
                </label></td>
                <td><?php echo $sn++;?></td>
                <td><?php echo $row->category_name;?></td>
                <td><?php echo $row->category_description;?></td>
                <td><img src="<?php echo base_url();?>upload/<?php echo $row->category_image;?>"  width="100"/></td>
                <td><?php echo $row->category_publish;?></td>
                <td width="90"> <a href="#" class="edit_icon" title="Edit"></a> <a href="#" class="delete_icon" title="Delete"></a></td>
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
