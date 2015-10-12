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
			
			<div class="row">
			<div class="double_line"></div>
			
			</div>
			<div class="row">
			<form action="magazine_cancel.php" method="post">
				<table class="table table-th-block table-primary"><thead>
					<?php
							
									include('db_connect.php');
							
						

								
								$sql = "SELECT * FROM magazine_issue WHERE status = 'Active' ";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
									echo "<tr><th style=width: 30px;>S.no</th><th>Name</th><th>Magazine Name</th><th>date</th><th>Status</th><th></th></tr></thead>";
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<tbody><tr><td>".$row["s.no"]."</td><td>".$row["f_name"]."</td><td><select name=magazi_name><option> ".$row["magazine_name"]."</option></select></td><td> ".$row["date"]."</td><td> ".$row["status"]."</td><td><button type=submit class=btn btn-danger> SUBMIT</button> </td></tr></tbody>"; 
										
									}
									echo "</table> </form>";
								} else {
									echo "<center style=color:red;>All Magazines have submitted </center>";
								}
								
							
							
					?>
					
			
			
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