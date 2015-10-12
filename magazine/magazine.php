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
							$name = $magazin_name = $status = "";
								if($_SERVER["REQUEST_METHOD"] == "POST") {
									$name = $_POST["full_name"];
									$magazin_name = $_POST["magazin_name"];
									$status = $_POST["status"];
								}

								$insql = "INSERT INTO magazine_issue(f_name,magazine_name,status)
								VALUES ('$name','$magazin_name','$status')";

							?>
			
			<div class="row">
			<div class="double_line"></div>
			<form role="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
			<div class="col-sm-3">
					<label>Name</label>: <select class="form-control" name="full_name"><option>Select name</option>
						
							<?php
							$sql = "SELECT * FROM reader_info";
							$result = $conn->query($sql);
								$rowcount=mysqli_num_rows($result);
								
							if ($result->num_rows > 0) {
								
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "<option value= ".$row["f_name"].">".$row["f_name"]."</option>";
									
								}
								echo "</select>";
								
							} else {
								echo "";
								
							}
							
						?>
					
					
					
					
					
				</div>
				<div class="col-sm-3">
				<div class="form-group">
											<label>Magazine</label>
											<select class="form-control" name="magazin_name">
														<option value="Not select">Select magazine<option>
														<option value="करंट अफेयर टुडे">करंट अफेयर टुडे </option>
														
														<option value="Chronicle-Hindi">Chronicle-Hindi</option>
														<option value="Chronicle-English">Chronicle-English</option>
														
														<option value="Kurukshetra-Hindi">Kurukshetra-Hindi</option>
														<option value="Kurukshetra-English">Kurukshetra-English</option>
														
														<option value="Pratiyogita Kiran-Hindi">Pratiyogita Kiran-Hindi</option>
														<option value="Pratiyogita Kiran-English">Pratiyogita Kiran-English</option>
														
														<option value="Pratiyogita darpan-Hindi">Pratiyogita darpan-Hindi</option>
														<option value="Pratiyogita darpan-English">Pratiyogita darpan-English</option>
														
														<option value="Contemorary issues-Hindi">Contemorary issues-Hindi</option>
														<option value="Contemorary issues-English">Contemorary issues-English</option>
														
														<option value="Banking Service Chronicle">Banking Service Chronicle</option>
														
														<option value="Science Reporter-Hindi">Science Reporter-Hindi</option>
														<option value="Science Reporter-English">Science Reporter-English</option>
														
														<option value="Word Focus-Hindi">Word Focus-Hindi</option>
														<option value="Word Focus-Hindi">Word Focus-Hindi</option>
														
													</select>
										</div>
				
				
				
				</div>
				<div class="col-sm-3">
					<div class="form-group">
							<label>Status</label>
							<select class="form-control" name="status">
									<option value="Active">Active<option>
									<option Value="Submit">Cancel<option>
							</select>		
								
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
							<label></label><br><br>
							<button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> ISSUE</button>	
					</div>
				</div>
				
							
			</form>
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