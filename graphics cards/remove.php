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
				<h1>remove graphics cards</h1>
				<h2><a href="index.php">search</a> <a href="insert.php">add</a></h2>
				<?php
				require('inc/connect.php');
				$query = "SELECT * FROM graphics_cards";
				$result = mysqli_query($conn,$query);
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
				?>
			<div class="divThing">
				<a href="inc/removeGPU.php?id=<?php echo $row['id'] ?>"> <h2>remove</h2> </a>
				<p><b>Brand: </b> <?php echo $row['brand']; ?> </p>
				<p><b>Model: </b> <?php echo $row['model']; ?> </p>
				<p><b>Price: </b> <?php echo $row['price']; ?> </p>
			</div>
		<?php
			}	
		} 
		else{
			echo "No graphics cards!";
		}
		?>
			</div>	
		</div>
	</body>	
</html>
