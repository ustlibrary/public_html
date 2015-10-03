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
			
			
						<?php
							include('db_connect.php');
							$seat_search = "";
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$seat_search = $_POST["seat_search"];
							}
							?>
			<div class="row">
			<div class="double_line"></div>
				<div class="col-sm-4"></div>
				
				<div class="col-sm-4">
					
					
				
						<div class="the-box">
							
								<form role="form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								
										<div class="form-group">
											<label><u>Search Seat Status</u></label>
											<select class="form-control" name="seat_search">
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
													
											<button type="submit" class="btn btn-danger"><i class="fa fa-search"></i> Search</button>
		
										</div>
									</div>
				</div>
				
				<div class="col-sm-4"></div>
							

			</div>
			<div class="double_line"></div>
			<div class="row">
				
				
						<table class="table table-th-block table-primary"><thead>
						
							<?php
							$sql = "SELECT * FROM reader_info where seat_no = '$seat_search'";
							$result = $conn->query($sql);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
							if ($result->num_rows > 0) {
								echo "<tr><th style=width: 30px;>Seat Number: $seat_search </th></tr></thead>";
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "<tbody><tr><td><span style=color:deeppink>Time : ".$row["time"]."</span></td></tr></tbody> ";
									
								}
								echo "</table>";
							} else {
								echo "<button  class=btn btn-danger>Not Fill</button>";
							}
							$conn->close();
}
						?>
						
				</div>
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