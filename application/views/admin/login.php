<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login Panel</title>
<link href="<?php echo base_url();?>css/960.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/text.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/login.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
   	  <h1>Admin Login Panel</h1>
    	<div id="login">
          <p class="error"><?php echo $this->session->flashdata("login_message"); ?></p>        
    	  <form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/admin/login/check_user">
    	    <p>
    	      <label><strong>Username</strong>
<input type="text" name="username" class="inputText" id="textfield" />
    	      </label>
  	      </p>
    	    <p>
    	      <label><strong>Password</strong>
  <input type="password" name="password" class="inputText" id="textfield2" />
  	        </label>
    	    </p>
    		<!--<a class="black_button" href="dashboard.html"><span>Login</span></a>-->
            <input type="submit" name="submit" value="Login" class="black_button"/>
             <label>
             <input type="checkbox" name="checkbox" id="checkbox" />
              Remember me</label>            
    	  </form>
		  <br clear="all" />
    	</div>
        <div id="forgot">
        <a href="#" class="forgotlink"><span>Forgot your username or password?</span></a></div>
  </div>
</div>
<br clear="all" />
</body>
</html>
