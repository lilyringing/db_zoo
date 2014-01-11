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
			<td><a href="<?=site_url("search/content")?>?ID=<?php echo $element->Animal_id?>">
			<?php echo $element->Nickname?></a></td>
			<td><?php echo $element->Scientific_name;?></td>
			<td><?php echo $element->Food;?></td>
		</tr>
		<?php endforeach; ?>
	</table> 
</body>