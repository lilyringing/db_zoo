<?php

include ("_header.php");
include ("_navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link href="<?php echo base_url('css/bootstrap.min.css');?>"
	rel="stylesheet" media="screen">
<link
	href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css"
	rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen"
	href="http://silviomoreto.github.io/bootstrap-select/stylesheets/bootstrap-select.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2"></div>

			<div class="span10">
				<form method="post">
					<table class="table">
						<tr>
							<td><?php echo "名稱:"?></td>
							<td>	
								<input class="form-control" type="text" name="insert_nickname" />
							</td>
						</tr>
						<tr>
							<td><?php echo "場館:"?></td>
							<td>
								<select class="selectpicker show-tick" name="insert_building_id">
								<?php foreach( $data["Building"] as $element ):?>
									<option value="<?php echo $element->Building_id;?>"><?php echo $element->Description;?></option>
								<?php endforeach; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><?php echo "食性:"?></td>
							<td>
								<textarea class="form-control" rows="3" name="insert_food"></textarea>
							</td>
						</tr>
						<tr>
							<td><?php echo "原生地:"?></td>
							<td>
								<textarea class="form-control" rows="2" name="insert_native_area"></textarea>
							</td>
						</tr>
						<tr>
							<td><?php echo "數量:"?></td>
							<td>
								<input class="form-control" type="text" name="insert_quantity" />
							</td>
						</tr>
						<tr>
							<td><?php echo "學名:"?></td>
							<td>
								<input class="form-control" type="text" name="insert_scientific_name" />
							</td>
						</tr>
						<tr>
							<td><?php echo "種:"?></td>
							<td>
								<select class="selectpicker show-tick" name="insert_species">
								<?php foreach( $data["Species"] as $element ):?>
									<option value="<?php echo $element->Species;?>"><?php echo $element->Species;?></option>
								<?php endforeach; ?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<button type="submit" class="btn btn-primary"
									formaction="<?=site_url("search/inserting_animal")?>">
									Insert</button>
							</td>
						</tr>
				
					</table>
				</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<script	src="http://silviomoreto.github.io/bootstrap-select/javascripts/bootstrap-select.js"></script>
	 <script type="text/javascript">
          $(document).ready(function(e) {
              $('.selectpicker').selectpicker();
          });
    </script>
</body>