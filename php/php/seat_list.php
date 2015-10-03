<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<?php
			include('db_connect.php');
			include('invest_sum.php');
		?>
		
		
		<div class="container">
			<div class="row">
				<button class="btn btn-perspective btn-lg margin-left30"><a href="reader_info_fill.php"> New Admission</a></button>

				<div class="pull-right">
					<button class="btn btn-perspective btn-lg margin-right20">Invest:  <i class="fa fa-rupee"></i>	<?php echo $total; ?>-/*</button></div>
					<button class="btn btn-perspective btn-lg pull-right ">Income:  <i class="fa fa-rupee"></i>	<?php echo "Blank"; ?>-/*</button></div>

			</div>
			<br><br>
			<div class="double_line"></div>
			<div class="double_line"></div>
			<?php
							
				include('db_connect.php');
									
					$sql="SELECT * FROM 2_4";

					if ($result=mysqli_query($conn	,$sql))
					  {
					  // Fetch one and one row
					  while ($row=mysqli_fetch_row($result))
						{
						$s1 = $row[3];
						}
					  // Free result set
					  mysqli_free_result($result);
					}
										
			?>
							
			
			<button class="btn btn-primary btn-lg"><h1>2 - 4 Hours</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30"><a href="reader_details.php"><?php echo $s1; ?></a></button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			<button class="btn btn-primary btn-lg"><h1>5 - 6 Hours</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30">1</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>

			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			<button class="btn btn-primary btn-lg"><h1>6am - 2pm</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30">1</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>

			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			<button class="btn btn-primary btn-lg"><h1>2pm - 10pm</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30">1</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			<button class="btn btn-primary btn-lg"><h1>5am - 9pm</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30">1</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			<button class="btn btn-primary btn-lg"><h1>Night(8pm - 5am)</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30">1</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			<button class="btn btn-primary btn-lg"><h1>Unlimited time*</h1></button>
			<button class="btn btn-danger btn-perspective btn-xs margin-left30">1</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			<button class="btn btn-danger btn-perspective btn-xs">5</button>
			<button class="btn btn-danger btn-perspective btn-xs">2</button>
			<button class="btn btn-danger btn-perspective btn-xs">3</button>
			<button class="btn btn-danger btn-perspective btn-xs">4</button>
			
			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			
			<div class="double_line"></div>
			<div class="double_line"></div>
			
			
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
		<script src="stylesheet/assets/js/jquery.min.js"></script>
		<script src="stylesheet/assets/js/bootstrap.min.js"></script>
		
		<!-- PLUGINS -->
		
		
		<!-- MAIN APPS JS -->
		<script src="stylesheet/assets/js/apps.js"></script>
		
	</body>
</html>