<?php
session_start();
if(isset($_SESSION['ust_id']))
{ 





//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 30;

//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){
    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
    
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
        header('Location: index.php');

    }
    
}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
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
			<div class="row ust-font2" >
					<h1>Your test time result page.</h1>
				</div>
			<div class="row">
				<div class="pull-right">
					<a href="../login/goodbye.php">
					<button class="btn btn-danger btn-perspective">
						Logout
					</button>
					</a>
				</div>
				<div class="pull-right">
					<a href="userLogin.php">
					<button class="btn btn-danger btn-perspective">
						User Home
					</button>
					</a>
					|
				</div>	
				

			</div>
				
	
	<div class="row" >
		<nav class="navbar square navbar-primary" role="navigation" style="color:#FFFFFF">
			<div class="nav navbar-nav">
			<h3 class="margin-left5">Success Login :- <?php echo $_SESSION['first_name']; echo " "; echo $_SESSION['last_name']; ?></h3>
			<h5 class="margin-left5">UST ID :- <?php echo $_SESSION['ust_id'];?></h5>
			</div>
			

		</nav>	
	</div>

			<div class="row">
				<div class="">
					
						<?php include('test_answer.php') ?>
				</div>
			</div>
			
				
						
		<div class="row">				
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

}
else{
$_SESSION =array();

session_destroy();
include('../ust_test/index.php');
}
?>