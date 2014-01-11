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
	<form class="form-search" action="<?=site_url("display/search_result2")?>" method="post">
		<input type="text" name="SearchText" />
		<select name="SearchType">
			<option value="Shop_name">Shop_name</option>
			<option value="Location">Location</option>
			<option value="Product">Product</option>
		</select>
		<input type="submit" value="Search" />
	</form>
		
	<table>
		<?php foreach ($data['id'] as $element):?>
		<tr>
			<td><?php echo $element->Shop_name;?></td>
			<td><?php echo $element->Location;?></td>
			<td><?php echo $element->Product;?></td>
		</tr>
		<?php endforeach; ?>
	</table> 
</body>