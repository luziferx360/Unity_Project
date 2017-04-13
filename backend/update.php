<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "MySQL Connected<br>";

$st = 1;

$sql = "
	UPDATE track
	SET track.color = (SELECT track_color.color 
                          FROM   track_color 
                          WHERE  track.status = track_color.status)";
$sql = "UPDATE track
SET track.bootstrap = (SELECT color_translate.bootstrap_code 
                          FROM   color_translate 
                          WHERE  color_translate.bootstrap_color = track.color)";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>



"Update status color in track"

UPDATE track
SET track.color = (SELECT track_color.color 
                          FROM   track_color 
                          WHERE  track.status = track_color.status) 

"Translate color to bootstrap code"

UPDATE track
SET track.bootstrap = (SELECT color_translate.bootstrap_code 
                          FROM   color_translate 
                          WHERE  color_translate.bootstrap_color = track.color)