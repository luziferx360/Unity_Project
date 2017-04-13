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
              <li class="active"><a href="/index.php">Home</a></li>
              <li><a href="/API.php">API Document</a></li>
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

<!-- Main Body -->    
  <div class="container">
    <div class="col-md-7 blog-main" >
      <div class="page-header">
        <h1>Train Operation Simulator<br><small>Senior Project</small></h1>
      </div>
      <br>
      <div align="left" class="embed-responsive embed-responsive-16by9">
      <iframe src="https://docs.google.com/presentation/d/1JLuIhWv4r6ZkUq-dKEWe3HApLU3VcR2uUCQweqjNMlE/embed?start=false&loop=true&delayms=5000" 
      frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true">
      </iframe>
      </div>
            <br>

      <div class="page-header">
          <h1>Simulator Test<br>
          <small>Place holder for our simulator</small>
          </h1>
      </div>
  <table class="table table-bordered">
   <?php

    $sql = "SELECT id, color, bootstrap FROM track";
    $result=mysqli_query($conn, $sql);
    $i=1;
    $j=1;
    $trackcolor[$j] = "";
    while($row=mysqli_fetch_assoc($result))
    {
        $id[$i] = $row['id'];
        $color[$i] = $row['color'];
        $trackcolor[$i] = $row['bootstrap'];
        $i++;
    }

echo "
    <tr>
    <td></td>
    <td ".$trackcolor[1].">".$id[1]."</td> 
    <td ".$trackcolor[2]."'>".$id[2]."</td> 
    <td ".$trackcolor[3].">".$id[3]."</td> 
    <td ".$trackcolor[4].">".$id[4]."</td> 
    <td></td>
    <td ".$trackcolor[9].">".$id[9]."</td> 
    <td ".$trackcolor[10]."'>".$id[10]."</td> 
    <td ".$trackcolor[11].">".$id[11]."</td> 
    <td></td>
  </tr>
  <tr>
    <td>St1</td>
    <td></td> 
    <td></td>
    <td></td>
    <td></td> 
    <td>St2</td>
    <td></td>
    <td></td> 
    <td></td>
    <td>St3</td>
  </tr>
  <tr>
    <td></td>
    <td ".$trackcolor[5].">".$id[5]."</td> 
    <td ".$trackcolor[6]."'>".$id[6]."</td> 
    <td ".$trackcolor[7].">".$id[7]."</td> 
    <td ".$trackcolor[8].">".$id[8]."</td> 
    <td></td>
    <td ".$trackcolor[12].">".$id[12]."</td> 
    <td ".$trackcolor[13]."'>".$id[13]."</td> 
    <td ".$trackcolor[14].">".$id[14]."</td> 
    <td></td>
  </tr>
  ";

?>
</table>
 <div class="page-header">
        <h1>Track Table<br> <small>Database Table</small></h1>
      </div>
<div id="result"></div>
 </div>

      <!-- Side Bar -->

    <div align="left" class="col-md-4 col-sm-offset-1 blog-sidebar">
      <div class="page-header">
        <h1>Project Info<br> <small>Our project information</small></h1>
      </div>
              <h3>Abstract</h3>
          <p>This project is about creating a simulator for Train Operation System. Our purpose is to create a system simulation 
          to let an operator learn to operate system properly and to solve a problem in a different situation by a controlling procedure.</p>
          <p>This software also manage to evaluate train operators in term of decision making , working procedure and  how long they take to solve a 
          problem.Since rail transport is fundamental of country transportation improvement and widespread using nowadays. Also many unexpected accident 
          and situation can be happen anytime. We better create a good mindset of knowledge and decision making for an operator.</p>
          <p>Even though our rail transport is still lacking in term of technology compare to other country in Asia , 
          but still a well trained operator will make a system works more efficiency due to a safety of working procedure. 
          We can manage to do this by using a Train Operation System Simulator to train and evaluate an operator to make our rail transport be more safety</p>
          <br>
          <p><b>Keyword</b> : Train Operation System; Simulator; Signaling System; section; track;</p><br>
 
 <div class="page-header">
        <h1>Track Insert<br> <small>add track to database</small></h1>
      </div>
<form id="insert" action="update.php" method="post">
<div class="form-group">
<label for="track_id">Track ID</label> 
<input type="text" class="form-control" name="track_id" placeholder="Track ID">
</div>
 <div class="form-group">
    <label for="track_type">Track Type</label>
    <select class="form-control" name="track_type">
      <option>Normal</option>
      <option>Switch</option>
    </select>
  </div>
  <div class="form-group">
    <label for="track_line">Track Line</label>
    <select class="form-control" name="track_line">
      <option>A</option>
      <option>B</option>
    </select>
  </div>
   <div class="form-group">
    <label for="track_status">Track Status</label>
    <select class="form-control" name="track_status" placeholder="active">
      <option value="active">Active</option>
      <option value="slow">Slow</option>
      <option value="stop">Stop</option>
      <option value="broken">Broken</option>
      <option value="reserveA">Reserve for A</option>
      <option value="reserveB">Reserve for B</option>
    </select>
  </div>
  <div class="form-group">
  <label for="maxspd">Track Max Speed</label> 
  <input type="text" class="form-control" name="maxspd" placeholder="50">
</div>
<div class="form-group">
  <label for="length">Track Length</label> 
  <input type="text" class="form-control" name="length" placeholder="250">
</div>
<button class="btn btn-primary" type="submit" name="save">GO</button>
</form>
</div> <!-- /container -->


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

    <script type="text/javascript">

    $(function worker(){
    // don't cache ajax or content won't be fresh
    $.ajaxSetup ({
        cache: false
    });
    var ajax_load = "<img src='http://automobiles.honda.com/images/current-offers/small-loading.gif' alt='loading...' />";
    
    // load() functions
    var loadUrl = "/table.php";
    
    $("#result").html(ajax_load).load(loadUrl);
    setTimeout(worker, 50000);

// end  
});
    </script>
    
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js" integrity="sha384-tIwI8+qJdZBtYYCKwRkjxBGQVZS3gGozr3CtI+5JF/oL1JmPEHzCEnIKbDbLTCer" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>

   <script>
     // wait for the DOM to be loaded
     $(function() {
       // bind 'myForm' and provide a simple callback function
       $('#insert').ajaxForm(function() {
           alert("Update Complete!");
       });
     });
   </script>
    

</body></html>