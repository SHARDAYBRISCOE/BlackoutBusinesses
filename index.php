<?php


  if (mysqli_connect_error()){
    die("Could not connect to database");
  }

  $query = "SELECT * FROM Businesses";

  if ($result = mysqli_query ($link ,$query)){
    //IF THE CONNECTION WORKS.
    while ($row = mysqli_fetch_array($result)){
      print_r($row[website]);
    }

    print_r($row);
  }else {
    echo "It failed";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blackout Businesses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="blackout.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="blackout20px.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
              <li><a href="index.php"  class="active">Home</a></li>
              <li><a href="directory.html">Directory</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="downloadtheapp.html">Download the App</a></li>  
              </ul>
      
    </div>
  </div>
</nav>
<div id="body">

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 jumbotron">
<!-- 
MAKE THE CAROUSEL 60% of the page and the ad space 40%!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

-->
<div id="myCarousel" class="carousel slide slider-size" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="sassafras-neworleans.jpg" alt="sassafras">
      <div class="carousel-caption">
        <h3>Sassafras</h3>
        <p>New Orleans, LA</p>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="preperformancebarandlounge-newyork.jpg" alt="preperformance">
      <div class="carousel-caption">
        <h3>Preperformance</h3>
        <p>New York, NY</p>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="pearlsplace-chicago.jpg" alt="pearlsplace">
      <div class="carousel-caption">
        <h3>Pearl's Place</h3>
        <p>Chicago, IL</p>
      </div>
    </div>

    <div class="item">
      <img class="img-responsive" src="dulans-inglewood-2.jpg" alt="dulans">
      <div class="carousel-caption">
        <h3>Dulan's</h3>
        <p>Inglewood, CA</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div style="clear:both;"></div>
   
    

 <div class="socialPost" id="topPost">
        <h3>Business Name</h3>
        <img src="logo.png" alt="businessesLogo">
              <div class="socialPostWebsites">

                <p>
                 <img src="website.png" alt="website" class="icon" width="24px" height="24px">Website <br />
                 </p>

                 <p>
                   <img src="facebook.png" alt="facebook" class="icon" width="24px" height="24px">Facebook <br/ >
                 </p>
                 
                 <p>
                  <img src="instagram.png" alt="instagram" class="icon" width="24px" height="24px">Instagram <br />
                </p>
              </div>
                  <div style="clear:both;"></div>

          <p>Fusce ac neque ultricies, tincidunt metus non, convallis dolor. Donec ipsum ante, porta suscipit aliquam quis, iaculis vel turpis. Nullam quam velit, gravida ut pulvinar scelerisque, consequat vel tortor. Fusce rhoncus, metus eget imperdiet placerat, elit ipsum egestas mi, non ultrices mi ipsum quis orci. Nunc lacinia at eros sed blandit. Quisque tristique eget nunc eget fringilla. Vestibulum in vestibulum orci. Suspendisse in vehicula nisi. In hac habitasse platea dictumst. Aenean quis lacus nulla. Nullam ultricies ligula eget nibh elementum consectetur. Pellentesque velit est, venenatis luctus condimentum sit amet, mattis et purus. Quisque quis leo a lacus rutrum interdum. Cras dapibus, urna in scelerisque condimentum, justo nibh tristique justo, et rhoncus nulla metus elementum risus. Aliquam et efficitur sem, eget eleifend ante.


          </p>

      </div>

       <div class="socialPost" id="topPost">
        <h3>Business Name</h3>
        <img src="logo.png" alt="businessesLogo">
              <div class="socialPostWebsites">

                <p>
                 <img src="website.png" alt="website" class="icon" width="24px" height="24px">Website <br />
                 </p>

                 <p>
                   <img src="facebook.png" alt="facebook" class="icon" width="24px" height="24px">Facebook <br/ >
                 </p>
                 
                 <p>
                  <img src="instagram.png" alt="instagram" class="icon" width="24px" height="24px">Instagram <br />
                </p>
              </div>
                  <div style="clear:both;"></div>

          <p>Fusce ac neque ultricies, tincidunt metus non, convallis dolor. Donec ipsum ante, porta suscipit aliquam quis, iaculis vel turpis. Nullam quam velit, gravida ut pulvinar scelerisque, consequat vel tortor. Fusce rhoncus, metus eget imperdiet placerat, elit ipsum egestas mi, non ultrices mi ipsum quis orci. Nunc lacinia at eros sed blandit. Quisque tristique eget nunc eget fringilla. Vestibulum in vestibulum orci. Suspendisse in vehicula nisi. In hac habitasse platea dictumst. Aenean quis lacus nulla. Nullam ultricies ligula eget nibh elementum consectetur. Pellentesque velit est, venenatis luctus condimentum sit amet, mattis et purus. Quisque quis leo a lacus rutrum interdum. Cras dapibus, urna in scelerisque condimentum, justo nibh tristique justo, et rhoncus nulla metus elementum risus. Aliquam et efficitur sem, eget eleifend ante.


          </p>

      </div>
    

</div>


<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
</div>
 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 aboutPage jumbotron">
 <h3>About Us </h3>
 <p>Blackout Businesses is a directory for over a 1000 local black owned businesses. We are available in the App Store and at <a href="www.blackoutbusinesses.com">www.blackoutbusinesses.com</a>
</p>

  <a class="twitter-timeline" href="https://twitter.com/blackoutios">Tweets by blackoutios</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
       

        <br /> 
        Follow us on Instagram <br />
        Like us on Facebook <br />
    </div>

</div>

<br /> <br /> <br /> <br /> <br /> <br />
<div class="clear"> </div>

<footer> 

Blackout Businesses | Copyright © 2016-2019
      
</div>
</footer>

</div>

</body>
</html>

