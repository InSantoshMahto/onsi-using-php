<?php
  extract($_REQUEST);
  // connecting and selecting database
  require 'includes/constants.php';
  require 'includes/connections.php';
  session_start();
  $_SESSION['message_status'] = "";
  $_SESSION['type'] = "";
  $_SESSION['message'] = "";
  $_SESSION['url'] = "";
  $_SESSION['view'] = "";

  /*  ---------- checking The existance of cookie  ---------  */

  if ((isset($_COOKIE['username'])) && (!empty($_COOKIE['username'])) && (isset($_COOKIE['password'])) && (!empty($_COOKIE['password']))) {
      session_activation($_COOKIE['username'], $_COOKIE['password']);
    }

  /*  ---------- checking The existance of Sission  ---------  */

  if ((isset($_SESSION['session_status'])) && (!empty($_SESSION['session_status'])) && ($_SESSION['session_status'] == "active")) {
      redirect($_SESSION['session_access']);
    }

  /*  ---------  manual Login   start --------------               */

  if ((isset($login)) && (!empty($login))) {
    //echo "$username<br/>$password";
    $select = "SELECT id FROM account WHERE status = '1' AND username = '$username' AND password = '$password'";
    $res = mysqli_query($conn_ggi,$select);
    $count = mysqli_num_rows($res);
    if ($count>0) {
      // checking the checkbox consition i.e, remember me.
      if ((isset($remember)) && (!empty($remember)) && $remember= "enable") {
        cookie_activataion($username, $password);
        //echo "remember me confirmed <br/>";
      }
      session_activation($username, $password);
    }
    else {
      // loging faile
      $_SESSION['message_status'] = "active";
      $_SESSION['type'] = "error";
      $_SESSION['message'] = "Wrong User Name OR Password.<br>Confirm your password and try agrin.";
      $_SESSION['url'] = "forget-password.php";
      $_SESSION['view'] = "Forget Password";
      header("location: message.php");
    }
    //  closing database connection
    mysqli_close($conn_ggi);
  }

 /*  ---------  manual Login   end --------------               */

  /*  ------------------- function Start ----------------*/

    // session_activation
    function session_activation($username, $password) {
      // connecting and selecting database
      require 'includes/connections.php';
      $select_session = "SELECT id, username, firstName, access FROM account WHERE status = '1' AND username = '$username' AND password = '$password'";
      $res_session = mysqli_query($conn_ggi,$select_session);
      $row = mysqli_fetch_assoc($res_session);
      // session
      $_SESSION['session_status'] = "active";
      $_SESSION['session_id'] = $row['id'];
      $_SESSION['session_username'] = $row['username'];
      $_SESSION['session_name'] = $row['firstName'];
      $_SESSION['session_access'] = $row['access'];
      //  closing database connection
      mysqli_close($conn_ggi);
      redirect($_SESSION['session_access']);
    }

    // cookie activation
    function cookie_activataion($username, $password) {
      $cookie_username = 'username';
      $cookie_password = 'password';
      setcookie ( $cookie_username, $username, time() + (86400 * 1), "/" ); // 86400 = 1 day
      setcookie ( $cookie_password, $password, time() + (86400 * 1), "/" );
    }

    // redirect
    function redirect($location) {
      //echo "redirect ok</br>";
      //echo "$location";
      header("location: ".DOMAIN."$location/index.php");
    }

  /*  ------------------- function End ----------------*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="resources/images/favicon.png">

    <title>Gandhi Group Of Institution</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- styles for signin template -->
    <link href="resources/css/signin-custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resources/css/cover.css" rel="stylesheet">
  </head>

  <body class="bg-primary text-white">
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">GGI</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="index.php">Home</a>
              </nav>
            </div>
          </div>
          <!-- header -->

          <div class="inner cover" id="home"><br>
            <h1 class="cover-heading">Gandhi Group Of Institution</h1>
          </div>

          <!-- login system -->

          <!-- container -->

    <div class="container">

      <form class="form-signin" method="post" action="">
        <h4 class="form-signin-heading">Log In System</h4>
        <label for="username" class="sr-only">Email address</label>
        <input type="text" id="username" class="form-control" name="username" placeholder="User Name" required autofocus><br>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox" style="display: block;">
          <label>
            <input type="checkbox" value="enable" name="remember" checked> Remember me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label>
            <a href="forget-password.php">Forget password</a>
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" value="login" name="login" type="submit">Log in</button>
      </form>

    </div>

      <!-- /container -->

          <!-- contact -->

          <div><br>
            <h4>Contact</h4><br>
            <blockquote>GIET Gunupur, Dist- Rayagada, Odisha, India - 765022</blockquote>
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
