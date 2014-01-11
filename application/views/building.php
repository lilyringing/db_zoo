<?php include ("_header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css">
	</style>
</head>

<body>
	<form class="form-search" action="<?=site_url("display/search_result")?>" method="post">
		<input type="text" name="SearchText" />
		<select name="SearchType">
			<option value="Description">Description</option>
			<option value="Curator">Curator</option>
		</select>
		<input type="submit" value="Search" />
	</form>
		
	<table>
		<?php foreach ($data['id'] as $element):?>
		<tr>
			<td><?php echo $element->Building_id;?></td>
			<td><?php echo $element->Description;?></td>
			<td><?php echo $element->Zookeeper_name;?></td>
		</tr>
		<?php endforeach; ?>
	</table> 
</body>