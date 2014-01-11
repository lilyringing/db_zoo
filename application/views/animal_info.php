<?php include ("_header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css">
	</style>
</head>

<body>
	<form class="form-search" action="<?=site_url("search/search_result")?>" method="post">
		<input type="text" name="SearchText" />
		<select name="SearchType">
			<option value="Nickname">俗名</option>
			<option value="Food">食物</option>
			<option value="Native_area">分布</option>
		</select>
		<input type="submit" value="Search" />
	</form>
	
	<table>
		<?php foreach ($data['id'] as $element):?>
		<tr>
			<td><?php echo $element->Nickname;?></td>
			<td><?php echo $element->Scientific_name;?></td>
			<td><?php echo $element->Food;?></td>
		</tr>
		<?php endforeach; ?>
	</table> 
</body>