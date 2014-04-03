<?php 
	$video_link = "R0EQg9vgbQw";
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


<div class="">
    <div class="">
    <h1 class="font-color">Viducate</h1>
    <div class="">
 	  	<div class="navbar">
    		<ul class="nav navbar-nav ">
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
    			<li>
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
    			</li>
    		</ul>
		</div>
  </div>  

    




<div style ="padding:5%;">


<table class="table table-hover" style="color:white">
	<h1  style="color:white;">Searched for  "Search String"</h1>
	<p  style="color:white; margin-left:90%; content-align:right;">Views</p>
  <tr>
  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
  <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
  <td>13226</td>
  </tr>
   <tr>
  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
  <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
  <td>54126</td>
  </tr>
   <tr>
  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
  <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
  <td>1526</td>
  </tr>
    <tr>
  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
  <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
  <td>95126</td>
  </tr>
   <tr>
  <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
  <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
  <td>56126</td>
  </tr>
</table>
<!-- end of table	 -->
</div>
</body>
</html>