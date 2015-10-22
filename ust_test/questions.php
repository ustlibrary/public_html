
<?php
include('../links/db_connect.php');
?>

<div class="panel with-nav-tabs panel-success">
							  <div class="panel-heading">
								<label>Question  :</label>
							  </div>
	 <form action="done.php" method="POST">
			<div id="panel-collapse-1" class="collapse in">
				<div class="panel-body">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="panel-home-1">
					<?php
						$sql1 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 1";
										$result1 = $conn->query($sql1);
										if ($result1->num_rows > 0) {
											// output data of each row
											while($row1 = $result1->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row1["nu"].")".$row1["q"] ?></label><br>
					<input type="radio" onclick="myFunction1()" name="q1" value="0"> a) <?php  echo $row1["a"]; ?><br>
					<input type="radio" onclick="myFunction1()" name="q1" value="0"> b) <?php  echo $row1["b"]; ?> <br>
					<input type="radio" onclick="myFunction1()" name="q1" value="1"> c) <?php  echo $row1["c"]; ?>  <br>
					<input type="radio" onclick="myFunction1()" name="q1" value="0"> d) <?php  echo $row1["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade" id="panel-home-2">
						<?php
						$sql2 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 2";
										$result2 = $conn->query($sql2);
										if ($result2->num_rows > 0) {

											
											
											// output data of each row
											while($row2 = $result2->fetch_assoc()) {
					?>		
					<label>	<?php  echo "Q". $row2["nu"].")".$row2["q"] ?></label><br>
					<input type="radio" onclick="myFunction2()" name="q2" value="0"> a)  <?php  echo $row2["a"]; ?>  <br>
					<input type="radio" onclick="myFunction2()" name="q2" value="0"> b)  <?php  echo $row2["b"]; ?> <br>
					<input type="radio" onclick="myFunction2()" name="q2" value="0"> c)  <?php  echo $row2["c"]; ?> <br>
					<input type="radio" onclick="myFunction2()" name="q2" value="1"> d) <?php  echo $row2["d"]; ?> <br>
					<?php
						} } else {}
					?>
					</div>

					<div class="tab-pane fade " id="panel-home-3">
					<?php
						$sql3 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 3";
										$result3 = $conn->query($sql3);
										if ($result3->num_rows > 0) {
											// output data of each row
											while($row3 = $result3->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row3["nu"].")".$row3["q"] ?></label><br>
					<input type="radio" onclick="myFunction3()" name="q3" value="0"> a) <?php  echo $row3["a"]; ?><br>
					<input type="radio" onclick="myFunction3()" name="q3" value="1"> b) <?php  echo $row3["b"]; ?> <br>
					<input type="radio" onclick="myFunction3()" name="q3" value="0"> c) <?php  echo $row3["c"]; ?>  <br>
					<input type="radio" onclick="myFunction3()" name="q3" value="0"> d) <?php  echo $row3["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					
					<div class="tab-pane fade " id="panel-home-4">
					<?php
						$sql4 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 4";
										$result4 = $conn->query($sql4);
										if ($result4->num_rows > 0) {
											// output data of each row
											while($row4 = $result4->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row4["nu"].")".$row4["q"] ?></label><br>
					<input type="radio" onclick="myFunction4()" name="q4" value="0"> a) <?php  echo $row4["a"]; ?><br>
					<input type="radio" onclick="myFunction4()" name="q4" value="1"> b) <?php  echo $row4["b"]; ?> <br>
					<input type="radio" onclick="myFunction4()" name="q4" value="0"> c) <?php  echo $row4["c"]; ?>  <br>
					<input type="radio" onclick="myFunction4()" name="q4" value="0"> d) <?php  echo $row4["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-5">
					<?php
						$sql5 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 5";
										$result5 = $conn->query($sql5);
										if ($result5->num_rows > 0) {
											// output data of each row
											while($row5 = $result5->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row5["nu"].")".$row5["q"] ?></label><br>
					<input type="radio" onclick="myFunction5()" name="q5" value="1"> a) <?php  echo $row5["a"]; ?><br>
					<input type="radio" onclick="myFunction5()" name="q5" value="0"> b) <?php  echo $row5["b"]; ?> <br>
					<input type="radio" onclick="myFunction5()" name="q5" value="0"> c) <?php  echo $row5["c"]; ?>  <br>
					<input type="radio" onclick="myFunction5()" name="q5" value="0"> d) <?php  echo $row5["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-6">
					<?php
						$sql6 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 6";
										$result6 = $conn->query($sql6);
										if ($result6->num_rows > 0) {
											// output data of each row
											while($row6 = $result6->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row6["nu"].")".$row6["q"] ?></label><br>
					<input type="radio" onclick="myFunction6()" name="q6" value="0"> a) <?php  echo $row6["a"]; ?><br>
					<input type="radio" onclick="myFunction6()" name="q6" value="1"> b) <?php  echo $row6["b"]; ?> <br>
					<input type="radio" onclick="myFunction6()" name="q6" value="0"> c) <?php  echo $row6["c"]; ?>  <br>
					<input type="radio" onclick="myFunction6()" name="q6" value="0"> d) <?php  echo $row6["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-7">
					<?php
						$sql7 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 7";
										$result7 = $conn->query($sql7);
										if ($result7->num_rows > 0) {
											// output data of each row
											while($row7 = $result7->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row7["nu"].")".$row7["q"] ?></label><br>
					<input type="radio" onclick="myFunction7()" name="q7" value="0"> a) <?php  echo $row7["a"]; ?><br>
					<input type="radio" onclick="myFunction7()" name="q7" value="0"> b) <?php  echo $row7["b"]; ?> <br>
					<input type="radio" onclick="myFunction7()" name="q7" value="1"> c) <?php  echo $row7["c"]; ?>  <br>
					<input type="radio" onclick="myFunction7()" name="q7" value="0"> d) <?php  echo $row7["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-8">
					<?php
						$sql8 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 8";
										$result8 = $conn->query($sql8);
										if ($result8->num_rows > 0) {
											// output data of each row
											while($row8 = $result8->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row8["nu"].")".$row8["q"] ?></label><br>
					<input type="radio" onclick="myFunction8()" name="q8" value="0"> a) <?php  echo $row8["a"]; ?><br>
					<input type="radio" onclick="myFunction8()" name="q8" value="1"> b) <?php  echo $row8["b"]; ?> <br>
					<input type="radio" onclick="myFunction8()" name="q8" value="0"> c) <?php  echo $row8["c"]; ?>  <br>
					<input type="radio" onclick="myFunction8()" name="q8" value="0"> d) <?php  echo $row8["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-9">
					<?php
						$sql9 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 9";
										$result9 = $conn->query($sql9);
										if ($result9->num_rows > 0) {
											// output data of each row
											while($row9 = $result9->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row9["nu"].")".$row9["q"] ?></label><br>
					<input type="radio" onclick="myFunction9()" name="q9" value="1"> a) <?php  echo $row9["a"]; ?><br>
					<input type="radio" onclick="myFunction9()" name="q9" value="0"> b) <?php  echo $row9["b"]; ?> <br>
					<input type="radio" onclick="myFunction9()" name="q9" value="0"> c) <?php  echo $row9["c"]; ?>  <br>
					<input type="radio" onclick="myFunction9()" name="q9" value="0"> d) <?php  echo $row9["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-10">
					<?php
						$sql10 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 10";
										$result10 = $conn->query($sql10);
										if ($result10->num_rows > 0) {
											// output data of each row
											while($row10 = $result10->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row10["nu"].")".$row10["q"] ?></label><br>
					<input type="radio" onclick="myFunction10()" name="q10" value="0"> a) <?php  echo $row10["a"]; ?><br>
					<input type="radio" onclick="myFunction10()" name="q10" value="1"> b) <?php  echo $row10["b"]; ?> <br>
					<input type="radio" onclick="myFunction10()" name="q10" value="0"> c) <?php  echo $row10["c"]; ?>  <br>
					<input type="radio" onclick="myFunction10()" name="q10" value="0"> d) <?php  echo $row10["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>

					<div class="tab-pane fade " id="panel-home-11">
					<?php
						$sql11 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 11";
										$result11 = $conn->query($sql11);
										if ($result11->num_rows > 0) {
											// output data of each row
											while($row11 = $result11->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row11["nu"].")".$row11["q"] ?></label><br>
					<input type="radio" onclick="myFunction11()" name="q11" value="0"> a) <?php  echo $row11["a"]; ?><br>
					<input type="radio" onclick="myFunction11()" name="q11" value="1"> b) <?php  echo $row11["b"]; ?> <br>
					<input type="radio" onclick="myFunction11()" name="q11" value="0"> c) <?php  echo $row11["c"]; ?>  <br>
					<input type="radio" onclick="myFunction11()" name="q11" value="0"> d) <?php  echo $row11["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-12">
					<?php
						$sql12 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 12";
										$result12 = $conn->query($sql12);
										if ($result12->num_rows > 0) {
											// output data of each row
											while($row12 = $result12->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row12["nu"].")".$row12["q"] ?></label><br>
					<input type="radio" onclick="myFunction12()" name="q12" value="0"> a) <?php  echo $row12["a"]; ?><br>
					<input type="radio" onclick="myFunction12()" name="q12" value="1"> b) <?php  echo $row12["b"]; ?> <br>
					<input type="radio" onclick="myFunction12()" name="q12" value="0"> c) <?php  echo $row12["c"]; ?>  <br>
					<input type="radio" onclick="myFunction12()" name="q12" value="0"> d) <?php  echo $row12["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-13">
					<?php
						$sql13 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 13";
										$result13 = $conn->query($sql13);
										if ($result13->num_rows > 0) {
											// output data of each row
											while($row13 = $result13->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row13["nu"].")".$row13["q"] ?></label><br>
					<input type="radio" onclick="myFunction13()" name="q13" value="0"> a) <?php  echo $row13["a"]; ?><br>
					<input type="radio" onclick="myFunction13()" name="q13" value="0"> b) <?php  echo $row13["b"]; ?> <br>
					<input type="radio" onclick="myFunction13()" name="q13" value="0"> c) <?php  echo $row13["c"]; ?>  <br>
					<input type="radio" onclick="myFunction13()" name="q13" value="0"> d) <?php  echo $row13["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-14">
					<?php
						$sql14 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 14";
										$result14 = $conn->query($sql14);
										if ($result14->num_rows > 0) {
											// output data of each row
											while($row14 = $result14->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row14["nu"].")".$row14["q"] ?></label><br>
					<input type="radio" onclick="myFunction14()" name="q14" value="0"> a) <?php  echo $row14["a"]; ?><br>
					<input type="radio" onclick="myFunction14()" name="q14" value="1"> b) <?php  echo $row14["b"]; ?> <br>
					<input type="radio" onclick="myFunction14()" name="q14" value="0"> c) <?php  echo $row14["c"]; ?>  <br>
					<input type="radio" onclick="myFunction14()" name="q14" value="0"> d) <?php  echo $row14["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-15">
					<?php
						$sql15 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 15";
										$result15 = $conn->query($sql15);
										if ($result15->num_rows > 0) {
											// output data of each row
											while($row15 = $result15->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row15["nu"].")".$row15["q"] ?></label><br>
					<input type="radio" onclick="myFunction15()" name="q15" value="0"> a) <?php  echo $row15["a"]; ?><br>
					<input type="radio" onclick="myFunction15()" name="q15" value="0"> b) <?php  echo $row15["b"]; ?> <br>
					<input type="radio" onclick="myFunction15()" name="q15" value="0"> c) <?php  echo $row15["c"]; ?>  <br>
					<input type="radio" onclick="myFunction15()" name="q15" value="0"> d) <?php  echo $row15["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-16">
					<?php
						$sql16 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 16";
										$result16 = $conn->query($sql16);
										if ($result16->num_rows > 0) {
											// output data of each row
											while($row16 = $result16->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row16["nu"].")".$row16["q"] ?></label><br>
					<input type="radio" onclick="myFunction16()" name="q16" value="1"> a) <?php  echo $row16["a"]; ?><br>
					<input type="radio" onclick="myFunction16()" name="q16" value="0"> b) <?php  echo $row16["b"]; ?> <br>
					<input type="radio" onclick="myFunction16()" name="q16" value="0"> c) <?php  echo $row16["c"]; ?>  <br>
					<input type="radio" onclick="myFunction16()" name="q16" value="0"> d) <?php  echo $row16["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-17">
					<?php
						$sql17 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 17";
										$result17 = $conn->query($sql17);
										if ($result17->num_rows > 0) {
											// output data of each row
											while($row17 = $result17->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row17["nu"].")".$row17["q"] ?></label><br>
					<input type="radio" onclick="myFunction17()" name="q17" value="0"> a) <?php  echo $row17["a"]; ?><br>
					<input type="radio" onclick="myFunction17()" name="q17" value="0"> b) <?php  echo $row17["b"]; ?> <br>
					<input type="radio" onclick="myFunction17()" name="q17" value="1"> c) <?php  echo $row17["c"]; ?>  <br>
					<input type="radio" onclick="myFunction17()" name="q17" value="0"> d) <?php  echo $row17["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-18">
					<?php
						$sql18 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 18";
										$result18 = $conn->query($sql18);
										if ($result18->num_rows > 0) {
											// output data of each row
											while($row18 = $result18->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row18["nu"].")".$row18["q"] ?></label><br>
					<input type="radio" onclick="myFunction18()" name="q18" value="0"> a) <?php  echo $row18["a"]; ?><br>
					<input type="radio" onclick="myFunction18()" name="q18" value="1"> b) <?php  echo $row18["b"]; ?> <br>
					<input type="radio" onclick="myFunction18()" name="q18" value="0"> c) <?php  echo $row18["c"]; ?>  <br>
					<input type="radio" onclick="myFunction18()" name="q18" value="0"> d) <?php  echo $row18["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-19">
					<?php
						$sql19 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 19";
										$result19 = $conn->query($sql19);
										if ($result19->num_rows > 0) {
											// output data of each row
											while($row19 = $result19->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row19["nu"].")".$row19["q"] ?></label><br>
					<input type="radio" onclick="myFunction19()" name="q19" value="0"> a) <?php  echo $row19["a"]; ?><br>
					<input type="radio" onclick="myFunction19()" name="q19" value="0"> b) <?php  echo $row19["b"]; ?> <br>
					<input type="radio" onclick="myFunction19()" name="q19" value="0"> c) <?php  echo $row19["c"]; ?>  <br>
					<input type="radio" onclick="myFunction19()" name="q19" value="1"> d) <?php  echo $row19["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-20">
					<?php
						$sql20 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 20";
										$result20 = $conn->query($sql20);
										if ($result20->num_rows > 0) {
											// output data of each row
											while($row20 = $result20->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row20["nu"].")".$row20["q"] ?></label><br>
					<input type="radio" onclick="myFunction20()" name="q20" value="0"> a) <?php  echo $row20["a"]; ?><br>
					<input type="radio" onclick="myFunction20()" name="q20" value="0"> b) <?php  echo $row20["b"]; ?> <br>
					<input type="radio" onclick="myFunction20()" name="q20" value="0"> c) <?php  echo $row20["c"]; ?>  <br>
					<input type="radio" onclick="myFunction20()" name="q20" value="1"> d) <?php  echo $row20["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-21">
					<?php
						$sql21 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 21";
										$result21 = $conn->query($sql21);
										if ($result21->num_rows > 0) {
											// output data of each row
											while($row21 = $result21->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row21["nu"].")".$row21["q"] ?></label><br>
					<input type="radio" onclick="myFunction21()" name="q21" value="1"> a) <?php  echo $row21["a"]; ?><br>
					<input type="radio" onclick="myFunction21()" name="q21" value="0"> b) <?php  echo $row21["b"]; ?> <br>
					<input type="radio" onclick="myFunction21()" name="q21" value="0"> c) <?php  echo $row21["c"]; ?>  <br>
					<input type="radio" onclick="myFunction21()" name="q21" value="0"> d) <?php  echo $row21["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-22">
					<?php
						$sql22 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 22";
										$result22 = $conn->query($sql22);
										if ($result22->num_rows > 0) {
											// output data of each row
											while($row22 = $result22->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row22["nu"].")".$row22["q"] ?></label><br>
					<input type="radio" onclick="myFunction22()" name="q22" value="0"> a) <?php  echo $row22["a"]; ?><br>
					<input type="radio" onclick="myFunction22()" name="q22" value="0"> b) <?php  echo $row22["b"]; ?> <br>
					<input type="radio" onclick="myFunction22()" name="q22" value="1"> c) <?php  echo $row22["c"]; ?>  <br>
					<input type="radio" onclick="myFunction22()" name="q22" value="0"> d) <?php  echo $row22["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-23">
					<?php
						$sql23 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 23";
										$result23 = $conn->query($sql23);
										if ($result23->num_rows > 0) {
											// output data of each row
											while($row23 = $result23->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row23["nu"].")".$row23["q"] ?></label><br>
					<input type="radio" onclick="myFunction23()" name="q23" value="0"> a) <?php  echo $row23["a"]; ?><br>
					<input type="radio" onclick="myFunction23()" name="q23" value="0"> b) <?php  echo $row23["b"]; ?> <br>
					<input type="radio" onclick="myFunction23()" name="q23" value="1"> c) <?php  echo $row23["c"]; ?>  <br>
					<input type="radio" onclick="myFunction23()" name="q23" value="0"> d) <?php  echo $row23["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-24">
					<?php
						$sql24 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 24";
										$result24 = $conn->query($sql24);
										if ($result24->num_rows > 0) {
											// output data of each row
											while($row24 = $result24->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row24["nu"].")".$row24["q"] ?></label><br>
					<input type="radio" onclick="myFunction24()" name="q24" value="0"> a) <?php  echo $row24["a"]; ?><br>
					<input type="radio" onclick="myFunction24()" name="q24" value="1"> b) <?php  echo $row24["b"]; ?> <br>
					<input type="radio" onclick="myFunction24()" name="q24" value="0"> c) <?php  echo $row24["c"]; ?>  <br>
					<input type="radio" onclick="myFunction24()" name="q24" value="0"> d) <?php  echo $row24["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-25">
					<?php
						$sql25 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 25";
										$result25 = $conn->query($sql25);
										if ($result25->num_rows > 0) {
											// output data of each row
											while($row25 = $result25->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row25["nu"].")".$row25["q"] ?></label><br>
					<input type="radio" onclick="myFunction25()" name="q25" value="0"> a) <?php  echo $row25["a"]; ?><br>
					<input type="radio" onclick="myFunction25()" name="q25" value="0"> b) <?php  echo $row25["b"]; ?> <br>
					<input type="radio" onclick="myFunction25()" name="q25" value="1"> c) <?php  echo $row25["c"]; ?>  <br>
					<input type="radio" onclick="myFunction25()" name="q25" value="0"> d) <?php  echo $row25["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-26">
					<?php
						$sql26 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 26";
										$result26 = $conn->query($sql26);
										if ($result26->num_rows > 0) {
											// output data of each row
											while($row26 = $result26->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row26["nu"].")".$row26["q"] ?></label><br>
					<input type="radio" onclick="myFunction26()" name="q26" value="1"> a) <?php  echo $row26["a"]; ?><br>
					<input type="radio" onclick="myFunction26()" name="q26" value="0"> b) <?php  echo $row26["b"]; ?> <br>
					<input type="radio" onclick="myFunction26()" name="q26" value="0"> c) <?php  echo $row26["c"]; ?>  <br>
					<input type="radio" onclick="myFunction26()" name="q26" value="0"> d) <?php  echo $row26["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-27">
					<?php
						$sql27 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 27";
										$result27 = $conn->query($sql27);
										if ($result27->num_rows > 0) {
											// output data of each row
											while($row27 = $result27->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row27["nu"].")".$row27["q"] ?></label><br>
					<input type="radio" onclick="myFunction27()" name="q27" value="0"> a) <?php  echo $row27["a"]; ?><br>
					<input type="radio" onclick="myFunction27()" name="q27" value="0"> b) <?php  echo $row27["b"]; ?> <br>
					<input type="radio" onclick="myFunction27()" name="q27" value="0"> c) <?php  echo $row27["c"]; ?>  <br>
					<input type="radio" onclick="myFunction27()" name="q27" value="1"> d) <?php  echo $row27["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-28">
					<?php
						$sql28 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 28";
										$result28 = $conn->query($sql28);
										if ($result28->num_rows > 0) {
											// output data of each row
											while($row28 = $result28->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row28["nu"].")".$row28["q"] ?></label><br>
					<input type="radio" onclick="myFunction28()" name="q28" value="0"> a) <?php  echo $row28["a"]; ?><br>
					<input type="radio" onclick="myFunction28()" name="q28" value="0"> b) <?php  echo $row28["b"]; ?> <br>
					<input type="radio" onclick="myFunction28()" name="q28" value="1"> c) <?php  echo $row28["c"]; ?>  <br>
					<input type="radio" onclick="myFunction28()" name="q28" value="0"> d) <?php  echo $row28["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-29">
					<?php
						$sql29 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 29";
										$result29 = $conn->query($sql29);
										if ($result29->num_rows > 0) {
											// output data of each row
											while($row29 = $result29->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row29["nu"].")".$row29["q"] ?></label><br>
					<input type="radio" onclick="myFunction29()" name="q29" value="0"> a) <?php  echo $row29["a"]; ?><br>
					<input type="radio" onclick="myFunction29()" name="q29" value="0"> b) <?php  echo $row29["b"]; ?> <br>
					<input type="radio" onclick="myFunction29()" name="q29" value="0"> c) <?php  echo $row29["c"]; ?>  <br>
					<input type="radio" onclick="myFunction29()" name="q29" value="1"> d) <?php  echo $row29["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-30">
					<?php
						$sql30 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 30";
										$result30 = $conn->query($sql30);
										if ($result30->num_rows > 0) {
											// output data of each row
											while($row30 = $result30->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row30["nu"].")".$row30["q"] ?></label><br>
					<input type="radio" onclick="myFunction30()" name="q30" value="0"> a) <?php  echo $row30["a"]; ?><br>
					<input type="radio" onclick="myFunction30()" name="q30" value="0"> b) <?php  echo $row30["b"]; ?> <br>
					<input type="radio" onclick="myFunction30()" name="q30" value="0"> c) <?php  echo $row30["c"]; ?>  <br>
					<input type="radio" onclick="myFunction30()" name="q30" value="1"> d) <?php  echo $row30["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-31">
					<?php
						$sql31 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 31";
										$result31 = $conn->query($sql31);
										if ($result31->num_rows > 0) {
											// output data of each row
											while($row31 = $result31->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row31["nu"].")".$row31["q"] ?></label><br>
					<input type="radio" onclick="myFunction31()" name="q31" value="0"> a) <?php  echo $row31["a"]; ?><br>
					<input type="radio" onclick="myFunction31()" name="q31" value="0"> b) <?php  echo $row31["b"]; ?> <br>
					<input type="radio" onclick="myFunction31()" name="q31" value="0"> c) <?php  echo $row31["c"]; ?>  <br>
					<input type="radio" onclick="myFunction31()" name="q31" value="1"> d) <?php  echo $row31["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-32">
					<?php
						$sql32 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 32";
										$result32 = $conn->query($sql32);
										if ($result32->num_rows > 0) {
											// output data of each row
											while($row32 = $result32->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row32["nu"].")".$row32["q"] ?></label><br>
					<input type="radio" onclick="myFunction32()" name="q32" value="0"> a) <?php  echo $row32["a"]; ?><br>
					<input type="radio" onclick="myFunction32()" name="q32" value="0"> b) <?php  echo $row32["b"]; ?> <br>
					<input type="radio" onclick="myFunction32()" name="q32" value="1"> c) <?php  echo $row32["c"]; ?>  <br>
					<input type="radio" onclick="myFunction32()" name="q32" value="0"> d) <?php  echo $row32["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-33">
					<?php
						$sql33 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 33";
										$result33 = $conn->query($sql33);
										if ($result33->num_rows > 0) {
											// output data of each row
											while($row33 = $result33->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row33["nu"].")".$row33["q"] ?></label><br>
					<input type="radio" onclick="myFunction33()" name="q33" value="0"> a) <?php  echo $row33["a"]; ?><br>
					<input type="radio" onclick="myFunction33()" name="q33" value="1"> b) <?php  echo $row33["b"]; ?> <br>
					<input type="radio" onclick="myFunction33()" name="q33" value="0"> c) <?php  echo $row33["c"]; ?>  <br>
					<input type="radio" onclick="myFunction33()" name="q33" value="0"> d) <?php  echo $row33["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-34">
					<?php
						$sql34 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 34";
										$result34 = $conn->query($sql34);
										if ($result34->num_rows > 0) {
											// output data of each row
											while($row34 = $result34->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row34["nu"].")".$row34["q"] ?></label><br>
					<input type="radio" onclick="myFunction34()" name="q34" value="0"> a) <?php  echo $row34["a"]; ?><br>
					<input type="radio" onclick="myFunction34()" name="q34" value="0"> b) <?php  echo $row34["b"]; ?> <br>
					<input type="radio" onclick="myFunction34()" name="q34" value="1"> c) <?php  echo $row34["c"]; ?>  <br>
					<input type="radio" onclick="myFunction34()" name="q34" value="0"> d) <?php  echo $row34["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-35">
					<?php
						$sql35 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 35";
										$result35 = $conn->query($sql35);
										if ($result35->num_rows > 0) {
											// output data of each row
											while($row35 = $result35->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row35["nu"].")".$row35["q"] ?></label><br>
					<input type="radio" onclick="myFunction35()" name="q35" value="0"> a) <?php  echo $row35["a"]; ?><br>
					<input type="radio" onclick="myFunction35()" name="q35" value="0"> b) <?php  echo $row35["b"]; ?> <br>
					<input type="radio" onclick="myFunction35()" name="q35" value="1"> c) <?php  echo $row35["c"]; ?>  <br>
					<input type="radio" onclick="myFunction35()" name="q35" value="0"> d) <?php  echo $row35["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-36">
					<?php
						$sql36 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 36";
										$result36 = $conn->query($sql36);
										if ($result36->num_rows > 0) {
											// output data of each row
											while($row36 = $result36->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row36["nu"].")".$row36["q"] ?></label><br>
					<input type="radio" onclick="myFunction36()" name="q36" value="0"> a) <?php  echo $row36["a"]; ?><br>
					<input type="radio" onclick="myFunction36()" name="q36" value="1"> b) <?php  echo $row36["b"]; ?> <br>
					<input type="radio" onclick="myFunction36()" name="q36" value="0"> c) <?php  echo $row36["c"]; ?>  <br>
					<input type="radio" onclick="myFunction36()" name="q36" value="0"> d) <?php  echo $row36["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-37">
					<?php
						$sql37 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 37";
										$result37 = $conn->query($sql37);
										if ($result37->num_rows > 0) {
											// output data of each row
											while($row37 = $result37->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row37["nu"].")".$row37["q"] ?></label><br>
					<input type="radio" onclick="myFunction37()" name="q37" value="1"> a) <?php  echo $row37["a"]; ?><br>
					<input type="radio" onclick="myFunction37()" name="q37" value="0"> b) <?php  echo $row37["b"]; ?> <br>
					<input type="radio" onclick="myFunction37()" name="q37" value="0"> c) <?php  echo $row37["c"]; ?>  <br>
					<input type="radio" onclick="myFunction37()" name="q37" value="0"> d) <?php  echo $row37["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-38">
					<?php
						$sql38 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 38";
										$result38 = $conn->query($sql38);
										if ($result38->num_rows > 0) {
											// output data of each row
											while($row38 = $result38->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row38["nu"].")".$row38["q"] ?></label><br>
					<input type="radio" onclick="myFunction38()" name="q38" value="1"> a) <?php  echo $row38["a"]; ?><br>
					<input type="radio" onclick="myFunction38()" name="q38" value="0"> b) <?php  echo $row38["b"]; ?> <br>
					<input type="radio" onclick="myFunction38()" name="q38" value="0"> c) <?php  echo $row38["c"]; ?>  <br>
					<input type="radio" onclick="myFunction38()" name="q38" value="0"> d) <?php  echo $row38["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-39">
					<?php
						$sql39 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 39";
										$result39 = $conn->query($sql39);
										if ($result39->num_rows > 0) {
											// output data of each row
											while($row39 = $result39->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row39["nu"].")".$row39["q"] ?></label><br>
					<input type="radio" onclick="myFunction39()" name="q39" value="1"> a) <?php  echo $row39["a"]; ?><br>
					<input type="radio" onclick="myFunction39()" name="q39" value="0"> b) <?php  echo $row39["b"]; ?> <br>
					<input type="radio" onclick="myFunction39()" name="q39" value="0"> c) <?php  echo $row39["c"]; ?>  <br>
					<input type="radio" onclick="myFunction39()" name="q39" value="0"> d) <?php  echo $row39["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-40">
					<?php
						$sql40 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 40";
										$result40 = $conn->query($sql40);
										if ($result40->num_rows > 0) {
											// output data of each row
											while($row40 = $result40->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row40["nu"].")".$row40["q"] ?></label><br>
					<input type="radio" onclick="myFunction40()" name="q40" value="0"> a) <?php  echo $row40["a"]; ?><br>
					<input type="radio" onclick="myFunction40()" name="q40" value="1"> b) <?php  echo $row40["b"]; ?> <br>
					<input type="radio" onclick="myFunction40()" name="q40" value="0"> c) <?php  echo $row40["c"]; ?>  <br>
					<input type="radio" onclick="myFunction40()" name="q40" value="0"> d) <?php  echo $row40["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-41">
					<?php
						$sql41 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 41";
										$result41 = $conn->query($sql41);
										if ($result41->num_rows > 0) {
											// output data of each row
											while($row41 = $result41->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row41["nu"].")".$row41["q"] ?></label><br>
					<input type="radio" onclick="myFunction41()" name="q41" value="0"> a) <?php  echo $row41["a"]; ?><br>
					<input type="radio" onclick="myFunction41()" name="q41" value="0"> b) <?php  echo $row41["b"]; ?> <br>
					<input type="radio" onclick="myFunction41()" name="q41" value="0"> c) <?php  echo $row41["c"]; ?>  <br>
					<input type="radio" onclick="myFunction41()" name="q41" value="1"> d) <?php  echo $row41["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-42">
					<?php
						$sql42 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 42";
										$result42 = $conn->query($sql42);
										if ($result42->num_rows > 0) {
											// output data of each row
											while($row42 = $result42->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row42["nu"].")".$row42["q"] ?></label><br>
					<input type="radio" onclick="myFunction42()" name="q42" value="0"> a) <?php  echo $row42["a"]; ?><br>
					<input type="radio" onclick="myFunction42()" name="q42" value="0"> b) <?php  echo $row42["b"]; ?> <br>
					<input type="radio" onclick="myFunction42()" name="q42" value="0"> c) <?php  echo $row42["c"]; ?>  <br>
					<input type="radio" onclick="myFunction42()" name="q42" value="1"> d) <?php  echo $row42["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-43">
					<?php
						$sql43 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 43";
										$result43 = $conn->query($sql43);
										if ($result43->num_rows > 0) {
											// output data of each row
											while($row43 = $result43->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row43["nu"].")".$row43["q"] ?></label><br>
					<input type="radio" onclick="myFunction43()" name="q43" value="0"> a) <?php  echo $row43["a"]; ?><br>
					<input type="radio" onclick="myFunction43()" name="q43" value="0"> b) <?php  echo $row43["b"]; ?> <br>
					<input type="radio" onclick="myFunction43()" name="q43" value="1"> c) <?php  echo $row43["c"]; ?>  <br>
					<input type="radio" onclick="myFunction43()" name="q43" value="0"> d) <?php  echo $row43["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-44">
					<?php
						$sql44 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 44";
										$result44 = $conn->query($sql44);
										if ($result44->num_rows > 0) {
											// output data of each row
											while($row44 = $result44->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row44["nu"].")".$row44["q"] ?></label><br>
					<input type="radio" onclick="myFunction44()" name="q44" value="0"> a) <?php  echo $row44["a"]; ?><br>
					<input type="radio" onclick="myFunction44()" name="q44" value="1"> b) <?php  echo $row44["b"]; ?> <br>
					<input type="radio" onclick="myFunction44()" name="q44" value="0"> c) <?php  echo $row44["c"]; ?>  <br>
					<input type="radio" onclick="myFunction44()" name="q44" value="0"> d) <?php  echo $row44["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-45">
					<?php
						$sql45 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 45";
										$result45 = $conn->query($sql45);
										if ($result45->num_rows > 0) {
											// output data of each row
											while($row45 = $result45->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row45["nu"].")".$row45["q"] ?></label><br>
					<input type="radio" onclick="myFunction45()" name="q45" value="1"> a) <?php  echo $row45["a"]; ?><br>
					<input type="radio" onclick="myFunction45()" name="q45" value="0"> b) <?php  echo $row45["b"]; ?> <br>
					<input type="radio" onclick="myFunction45()" name="q45" value="0"> c) <?php  echo $row45["c"]; ?>  <br>
					<input type="radio" onclick="myFunction45()" name="q45" value="0"> d) <?php  echo $row45["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-46">
					<?php
						$sql46 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 46";
										$result46 = $conn->query($sql46);
										if ($result46->num_rows > 0) {
											// output data of each row
											while($row46 = $result46->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row46["nu"].")".$row46["q"] ?></label><br>
					<input type="radio" onclick="myFunction46()" name="q46" value="0"> a) <?php  echo $row46["a"]; ?><br>
					<input type="radio" onclick="myFunction46()" name="q46" value="0"> b) <?php  echo $row46["b"]; ?> <br>
					<input type="radio" onclick="myFunction46()" name="q46" value="0"> c) <?php  echo $row46["c"]; ?>  <br>
					<input type="radio" onclick="myFunction46()" name="q46" value="1"> d) <?php  echo $row46["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-47">
					<?php
						$sql47 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 47";
										$result47 = $conn->query($sql47);
										if ($result47->num_rows > 0) {
											// output data of each row
											while($row47 = $result47->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row47["nu"].")".$row47["q"] ?></label><br>
					<input type="radio" onclick="myFunction47()" name="q47" value="0"> a) <?php  echo $row47["a"]; ?><br>
					<input type="radio" onclick="myFunction47()" name="q47" value="0"> b) <?php  echo $row47["b"]; ?> <br>
					<input type="radio" onclick="myFunction47()" name="q47" value="1"> c) <?php  echo $row47["c"]; ?>  <br>
					<input type="radio" onclick="myFunction47()" name="q47" value="0"> d) <?php  echo $row47["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-48">
					<?php
						$sql48 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 48";
										$result48 = $conn->query($sql48);
										if ($result48->num_rows > 0) {
											// output data of each row
											while($row48 = $result48->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row48["nu"].")".$row48["q"] ?></label><br>
					<input type="radio" onclick="myFunction48()" name="q48" value="0"> a) <?php  echo $row48["a"]; ?><br>
					<input type="radio" onclick="myFunction48()" name="q48" value="0"> b) <?php  echo $row48["b"]; ?> <br>
					<input type="radio" onclick="myFunction48()" name="q48" value="0"> c) <?php  echo $row48["c"]; ?>  <br>
					<input type="radio" onclick="myFunction48()" name="q48" value="1"> d) <?php  echo $row48["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-49">
					<?php
						$sql49 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 49";
										$result49 = $conn->query($sql49);
										if ($result49->num_rows > 0) {
											// output data of each row
											while($row49 = $result49->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row49["nu"].")".$row49["q"] ?></label><br>
					<input type="radio" onclick="myFunction49()" name="q49" value="1"> a) <?php  echo $row49["a"]; ?><br>
					<input type="radio" onclick="myFunction49()" name="q49" value="0"> b) <?php  echo $row49["b"]; ?> <br>
					<input type="radio" onclick="myFunction49()" name="q49" value="0"> c) <?php  echo $row49["c"]; ?>  <br>
					<input type="radio" onclick="myFunction49()" name="q49" value="0"> d) <?php  echo $row49["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>
					<div class="tab-pane fade " id="panel-home-50">
					<?php
						$sql50 = "SELECT * FROM ".$_SESSION['t_code']." WHERE nu = 50";
										$result50 = $conn->query($sql50);
										if ($result50->num_rows > 0) {
											// output data of each row
											while($row50 = $result50->fetch_assoc()) {
					?>					
					<label><?php  echo "Q". $row50["nu"].")".$row50["q"] ?></label><br>
					<input type="radio" onclick="myFunction50()" name="q50" value="0"> a) <?php  echo $row50["a"]; ?><br>
					<input type="radio" onclick="myFunction50()" name="q50" value="0"> b) <?php  echo $row50["b"]; ?> <br>
					<input type="radio" onclick="myFunction50()" name="q50" value="0"> c) <?php  echo $row50["c"]; ?>  <br>
					<input type="radio" onclick="myFunction50()" name="q50" value="1"> d) <?php  echo $row50["d"]; ?> <br>
					<?php
						}
						 } else {}
					?>
					</div>



					<div class="tab-pane fade" id="panel-home-101">
					<center>
					<label>Final Submission Here, When You have Completed Your Test.
					<br>Click on below button</label>
					<br>

					<button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Test Done</button>

					</center>
					</div>



				</div><!-- /.tab-content -->
										
			</div><!-- /.panel-body -->
						
		</div><!-- /.collapse in -->
	</div><!-- /.panel .panel-success -->
</form>
<label>Note:- *Choose your question number from right side,Then click your option. !!!All The Best!!!</label>