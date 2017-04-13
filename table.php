<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unity";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno($conn)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://unityproject.96.lt/assets/unity.ico">
    <title>Train Operation Simulator</title>
    <link href="./CSS/bootstrap.min.css" rel="stylesheet">
    <link href="./CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="./CSS/navbar.css" rel="stylesheet">
    <script src="./CSS/ie-emulation-modes-warning.js.download"></script>
  </head>

  <body>
<!-- Main Body -->    
  <table class="table table-condensed">
    <?php

    $sql = "SELECT id, type, status ,line ,maxspd ,length ,color FROM track";
    $result=mysqli_query($conn, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $table_id[$i] = $row['id'];
        $table_type[$i] = $row['type'];
        $table_line[$i] = $row['line'];
        $table_status[$i] = $row['status'];
        $table_maxspd[$i] = $row['maxspd'];
        $table_length[$i] = $row['length'];
        $table_color[$i] = $row['color'];
        $i++;
    }  
    //Start table
    echo "<thead><tr><th>ID</th><th>Type</th><th>Line</th><th>Status</th><th>Speed</th><th>Length</th><th>Color</th></tr></thead>";

    // Loop through the results from the database
    for ($i = 1; $i <=count($table_id); $i++) 
      {
    // Show entries
        echo    
            "<tbody><tr>
            <td>$table_id[$i]</td>
            <td>$table_type[$i]</td>
            <td>$table_line[$i]</td>
            <td>$table_status[$i]</td>
            <td>$table_maxspd[$i]</td>
            <td>$table_length[$i]</td>
            <td>$table_color[$i]</td>
            </tr></tbody>";
      }
    ?>
 </table> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./CSS/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./CSS/bootstrap.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./CSS/ie10-viewport-bug-workaround.js.download"></script>
    <script src="https://cdn.rawgit.com/zenorocha/clipboard.js/v1.6.0/dist/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard by passing a string selector -->
    <script>
    var clipboard = new Clipboard('.btn');
    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
    <script>Clipboard.isSupported()</script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
       function update_table_color () 
      {
      $.ajax({
        url:"update.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
         alert(result);
       }
        });
      }
    </script>
    

</body></html>