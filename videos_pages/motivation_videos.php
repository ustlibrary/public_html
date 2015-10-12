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
			<div class="row">
				<p class="ust-font2 ust-font-size">Motivation Videos</p>
				<div class="double_line"></div>
			</div>
			<div class="row">
				<?php
				include('db_connect.php');
					$sql = "SELECT * FROM motivation_videos order by date desc";          
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<div class=col-sm-4><embed  width=300px height=300px src=http://www.youtube.com/embed/".$row["url"]."?autoplay=0></div>"; 
						}
						?> 
						</div>		
						<?php	
					} else {
						echo "0 results";
					}
					$conn->close();
				?>
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