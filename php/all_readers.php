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
							include('total_fee_collect.php');
							include('total_due_amount.php')	;
							?>
			<div class="row">
				<div class="pull-right"><button class="btn btn-perspective btn-xs "> <i class="fa fa-rupee"></i> | Total Amount Collect:	<?php echo $total; ?>-/ </button></div> <div class="pull-right"><button class="btn btn-perspective btn-xs margin-right20"><i class="fa fa-rupee"></i> Total amount Due:	<?php echo $total_due; ?>-/ </button>  </div>
			</div>
			<div class="row">
			<div class="double_line"></div>
			
					<table class="table table-th-block table-primary"><thead>
						
							<?php
							$sql = "SELECT * FROM reader_info";
							$result = $conn->query($sql);
								$rowcount=mysqli_num_rows($result);
							if ($result->num_rows > 0) {
								echo "<tr><th style=width: 30px;>Name</th><th style=width: 30px;>Email</th><th style=width: 30px;>Mob. no</th><th style=width: 30px;>Seat NO</th><th style=width: 30px;>Join Date</th><th style=width: 30px;>Join Valid</th><th style=width: 30px;>Join Amount</th><th style=width: 30px;>Due</th><th style=width: 30px;>Time</th><th style=width: 30px;>Identity Card</th><th style=width: 30px;>Image</th></tr></thead>";
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "<tbody style=color:deeppink><tr><td> ".$row["f_name"]."</td><td> ".$row["email"]."</td><td> ".$row["mob"]."</td><td> ".$row["seat_no"]."</td><td> ".$row["join_date"]."</td><td> ".$row["valid"]."</td><td> ".$row["join_amount"]."</td><td> ".$row["due_amount"]."</td><td> ".$row["time"]."</td><td><img src=".$row["id_path"]." width=75px height=75></td><td> <img src=".$row["image_path"]." width=75px height=75px></td></tr></tbody> ";
									
								}
								echo "</table>";
								echo $rowcount;
							} else {
								echo " <button  class=btn btn-danger>Not Fill</button>";
								
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