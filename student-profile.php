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

   <div style="width:305px; height:223px; margin-left:50px; margin-right:0px; boarder">
            <h3 class= "font-color">Watch History</h3>
        <tr style="width:305px;">
          <td><p>Indroduction to Calculus</p></td>
          <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td>13226</td>
        </tr>
        <tr>
          <td><p>Indroduction to Calculus</p></td>
          <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td>13226</td>
        </tr>
        <tr>
          <td><p>Indroduction to Calculus</p></td>
          <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td>13226</td>
        </tr>
        <tr>
          <td><p>Indroduction to Calculus</p></td>
          <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td>13226</td>
        </tr>
        <tr>
          <td><p>Indroduction to Calculus</p></td>
          <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td>13226</td>
        </tr>
        <tr>
          <td><p>Indroduction to Calculus</p></td>
          <td><button type="button" class="btn btn-primary" style="float:right;">Like</button><button type="button" class="btn btn-danger" style="float:right;">Dislike</button></td> 
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td>13226</td>
        </tr>
              </div>
      <div  style="background-color:blue; width:305px; height:223px; margin-left:50px; float:right; margin-top:0px;"> 

          <tr>
            <td>Lopitals Rule</td>
          <td><iframe class="vid-container" src="http://www.youtube.com/embed/<?php echo $video_link ?>"></iframe></td>
          <td><button type="button" class="btn btn-primary">Like</button><button type="button" class="btn btn-danger">Dislike</button></td> 
          <td>13226</td>
        </tr>
      </div>
</body>
</html>