<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Ribbon Login Form Flat Responsive widget Design :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Ribbon Login Form Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="<?php echo base_url() ?>assets/web/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--/webfonts-->
</head>
<body>
<!--start-main-->
<h1>Welcome!<span>Please login...</span></h1>
<div class="login-box">
    <form role="form" action="" method="POST">
      <input type="text" class="text" value="Username" name="username" type="username" >
      <input type="password" name="password" type="password" value="password" >
    
    <div class="btn">
     <font color="white"> <?php echo $this->session->flashdata('gagal'); ?></font> </div>
       <div class="btn">
      <input type="submit" value="LOG IN" >
    </div>
    </div>
   
   
    <div class="clear"> </div>
    </form>
</div>
<!--//End-login-form-->
<!--start-copyright-->
<div class="copy-right">
  <p>Template by <a href="http://w3layouts.com">w3layouts</a></p> 
</div>
<!--//end-copyright-->    
</body>
</html>