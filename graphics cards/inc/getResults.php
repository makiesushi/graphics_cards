<?php

require("connect.php");

if(isset($_GET['criteria'])) {
	
	
	if(!empty($_GET['criteria'])) {
		
		$criteria = trim($_GET['criteria']);
		$criteria = mysqli_real_escape_string($conn,$criteria);
		$query = "SELECT * FROM graphics_cards WHERE brand LIKE '%{$criteria}%' OR model LIKE '%{$criteria}%'";
		
		$result  = mysqli_query($conn,$query);
		
				if(mysqli_num_rows($result)>0){
					
					echo "Number of results: " . mysqli_num_rows($result);
					
					while($row = mysqli_fetch_assoc($result)) {
						
						?>
						
						<div class="divThing">
						<p><b>Brand: </b> <?php echo $row['brand']; ?> </p>
				        <p><b>Model: </b> <?php echo $row['model']; ?> </p>
				        <p><b>Price: </b> <?php echo $row['price']; ?> </p>
						
						</div>
						
						
						<?php
					}
					
				} else {
					
					echo "No results";
					
				}
		
		
		
	}else {
		
		echo "Criteria is empty";
		
	}
	
	
}

?>