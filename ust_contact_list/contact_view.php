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
			<center><h1><u>View contacts</u> </h1></center>
			
					
			<div class="row">
				
				<table class="table table-th-block table-primary"><thead>
				
				<?php
					include('db_connect.php');

					
					$sql = "SELECT * FROM contacts";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<tr><th style=width: 30px;>S.no</th><th>Name</th><th>contact No</th><th>Details</th><th>click to call</th></tr></thead>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tbody><tr><td>".$row["s.no"]."</td><td>".$row["name"]."</td><td> ".$row["contact"]."</td><td>".$row["details"]."</td></td><td><a href=tel:".$row["contact"].">"  ?> <i class="fa fa-phone-square"></i></a></td></tr></tbody> 
							<?php
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