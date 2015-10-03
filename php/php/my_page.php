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

			$sql = "INSERT INTO invest(items,amount,invest_date)
			VALUES ('$item','$amount','$date')";

			
		?>
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<center><h1><u>My Work</u> </h1></center>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<button type="submit" class="btn  btn-block btn-lg"><i class="fa fa-sign-in"></i><a href="manage_money.php"> Invest</a></button>
					<button type="submit" class="btn  btn-block btn-lg"><i class="fa fa-sign-in"></i> <a href="reader_info_fill.php"> New Admission</a></button>
					<button type="submit" class="btn btn-block btn-lg"><i class="fa fa-sign-in"></i> <a href="seat_list.php"> Seat LIst</a></button>

				
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