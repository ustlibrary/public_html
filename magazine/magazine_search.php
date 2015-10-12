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
							

							?>
			
			<div class="row">
			<div class="double_line"></div>
			<form role="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
					<div class="form-group">
											<label>Magazine</label>
											<select class="form-control" name="magazine_name">
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
				<div class="col-sm-4">
					
				</div>
				<div class="row">
					<center>
						<div class="form-group">
								<label></label><br><br>
								<button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> SEARCH</button>	
						</div>
					</center>	
				</div>
				
							
			</form>
			</div>
			<div class="row">
			<form action="magazine_cancel.php" method="post">
				<table class="table table-th-block table-primary"><thead>
					<?php
							
								
								if($_SERVER["REQUEST_METHOD"] == "POST") {
									include('db_connect.php');
							$magazine_name = "";
									$magazine_name = $_POST["magazine_name"];
									
						

								
								$sql = "SELECT * FROM magazine_issue WHERE magazine_name = '".$magazine_name."' and status = 'Active' ";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
									echo "<tr><th style=width: 30px;>S.no</th><th>Name</th><th>Magazine Name</th><th>date</th><th>Status</th><th></th></tr></thead>";
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo "<tbody><tr><td>".$row["s.no"]."</td><td>".$row["f_name"]."</td><td><select name=magazi_name><option> ".$row["magazine_name"]."</option></select></td><td> ".$row["date"]."</td><td> ".$row["status"]."</td><td><button type=submit class=btn btn-danger> SUBMIT</button> </td></tr></tbody>"; 
										
									}
									echo "</table> </form>";
								} else {
									echo "0 results";
								}
								
								
								
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