<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
	
</head>

<body>
<!-- Collect the nav links, forms, and other content for toggling -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="nav-header">
  <a class="navbar-brand" href="<?=site_url("/")?>">Zoo</a>
  </div>
  
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?=site_url("search/animal_info")?>">動物資訊</a></li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">園區資訊 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?=site_url("display/building")?>">展館位置</a></li>
          <li><a href="<?=site_url("display/building")?>">商店位置</a></li>
          <!-- <li class="divider"></li>
          	   <li><a href="#">Separated link</a></li>   -->
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=site_url("user/login")?>">登入</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</body>