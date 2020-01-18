<?php
  extract($_REQUEST);
  session_start();
  $disply_first = "block";
  $disply_second = "none";
  $disply_third = "none";
  if ($next = "first_step") {
    $disply_first = "none";
    $disply_second = "block";
    $disply_third = "none";
  }
  if ($next = "second_step") {
    $disply_first = "none";
    $disply_second = "none";
    $disply_third = "block";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/images/favicon.ico">

    <title>Gandhi Group Of Institution</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="resources/css/signin-custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resources/css/cover.css" rel="stylesheet">
  </head>

  <body class="bg-primary">

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">GGI</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link text-white" href="index.php">Home</a>
              </nav>
            </div>
          </div>

          <!-- header -->

          <div class="inner cover" id="home">
            <h1 class="cover-heading">Gandhi Group Of Institution</h1>
          </div>

          <!-- login system -->

          <!-- container -->

    <div class="container">
      <h4 class="form-signin-heading text-warning">Forget Your Password</h4>
      <div class="first_step" id="first_step" style="display: <?php echo $disply_first; ?>">
        <form class="form-signin">
          <p class="form-signin-heading"><b>Enter basic Details</b></p>
          <label for="username" class="sr-only">username</label>
          <input type="text" id="username" class="form-control" name="username" placeholder="User Name" required autofocus><br>
          <label for="uid" class="sr-only">Aadhar</label>
          <input type="text" id="uid" class="form-control" name="uid" placeholder="Aadhar" required><br>
          <label for="email" class="sr-only">Email address</label>
          <input type="email" id="email" class="form-control" name="email" placeholder="Email" required><br>
          <button class="btn btn-lg btn-success btn-block" value="first_step" name="next" type="submit">Get OTP</button>
        </form>
      </div>

      <div class="second_step" id="second_step" style="display: <?php echo $disply_second; ?>">
        <form class="form-signin">
          <p class="form-signin-heading"><b>Check your email for OTP</b></p>
          <label for="otp" class="sr-only">OTP</label>
          <input type="text" id="otp" class="form-control" name="uid" placeholder="OTP" required><br/>
          <button class="btn btn-lg btn-success btn-block" value="second_step" name="next" type="submit">Submit OTP</button>
        </form>
      </div>

      <div class="third_step" id="third_step" style="display: <?php echo $disply_third; ?>">
        <form class="form-signin">
          <p class="form-signin-heading"><b>Enter Your New Password</b></p>
          <label for="enter_password" class="sr-only">Enter Password</label>
          <input type="text" id="enter_password" class="form-control" name="enter_password" placeholder="Enter Password" required><br/>
          <label for="confirm_password" class="sr-only">Confirm_Password</label>
          <input type="text" id="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm Password" required><br/>
          <button class="btn btn-lg btn-success btn-block" value="third_step" name="next" type="submit">Submit</button>
        </form>
      </div>
    </div>
      <!-- /container -->

          <!-- footer  -->
          <div>
          <span id="siteseal">
            <script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=uBOjpRZNXpCAsMjnzHCXYCQkQcTCszdexQI35DHYbQWCSnccLsvpMlcryPsZ"></script>
          </span>
          </div>
        </div>
      </div>
          <!-- footer  -->
    <footer>
      <?php include 'includes/footer.php'; ?>
    </footer>
  </body>
</html>