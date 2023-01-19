<html>
	<head>
		<meta charset="UTF-8">
		<title> Graphics Cards </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> 
	</head>
	<body>
		<div class="container">
			<div class="div">
				<h1>search graphics cards</h1>
				<h2><a href="insert.php">add</a> <a href="remove.php">remove</a></h2>
				<form action="#" method="GET">
					<input type="text" placeholder="Search graphics cards" name="criteria">
					<input type="submit" value="Search"> <br>
				</form>
				<?php include("inc/getResults.php"); ?>
			</div>
		</div>	
	</body>
</html>