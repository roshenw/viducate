<?php
      session_start();
       ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }


      $search_string = $_GET["input1"];
      $stmt = oci_parse($conn, "SELECT TutName
From((
Select TutId
From(Select TutId
From ((Select TagId
  From Tags
  Where TagName Like '%$search_string%') T1
  Join
  (Select *
    From Linked_to_Tutorials) T2 On T1.TagId=T2.TagId)
Union
Select TutId
From Taught_By
Where TutName Like '%$search_string%'))A
Join
Taught_By B On A.TutId=B.TutId)
Order By Views Desc" );
      oci_execute($stmt);
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
<body id="home" class="main-container">
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


<div class="" style="margrin:50%; padding:5%;">
    
<h1 class="font-color"><a href="index.php" style="text-decoration:none;">Viducate</a></h1>    
 	  	 <div class="navbar">
        <ul class="nav navbar-nav navbar-position" style="margin-left:0%;" >
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
  </div>
    

<div style ="padding:5%;">


<table class="table table-hover" style="color:white">
	<h1  style="color:white;">Searched for  "<?php print_r($search_string); ?>" </h1>
	<p  style="color:white; margin-left:90%; content-align:right;">Views</p>
  <tr>
    <?php 
            while ($courses = oci_fetch_row($stmt)){   $i =0; ?>
              <?php print_r($courses) ?>
             <tr style="width:305px; ">
                  <td><p><?php  echo $courses[$i++]; ?></p></td>
                  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $courses[$i++]; ?>"></iframe></td>
                  <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
                  <td><p><?php  echo $courses[$i]; ?></p></td>
                </tr>
          <?php } ?>

    </tr>
</table>

</div>
<!-- end of table	 -->
</div>
<script src="_/js/bootstrap.js"></script>
<script src="_/js/myscript.js"></script>
</body>
</html>