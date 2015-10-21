<?php

$subject = $_POST['subject'];


?>

<!DOCTYPE html>
<html lang="en">
	<?php include('../links/head_links.php'); ?>
	<body>
	<!--
		===========================================================
		BEGIN PAGE
		===========================================================
	-->
		<div class="container">
			<?php include('../links/head_name.php'); ?>
			<div class="row">
				<?php include('../links/nav.php'); ?>
			</div>		
			<div class="row">
				<form action="done_question.php" method="POST" role="form">
				<div class="col-sm-6">
					<center>
					<div class="form-group">
				</div>
				<div class="form-group" >
					<select name="test_code" class="form-control">
					<?php   
						include('../links/db_connect.php');
						$sqlTestSelect = "SELECT * FROM ".$subject." ";
						$result = $conn->query($sqlTestSelect);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							?>
							<option value=<?php   echo $row['t_code'];  ?>><?php  echo $row['t_code'];  ?></option>
							<?php
						}
						echo "</select>";
					} else {
						
					}
					?>
				</div>
				</center>
				</div>
				<div class="col-sm-6">
			<center>
				<div class="form-group">
					<label>Question NO : </label>	<input  type="text" name="nu"><br>
				</div>
				<div class="form-group">
					<label>Question  : </label><input class="form-control" type="text" name="q"><br>
				</div>
				<div class="form-group">
					<label>Answer 1  : </label><input type="text" name="a"><br>
				</div>
				<div class="form-group">
					<label>Answer 2 : </label><input type="text" name="b"><br>
				</div>
				<div class="form-group">	
					<label>Answer 3 : </label><input type="text" name="c"><br>
				</div>
				<div class="form-group">	
					<label>Answer 4 : </label><input type="text" name="d"><br>
				</div>	
					<input type="submit" value="Post">
				</form>
			</div>
			</div>	
			</center>				
		<?php include('../links/footer.php'); ?>
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