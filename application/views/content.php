<?php include ("_header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css">
	</style>
</head>



<body>	
		<?php foreach ($data['id'] as $element):?>
			<td><?php echo "名稱:". $element->Nickname;?></td><br />
			<td><?php echo "場館:". $element->Description;?></td><br />
			<td><?php echo "食性:". $element->Food;?></td><br />
			<td><?php echo "原生地:". $element->Native_area;?></td><br />
			<td><?php echo "數量:". $element->Quantity;?></td><br />
			<td><?php echo "學名:". $element->Scientific_name;?></td><br />
			<td><?php echo "種名:". $element->Species;?></td><br />
			<td><?php echo "屬名:". $element->Genius;?></td><br />
			<td><?php echo "科:". $element->Family;?></td><br />
			<td><?php echo "目:". $element->Order;?></td><br />
			<td><?php echo "綱:". $element->Class;?></td><br />
			<td><?php echo "門:". $element->Phylum;?></td><br />
			<td><?php echo "界:". $element->Kingdom;?></td><br />
			
		
		<?php endforeach; ?>
</body>