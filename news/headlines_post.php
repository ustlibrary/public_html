<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		<?php
			include('db_connect.php');
			
			$date = $h1 = $h2 = $h3 = $h4 = $h5 = $h6 = $h7 = $h8 = $h9 =  $h10 = $h11= $h12 = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$h1 = $_POST["h1"];
				$h2 = $_POST["h2"];
				$h3 = $_POST["h3"];
				$h4 = $_POST["h4"];
				$h5 = $_POST["h5"];
				$h6 = $_POST["h6"];
				$h7 = $_POST["h7"];
				$h8 = $_POST["h8"];
				$h9 = $_POST["h9"];
				$h10 = $_POST["h10"];
				$h11 = $_POST["h11"];
				$h12 = $_POST["h12"];
				
			}
			$date = date("d/m/Y") ;
			$insql = "INSERT INTO headlines(date,h1,h2,h3,h4,h5,h6,h7,h8,h9,h10,h11,h12)
			VALUES ('$date','$h1','$h2', '$h3', '$h4', '$h5', '$h6', '$h7', '$h8', '$h9', '$h10', '$h11', '$h12')";

			
		?>
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<center><h1><u>Add A video Url</u> </h1></center>
			
				<div class="the-box">	
			<div class="row">
				
					<div class="col-sm-6">
							<h4 class="small-title"><u>SIMPLE ADMISSION FORM</u></h4>
							<form role="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="form-group">
									<label>Heading 1</label>
									<input type="text" name="h1" class="form-control">
							    </div>
							  
							    <div class="form-group">
									<label>Heading 2</label>
									<input type="text" name="h2" class="form-control">
							    </div>
								  
							    <div class="form-group">
								   <label>Heading 3</label>
								   <input type="text" name="h3" class="form-control">
							    </div>
								  
								  <div class="form-group">
									<label>Heading 4</label>
									<input type="text" name="h4" class="form-control">
								  </div>
								  
								  <div class="form-group">
									<label>Heading 5</label>
									<input type="text" name="h5" class="form-control">
								  </div>
								  
								  <div class="form-group">
									<label>Heading 6</label>
									<input type="text" name="h6" class="form-control">
								  </div>
							</div>
							<div class="col-sm-6">

								  <div class="form-group">
									<label>Heading 7</label>
									<input type="text" name="h7" class="form-control">
								  </div>
								  
								 <div class="form-group">
									<label>Heading 8</label>
									<input type="text" name="h8" class="form-control">
								  </div>
								  
								  <div class="form-group">
									<label>Heading 9</label>
									<input type="text" name="h9" class="form-control">
								  </div>
								  
								  <div class="form-group">
									<label>Heading 10</label>
									<input type="text" name="h10" class="form-control">
								  </div>
								  
								  <div class="form-group">
									<label>Heading 11</label>
									<input type="text" name="h11" class="form-control">
								  </div>
								  
								   <div class="form-group">
									<label>Heading 12</label>
									<input type="text" name="h12" class="form-control">
								  </div>
									
								  <button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> Register</button>
								</form>
							</div>
				    </div>
			</div>
					
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