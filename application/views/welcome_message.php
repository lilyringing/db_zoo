<?php include ("_header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>

<div id="container">
	<h1>Welcome to Taipei City Zoo!</h1>

	<div id="body">
		<a href="<?=site_url("user/login")?>" type=button>login</a>
		<a href="<?=site_url("search/animal_info")?>" type=button>蒐尋動物</a>
	</div>
	
</div>

</body>
</html>