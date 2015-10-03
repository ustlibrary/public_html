<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		<?php
			include('db_connect.php');
			
			$item = $amount = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$item = $_POST["item"];
				$amount = $_POST["amount"];
			}
			$date = date("d/m/Y") ;

			$insql = "INSERT INTO invest(items,amount,invest_date)
			VALUES ('$item','$amount','$date')";

			
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
			<center><h1><u>Invest Money</u> </h1></center>
			
					
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
						<div class="row">
				<div class="pull-left">
				<button class="btn btn-perspective btn-lg"><a href="../index.php"><i class="fa fa-home"></i></a></button>
				</div>
				<div class="pull-right">
				<button class="btn btn-perspective btn-lg">Invest:  <i class="fa fa-rupee"></i>	<?php echo $total; ?>-/*</button> 
				</div>
				
			</div>
					<div class="the-box">
							<h4 class="small-title">Fill item name and amount.</h4>
							<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group has-feedback left-feedback no-label">
										  <input type="text" name="item" class="form-control" placeholder="Item" required>
										  <span class="fa fa-pencil-square-o form-control-feedback"></span>
										</div>
										
									</div><!-- /.col-sm-6 -->
									<div class="col-sm-6">
										<div class="form-group has-feedback left-feedback no-label">
										  <input type="text" name="amount" class="form-control" placeholder="Amount" required>
										  <span class="fa fa-rupee form-control-feedback"></span>
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