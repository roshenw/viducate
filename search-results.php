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


<div class="" style="margrin:50%; padding:5%;">
    
    <h1 class="font-color">Viducate</h1>
    
 	  	 <div class="navbar">
        <ul class="nav navbar-nav navbar-position" style="margin-left:0%;" >
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