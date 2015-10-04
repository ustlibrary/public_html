<?php
session_start();
if(isset($_SESSION['ust_id']))
{ 


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
	


	</head>
 
	<body>
	
		
		
		
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
								  <li class="active"><a href="#panel-home-1" data-toggle="tab">1</a></li>
								  <li><a href="#panel-home-2" data-toggle="tab">2</a></li>
								  <li><a href="#panel-home-3" data-toggle="tab">3</a></li>
								  <li><a href="#panel-home-4" data-toggle="tab">4</a></li>
								  <li><a href="#panel-home-5" data-toggle="tab">5</a></li>
								  <li><a href="#panel-home-6" data-toggle="tab">6</a></li>
								  <li><a href="#panel-home-7" data-toggle="tab">7</a></li>
								  <li><a href="#panel-home-8" data-toggle="tab">8</a></li>
								  <li><a href="#panel-home-9" data-toggle="tab">9</a></li>
								  <li><a href="#panel-home-10" data-toggle="tab">10</a></li>
								  <li><a href="#panel-home-11" data-toggle="tab">11</a></li>
								  <li><a href="#panel-home-12" data-toggle="tab">12</a></li>
								  <li><a href="#panel-home-13" data-toggle="tab">13</a></li>
								  <li><a href="#panel-home-14" data-toggle="tab">14</a></li>
								  <li><a href="#panel-home-15" data-toggle="tab">15</a></li>
								  <li><a href="#panel-home-16" data-toggle="tab">16</a></li>
								  <li><a href="#panel-home-17" data-toggle="tab">17</a></li>
								  <li><a href="#panel-home-18" data-toggle="tab">18</a></li>
								  <li><a href="#panel-home-19" data-toggle="tab">19</a></li>
								  <li><a href="#panel-home-20" data-toggle="tab">20</a></li>
								  <li><a href="#panel-home-21" data-toggle="tab">21</a></li>
								  <li><a href="#panel-home-22" data-toggle="tab">22</a></li>
								  <li><a href="#panel-home-23" data-toggle="tab">23</a></li>
								  <li><a href="#panel-home-24" data-toggle="tab">24</a></li>
								  <li><a href="#panel-home-25" data-toggle="tab">25</a></li>
								  <li><a href="#panel-home-26" data-toggle="tab">26</a></li>
								  <li><a href="#panel-home-27" data-toggle="tab">27</a></li>
								  <li><a href="#panel-home-28" data-toggle="tab">28</a></li>
								  <li><a href="#panel-home-29" data-toggle="tab">29</a></li>
								  <li><a href="#panel-home-30" data-toggle="tab">30</a></li>
								  <li><a href="#panel-home-31" data-toggle="tab">31</a></li>
								  <li><a href="#panel-home-32" data-toggle="tab">32</a></li>
								  <li><a href="#panel-home-33" data-toggle="tab">33</a></li>
								  <li><a href="#panel-home-34" data-toggle="tab">34</a></li>
								  <li><a href="#panel-home-35" data-toggle="tab">35</a></li>
								  <li><a href="#panel-home-36" data-toggle="tab">36</a></li>
								  <li><a href="#panel-home-37" data-toggle="tab">37</a></li>
								  <li><a href="#panel-home-38" data-toggle="tab">38</a></li>
								  <li><a href="#panel-home-39" data-toggle="tab">39</a></li>
								  <li><a href="#panel-home-40" data-toggle="tab">40</a></li>
								  <li><a href="#panel-home-41" data-toggle="tab">41</a></li>
								  <li><a href="#panel-home-42" data-toggle="tab">42</a></li>
								  <li><a href="#panel-home-43" data-toggle="tab">43</a></li>
								  <li><a href="#panel-home-44" data-toggle="tab">44</a></li>
								  <li><a href="#panel-home-45" data-toggle="tab">45</a></li>
								  <li><a href="#panel-home-46" data-toggle="tab">46</a></li>
								  <li><a href="#panel-home-47" data-toggle="tab">47</a></li>
								  <li><a href="#panel-home-48" data-toggle="tab">48</a></li>
								  <li><a href="#panel-home-49" data-toggle="tab">49</a></li>
								  <li><a href="#panel-home-50" data-toggle="tab">50</a></li>
								  <li><a href="#panel-home-51" data-toggle="tab">51</a></li>
								  <li><a href="#panel-home-52" data-toggle="tab">52</a></li>
								  <li><a href="#panel-home-53" data-toggle="tab">53</a></li>
								  <li><a href="#panel-home-54" data-toggle="tab">54</a></li>
								  <li><a href="#panel-home-55" data-toggle="tab">55</a></li>
								  <li><a href="#panel-home-56" data-toggle="tab">56</a></li>
								  <li><a href="#panel-home-57" data-toggle="tab">57</a></li>
								  <li><a href="#panel-home-58" data-toggle="tab">58</a></li>
								  <li><a href="#panel-home-59" data-toggle="tab">59</a></li>
								  <li><a href="#panel-home-60" data-toggle="tab">60</a></li>
								  <li><a href="#panel-home-61" data-toggle="tab">61</a></li>
								  <li><a href="#panel-home-62" data-toggle="tab">62</a></li>
								  <li><a href="#panel-home-63" data-toggle="tab">63</a></li>
								  <li><a href="#panel-home-64" data-toggle="tab">64</a></li>
								  <li><a href="#panel-home-65" data-toggle="tab">65</a></li>
								  <li><a href="#panel-home-66" data-toggle="tab">66</a></li>
								  <li><a href="#panel-home-67" data-toggle="tab">67</a></li>
								  <li><a href="#panel-home-68" data-toggle="tab">68</a></li>
								  <li><a href="#panel-home-69" data-toggle="tab">69</a></li>
								  <li><a href="#panel-home-70" data-toggle="tab">70</a></li>
								  <li><a href="#panel-home-71" data-toggle="tab">71</a></li>
								  <li><a href="#panel-home-72" data-toggle="tab">72</a></li>
								  <li><a href="#panel-home-73" data-toggle="tab">73</a></li>
								  <li><a href="#panel-home-74" data-toggle="tab">74</a></li>
								  <li><a href="#panel-home-75" data-toggle="tab">75</a></li>
								  <li><a href="#panel-home-76" data-toggle="tab">76</a></li>
								  <li><a href="#panel-home-77" data-toggle="tab">77</a></li>
								  <li><a href="#panel-home-78" data-toggle="tab">78</a></li>
								  <li><a href="#panel-home-79" data-toggle="tab">79</a></li>
								  <li><a href="#panel-home-80" data-toggle="tab">80</a></li>
								  <li><a href="#panel-home-81" data-toggle="tab">81</a></li>
								  <li><a href="#panel-home-82" data-toggle="tab">82</a></li>
								  <li><a href="#panel-home-83" data-toggle="tab">83</a></li>
								  <li><a href="#panel-home-84" data-toggle="tab">84</a></li>
								  <li><a href="#panel-home-85" data-toggle="tab">85</a></li>
								  <li><a href="#panel-home-86" data-toggle="tab">86</a></li>
								  <li><a href="#panel-home-87" data-toggle="tab">87</a></li>
								  <li><a href="#panel-home-88" data-toggle="tab">88</a></li>
								  <li><a href="#panel-home-89" data-toggle="tab">89</a></li>
								  <li><a href="#panel-home-90" data-toggle="tab">90</a></li>
								  <li><a href="#panel-home-91" data-toggle="tab">91</a></li>
								  <li><a href="#panel-home-92" data-toggle="tab">92</a></li>
								  <li><a href="#panel-home-93" data-toggle="tab">93</a></li>
								  <li><a href="#panel-home-94" data-toggle="tab">94</a></li>
								  <li><a href="#panel-home-95" data-toggle="tab">95</a></li>
								  <li><a href="#panel-home-96" data-toggle="tab">96</a></li>
								  <li><a href="#panel-home-97" data-toggle="tab">97</a></li>
								  <li><a href="#panel-home-98" data-toggle="tab">98</a></li>
								  <li><a href="#panel-home-99" data-toggle="tab">99</a></li>
								  <li><a href="#panel-home-100" data-toggle="tab">100</a></li>
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