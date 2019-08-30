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
    <link rel="icon" href="images/favicon.ico">

    <title>Sign In - One Not Software Info</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>
    <link href="css/carousel.css" rel="stylesheet">
        <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="https://www.instagram.com/onsi.in/"  target="_blank">Instagram</a></li>
                <li><a href="https://www.facebook.com/onsi.in/" target="_blank">Facebook</a></li>
                <li class="active"><a href="">Sign In </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <section style="margin-top: 80px;">
    <div class="container">
      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Sign In - onsi.in </h2>
        <label for="email" class="sr-only">E-Mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail" required><br>
        <label for="pwd" class="sr-only">Password</label>
        <input type="password" id="pwd" name="pwd" class="form-control" value="123456" required readonly><br>
        <input type="submit" name="signup" value="Sign Up" class="btn btn-lg btn-primary btn-block">
      </form>
    </div>
    </section>
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
