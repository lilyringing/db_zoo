<?php include ("_header.php");
	  include ("_navbar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
	<link href="<?php echo base_url('css/bootstrap-responsive.css');?>" rel="stylesheet" media="screen">
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://silviomoreto.github.io/bootstrap-select/stylesheets/bootstrap-select.css">
</head>

<body>
	<div>
	<form action = "<?=site_url("search/edit_animal")?>" method = "post" >
		<input type="text" name = "id"/>
		<button type="submit">Submit</button>
	</form>
	</div>
	
	<form method = "post">
	<table border="1">
		<tr>
			<td>id</td>
			<td>Scientific_name</td>
			<td>Quantity</td>
			<td>Food</td>
			<td>Native_area</td>
			<td>Building_id</td>
			<td>Species</td>
			<td>Nickname</td>
			<td colspan="2">Control</td>
		</tr>
		<?php if( isset($id) && $id>0 ){?>
		<?php foreach ($id as $element):?>
		<tr>
			<td><?php echo $element->Animal_id?></td>
			<td><input type = "text" value = "<?php echo $element->Scientific_name?>" name="scientific_name"/></td>
			<td><input type = "text" value = "<?php echo $element->Quantity?>" name="quantity"/></td>
			<td><input type = "text" value = "<?php echo $element->Food?>" name = "food"/></td>
			<td><input type = "text" value = "<?php echo $element->Native_area?>" name = "native_area"/></td>
			<td><input type = "text" value = "<?php echo $element->Building_id?>" name = "building_id"/></td>
			<td><input type = "text" value = "<?php echo $element->Species?>" name = "species"/></td>
			<td><input type = "text" value = "<?php echo $element->Nickname?>" name = "nickname"/></td>
			<td><button type="submit" formaction="<?=site_url("search/editing_animal")?>?ID=<?php echo $element->Animal_id ?>" >Edit</button></td>
			<td><button type="submit" formaction="<?=site_url("search/deleting_animal")?>?ID=<?php echo $element->Animal_id ?>" >Delete</button></td>
		</tr>
		<?php endforeach; ?>
		<?php }?>	
		<tr>
			<td>Insert new animal</td>
			<td><input type = "text" name="insert_scientific_name"/></td>
			<td><input type = "text" name="insert_quantity"/></td>
			<td><input type = "text" name="insert_food"/></td>
			<td><input type = "text" name="insert_native_area"/></td>
			<td><input type = "text" name="insert_building_id"/></td>
			<td><input type = "text" name="insert_species"/></td>
			<td><input type = "text" name="insert_nickname"/></td>
			<td colspan="2"><button type="submit" formaction="<?=site_url("search/inserting_animal")?>">Insert</button></td>
		</tr>
	</table>
	</form>
	
	

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>

</body>
