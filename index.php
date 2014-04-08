
<?php
       ini_set('display_errors', 'On');

       $db = "w4111g.cs.columbia.edu:1521/adb";
      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
       $stmt = oci_parse($conn, "select * from Departments");
       oci_execute($stmt, OCI_DEFAULT);
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
    <div class="btn-group" style=" position: relative; padding-right: 0px; padding-left: 85%; padding-top: 3%;">
      <button type="button" class="btn btn-default">Log In</button>
      <button type="button" class="btn btn-default">Sign up</button>
    </div>
  <div class="put-color main-container"> 
        
     <div class="logo">
      <h1 class="font-color nounderline" style="margin:5%";>Viducate  </h1>
    </div>
    <div class="navbar">
        <ul class="nav navbar-nav navbar-position">
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
                  <?php  $dept="Calculus";?>
                <li> <?php echo '<a tabindex="-1" href="subject.php?id=' . $dept . '">'; ?> Calculus </a>
            </ul>
          </li>
        </ul>
    </div>

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Subject, Topic ..">
        </div>
        <button type="submit" class="btn btn-default"><a href="search-results.php">Search</a></button>
      </form>
</div><!-- closing main navigation  -->
  

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
  </body>
</html>