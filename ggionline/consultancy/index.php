<?php include 'includes/constants.php'; ?>
<?php include 'includes/consultancy-access.php'; ?>
<?php include 'includes/connections.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.ggionline.net/resources/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <title><?php echo ucfirst($_SESSION['session_access']); ?>, Gandhi Group Of Institution</title>
    <style type="text/css">
      body {
        background-image: url(https://www.ggionline.net/resources/images/coming-soon.jpg);
        width: 100%;
      }
    </style>
  </head>

  <body>

    <!-- header -->
    <header>
      <?php include 'includes/main-nav.php'; ?>
    </header>

    <!-- section -->
    <section>
        <div class="text-center" id="globleHeading">
            <h1>Gandhi Group Of Institution</h1>
        </div>
          <div class="bg-info fixed-bottom text-white">
            <marquee>
              <span style="font-family: 'Tangerine', serif; font-size: 30px;">< ..... >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coming Soon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< ..... />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consultancy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< ..... >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coming Soon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;< ..... /></span>
            </marquee>
          </div>
    </section>
    <footer>
          <!-- footer for dashboard -->
          <?php include 'includes/footer.php'; ?>
    </footer>
  </body>
</html>
