<?php
			include('db_connect.php');
			$sql_due = "SELECT SUM(due_amount) AS due FROM  reader_info";
			$result = mysqli_query($conn, $sql_due);
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$total_due = $row['due'];
					
				}
			} else {
				echo "0 results";
			}
		?>