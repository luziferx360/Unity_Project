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
$sql = "SELECT id, name, type , maxspeed FROM train";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>ID</b> : " . $row["id"]. 
        	 " <b>Name</b> : " . $row["name"]. 
        	 " <b>Type</b> : " . $row["type"]. 
        	 " <b>Maxspeed</b> : " . $row["maxspeed"]. 
        	 "<br>";
    }
        $id = $row["id"];
		echo "Vatiable ID = $id <br>";
		echo "ID " . $row["id"] . "<br>"; 
} else {
    echo "0 results";
}
$conn->close();
?>