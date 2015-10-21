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
				<form action="questionPost.php" method="POST">
					<h3>Subject : <select name="s_choose">
								<option value="">Choose Test Subject</option>
								<option value="gs">GS</option>
								<option value="english">English_ssharma</option>
					</select></h3>
					<h1>Test Code : <input type="text" name="t_code"></h1>
					<h4><input type="submit" value="Create Papers"></h4>

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