<?php
       ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $topic = $_GET["topic"];
      //$topic = "Calculus I";
      $stmt = oci_parse($conn, "SELECT topicname From Has_topic, has_course where has_course.coursename = '$topic' and has_course.courseid = Has_topic.courseid");
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
 	  	 <div class="navbar">
        <ul class="nav navbar-nav navbar-position" style="margin-left:0%;	">
          <li><a href="index.php" class="font-color">Home</a></li>
          <li class= "dropdown">
            <a href="#" class="dropdown-toggle font-color" data-toggle="dropdown">Departments <span class="caret"></span></a>
             <ul class="dropdown-menu font-color" role="menu" aria-labelledby="dropdownMenu">

              <?php  $dept="Art";?>  
                <li> <?php echo '<a tabindex="-1" href="subject.php?id=' . $dept . '">'; ?> Art </a>
                  <?php  $dept="Computer Science";?>
                <li> <?php echo '<a tabindex="-1" href="subject.php?id=' . $dept . '">'; ?> Computer Science</a>
                  <?php  $dept="Math";?>
                <li> <?php echo '<a tabindex="-1" href="subject.php?id=' . $dept . '">'; ?> Math </a>
                  <?php  $dept="Economics";?>
                <li> <?php echo '<a tabindex="-1" href="subject.php?id=' . $dept . '">'; ?> Economics </a>
                  <?php  $dept="Physics";?>
                <li> <?php echo '<a tabindex="-1" href="subject.php?id=' . $dept . '">'; ?> Physics </a>
            </ul>
          </li>
        </ul>
           
      <form class="navbar-form navbar-left" method="get" action="search-results.php" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="input1"placeholder="Search Subject, Topic ..">
        </div>
        <button type="submit" name="search-botton" class="btn btn-default">Search</button>
      </form>
    			</li>
    		</ul>
		</div>

    <div class="" sytle="">
      <h3  style="color:white;">Topics in <?php  print_r($topic); ?></h3>
        <ul class="nav nav-pills nav-stacked">
           <?php $i=0;
        while($row = oci_fetch_row($stmt)){
              //if(isset($row[$i])){                                      
              echo '<li><a  class="font-color" href="tutorials.php?tutorial='. $row[$i] .'">'. $row[$i] .'</a></li>';              
              $i+1;
        }?>      
        </ul>
    </div>
  </div>


  
<script src="_/js/bootstrap.js"></script>
  <script src="_/js/myscript.js"></script>
</body>
</html>
