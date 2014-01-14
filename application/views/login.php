<?php include ("_header.php"); 
      include ("_navbar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://silviomoreto.github.io/bootstrap-select/stylesheets/bootstrap-select.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3">
			</div>
			
			<div class="span5">
			<div class="hero-unit">	
				<form class="text-center" action="<?=site_url("user/logining")?>" method="post">
					<div class="form-group">
    					<label>帳號</label>
    					<input type="text" class="form-control input-lg" placeholder="請輸入帳號" name="UserID">
  					</div>
  		
  					<div class="form-group">
    					<label>密碼</label>
    					<input type="password" class="form-control input-lg" placeholder="請輸入密碼" name="password">
  					</div>
  		
  					<button type="submit" class="btn btn-primary">
  						<i class="icon-user icon-white"></i>登入
					</button>
				</form>
			</div>
			</div>
			
			<div class="span3">
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
</body>