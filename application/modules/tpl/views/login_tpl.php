<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=asset_url();?>img/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=asset_url();?>css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=asset_url();?>plugins/fontawesome-free/css/all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=asset_url();?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=asset_url();?>css/login.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">

      <?=$this->load->view($page); ?>
      
      <div class="login100-more" style="background-image: url('<?=asset_url();?>img/bg-01.jpg');">
      </div>
    </div>
  </div>
</div>
	
<!--===============================================================================================-->
	<script src="<?=asset_url();?>plugins/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=asset_url();?>plugins/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=asset_url();?>js/main.js"></script>

</body>
</html>