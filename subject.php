
<?php
       ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $subject = $_GET["id"];
      $stmt = oci_parse($conn, "SELECT CourseName From Has_Course, Departments Where Departments.depname = '$subject' and Has_Course.depid = Departments.depid" );
       oci_execute($stmt, OCI_DEFAULT);
?>       
  



<html>
<head>
	<title>Viducate</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">

</head>
<body>

<div class="" style="margrin:50%; padding:5%; padding-bottom:1%;">
    
    <h1 class="font-color nounderline"><a href="index.php">Viducate</a></h1>
    
 	  	 <div class="navbar">
        <ul class="nav navbar-nav navbar-position" style="margin-left:0%;	">
          <li><a href="index.php" class="font-color">Home</a></li>
          <li class= "dropdown">
            <a href="#" class="dropdown-toggle font-color" data-toggle="dropdown">Departments <span class="caret"></span></a>
            <ul class="dropdown-menu font-color" role="menu" aria-labelledby="dropdownMenu">
              <li><a tabindex="-1" href="subject.php">Art</a></li>
              <li><a tabindex="-1" href="subject.php">Computer Science</a></li>
              <li><a tabindex="-1" href="subject.php">Economics</a></li>
              <li><a tabindex="-1" href="subject.php">Math</a></li>
              <li><a tabindex="-1" href="subject.php">Physics</a></li>      
            </ul>
          </li>
        </ul>
  
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Subject, Topic ..">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
    			</li>
    		</ul>
		</div>
  </div>

  <div style ="">
  <h1  style="color:white;">Subject Name</h1>
  <div class="table">
      <tr><td> <h3>Mathematics</h3></td> </tr>
  </div>
  <div class="" sytle="">
        <ul class="nav nav-pills nav-stacked">
        <?php  $i =0;
         while ($courses = oci_fetch_row($stmt)){ 
          echo "<li><a href=\"topic.php\" class=\"font-color\">". $courses[$i] ."</a></li>"; } $i++; ?>
        </ul>
    </div>
  
<!-- end of table  -->
</div>


</body>
</html>