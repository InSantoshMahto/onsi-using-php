<?php
  extract($_REQUEST);
  session_start();
  if (!((isset($_SESSION['message_status'])) && (!empty($_SESSION['message_status'])) && $_SESSION['message_status'] = "active")) {
    header("location: index.php");
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
            <h1 class="cover-heading">Gandhi Group Of Institution</h1><br><br><br>
          </div>

          <!-- login system -->

          <!-- container -->

    <div class="container" style=" background-color: #dce6f7; border-radius: 2%; max-width: 450px;"><br><br>
      <div class="container" style="max-width: 375px;">
        <?php if ($_SESSION['type'] == "error") {
          ?>
        <div class="btn btn-lg btn-danger btn-block">
          <p style="font-size: 35px;"><?php echo ucfirst($_SESSION['type']); ?></p>
        </div>
          <?php
        } ?>

        <?php if ($_SESSION['type'] == "success") {
          ?>
        <div class="btn btn-lg btn-success btn-block">
          <p style="font-size: 35px;"><?php echo ucfirst($_SESSION['type']); ?></p>
        </div>
          <?php
        } ?>

        <?php if ($_SESSION['type'] == "pending") {
          ?>
        <div class="btn btn-lg btn-warning btn-block">
          <p style="font-size: 35px;"><?php echo ucfirst($_SESSION['type']); ?></p>
        </div>
          <?php
        } ?>

        <div class="btn btn-lg btn-default btn-block">
          <p style="color: #000; font-family: tahoma;"><?php echo $_SESSION['message']; ?></p>
        </div>

        <div class="btn btn-lg btn-primary btn-block">
          <a href="<?php echo $_SESSION['url']; ?>"> <?php echo $_SESSION['view']; ?> </a>
        </div><br><br><br>

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
    </div>
          <!-- footer  -->
    <footer>
      <?php include 'includes/footer.php'; ?>
    </footer>
  </body>
</html>