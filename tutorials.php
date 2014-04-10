<?php
       ini_set('display_errors', 'On');
       $db = "w4111g.cs.columbia.edu:1521/adb";

      if (!($conn = oci_connect("rw2485", "Data132", $db))){
            echo "Connection cannot be established";
      }
      $tutorial = $_GET["tutorial"];
      
     $stmt = oci_parse($conn, "SELECT TutName, Link, Views From((
                                  Select T1.TutId, TutName, Views
                                  From((Select TutId
                                  From Has_Tutorial
                    Where TopicId In (Select TopicId From Has_Topic Where TopicName='$tutorial'))T1
                                      Join
                                    Taught_By On T1.TutId=Taught_By.TutId))A
                                  Join
                                  Linked_to_Tutorials On A.TutId=Linked_to_Tutorials.TutId)");


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
  </div>
  <div style ="">
  <h3  style="color:white;">Tutorials in <?php  print_r($tutorial); ?></h3>
  <div class="table">
  </div>
  <div class="" sytle="">

      <table class="table table-hover" style="color:white">          
          <?php  $i =0;
            while ($courses = oci_fetch_row($stmt)){   ?>
             <tr style="width:305px; ">
                  <td><p><?php  echo $courses[$i++]; ?></p></td>
                  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $courses[$i++]; ?>"></iframe></td>
                  <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
                  <td><p><?php ; echo $courses[$i++]; ?></p></td>
                </tr>
          <?php } ?>
      </table>  
    </div>

 
<!-- end of table  -->
</div>

<div class="btn-group " style=" position: relative; padding-right: 0px; padding-left: 29%; padding-top: 3%; color:w">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add tutorial to to this topic</button>
</div> 
<!-- add new tutorial -->

<form    method="get" action="add-tutorial.php">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
        <h4 class="modal-title" id="myModalLabel">Add a New Tutorial</h4>
      </div>
      <div class="modal-body">
          <div class="input-group">
              <span class="input-group-addon">Tutorial</span>
              <input name="tut-name" type="text" class="form-control" placeholder="Tutorial name">
          </div>
          <div class="input-group">
              <span class="input-group-addon" style="width:6em;">Tag </span>
              <input name="tag-name" type="text" class="form-control" placeholder="Tag">
          </div>
           <div class="input-group">
              <span class="input-group-addon" style="width:6em;">Video Link </span>
              <input name="vid-link" type="text" class="form-control" placeholder="Tag">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
</form>





<!-- 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
</script>
<script type="text/javascript" >
$(function() {
$(".submit").click(function() {
var name = $("#tut-name").val();
var tag = $("#tag-name").val();
var dataString = 'tut-name='+ name + '&tag-name=' + tag;


if(name=='' || tag=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "tutorials.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
return false;
});
});
</script>
 -->


<?php

/*
if($_POST)
{
$name=$_POST['tut-name'];
$username=$_POST['tag-name'];

$adding = oci_parse("INSERT Into Taught_By Values ("ADS0099", "AS98765", '$name', 0, 0)");
}else { }

 oci_execute($adding, OCI_DEFAULT);
*/
?>


<script src="_/js/bootstrap.js"></script>
  <script src="_/js/myscript.js"></script>

</body>
</html>