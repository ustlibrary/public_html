<?php


	include('../links/db_connect.php');
	$f_name = $_POST["first_name"];
	$l_name = $_POST["last_name"];
  	$m_number = $_POST["m_number"];
  	$e_id = $_POST["e_id"];
  	$pass = $_POST["pass"];
  	$re_pass = "";



$sql="SELECT * FROM users";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  
  mysqli_free_result($result);
  }

  $rowadd = ++$rowcount;


	$ust_id = "UST".date("d")."0".$rowadd;
	

$sql = "INSERT INTO users (ust_id,first_name,last_name,pass,e_id,m_number )
VALUES ('$ust_id','$f_name','$l_name','$pass','$e_id', '$m_number')";


?>

<?php


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
		<div class="col-sm-3"></div>
		<div class="col-sm-6 ust-font2">
		<?php
			if ($conn->query($sql) == TRUE) {

					
					echo "You are successfuly register on UST Library.";
					echo "<br>";
					echo "Your UST ID is = " .$ust_id;
					echo "<br>";
					echo "Use password ! which, you have given.";
					echo "<br>";
					echo "<br>";
					echo "<a href=../ust_test><button>Click For Login</button> </a>";
					echo "<br>";
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}

			
			$sqlCreate = "CREATE TABLE  ".$ust_id."(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			test_id VARCHAR(30) NOT NULL,
			test_marks VARCHAR(3) NOT NULL,
			test_per VARCHAR(3),
			reg_date TIMESTAMP
			)";



if ($conn->query($sqlCreate) === TRUE) {
  
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();



		?>
		</div>

		<div class="col-sm-3"></div>
	</div>	
	
		
				
				<br>
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



