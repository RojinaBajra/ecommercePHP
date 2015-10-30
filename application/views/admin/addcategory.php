
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
	


<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <!--RIGHT TEXT/CALENDAR-->
    <div class="grid_6" id="eventbox"><a href="<?php echo base_url();?>admin/category/view" class="inline_calendar">View Data</a>
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
		

		<div class="portlet-content">
		  
		  <h3>Add Category</h3>
          <?php if($this->session->flashdata("message")):?>
          <p class="info" id="info"><span class="info_inner">
          <?php echo $this->session->flashdata("message"); ?>
          </span></p>
          <?php endif;?>
          
		  <form id="form1" name="form1" method="post" action="<?php echo base_url();?>admin/category/addData" enctype="multipart/form-data">
		    <label>Name</label>
		     <input type="text" name="category_name" id="textfield" class="largeInput" />
             
            <label>Description</label>
		    <textarea name="category_description" cols="45" rows="3" class="smallInput" id="textarea"></textarea>
            <label>Image</label>
		     <input type="file" name="category_image" id="textfield" class="largeInput" /><br />
             <label>Publish</label>
		     <input type="checkbox" name="category_publish" id="textfield" class="largeInput" /><br />
            <input type="submit" name="submit" value="Submit" class="" />
		  </form>
		  <p>&nbsp;</p>
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
