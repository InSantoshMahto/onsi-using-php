<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sign Up - one not software info">
    <meta name="author" content="onsi.in">
    <link rel="icon" href="images/favicon.ico">

    <title>mail test local </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">E-mail sign up</h2>
        <label for="first_name" class="sr-only">First Name</label>
        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" required autofocus><br>
        <label for="middle_name" class="sr-only">Middle Name</label>
        <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle Name (OPTIONAL)"><br>
        <label for="last_name" class="sr-only">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" required><br>
        <label for="email" class="sr-only">E-Mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail" required><br>
        <label for="pwd" class="sr-only">Password</label>
        <input type="password" id="pwd" name="pwd" class="form-control" value="123456" required><br>
        <input type="submit" name="signup" value="Sign Up" class="btn btn-lg btn-primary btn-block">
      </form>
    </div>
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
              $insert="SELECT email FROM a WHERE email='".$email."'";
              $res=mysql_query($insert);
              $count=mysql_num_rows($res);
                if ($count<1) 
                {
                    //preparing Insert query
                    $insert="INSERT INTO a(first_name,middle_name,last_name,email,password) values('$first_name','$middle_name','$last_name','$email','$pwd')";
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