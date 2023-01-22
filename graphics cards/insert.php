<!DOCTYPE html>
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
				<h1>add graphics cards</h1>
				<h2><a href="index.php">search</a> <a href="remove.php">remove</a></h2>
				<form action="#" method="POST">
					<label> Brand: <br>
					<input type="text" name="brand"> </label><br>
					<label> Model: <br>
					<input type="text" name="model"> </label><br>
					<label> Price: <br>
					<input type="text" name="price"> </label><br>
					<input type="submit" name="insert" value="insert"> <br>
				</form>
			<?php
			if(isset($_POST['insert'])) {
				if(isset($_POST['brand']) && isset($_POST['model']) && isset($_POST['price'])) {
					if(!empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['price'])) {
						$brandAccepted = array('Nvidia', 'Intel', 'Amd', 'Qualcomm', 'Apple', 'Samsung', 'Google', 'MediaTek');
						$brand = trim($_POST['brand']);
						$model = trim($_POST['model']);
						$price = trim($_POST['price']);	
						if(!in_array($brand, $brandAccepted)){
							echo "Unknown brand! (Case sensitive!)";
						}
						else if($price < 100){
							echo "Price too low!";
						}
						else{
							require('inc/connect.php');
							$brand = mysqli_real_escape_string($conn,$brand);
							$model = mysqli_real_escape_string($conn,$model);
							$price = mysqli_real_escape_string($conn,$price);
							$query = "INSERT INTO graphics_cards(brand, model, price ) VALUES ('{$brand}','{$model}','{$price}')";
							if(mysqli_query($conn,$query) === TRUE){
								echo "New record succesfully created";
							} 
							else{
								echo "Error!";
							}
						}
					} 
					else{
						echo "All fields must be filled in.";	
					}
				}	
				else{
					echo "All parameters must be sent.";	
				}	
			}
		?>
			</div>
		</div>
	</body>
</html>