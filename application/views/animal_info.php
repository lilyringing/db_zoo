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
			<div class="span2">
			動物搜尋
			</div>
			
			<div class="span10">
				<form class="form-search" action="<?=site_url("search/search_result")?>" method="post">
					<input type="text" class="form-control" placeholder="請輸入搜尋內容" name="SearchText" >
  					
					<select class="selectpicker show-tick" name="SearchType">
						<option value="Nickname">俗名</option>
						<option value="Food">食物</option>
						<option value="Native_area">分布</option>
					</select>
		
					<button type="submit" class="btn btn-primary">
  						<i class="icon-search icon-white"></i> 搜尋
					</button>
		
				</form>
			</div>
		
			<div class="row-fluid">
				<div class="span2">
				Result
				</div>
				<div class="span10">
					<table class="table">
						<tr>
							<td>動物名稱</td>
							<td>學名</td>
							<td>食物</td>
						</tr>
					</table>
					
					<?php if( isset($data) ){?>
					<table class="table table-striped">
						<?php foreach ($data['id'] as $element):?>
						<tr>
							<td><a href="<?=site_url("search/content")?>?ID=<?php echo $element->Animal_id?>">
								<?php echo $element->Nickname?></a></td>
							<td><?php echo $element->Scientific_name;?></td>
							<td><?php echo $element->Food;?></td>
						</tr>
						<?php endforeach; ?>			
					</table>
					<?php }?>		
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
    <script type="text/javascript">
          $(document).ready(function(e) {
              $('.selectpicker').selectpicker();
          });
    </script>
</body>