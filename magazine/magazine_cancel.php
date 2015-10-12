<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=/php/magazine_search.php">
        <script type="text/javascript">
            window.location.href = "http://ustlibrary.in/php/magazine_issue.php"
        </script>
        <title>Page Redirection</title>
    </head>
<body>
<?php

include('db_connect.php');
$magazin_name = "";
$magazin_name = $_POST["magazi_name"];

$sql = "UPDATE magazine_issue SET status='Cancel' WHERE magazine_name = '".$magazin_name."'";
if ($conn->query($sql) === TRUE) {
echo "*Update successfully";
} else {
echo "Error: " . $insql . "<br>" . $conn->error;
}





?>

</body>

</html>