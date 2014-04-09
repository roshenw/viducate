<?php
       ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $tutorial = $_GET["tutorial"];
      
     $stmt = oci_parse($conn, "SELECT TutName From((Select TutId From Has_Tutorial
  Where TopicId In (Select TopicId From Has_Topic Where TopicName= '". $tutorial ."')) T1
  Join
  Taught_By On T1.TutId=Taught_By.TutId)");
      //$stmt = oci_parse($conn, "SELECT topicname From Has_topic, Has_Course 
                                //Where Has_Course.coursename = '$topic' and Has_Course.courseid = Has_topic.courseid" );

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
  <h3  style="color:white;">Tutorials in <?php  print_r($tutorial); ?></h3>
  <div class="table">
  </div>
  <div class="" sytle="">

      <table class="table table-hover" style="color:white">          
          <?php  $i =0;
            while ($courses = oci_fetch_row($stmt)){   ?>
          <tr>
            <td><?php echo $courses[$i]; ?></td>
            <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
            <td>13226</td>
          </tr>
          <?php } $i++; ?>
      </table>  
    </div>

  
<!-- end of table  -->
</div>

<script src="_/js/bootstrap.js"></script>
  <script src="_/js/myscript.js"></script>

</body>
</html>