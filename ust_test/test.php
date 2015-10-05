<?php
session_start();
if(isset($_SESSION['ust_id']))
{ 





//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 3;

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
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="UST Library is silence place for your study and make a good career">
		<meta name="keywords" content="ust,library,mukherjee nagar, delhi, upsc, ssc, bank, competitive exam ">
		<meta name="author" content="Ashish kumar pandey, Ujjwal Pandey">
		<meta name="google-site-verification" content="24j1anY6SAUhnM78R6ztpaA1CHPiT0XYvkSnM388g5E" />
		<title>UST Library | www.ustlibrary.in</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="../stylesheet/assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		
		<!---///////// ----->
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="../stylesheet/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="../stylesheet/assets/css/ust_style.css" rel="stylesheet">
		<link href="../stylesheet/assets/css/style.css" rel="stylesheet">

		<link href="../stylesheet/assets/css/style-responsive.css" rel="stylesheet">
 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->







<script>

</script>

		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		
		 
		<div class="container " style="margin-top:-50px">
			<div class="row">
				
				<div class="row" >
					<nav class="navbar square navbar-primary" role="navigation" style="color:#FFFFFF">
						<div class="nav navbar-nav">
						<h3 class="margin-left5">Name :- <?php echo $_SESSION['first_name']; echo " "; echo $_SESSION['last_name']; ?></h3>
						<h5 class="margin-left5">UST ID :- <?php echo $_SESSION['ust_id'];?></h5>
						</div>
						<div class="nav navbar-nav navbar-right">

							<h1><a href="../login/goodbye.php">logout</a></h1>

						</div>

					</nav>	
				</div>
				
				
								
				<div class="double_line"></div>	
				
				<div class="row">
					<div class="col-sm-8">
						<?php 
							include('questions.php');
						?>
					</div>	
					<div class="col-sm-4">
						<div class="panel with-nav-tabs panel-success">
 							<div class="panel-heading">
								<label>Question numbers :</label>
							  </div>
							
							<ul class="pagination block-color">
								  <ul class="pagination block-color">
								  <li><a href="#panel-home-1" data-toggle="tab"><span id="demo1" >1</span></a></li>
								  <li><a href="#panel-home-2" data-toggle="tab"><span id="demo2" >2</span></a></li>
								  <li><a href="#panel-home-3" data-toggle="tab"><span id="demo3" >3</span></a></li>
								  <li><a href="#panel-home-4" data-toggle="tab"><span id="demo4" >4</span></a></li>
								  <li><a href="#panel-home-5" data-toggle="tab"><span id="demo5" >5</span></a></li>
								  <li><a href="#panel-home-6" data-toggle="tab"><span id="demo6" >6</span></a></li>
								  <li><a href="#panel-home-7" data-toggle="tab"><span id="demo7" >7</span></a></li>
								  <li><a href="#panel-home-8" data-toggle="tab"><span id="demo8" >8</span></a></li>
								  <li><a href="#panel-home-9" data-toggle="tab"><span id="demo9" >9</span></a></li>
								  <li><a href="#panel-home-10" data-toggle="tab"><span id="demo10" >10</span></a></li>
								  <li><a href="#panel-home-11" data-toggle="tab"><span id="demo11" >11</span></a></li>
								  <li><a href="#panel-home-12" data-toggle="tab"><span id="demo12" >12</span></a></li>
								  <li><a href="#panel-home-13" data-toggle="tab"><span id="demo13" >13</span></a></li>
								  <li><a href="#panel-home-14" data-toggle="tab"><span id="demo14" >14</span></a></li>
								  <li><a href="#panel-home-15" data-toggle="tab"><span id="demo15" >15</span></a></li>
								  <li><a href="#panel-home-16" data-toggle="tab"><span id="demo16" >16</span></a></li>
								  <li><a href="#panel-home-17" data-toggle="tab"><span id="demo17" >17</span></a></li>
								  <li><a href="#panel-home-18" data-toggle="tab"><span id="demo18" >18</span></a></li>
								  <li><a href="#panel-home-19" data-toggle="tab"><span id="demo19" >19</span></a></li>
								  <li><a href="#panel-home-20" data-toggle="tab"><span id="demo20" >20</span></a></li>
								  <li><a href="#panel-home-21" data-toggle="tab"><span id="demo21" >21</span></a></li>
								  <li><a href="#panel-home-22" data-toggle="tab"><span id="demo22" >22</span></a></li>
								  <li><a href="#panel-home-23" data-toggle="tab"><span id="demo23" >23</span></a></li>
								  <li><a href="#panel-home-24" data-toggle="tab"><span id="demo24" >24</span></a></li>
								  <li><a href="#panel-home-25" data-toggle="tab"><span id="demo25" >25</span></a></li>
								  <li><a href="#panel-home-26" data-toggle="tab"><span id="demo26" >26</span></a></li>
								  <li><a href="#panel-home-27" data-toggle="tab"><span id="demo27" >27</span></a></li>
								  <li><a href="#panel-home-28" data-toggle="tab"><span id="demo28" >28</span></a></li>
								  <li><a href="#panel-home-29" data-toggle="tab"><span id="demo29" >29</span></a></li>
								  <li><a href="#panel-home-30" data-toggle="tab"><span id="demo30" >30</span></a></li>
								  <li><a href="#panel-home-31" data-toggle="tab"><span id="demo31" >31</span></a></li>
								  <li><a href="#panel-home-32" data-toggle="tab"><span id="demo32" >32</span></a></li>
								  <li><a href="#panel-home-33" data-toggle="tab"><span id="demo33" >33</span></a></li>
								  <li><a href="#panel-home-34" data-toggle="tab"><span id="demo34" >34</span></a></li>
								  <li><a href="#panel-home-35" data-toggle="tab"><span id="demo35" >35</span></a></li>
								  <li><a href="#panel-home-36" data-toggle="tab"><span id="demo36" >36</span></a></li>
								  <li><a href="#panel-home-37" data-toggle="tab"><span id="demo37" >37</span></a></li>
								  <li><a href="#panel-home-38" data-toggle="tab"><span id="demo38" >38</span></a></li>
								  <li><a href="#panel-home-39" data-toggle="tab"><span id="demo39" >39</span></a></li>
								  <li><a href="#panel-home-40" data-toggle="tab"><span id="demo40" >40</span></a></li>
								  <li><a href="#panel-home-41" data-toggle="tab"><span id="demo41" >41</span></a></li>
								  <li><a href="#panel-home-42" data-toggle="tab"><span id="demo42" >42</span></a></li>
								  <li><a href="#panel-home-43" data-toggle="tab"><span id="demo43" >43</span></a></li>
								  <li><a href="#panel-home-44" data-toggle="tab"><span id="demo44" >44</span></a></li>
								  <li><a href="#panel-home-45" data-toggle="tab"><span id="demo45" >45</span></a></li>
								  <li><a href="#panel-home-46" data-toggle="tab"><span id="demo46" >46</span></a></li>
								  <li><a href="#panel-home-47" data-toggle="tab"><span id="demo47" >47</span></a></li>
								  <li><a href="#panel-home-48" data-toggle="tab"><span id="demo48" >48</span></a></li>
								  <li><a href="#panel-home-49" data-toggle="tab"><span id="demo49" >49</span></a></li>
								  <li><a href="#panel-home-50" data-toggle="tab"><span id="demo50" >50</span></a></li>
								  
<li><a href="#panel-home-101" data-toggle="tab" title="Click when test has completed"><button class="btn btn-success"> Submit</button></a> </li>

							
							</ul>
						</div>
					</div>

						
						
					</div>	




<br><br>


				<div class="row">
					<?php include('../php/index_footer.php') ?>
				</div>
				
				
			
		 	</div>
			
				
				
				
		</div><!-- /.wrapper -->
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
		<script src="../stylesheet/assets/js/button_change_color.js"></script>
		
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