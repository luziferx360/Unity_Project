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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://unityproject.96.lt/assets/unity.ico">

    <title>API Document</title>

    <!-- Bootstrap core CSS -->
    <link href="./CSS/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./CSS/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./CSS/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./CSS/ie-emulation-modes-warning.js.download"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

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
            <a class="navbar-brand" href="/index.php">Unity Project</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/index.php">Home</a></li>
              <li class="active"><a href="/API.php">API Document</a></li>
              <li><a href="/test.php">Database Table</a></li>
              <li class="dropdown">
                <a href="http://getbootstrap.com/examples/navbar/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More Info<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Reference</li>
                  <li><a href="https://drive.google.com/drive/folders/0B-OvgPT0Ype7RUJ2UldXc1U5cms?usp=sharing">Project 909</a></li>   
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Creator</li>
                  <li><a href="https://www.facebook.com/LuZiFeRX360">Kanin</a></li>
                  <li><a href="https://www.facebook.com/profile.php?id=100009248691105">Korawit</a></li>
                  <li><a href="https://www.facebook.com/lumineprogram">Boonyarit</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      </div> <!--/.nav bar end -->
    <div class="container">
      <div class="col-md-4">        
        <div class="page-header">
          <h2>Database Connector<br><small>About this page</small></h2>
        </div>
          <p>This page is for providing information between <br>MySQL database and Unity</p>
          </div>
      <div class="col-md-4">      
        <div class="page-header">
          <h2>FTP Information<br><small>Server FTP Information</small></h2>
        </div>
          <p>
          <b>FTP Host : </b>31.170.167.165
          <br><b>FTP Username : </b>u478022303
          <br><b>FTP Password : </b>Contact me
          <br><b>FTP Port : </b>21</p>
      </div>
      <div class="col-md-4">      
        <div class="page-header">
          <h2>Database Information<br><small>Server DB Information</small></h2>
        </div>
          <p><?php
                echo "<b>Database Host : </b>".$servername."<br>";
                echo "<b>Database Username : </b>".$username."<br>";
                echo "<b>Database Password : </b>Contact me<br>";
                echo "<b>Database Name : </b>".$dbname."<br>";
              ?>    
          </p>
      </div>
    </div>
      
  <div class="container">
    <div class="col-md-12">  
        <div class="page-header">
          <h2>API Table<br><small>Database Connectivity</small></h2>
        </div>
        <p>Here is our API table for SQL query and updating database.<b> If you not understand what to do please watch video below</b></p>
        <br>

        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Function</th>
                <th>Purpose</th>
                <th>URL</th>
                <th>Copy to clipboard</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <td>Track</td>
              <td>Show track database information</td>
              <td id="case1"><a>http://unityproject.96.lt/backend/track.php</a></td>
              <td><button class="btn btn-default" type="button" data-clipboard-action="copy" data-clipboard-target="#case1">Copy</button></td>
            </tr>
            <tr>
              <td>Train</td>
              <td>Show train database information</td>
              <td id="case2"><a>http://unityproject.96.lt/backend/train.php</a></td>
              <td><button class="btn btn-default" type="button" data-clipboard-action="copy" data-clipboard-target="#case2">Copy</button></td>
            </tr>
            <tr>
              <td>Update</td>
              <td>Update when train through each track</td>
              <td id="case3"><a>http://unityproject.96.lt/backend/update.php</a></td>
              <td><button class="btn btn-default" type="button" data-clipboard-action="copy" data-clipboard-target="#case3">Copy</button></td>
            </tr>
          </tbody>
          </table>
        </div>
        
        <div class="page-header">
          <h2>Video Instruction<br><small>MySQL and Unity connection</small></h2>
        </div>
        <p>Here is the video instruction of how you input data from PHP form to Unity </p><br>
        <div align="left" class="embed-responsive embed-responsive-16by9">><iframe width="560" height="315" src="https://www.youtube.com/embed/3pcvJYJinn4" frameborder="0" allowfullscreen></iframe>
        </div><br>
      <!-- Main component for a primary marketing message or call to action -->
    </div> <!-- /container -->
</div>

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
  

</body></html>