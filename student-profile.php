<?php
       session_start();
       ini_set('display_errors', 'On');

       $db = "w4111g.cs.columbia.edu:1521/adb";
      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $email = $_POST['email'];
      $password = $_POST['password'];
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;


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
        $_SESSION['username'] =$username;

        //$student_id = oci_parse($conn, "SELECT StudentId from Students where studentemail = '$email'");
        $student_history = oci_parse($conn, "SELECT TutName, Link, Views From((
                                        Select X1.TutId,TutName,Views
From ((Select TutId
  From ((Select StudentId, StudentName
    From Students
    Where studentemail='$email') T1
    Join
    (Select TutId, StudentId
      From Watched
      Where Liked=1) T2 On T1.StudentId=T2.StudentId))X1
  Join
  Taught_By On X1.TutId=Taught_By.TutId))A
  Join
  Linked_to_Tutorials On A.TutId=Linked_to_Tutorials.TutId)");
      oci_execute($student_history, OCI_DEFAULT);     



    $student_liked = oci_parse($conn, "SELECT TutName, Link, Views
From((
Select X1.TutId, TutName, Views
From ((Select TutId
  From ((Select StudentId, StudentName
    From Students
    Where studentemail='$email') T1
    Join
    (Select TutId, StudentId
      From Watched) T2 On T1.StudentId=T2.StudentId))X1
  Join
  Taught_By X2 On X1.TutId=X2.TutId))A
  Join
  Linked_to_Tutorials On A.TutId=Linked_to_Tutorials.TutId)");
      oci_execute($student_liked, OCI_DEFAULT);  
      oci_close($conn);     
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
     <?php  if(isset($_SESSION['username']))  { ?>
     
      <div class="btn-group" style=" position: relative; padding-right: 0px; padding-left: 70%; padding-top: 3%;">
        <button type="button" class="btn btn-default">Welcome <strong><?php echo $_SESSION['username']; ?> </strong></button>    
         <button type="button" class="btn btn-default" onclick="location.href='logout.php'" >Log Out</button>
      </div>     

     <?php  }else{  ?>

      <div class="btn-group" style=" position: relative; padding-right: 0px; padding-left: 85%; padding-top: 3%;">
        <button type="button" class="btn btn-default" onclick="location.href='login.php'">Log In</button>
        <button type="button" class="btn btn-default" onclick="location.href='signup.php'" >Sign up</button>
      </div>
                   
    <?php } ?> 

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

   <div>
     <table cellpadding="0" cellspacing="0" width="100%" border="1">
       <tr>
         <td cellwidth="50%;">
   <!--<div style="width:305px; height:223px; margin-left:50px; margin-right:0px; boarder">-->
            <h3 class= "font-color">Watch History   </h3>
            <table>
            <?php   
         while ($watched_history = oci_fetch_row($student_history)){   $k=0; ?>
                
                <tr style="width:305px; ">
                  <td><p><?php echo $watched_history[$k]; $k++; ?></p></td>
                  <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
                  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $watched_history[$k]; $k++; ?>"></iframe></td>
                  <td><p>Views <?php echo $watched_history[$k]; ?></p></td>
                </tr> 
            <?php   $k++; }  ?>
            </table>
    <!---</div>-->
    </td>
    <td>  

    <!--<div  style="background-color:blue; width:305px; height:223px; margin-left:50px; valign="top" float:right; margin-top:0px;"> -->
        <h3 class="front-color">Liked History</h3>
        <table>
 <?php   
         while ($liked_history = oci_fetch_row($student_liked)){  $s=0;  ?>
                
                <tr style="width:305px; ">
                  <td><p><?php echo $liked_history[$s++]; ?></p></td>
                  <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
                  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $liked_history[$s++];  ?>"></iframe></td>
                  <td><p><?php echo $liked_history[$s];  ?></p></td>
                </tr>
            <?php $s+1;} ?>
        </table>
      <!-- </div> -->
  </td>
</tr>
</table>
</div>
      <script src="_/js/bootstrap.js"></script>
  <script src="_/js/myscript.js"></script>
</body>
</html>