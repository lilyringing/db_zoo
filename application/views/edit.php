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
		<button type="submit">�ǰe</button>
	</form>
	</div>
	<?php if( isset($id) ){?>
	<table>
		<tr>
			<td>id</td>
			<td>�ǦW</td>
			<td>�ƶq</td>
			<td>����</td>
			<td>���G</td>
			<td>���]</td>
			<td>��</td>
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
