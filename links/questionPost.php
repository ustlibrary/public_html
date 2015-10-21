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
				<form action="done_question.php" method="POST">
					<label>Question NO : </label>	<input type="text" name="nu"><br>
					<label>Question  : </label><input type="text" name="q"><br>
					<label>Answer 1  : </label><input type="text" name="a"><br>
					<label>Answer 2 : </label><input type="text" name="b"><br>
					<label>Answer 3 : </label><input type="text" name="c"><br>
					<label>Answer 4 : </label><input type="text" name="d"><br>
					<input type="submit" value="Post">

				</form>

			</div>	
			
				
						
						
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