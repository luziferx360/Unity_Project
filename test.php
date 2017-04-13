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
<!-- saved from url=(0040)http://getbootstrap.com/examples/navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <meta charset="UTF-8" />
    <title>Unity Project</title>
    <!-- Bootstrap core CSS -->
    <link href="/CSS/bootstrap.min.css" rel="stylesheet">
    <link href="/CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/CSS/navbar.css" rel="stylesheet">
    <script src="/CSS/ie-emulation-modes-warning.js"></script>
  <body>
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


    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://getbootstrap.com/examples/navbar/#">Train Operation</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://getbootstrap.com/examples/navbar/#">Home</a></li>
              <li><a href="http://getbootstrap.com/examples/navbar/#">About</a></li>
              <li><a href="pathing.html">Waveform</a></li>
              <li class="dropdown">
                <a href="http://getbootstrap.com/examples/navbar/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Etc <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="http://getbootstrap.com/examples/navbar/#">Action</a></li>
                  <li><a href="http://getbootstrap.com/examples/navbar/#">Another action</a></li>
                  <li><a href="http://getbootstrap.com/examples/navbar/#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="http://getbootstrap.com/examples/navbar/#">Separated link</a></li>
                  <li><a href="http://getbootstrap.com/examples/navbar/#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="http://getbootstrap.com/examples/navbar/">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="http://getbootstrap.com/examples/navbar-static-top/">2</a></li>
              <li><a href="http://getbootstrap.com/examples/navbar-fixed-top/">3</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

<!-- Main component for a primary marketing message or call to action -->
<div class="container">
 <div class="col-md-7 blog-main" >
 <div class="page-header">
  <h2>Database Connector<br><small>About this page</small></h2>
  </div>
  <p>This page is for providing information between MySQL database and Unity<br></p>
  <div class="page-header"><h3>API Table</h3>
  <p>Here is our API table for SQL query and updating database <br><b>If you not understand what to do please watch video below</b></p></div>
  <div style="overflow-x:auto;">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Function</th>
        <th>Purpose</th>
        <th>URL</th>
        <th>COPY!</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Track</td>
        <td>Show track database information</td>
        <td id="case1">http://unityproject.96.lt/track.php</td>
        <td><button class="btn btn-default" type="button" data-clipboard-action="copy" data-clipboard-target="#case1">Copy!</button></td>
      </tr>
      <tr>
        <td>Train</td>
        <td>Show train database information</td>
        <td id="case2">http://unityproject.96.lt/train.php</td>
        <td><button class="btn btn-default" type="button" data-clipboard-action="copy" data-clipboard-target="#case2">Copy!</button></td>
      </tr>
      <tr>
        <td>Update</td>
        <td>Update when train through each track</td>
        <td id="case3">http://unityproject.96.lt/update.php</td>
        <td><button class="btn btn-default" type="button" data-clipboard-action="copy" data-clipboard-target="#case3">Copy!</button></td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="page-header">
    <h3>Video Instruction</h3>
    <p>Here is the video instruction of how you input data from PHP form</p>
  </div>
  <div align="left" class="embed-responsive embed-responsive-16by9">><iframe width="560" height="315" src="https://www.youtube.com/embed/3pcvJYJinn4" frameborder="0" allowfullscreen></iframe>
  </div><br>
  <h3>Track Table <br><small>Track Database Table</small></h3>
    <table class="table table-condensed">
    <?php

    $sql = "SELECT id, type, status FROM track";
    $result=mysqli_query($conn, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $id[$i] = $row['id'];
        $type[$i] = $row['type'];
        $status[$i] = $row['status'];
        $i++;
    }  
    //Start table
    echo "<thead><tr><th>ID</th><th>type</th><th>status</th></tr></thead>";

    // Loop through the results from the database
    for ($i = 1; $i <=count($id); $i++) 
      {
    // Show entries
        echo    
            "<tbody><tr>
            <td>$id[$i]</td>
            <td>$type[$i]</td>
            <td>$status[$i]</td>
            </tr></tbody>";
      }
    ?>
 </table> 
</div>

  <div align="left" class="col-sm-4 col-sm-offset-1 blog-sidebar"><div class="form-group has-success has-feedback">
    <div class="page-header">
    <h2>Database Information<br> <small>Our database information</small></h2>
    </div>
      <p><?php
      echo "<b>Database Host : </b>".$servername."<br>";
      echo "<b>Database Name : </b>".$dbname."<br>";
      echo "<b>Database Username : </b>".$username."<br>";
      echo "<b>Database Password : </b>".$password."<br>";
      ?>    
     </p><br>
    <h3>Track Table <br><small>Track Database Table</small></h3>
    <table class="table table-condensed">
    <?php

    $sql = "SELECT id, type, status FROM track";
    $result=mysqli_query($conn, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $id[$i] = $row['id'];
        $type[$i] = $row['type'];
        $status[$i] = $row['status'];
        $i++;
    }  
    //Start table
    echo "<thead><tr><th>ID</th><th>Type</th><th>Track Status</th></tr></thead>";

    // Loop through the results from the database
    for ($i = 1; $i <=count($id); $i++) 
      {
    // Show entries
        echo    
            "<tbody><tr>
            <td>$id[$i]</td>
            <td>$type[$i]</td>";
        if ($status[$i] == "red") {
          echo "<td class='text-danger'>$status[$i]</td>";
        }
        else if ($status[$i] == "green") {
          echo "<td class='text-success'>$status[$i]</td>";
        }
        else if ($status[$i] == "black") {
          echo "<td class='text-muted'>$status[$i]</td>";
        }
        else if ($status[$i] == "yellow") {
          echo "<td class='text-warning'>$status[$i]</td>";
        }
        else
        {
          echo "<td>$status[$i]</td>";  
        }
        echo "</tr></tbody>";
      }
    ?>
 </table> 
</div><br>
<h3>Event Table <br> <small>Event Database Table</small></h3>
<table class="table table-condensed">
  <?php

    $sql = "SELECT id, name, info FROM event";
    $result=mysqli_query($conn, $sql);
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        $eid[$i] = $row['id'];
        $name[$i] = $row['name'];
        $info[$i] = $row['info'];
        $i++;
    }  
    //Start table
    echo "<thead><tr><th>ID</th><th>Error</th><th>Information</th></tr></thead>";

    // Loop through the results from the database
    for ($i = 1; $i <=count($id); $i++) 
      {
    // Show entries
        echo    
            "<tbody><tr>
            <td>$eid[$i]</td>
            <td>$name[$i]</td>
            <td>$info[$i]</td>

            </tr></tbody>";
      }
    ?>
  </table>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
</div>
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Navbar Template for Bootstrap_files/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Navbar Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Navbar Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>
