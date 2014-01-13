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
			<button type="button" class="btn btn-default btn-lg" onClick="setVisibility('searching', 'inline');">
			商店搜尋</button>
			</div>
			
			<div class="span10">
				<div id="searching">
				<!-- <div class="searching" style="display:none"> -->
				<form class="form-search" action="<?=site_url("display/search_result2")?>" method="post">
					<input type="text" class="form-control" placeholder="請輸入搜尋內容" name="SearchText" />
					
					<select class="selectpicker show-tick" name="SearchType">
						<option value="Shop_name">商店名</option>
						<option value="Location">地點</option>
						<option value="Product">商品</option>
					</select>
					
					<button type="submit" class="btn btn-primary">
						<i class="icon-search icon-white"></i> 搜尋
					</button>
					
				</form>
				</div>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span2">
				<button type="button" class="btn btn-default btn-lg" onClick="search()">商店一覽表</button>
			</div>
			
			<div class="span10">
			<?php if( isset($data) ){?>
				<table class="table table-striped">
					<?php foreach ($data['id'] as $element):?>
					<tr>
						<td><?php echo $element->Shop_name;?></td>
						<td><?php echo $element->Location;?></td>
						<td><?php echo $element->Product;?></td>
					</tr>
					<?php endforeach; ?>
				</table>
			<?php }?>
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