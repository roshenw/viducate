<?php
       ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $topic = $_GET["id"];
      echo "";
      $stmt = oci_parse($conn, "SELECT * From Has_topic");
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
<div class="" style="margrin:50%; padding:5%;">
    
    <h1 class="font-color"><a href="index.php">Viducate</a></h1>

       <?php $i=0;
        while($row = oci_fetch_row($stmt)){

              echo $row[$i];
              $i++;
        }  ?>
    
 	  	 <div class="navbar">
        <ul class="nav navbar-nav navbar-position" style="margin-left:0%;	">
          <li><a href="index.php" class="font-color">Home</a></li>
          <li class= "dropdown">
            <a href="#" class="dropdown-toggle font-color" data-toggle="dropdown">Departments <span class="caret"></span></a>
            <ul class="dropdown-menu font-color" role="menu" aria-labelledby="dropdownMenu">
              <li><a tabindex="-1" href="#">Art</a></li>
              <li><a tabindex="-1" href="#">Computer Science</a></li>
              <li><a tabindex="-1" href="#">Economics</a></li>
            <li><a tabindex="-1" href="#">Math</a></li>
            <li><a tabindex="-1" href="#">Physics</a></li>      
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

    <div class="" sytle="">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="tutorials.php" class="font-color">Differenctiation</a></li>
          <li><a href="tutorials.php" class="font-color">Integration</a></li>
          <li><a href="tutorials.php" class="font-color">Loptals Rule</a></li>
          <li><a href="tutorials.php" class="font-color">Limits</a></li>
          <li><a href="tutorials.php" class="font-color">Hello</a></li>
          <li><a href="tutorials.php" class="font-color">Python</a></li>
          <li><a href="tutorials.php" class="font-color">Introduction to substitution</a></li>
          <li><a href="tutorials  .php" class="font-color">Calculus</a></li>
            
        </ul>
    </div>


  </div>



</body>
</html>