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
	<form action = "<?=site_url("search/editing_animal")?>?ID=<?php echo $id[0]->Animal_id ?> " method = "post">
	<table border="1">
		<tr>
			<td>id</td>
			<td>�ǦW</td>
			<td>�ƶq</td>
			<td>����</td>
			<td>���G</td>
			<td>���]</td>
			<td>��</td>
			<td>�ʺ�</td>
			<td>�s��</td>
		</tr>
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
			<td><button type="submit">Edit</button></td>
		</tr>
		<?php endforeach; ?>	
	</table>
	</form>
	
	<?php }?>	



</body>
