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
			活動
			</div>
			
			<div class="span10">
			<?php if( isset($data) ){?>
				<table class="table table-striped">
					<tr>
						<td><strong>名稱</strong></td>
						<td><strong>展館</strong></td>
						<td><strong>地點</strong></td>
						<td><strong>時間</strong></td>
					</tr>
					<?php foreach ($data['act'] as $element):?>
					<tr>
						<td><?php echo $element->Activity_name;?></td>
						<td><?php echo $element->Description;?></td>
						<td><?php echo $element->Spot;?></td>
						<td><?php echo $element->Time;?></td>
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
</body>