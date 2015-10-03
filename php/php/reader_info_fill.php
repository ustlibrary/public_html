<!DOCTYPE html>
<html lang="en">
	<?php include('head_links.php'); ?>
 
	<body>
	
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="container">
			<div class="row">
			
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="the-box">
							<h4 class="small-title"><u>SIMPLE ADMISSION FORM</u></h4>
								<form role="form"  method="post" action="post_data.php">
									<div class="form-group">
										<label>Shift</label>
										<select class="form-control" name="shift">
													<option>---</option>
													<option value="2-4">2 to 4 hours</option>
													<option value="5-6">5 to 6 hours</option>
													<option value="6-2">6am to 2pm</option>
													<option value="2-10">2pm to 10pm</option>
													<option value="10-6">10am to 6pm</option>
													<option value="5-9">5am to 9pm</option>
													<option value="night">night(8am to 5am)</option>
													<option value="spl">Special time</option>
													
												</select>
								    </div>
								
								  <div class="form-group">
									<label>Full name</label>
									<input type="text" name="f_name" class="form-control">
								  </div>
								  <div class="form-group">
									<label>Email address</label>
									<input type="email" name="email" class="form-control">
								  </div>
								  <div class="form-group">
									<label>Mob. No.</label>
									<input type="text" name="mob" class="form-control phone_us_masking" placeholder="+91-XXXXXXXXXX">
								  </div>
								  
								  <div class="form-group">
									<label>Joining date</label>
									
									<div class="row">
										<div class="col-sm-5"><input type="date" name="join_date" class="form-control"></div>
										<div class="col-sm-2">Up-to</div>
										<div class="col-sm-5"><input type="date" name="valid" class="form-control"></div> 
										
									</div>
									
								  </div>
								  <div class="form-group">
									<label>Joining Amount</label>
									<div class="input-group">
										<span class="input-group-addon info"><i class="fa fa-rupee"></i></span>
										<input type="text" name="join_amount" class="form-control" placeholder="Username">
									</div>
								</div>
								  
								  <div class="form-group">
									  <div class="checkbox">
										<label>
										  <div class="icheckbox_flat-grey" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="i-grey-flat" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> I've read and agree with <a href="#fakelink">Term and condition</a>
										</label>
									  </div>
								  </div>
								  <button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> Register</button>
								</form>
							</div>
				</div>
				<div class="col-sm-3"></div>
			
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
		<script src="../stylesheet/assets/timepicker/bootstrap-timepicker.js"></script>

		
		<!-- PLUGINS -->
		
		
		<!-- MAIN APPS JS -->
		<script src="../stylesheet/assets/js/apps.js"></script>
				<link href="../stylesheet/assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
				<link href="../stylesheet/assets/timepicker/bootstrap-timepicker.css" rel="stylesheet">

		
	</body>
</html>