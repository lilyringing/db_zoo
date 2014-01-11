	<?php include ("_header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
	<form class="form-login" action="<?=site_url("user/loginging")?>" method="post">
		Account<input type="text" name="UserID"/>
		<br>
		Password<input type="text" name="password"/>
		<br>
		<input type="submit" value="Submit"/>
	</form>
</body>