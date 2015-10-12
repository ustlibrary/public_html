<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<center><h1><u>View No of Water </u> </h1></center>
			
					
			<div class="row">
				
				<table class="table table-th-block table-primary"><thead>
				
				<?php
					include('db_connect.php');

					
					$sql = "SELECT * FROM water";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<tr><th style=width: 30px;>S.no</th><th>NO of Bottle</th><th>Date</th></tr></thead>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tbody><tr><td>".$row["s.no"]."</td><td>".$row["items"]."</td><td> ".$row["date"]."</td></tr></tbody>"; 
							
						}
						echo "</table>";
					} else {
						echo "0 results";
					}
					$conn->close();
				?>

				
				
				
				
				
			</div>
		</div>
		
		<!-- END PAGE CONTENT -->
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="../stylesheet/assets/js/jquery.min.js"></script>
		<script src="../stylesheet/assets/js/bootstrap.min.js"></script>
		
		<!-- PLUGINS -->
		
		
		<!-- MAIN APPS JS -->
		<script src="../stylesheet/assets/js/apps.js"></script>
		
	</body>
</html>