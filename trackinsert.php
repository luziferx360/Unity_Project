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
echo "MySQL Connected : ";

$st = 1;

$sql = "
INSERT INTO `track` (`id`, `type`, `line`, `status`, `maxspd`, `length`, `color`, `tpt`, `bootstrap`) VALUES ('555', '', '', '', '50', '250', 'white', '5', '')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
