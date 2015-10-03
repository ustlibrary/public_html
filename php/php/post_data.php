<?php
include('db_connect.php');
			$name = $_POST["f_name"];
			$mail = $_POST["email"];
			$mob = $_POST["mob"];
			$join_date = $_POST["join_date"];
			$valid = $_POST["valid"];
			$join_amount = $_POST["join_amount"];
			
$favshift = $_POST["shift"];

switch ($favshift) {
	
		/************* 1 ****************/		 

     case "2-4":
        $sql = "INSERT INTO 2_4(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
		break;
	/************* 2 ****************/		 
    
	case "5-6":
        $sql = "INSERT INTO 5_6(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
		 
		/************* 3 ****************/		 
	 
		 
		case "6-2":
         $sql = "INSERT INTO 6_2(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
		 
		/************* 4 ****************/		 
 
		 case "2-10":
         $sql = "INSERT INTO 2_10(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
		/************* 5 ****************/		 
 
		 case "5-9":
         $sql = "INSERT INTO 5_9(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
		 
		/************* 6 ****************/		 
	 
		 case "night":
         $sql = "INSERT INTO night(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
		 
	/************* 7 ****************/		 
		 case "spl":
         $sql = "INSERT INTO spl(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
	/************* 8 ****************/	 
		 case "10-6":
         $sql = "INSERT INTO 10_6(f_name,email,mob,join_date,valid,join_amount)
			VALUES ('$name','$mail','$mob','$join_date','$valid','$join_amount')";
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();
         break;
     default:
         echo "Your favorite color is neither red, blue, nor green!";
}
?>