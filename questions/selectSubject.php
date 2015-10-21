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
				<form action="questionAnswerPost.php" method="POST" role="form">
				<div class="col-sm-6">
					<center>
					<div class="form-group">
					</div>
				<div class="form-group" >
					<select name="subject" class="form-control">
						<option value="gs">GS</option>
						<option value="english">English</option>

						<input type="submit" value="Go to ">
					</select>
				</div>
				</center>
				</div>
				<div class="col-sm-6">
			
				
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