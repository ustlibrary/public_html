<?php
include('db_connect.php');
			$name = $_POST["f_name"];
			$mail = $_POST["email"];
			$mob = $_POST["mob"];
			$join_date = $_POST["join_date"];
			$valid = $_POST["valid"];
			$join_amount = $_POST["join_amount"];
			$due_amount = $_POST["due_amount"];
			$img = $_FILES["fileToUpload"];
			$id_card = $_FILES["idToUpload"];
			$seat = $_POST["seat"];
			$time = $_POST["time"];
			$shift = $_POST["shift"];
			
			
			//Reader Image 
			$target_dir = "reader_image/";
			$target_file = $target_dir . basename($img["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			
			//Reader id card
			$target_dir_id = "reader_id/";
			$target_id = $target_dir_id . basename($id_card["name"]);
			$uploadidOk = 1;
			$idFileType = pathinfo($target_id,PATHINFO_EXTENSION);
		//-------------- 
			
			
$favshift = $_POST["shift"];

	
		/************* 1 ****************/		 

   
        $sql = "INSERT INTO reader_info(shift,f_name,email,mob,join_date,valid,join_amount,due_amount,image_path,id_path,seat_no,time)
			VALUES ('$shift','$name','$mail','$mob','$join_date','$valid','$join_amount','$due_amount','$target_file','$target_id','$seat','$time')";
			
			if ($uploadOk == 0) {
									echo "Sorry, your file was not uploaded.";
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($img["tmp_name"], $target_file)) {
										echo "The file ". basename( $img["name"]). " has been uploaded.";
									} else {
										echo "Sorry, there was an error uploading your file.";
									}
								}
			if ($uploadidOk == 0) {
									echo "Sorry, your file was not uploaded.";
								// if everything is ok, try to upload file
								} else {
									if (move_uploaded_file($id_card["tmp_name"], $target_id)) {
										echo "The id has been uploaded.";
									} else {
										echo "Sorry, there was an error uploading your file.";
									}
								}
			
			
				if ($conn->query($sql) === TRUE) {
					echo "*New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

		$conn->close();

$to = "ustlibrary15@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <asupandey.vns@gmail.com>' . "\r\n";
$headers .= 'Cc: asupandey@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

	
	
	
	
	

?>
<html>
<body>

<center>
<a href="reader_info_fill.php">New Admission</a>

</center>

</body>

</html>
