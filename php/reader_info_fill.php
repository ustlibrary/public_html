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
								<form role="form"  method="post" action="post_data.php" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-4">
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
									</div>
									<div class="col-sm-4">
									
											<div class="form-group">
													<label>Seat</label>
													<select class="form-control" name="seat">
																<option>---</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
																<option value="24">24</option>
																<option value="25">25</option>
																<option value="26">26</option>
																<option value="27">27</option>
																<option value="28">28</option>
																<option value="29">29</option>
																<option value="30">30</option>
																<option value="31">31</option>
																<option value="32">32</option>
																<option value="33">33</option>
																<option value="34">34</option>
																<option value="35">35</option>
																<option value="36">36</option>
																<option value="37">37</option>
																<option value="38">38</option>
																<option value="39">39</option>
																<option value="40">40</option>
																<option value="41">41</option>
																<option value="42">42</option>
																<option value="43">43</option>
																<option value="44">44</option>
																<option value="45">45</option>
																<option value="46">46</option>
																<option value="47">47</option>
																<option value="48">48</option>
																<option value="49">49</option>
																<option value="50">50</option>
																<option value="51">51</option>
																<option value="52">52</option>
																<option value="53">53</option>
																<option value="54">54</option>
																
															</select>
												</div>
									
									</div>
									<div class="col-sm-4">
									
										<div class="form-group">
											<label>Time</label>
											<input type="text" name="time" class="form-control">
										</div>
									
									</div>
										
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
								  
									  <div class="row">
											<div class="col-sm-6">
												<label>Joining Amount</label>
												<div class="input-group">
													<span class="input-group-addon info"><i class="fa fa-rupee"></i></span>
													<input type="text" name="join_amount" class="form-control" placeholder="Username">
												</div>
											</div>
											
											<div class="col-sm-6">
											
											<label>Due Amount</label>
												<div class="input-group">
													<span class="input-group-addon info"><i class="fa fa-rupee"></i></span>
													<input type="text" name="due_amount" class="form-control" placeholder="Username">
												</div>
											</div> 
											
										</div>
								  
								  </div>
								  	<div class="row">
										<div class="col-sm-6">
										 <div class="form-group">
										
												<label>Select image to upload:<label>
													<input type="file" class="form-control" name="fileToUpload" id="fileToUpload">	
											</div>
										</div>
										<div class="col-sm-6">										
											<div class="form-group">
										
												<label>Select id image to upload:<label>
													<input type="file" class="form-control" name="idToUpload" id="idToUpload">	
											</div>
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