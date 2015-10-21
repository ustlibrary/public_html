
<?php
session_start();

$t_code = $s_choose = "";
$t_code = $_POST['t_code'];
$s_choose = $_POST['s_choose'];
$_SESSION['t_code'] = $t_code;
echo $s_choose;

include('../links/db_connect.php');

$sqlCreate = "CREATE TABLE  ".$t_code."(
			s_no INT(55) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nu VARCHAR(55) NOT NULL,
			q VARCHAR(254) NOT NULL,
			a VARCHAR(254) NOT NULL,
			b VARCHAR(254) NOT NULL,
			c VARCHAR(254) NOT NULL,
			d VARCHAR(254) NOT NULL
			)";



if ($conn->query($sqlCreate) === TRUE) {

$sqlInsert = "INSERT INTO ". $s_choose ."(t_code) value('$t_code')";
if ($conn->query($sqlInsert) === TRUE) { 

} else {
    echo "Error All ready  table created: " . $conn->error;
}






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
			<center>
			<h1>
				Test paper successfull created <br>
				<a href="selectSubject.php">Click here for question post</a>

			</h1>


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


<?php
  
} else {
    echo "Error All ready  table created: " . $conn->error;
}

$conn->close();
?>