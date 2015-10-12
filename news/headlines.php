<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
	<body>
	<!--
		===========================================================
		BEGIN PAGE
		===========================================================
	-->
		<div class="container" style="margin-top:-100px">
			<?php include('head_name.php'); ?>
			<div class="row">
				<?php include('nav.php'); ?>
			</div>		
			<div class="row">
				<div class="col-sm-9">
					<div class="double_line"></div>
				
				  
					<table class="table table-th-block table-primary ust-font2 ust-font-size" style="color:green;"><thead>
					
					<?php
						include('db_connect.php');

						date_default_timezone_set("Asia/Kolkata"); 
						 
						$date = date('d/m/Y');
						$sql = "SELECT * FROM headlines where date='".$date."'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo "<tr><th>S.no</th><th style=width: 30px;>Today's Headlines (" . date("d/m/Y").")</th></thead>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<tbody><tr><td>&#x25BA;</i></td><td>".$row["h1"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h2"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h3"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h4"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h5"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h6"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h7"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h8"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h9"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h10"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h11"]."</td></tr><tr><td>&#x25BA;</td><td>".$row["h12"]."</td></tr></tbody>" ;
								?>
								<?php
							}
							echo "</table>";
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
					</h4>
				</div>
				
				<div class="col-sm-3">
					
					<div class="double_line"></div>
				
				
					<table class="table table-th-block table-primary"><thead>
					
					<?php
						include('db_connect.php');

						
						$sql = "SELECT date FROM headlines";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo "<tr><th style=width: 30px;>News Headlines</th></thead>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<tbody><tr><td>".$row["date"]."</td></tr></tbody>" ;
								?>
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
			
		<?php include('footer.php'); ?>
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