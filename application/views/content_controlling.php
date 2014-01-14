<?php include ("_header.php");
      include ("_navbar.php"); ?>
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
			</div>
			
			<div class="span8">
			<?php if( isset($data['info']) && isset($data['acct']) ){?>
			<form method="post">
				<table class="table">	
				<?php foreach ($data['info'] as $element):?>
					<tr>
						<td><?php echo "名稱:"?></td>
						<td><input class="form-control" type = "text" value = "<?php echo $element->Nickname?>" name = "Nickname"/></td>
					</tr>
					<tr>
						<td><?php echo "場館:"?></td>
						<td><input class="form-control" type = "text" value = "<?php echo $element->Description;?>" name = "Description"/></td>
					</tr>
					<tr>
						<td><?php echo "食性:"?></td>
						<td><textarea class="form-control" rows="6"  name = "Food"><?php echo $element->Food;?></textarea></td>
					</tr>
					<tr>
						<td><?php echo "原生地:"?></td>
						<td><textarea class="form-control" rows="5"  name = "Native_area"><?php echo $element->Native_area;?></textarea></td>
					</tr>
					<tr>
						<td><?php echo "數量:"?></td>
						<td><input class="form-control" type = "text" value = "<?php echo $element->Quantity;?>" name = "Quantity"/></td>
					</tr>
					<tr>
						<td><?php echo "學名:"?></td>
						<td><input class="form-control" type = "text" value = "<?php echo $element->Scientific_name;?>" name = "Scientific_name"/></td>
					</tr>
					<tr>
						<td><?php echo "分類:"?></td>
						<td><?php echo $element->Kingdom;?></td>
					</tr>
					<tr>
						<td></td>	
						<td><?php echo $element->Phylum;?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo $element->Class;?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo $element->Order;?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo $element->Family;?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo $element->Genius;?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php echo $element->Species;?></td>
					</tr>
				<?php endforeach; ?>
				</table>
				</form>
			<?php }?>
			</div>
			<div class="span2">
				<button type="submit" class="btn btn-primary"
						formaction="<?=site_url("search/editing_animal")?>?ID=<?php echo $element->Animal_id ?>
									&BID=<?php echo $element->Building_id?>" > 
						<i class="icon-pencil icon-white"></i>Edit</button>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
</body>