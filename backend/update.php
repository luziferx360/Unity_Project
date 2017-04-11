<?php
$servername = "mysql.hostinger.in.th";
$username = "u478022303_gap";
$password = "741456963";
$dbname = "u478022303_unity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "MySQL Connected<br>";

$st = 1;

$sql = "
	UPDATE train_session ,track 
	SET track.status = train_session.track_status
	WHERE session_no=1 AND track.id = 2 ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>