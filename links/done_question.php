<?php
$nu= $_POST['nu'];

$q = $_POST['q'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];

include('db_connect.php');




$sql = "INSERT INTO questions (nu,q,a,b,c,d)
VALUES ('$nu','$q','$a','$b','$c','$d')";

if ($conn->query($sql) == TRUE) {

					
					echo "You are successfuly register on UST Library.";
					echo "<br>";
					echo "<a href=questionPost.php> Question Post Page </a>";
					
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}



?>