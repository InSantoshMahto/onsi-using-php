<!DOCTYPE html>
<html lang="en-IN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- <meta http-equiv="refresh" content="30">  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="one not software info">
    <meta name="author" content="onsi.in">
    <meta name="keyword" content="onsi.in,santosh,mahto,one not software info,onsi">
    <link rel="icon" href="images/favicon.ico">

    <title>One Not Software Info</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">One Not Software</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="https://www.instagram.com/onsi.in/"  target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/onsi.in/" target="_blank">Facebook</a></li>
                <li><a href="signin.php">Sign In</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/bg.png" alt="Account">
          <div class="container">
            <div class="carousel-caption">
              <h1>Create An Account</h1>
              <p>Sign Up Yourself for Better Experience</p>
              <p><a class="btn btn-lg btn-success" href="signup.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/hello.png" alt="Hello">
          <div class="container">
            <div class="carousel-caption">
              <h1>Team Members</h1>
              <p>Connect And Know About Team</p>
              <p><a class="btn btn-lg btn-primary" href="team.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/programmer.png" alt="Programmer">
          <div class="container">
            <div class="carousel-caption">
              <h1>Our Products</h1>
              <p>09+ Products Running In Market</p>
              <p><a class="btn btn-lg btn-info" href="products.php" role="button">Browse More</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/c_svg.svg" alt="About" width="150" height="150">
          <h2 id="about">About</h2>
          <p>This is The Official Website Of The onsi.in. We have a group of Excellent Programmer and Designer who are going to help you in your Project related to Web Software and System Software. </p>
          <p><a class="btn btn-default" href="about.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/about.png" alt="coder" width="150" height="150">
          <h2 id="team">Team</h2>
          <p>05+ Active Team Members.</p>
          <p><a class="btn btn-default" href="team.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/contactMail.svg" alt="Mail" width="150" height="150">
          <h2 id="contact">Contact</h2>
          <p>For any Queries contact us and Give us Your Feedback..</p>
          <p><a class="btn btn-default" href="contact.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row
      =============================================== -->
      <!-- FOOTER -->

    </div><!-- /.container -->
<div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="bootstrap/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/ie10-viewport-bug-workaround.js"></script>
  </div>
  <footer style="padding: 0px;margin: 0px;background-color: #000000;color: #23ff45; text-align: center;">
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017 onsi.in</p>
  </footer>
  </body>
</html>
