
<?php
       ini_set('display_errors', 'On');

       $db = "w4111g.cs.columbia.edu:1521/adb";
      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $email = $_GET['email'];
      $password = $_GET['password'];
      $stmt = oci_parse($conn, "SELECT username from students where studentemail ='$email'");
      oci_execute($stmt, OCI_DEFAULT);  
        $i=0;
        $username= "";
         while ($profile = oci_fetch_row($stmt)){    
               echo $profile[$i];
                $username = $profile[$i];
            }

            if( empty($username)){

              header("Location: login-user-not-found.php");
              //die();
            }


        //$student_id = oci_parse($conn, "SELECT StudentId from Students where studentemail = '$email'");
        $student_history = oci_parse($conn, "SELECT TutName From ((Select TutId
                                      From ((Select StudentId, StudentName
                                          From Students Where studentemail= '$email') T1
                                              Join
                                            (Select TutId, StudentId From Watched) T2 On T1.StudentId=T2.StudentId))X1
                                              Join
                                                Taught_By X2 On X1.TutId=X2.TutId)");
      oci_execute($student_history, OCI_DEFAULT);     



    $student_liked = oci_parse($conn, "SELECT TutName
                                      From ((Select TutId
                                        From ((Select StudentId, StudentName
                                          From Students
                                          Where studentemail='$email') T1
                                          Join
                                          (Select TutId, StudentId
                                            From Watched
                                            Where Liked=1) T2 On T1.StudentId=T2.StudentId))X1
                                        Join
                                        Taught_By X2 On X1.TutId=X2.TutId)");
      oci_execute($student_liked, OCI_DEFAULT);       
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
    <div class="btn-group" style=" position: relative; padding-right: 0px; padding-left: 85%; padding-top: 3%;">
      <button type="button" class="btn btn-default">Welcome <strong><?php echo $username; ?> </strong></button>    
    </div>
    <!-- logged in as -->
<div class="" style="margrin:50%; padding:5%;">
    
  <h1 class="font-color"><a href="index.php">Viducate</a></h1>    
 	  	 <div class="navbar">
        <ul class="nav navbar-nav navbar-position" style="margin-left:0%;	">
          <li><a href="index.php" class="font-color">Home</a></li>
          <li class= "dropdown">
            <a href="#" class="dropdown-toggle font-color" data-toggle="dropdown">Departments<span class="caret"></span></a>
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
    </div>
    <!-- end of navigation inculding search bar -->

   <div style="width:305px; height:223px; margin-left:50px; margin-right:0px; boarder">
            <h3 class= "font-color">Watch History   </h3>

            <?php   $k=0;
         while ($watched_history = oci_fetch_row($student_history)){    ?>
                
                <tr style="width:305px; ">
                  <td><p><?php echo $watched_history[$k]; ?></p></td>
                  <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
                  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
                  <td>13226</td>
                </tr>
            <?php $k+1;} ?>
              </div>
      <div  style="background-color:blue; width:305px; height:223px; margin-left:50px; float:right; margin-top:0px;"> 
 <?php   $s=0;
         while ($liked_history = oci_fetch_row($student_history)){    ?>
                
                <tr style="width:305px; ">
                  <td><p><?php echo $liked_history[$k]; ?></p></td>
                  <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
                  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
                  <td>13226</td>
                </tr>
            <?php $s+1;} ?>
      </div>

      <script src="_/js/bootstrap.js"></script>
  <script src="_/js/myscript.js"></script>
</body>
</html>