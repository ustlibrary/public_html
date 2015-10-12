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
			
			
						<?php
							include('db_connect.php');
							
							
							?>
			<div class="row">
			<div class="double_line"></div>
				<div class="col-sm-3"></div>
				
				<div class="col-sm-6">
					<table class="table table-th-block table-primary"><thead>
						
							<?php
							$sql = "SELECT * FROM reader_info ORDER BY seat_no ASC";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
								echo "<tr><th style=width: 30px;>Seat No  </th><th>Time</th></tr></thead>";
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "<tbody><tr><td><span style=color:deeppink> ".$row["seat_no"]."</span></td><td><span style=color:deeppink>".$row["time"]."</span></td></tr></tbody> ";
									
								}
								echo "</table>";
							} else {
								echo "<button  class=btn btn-danger>Not Fill</button>";
							}
							$conn->close();

						?>
					
				</div>
				<div class="col-sm-3"></div>
							

			</div>
			<div class="double_line"></div>
			
				
						
						
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