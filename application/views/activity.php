<?php include ("_header.php"); ?>
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
			<td><?php echo $element->Activity_name;?></td>
			<td><?php echo $element->Description;?></td>
			<td><?php echo $element->Spot;?></td>
			<td><?php echo $element->Time;?></td>
		</tr>
		<?php endforeach; ?>
	</table> 
</body>