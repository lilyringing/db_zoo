<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
	<link href="<?php echo base_url('css/bootstrap-responsive.css');?>" rel="stylesheet" media="screen">
</head>

<body>
	<div class="bs-example">
    	<div class="navbar navbar-static">
        	<div class="navbar-inner">
            	<a href="<?=site_url("/")?>" class="brand">Zoo</a>
            	<div class="nav-collapse collapse navbar-responsive-collapse">
            	<ul class="nav">
                	<li><a href="<?=site_url("search/animal_info")?>">動物資訊</a></li>
                	<li class="dropdown">
        				<a href="" class="dropdown-toggle" data-toggle="dropdown" class="dropdown-toggle">
        				園區資訊 <b class="caret"></b></a>
						<ul class="dropdown-menu">
          					<li><a href="<?=site_url("display/building")?>">展館位置</a></li>
          					<li><a href="<?=site_url("display/building")?>">商店位置</a></li>
						</ul>
					</li>
            	</ul>
            	</div>
            	<ul class="nav pull-right">
                	<li><a href="<?=site_url("user/login")?>">登入</a></li>
            	</ul>
        	</div>
    	</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-dropdown.js');?>"></script>   
</body>