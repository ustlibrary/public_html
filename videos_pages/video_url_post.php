<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		<?php
			include('db_connect.php');
			
			$name = $url = $details ="";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$name = $_POST["name"];
				$url = $_POST["url"];
				$details = $_POST["details"];
			}

			$insql = "INSERT INTO motivation_videos(name,url,details)
			VALUES ('$name','$url','$details')";

			
		?>
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<center><h1><u>Add A video Url</u> </h1></center>
			
					
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="row">
						<div class="pull-left">
						<button class="btn btn-perspective btn-lg"><a href="../index.php"><i class="fa fa-home"></i></a></button>
						</div>
					</div>
					<div class="the-box">
							<h4 class="small-title">Fill Video name,url and details.</h4>
							<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-feedback left-feedback no-label">
										  <input type="text" name="name" class="form-control" placeholder="name" required>
										  <span class="fa fa-pencil-square-o form-control-feedback"></span>
										</div>
										
									</div><!-- /.col-sm-6 -->
									<div class="col-sm-6">
										<div class="form-group has-feedback left-feedback no-label">
										  <input type="text" name="url" class="form-control" placeholder="video url" required>
										  <span class="fa fa-rupee form-control-feedback"></span>
										</div>
									</div><!-- /.col-sm-6 -->
									
								</div><!-- /.row -->
								<div class="row">
										<div class="form-group has-feedback left-feedback no-label">
										  <input type="text" name="details" class="form-control" placeholder="details" required>
										  <span class="fa fa-pencil form-control-feedback"></span>
										 
										</div>
									</div><!-- /.col-sm-6 -->
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