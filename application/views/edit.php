<?php include ("_header.php");
	  include ("_navbar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css">
	</style>
</head>

<body>
	<div>
	<form action = "<?=site_url("search/edit_animal")?>" method = "post" >
		<input type="text" name = "id"/>
		<button type="submit">傳送</button>
	</form>
	</div>
	<?php if( isset($id) ){?>
	<table>
		<tr>
			<td>id</td>
			<td>學名</td>
			<td>數量</td>
			<td>食物</td>
			<td>分佈</td>
			<td>場館</td>
			<td>種</td>
		</tr>
		<?php foreach ($id as $element):?>
		<tr>
			<td><?php echo $element->Animal_id?></td>
			<td><?php echo $element->Scientific_name?></td>
			<td><?php echo $element->Quantity?></td>
		</tr>
		<?php endforeach; ?>	
	
	</table>
	
	<?php }?>	



</body>
