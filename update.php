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

    $id = $_POST['track_id'];
    $type = $_POST['track_type'];
    $line = $_POST['track_line'];
    $status = $_POST['track_status'];
    $maxspd = $_POST['maxspd'];
    $length = $_POST['length'];

    $sql = "INSERT INTO `track` (`id`, `type`, `line`, `status`, `maxspd`, `length`, `color`, `tpt`, `bootstrap`) 
                        VALUES ('$id', '$type', '$line', '$status','$maxspd','$length','', '', '')";

    $result = mysqli_query($conn,$sql);

?>