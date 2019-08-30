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

    <title>Sign Up - One Not Software Info</title>

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
                <li class="active"><a href="">Sign Up</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <section style="margin-top: 80px;">
    <div class="container">
      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">sign up-onsi.in </h2>
        <label for="first_name" class="sr-only">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required autofocus><br>
        <label for="middle_name" class="sr-only">Middle Name</label>
        <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle Name (OPTIONAL)"><br>
        <label for="last_name" class="sr-only">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required><br>
        <label for="email" class="sr-only">E-Mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail" required><br>
        <label for="mobile" class="sr-only">mobile</label>
        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile" disabled>
        <label for="dob" class="sr-only">Dob</label><span>DOB</span>
        <input type="date" id="dob" name="dob" class="form-control" disabled>
        <label for="gender">Gender</label>&nbsp;&nbsp;
        <input type="radio" id="gender" name="gender" value="male" checked>Male
        <input type="radio" id="gender" name="gender" value="female">Female
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
<?php
  extract($_POST);
  $hostname="localhost";
  $username="root";
  $password="";
  $db="onsi";
  //test for sign up button clicked or not 
  if (isset($signup))
  {
    //checking for empty values OF DETAILS
    if ((!empty($first_name))&&(!empty($last_name))&&(!empty($email))&&(!empty($pwd)))
    {
        //string formating(REMOVING TAGS AND SPACES)
        $first_name=format_set($first_name);
        $middle_name=format_set($middle_name);
        $last_name=format_set($last_name);
        $email=format_set($email);
        //database connection CHECKING
        $chk_conn=mysql_connect($hostname,$username,$password);
        if ($chk_conn) 
        {
            //database selection CHECKING
            $chk_db=mysql_select_db($db);
            if ($chk_db) 
            {
                // CHECKING FOR EXISTANCE OF EMAIL
              $insert="SELECT email FROM account WHERE email='".$email."'";
              $res=mysql_query($insert);
              $count=mysql_num_rows($res);
                if ($count<1) 
                {
                    //preparing Insert query
                    $insert="INSERT INTO account(first_name,middle_name,last_name,email,password) values('$first_name','$middle_name','$last_name','$email','$pwd')";
                    //executing INSERT query
                    $test=mysql_query($insert);
                    if ($test)
                    {
                    // SUCCESSFULLY INSERTED
                        $msgSuccess="Hello "."$first_name"." Seccessfully Registered";
                        //FOR SUCCESS ALERT MESSAGE
                        ?>
                            <script type="text/javascript">
                                alert("<?php echo $msgSuccess;?>");
                            </script>
                        <?php
                    }
                    else
                    {
                       //echo "Not Inserted";

                    }
                }
                else
                {
                    //for ALREADY EXIST alert message
                    ?>
                        <script type="text/javascript">
                            alert("User ALredy Exist");
                        </script>
                    <?php
                }  
            }
            else
            {
                // IF SELECTION OF DATABASE IS UNSUCCESSFUL 
                //echo "Not Selected<br>";
            }
        }
        else
        {
            // IF NOT CONNECTED TO MYSQL
            //echo "Not Connected";
        }
        
        //for closing database connection
        mysql_close();
    }
  }
  else
  {
    // IF NOT CLICKED THE SIGN UP BUTTON
    //echo "Please click on sign Up Button";
  }
/*---------------------------------User Define Function Area-------------------------------------------------------*/  
Function format_set($str)
{
    return(trim(strtoupper(strip_tags($str))));
}
?>