<?php

$test_code = $_POST['test_code'];
echo $test_code;
$nu= $_POST['nu'];

$q = $_POST['q'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];

include('../links/db_connect.php');
$sql = "INSERT INTO ".$test_code." (nu,q,a,b,c,d) VALUES ('$nu','$q','$a','$b','$c','$d')";
if ($conn->query($sql) == TRUE) {
				
					echo "You are successfuly register on UST Library.";
					echo "<br>";
					echo "<a href=selectSubject.php> Question Post Page </a>";
					
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
?>


