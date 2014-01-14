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
				<div class="text-center">商店搜尋</div>
			</div>
			
			<div class="span10">
				<div id="searching">
				<!-- <div class="searching" style="display:none"> -->
				<form class="form-search" action="<?=site_url("display/store_search_result")?>" method="post">
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
			</div>
			
			<div class="span10">
			<?php if( isset($data['id']) ){?>
				<table class="table table-striped">
					<tr>
						<td><strong>名稱</strong></td>
						<td><strong>臨近展館</strong></td>
						<td><strong>地點</strong></td>
						<td><strong>販售商品</strong></td>
					</tr>
					<?php foreach ($data['id'] as $element):?>
					<tr>
						<td><?php echo $element->Shop_name;?></td>
						<td><?php echo $element->Description;?></td>
						<td><?php echo $element->Location;?></td>
						<td><?php echo $element->Product;?></td>
					</tr>
					<?php endforeach; ?>
				</table>
			<?php }?>
			</div>
		</div>
		
		<div class="row-fluid">
			<div class="span2">
				<div class="text-center">
					<div class="panel-group" id="accordion">
  						<div class="panel panel-default">
    						<div class="panel-heading">
      							<h4 class="panel-title">
        						<button type="button" class="btn btn-default btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        						商店一覽表</button>
      							</h4>
    						</div>
    						
    						<div id="collapseOne" class="panel-collapse collapse">
      						<div class="panel-body">
      							<?php if( isset($data['store']) ){?>
								<table class="table table-striped">
									<?php foreach ($data['store'] as $element):?>
									<tr>
										<td><?php echo $element->Shop_name;?></td>
									</tr>
									<?php endforeach; ?>
								</table>
								<?php }?>
      						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
    <script src="<?php echo base_url('js/bootstrap-collapse.js');?>"></script>
    <script type="text/javascript">
    	$(document).ready(function(e) {
              $('.selectpicker').selectpicker();
        });
    </script>
</body>