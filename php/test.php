<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		<?php
			include('db_connect.php');
			
			$true = "";
$arayy = array('f','s','t');	
$value = array();		

		
		
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$f = $_POST["f"];
				
				if($f="on"){
					$true = "1";
				}else{$true = "0";}
			}
			

			$insql = "INSERT INTO seat_no(1,2,3)
			VALUES ('$true','$true','$true')";

			
		?>
		<?php
			include('invest_sum.php');
		?>
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
									<label> check 1</label>
													<input type="checkbox" name="f[]"  >
									<label> check 2</label>
													<input type="checkbox" name="f[]"  >
									<label> check 3</label>
													<input type="checkbox" name="f[]" 	 >
						
						<input type="submit" value="Test post"/>
						
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