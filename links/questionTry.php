

<?php

include('db_connect.php');


					$sql = "SELECT * FROM questions";
					$result = $conn->query($sql);

?>





<div class="panel with-nav-tabs panel-success">
							  <div class="panel-heading">
								<label>Question  :</label>
							  </div>
							  <form action="done.php" method="POST">
								<div id="panel-collapse-1" class="collapse in">
									<div class="panel-body">
										<div class="tab-content">
<?php										
$panel = "";
$pannel = 1;

					if ($result->num_rows > 0) {

						
						
						// output data of each row
						while($row = $result->fetch_assoc()) {
	echo "<div class=tab-pane fade in active id=panel-home-".++$pannel.">";						
?>

<label><?php  echo $row["q"] ?></label><br>
<input type="radio" onclick="myFunction1()" name="q1" value="0"><?php  echo $row["a"] ?>
<br>
<input type="radio" onclick="myFunction1()" name="q1" value="1"><?php  echo $row["b"] ?><br>
<input type="radio" onclick="myFunction1()" name="q1" value="0"> <?php  echo $row["c"] ?><br>
<input type="radio" onclick="myFunction1()" name="q1" value="0"> <?php  echo $row["d"] ?> <br>
</div>







<?php
						}
						
					} else {
						echo "0 results";
					}
					$conn->close();



?>












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