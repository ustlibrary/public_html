<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		<?php
			include('db_connect.php');
			
			$items ="";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$items = $_POST["items"];
				
			}

			$insql = "INSERT INTO water(items)
			VALUES ('$items')";

			
		?>
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<center><h1><u>Add  No of Water Bottle</u> </h1></center>
			
					
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="row">
						<div class="pull-left">
						<button class="btn btn-perspective btn-lg"><a href="../index.php"><i class="fa fa-home"></i></a></button>
						</div>
					</div>
					<div class="the-box">
							<h4 class="small-title">Fill No of water bottle.</h4>
							<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-feedback left-feedback no-label">
										  <input type="text" name="items" class="form-control" placeholder="NO OF BOTTLES" required>
										  <span class="fa fa-pencil-square-o form-control-feedback"></span>
										</div>
										
									</div><!-- /.col-sm-6 -->
									
									
								</div><!-- /.row -->
								
								<button type="submit" class="btn btn-success btn-block btn-lg"><i class="fa fa-sign-in"></i> Fill it Now</button>
							</form>
							
							<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								if ($conn->query($insql) === TRUE) {
								echo "*New record created successfully";
								} else {
									echo "Error: " . $insql . "<br>" . $conn->error;
								}

								$conn->close();
							}
							?>
							
					</div>
				
				</div>
				<div class="col-sm-3"></div>
				
			<?php include('footer.php')  ?>	
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