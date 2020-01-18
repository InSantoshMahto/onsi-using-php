<?php
  require 'includes/constants.php';
  require 'includes/connections.php';
  include 'includes/applications-access.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo DOMAIN; ?>resources/images/favicon.png">

    <title>DPR OLD | Applications | <?php echo ucfirst($_SESSION['session_access']); ?>, Gandhi Group Of Institution</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- date picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- custom style for Globle InterFace-->
    <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN; ?>resources/css/style.css">

    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

  </head>
  <body>

    <!-- header -->
    <header>
      <?php include 'includes/main-nav.php'; ?>
            <?php /*  including main-nav bar   */ require_once 'includes/model-profile.php'; ?>
    </header>

<!-- section -->
    <section>
      <h1 class="text-center" id="globleHeading">Gandhi Group Of Institution</h1>
      <main class="main">
<!--    message   -->
        <div class="container">
          <?php
            extract($_REQUEST);
            if (isset($info) && (!empty($info)) && isset($type) && (!empty($type))) {
              if ($type == "success") {
                ?>
                  <div class="alert alert-success" role="alert">
                    <?php
                      echo "<p style='text-align:center;'>$info</p>";
                    ?>
                  </div>
                <?php
              }
              elseif ($type == "danger") {
                ?>
                  <div class="alert alert-danger" role="alert">
                    <?php
                      echo "<p style='text-align:center;'>$info</p>";
                    ?>
                  </div>
                <?php
              }
            }
          ?>
        </div><!--    ./message   -->

<!--   DPR ( INSTITUTE )    -->
        <div class="container"">
          <div class="card">
            <div class="card-header bg-info text-white text-center customHeader">
              <h3>Daily Progress Reports ( INSTITUTE ) </h3>
            </div><!--   /form heading  for dpr(institute) -->
            <div class="card-body customBlock">

<!--    form start    -->
              <form method="POST" action="dpr/dpr-old-server.php">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="instituteName">Institute Name *</label>
                    <input type="text" class="form-control" id="instituteName" name="instituteName" placeholder="Institute Name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="personName">Person Name *</label>
                    <input type="text" class="form-control" id="personName" name="personName" placeholder="Person Name" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="personMobile">Mobile</label>
                    <input type="number" class="form-control" id="personMobile" name="personMobile" placeholder="Mobile">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="personEmail">Email</label>
                    <input type="email" class="form-control" id="personEmail" name="personEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                        <label for="afs">Agree For Seminar</label><br>
                        <select class="form-control" id="afs" name="afs" onchange="getAfs()">
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                  </div>
                  <div class="form-group col-md-6">
                      <div class="afterAfs" id="afterAfs">
                        <label for="seminarDate">Date</label>
                        <input type="text" class="form-control" name="seminarDate" id="datepicker" placeholder="Select Date from data Picker">
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="reports">Any Special Reports</label>
                  <textarea class="form-control" id="reports" name="reports" placeholder="Any Special Reports"></textarea>
                </div>
<!--   Official Details -->
                <div class="text-center" >
                  <button type="submit" class="btn btn-primary btn-lg" name="submit" value="dprInstitute">Submit</button>
                </div>
              </form><!--    /form end     -->
            </div><!-- card body -->
          </div><!--   /card   -->
        </div><!--     container-fluid -->
<!--   /DPR ( INSTITUTE )    -->

<!--   *******************************************    --> <br />


<!--   DPR ( PARENTS )    -->
        <div class="container">
          <div class="card">
            <div class="card-header bg-info text-white text-center customHeader">
              <h3>Daily Progress Reports ( PARENTS ) </h3>
            </div><!--   /form heading  for dpr(institute) -->
            <div class="card-body customBlock">
              <blockquote class="text-danger">Mobile Number Must Not Be Already Registered<br /> If Mobile Number Is Repeated Then System Will Not Accept It And It Will Show Error.</blockquote>
<!--    form start    -->
              <form id="needs-validation-dprParents" method="POST" action="dpr/dpr-old-server.php" novalidate>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="parentsName">Parents Name</label>
                    <input type="text" class="form-control" id="parentsName" name="parentsName" placeholder="Please enter full name. Ex: Evan Rajak" required>
                    <div class="invalid-feedback">
                      Please provide a Parents Name.
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="parentsMobile">Mobile</label>
                    <input type="number" class="form-control" id="parentsMobile" name="parentsMobile" placeholder="Mobile No. Ex: 9899665544" required>
                    <div class="invalid-feedback">
                      Please provide a Mobile number.
                    </div>
                  </div>
                </div>
                <div class="text-center" >
                  <button type="submit" class="btn btn-primary btn-lg" name="submit" value="dprParents">Submit</button>
                </div>
              </form><!--    /form end     -->
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';

                window.addEventListener('load', function() {
                  var form = document.getElementById('needs-validation-dprParents');
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                }, false);
              })();
              </script>
            </div><!-- card body -->
          </div><!--   /card   -->
        </div><!--     container-fluid -->
<!--   /DPR ( INSTITUTE )    -->

      </main>
    </section>
    <footer><br /><br /><br />
      <div class="customBlock fixed-bottom">
        <div class="text-center bg-primary" style="font-family: tahoma; font-size: 20px;"><i class="fa fa-cog fa-spin" style="font-size:20px; color: red;"> </i>  TEAM <i class="fa fa-refresh fa-spin" style="font-size:20px; color: white;"></i> ONSI <i class="fa fa-cog fa-spin" style="font-size:20px; color: red;"></i>
        </div>
      </div>
      <?php include 'includes/footer.php'; ?>
    </footer>
  </body>
</html>
