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
	<table>
		<?php foreach ($data['id'] as $element):?>
		<tr>
			<td><?php echo $element->No;?></td>
			<td><?php echo $element->Category;?></td>
			<td><?php echo $element->Research_name;?></td>
		</tr>
		<?php endforeach; ?>
	</table> 
</body>