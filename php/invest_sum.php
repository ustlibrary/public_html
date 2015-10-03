<?php
			include('db_connect.php');
			$sql = "SELECT SUM(amount) AS sum FROM  invest";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					$total = $row['sum'];
					
				}
			} else {
				echo "0 results";
			}
		?>