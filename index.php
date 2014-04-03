
<?php
/*       ini_set('display_errors', 'On');

       $db = "w4111g.cs.columbia.edu:1521/adb";


      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
       $stmt = oci_parse($conn, "select * from Departments");
       oci_execute($stmt, OCI_DEFAULT);
       
       while ($res = oci_fetch_row($stmt))
       {
          echo "User Name: ". $res[0] ;
       }


*/
  
?>








<!DOCTYPE html>
<html>
  <head>
    <title>Viducate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body  id="home">
    
    
    <!-- <div class="col-lg-5 col-lg-offset-4  putColor"> -->
    <div class="main-container">
    <div class="putColor">
    <h1 class="font-color">Viducate</h1>
    <div class="">
 	  	<div class="navbar">
    		<ul class="nav navbar-nav navbar-position">
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
		</div>
  </div>  

    <div class="col-xs-5 col-sm-10 " sytle="background-color:red ;">
        <form class="navbar-form" role="search">
          <div class="input-group searchbar-position">
            <input type="text" class="form-control" placeholder="Search by subject, topic" name="srch-term" id="srch-term">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </div>
        </form>
     </div>


    	</div><!-- closing main navigation  -->
  

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>