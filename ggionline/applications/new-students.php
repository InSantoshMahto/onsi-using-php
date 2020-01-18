<?php /*  including constants   */ require_once 'includes/constants.php'; ?>
<?php /*  including footer-company   */ require_once 'includes/applications-access.php'; ?>
<?php /*  including footer-company   */ require 'includes/connections.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo DOMAIN; ?>resources/images/favicon.png">

    <title>New Student | Application | <?php echo ucfirst($_SESSION['session_access']); ?>, Gandhi Group Of Institution</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- date picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Custom styles for stater template -->
    <link href="resources/css/starter.css" rel="stylesheet">

    <!-- Custom styles for applications -->
    <link href="resources/css/style.css" rel="stylesheet">

  </head>
  <body onload="bodyLoadFormStudents()">

    <!-- header  -->
    <header>
    <?php include 'includes/main-nav.php'; ?>
    </header>
    <!-- /.header -->

    <!-- section -->
    <section>
      <!-- this div and class are used to restrict the page inside navigation bar  -->
      <div class="without-container-with-starter"></div>
      <div class="container">
        <!-- form heading   -->
        <h3 style="padding: 0px; margin: 0px;" class="p-2 mb-2 bg-info text-white text-center">Students Application Form</h3>
        <!--    message   -->
        <div class="message">
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
        </div>
        <!--    message   -->

        <!--    form start    -->
        <form class="form-control" method="post" action="students/new-students-server.php" >

          <!--      Appling For   -->
          <div class="p-2 bg-dark text-white">Applying For</div>
          <div class="row">

            <!-- Institute   Location -->
            <div class="col-md-4">
              <div id="institute">
                <label>Institute Location *</label><br>
                <select class="custom-select form-control" name="instituteLocation">
                  <option value="gunupur" selected>Gunupur</option>
                </select>
              </div>
            </div>

            <!-- sub indtitute       -->
            <div class="col-md-4">
                <div id="sub-institute">
                <label>Sub Institute *</label><br>
                <select class="custom-select form-control" name="subInstitute">
                  <option value="giet" selected>GIET</option>
                </select>
              </div>
            </div>

            <!--  course      -->
            <div class="col-md-4">
              <div id="course">
                <label>Course *</label><br>
                <select class="custom-select form-control" name="course">
                  <option value="b-tech" selected>B-Tech</option>
                </select>
              </div>
            </div>
          </div>
          <!--      /.Appling For   -->
          <br/>
          <!--   Student Details      -->
          <div class="p-2 bg-dark text-white">Student Details</div>

          <!-- first row  -->
          <!--   Student name      -->
          <div class="row">
            <div class="col-md-4">
              <label for="studentFirstName">First Name *</label>
              <input type="text" name="studentFirstName" id="studentFirstName" class="form-control" placeholder="First Name" required autocomplete>
            </div>
            <div class="col-md-4">
              <label for="studentMiddleName">Middle Name</label>
              <input type="text" name="studentMiddleName" id="studentMiddleName" class="form-control" placeholder="Middle Name" autocomplete>
            </div>
            <div class="col-md-4">
              <label for="studentLastName">Last Name *</label>
              <input type="text" name="studentLastName" id="studentLastName" class="form-control" placeholder="Last Name" required autocomplete>
            </div>
          </div>
          <!-- /.first row  -->

          <!--  second row  -->
          <div class="row">

            <!--    Aadhar Number    -->
            <div class="col-md-4">
              <label for="studentUid">Aadhar Number *</label>
              <input type="number" name="studentUid" id="studentUid" class="form-control" placeholder="Aadhar Number" required>
            </div>

            <!--    Mobile Number    -->
            <div class="col-md-4">
              <label for="studentMobile">Mobile Number *</label>
            <input type="number" name="studentMobile" id="studentMobile" class="form-control" min="1000000000" max="9999999999" placeholder="Mobile Number" required autocomplete>
            </div>

            <!--    Email Address    -->
            <div class="col-md-4">
            <label for="studentEmail">Email Address *</label>
            <input type="email" name="studentEmail" id="studentEmail" class="form-control" placeholder="Email address" required autocomplete>
            </div>

            <!--    DOB    -->
            <div class="col-4">
              <div class="Dob">
                <label>studentDob *</label>
                <input type="text" name="studentDob" id="datepicker" class="form-control" required>
              </div>
            </div>

            <!--    Gender Ratio    -->
            <div class="col-8">
              <div class="studentGender">
                <label>Gender *</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" value="male" name="studentGender" checked> Male
                <input type="radio" value="female" name="studentGender"> Female
              </div>
            </div>
          </div>
          <!--   /.Student Details      -->
          <br/>
          <!--    Father Details   -->
          <div class="p-2 bg-dark text-white">Father Details</div>
          <div class="row">

            <!--   Father name      -->
            <div class="col-md-4">
              <label for="fathertFirstName">First Name *</label>
              <input type="text" name="fatherFirstName" id="fatherFirstName" class="form-control" placeholder="First Name" required autocomplete>
            </div>
            <div class="col-md-4">
              <label for="fatherMiddleName">Middle Name</label>
              <input type="text" name="fatherMiddleName" id="fatherMiddleName" class="form-control" placeholder="Middle Name" autocomplete>
            </div>
            <div class="col-md-4">
              <label for="fatherLastName">Last Name *</label>
              <input type="text" name="fatherLastName" id="fatherLastName" class="form-control" placeholder="Last Name" required autocomplete>
            </div>

            <!--   father Mobile Namber      -->
            <div class="col-md-4">
              <label for="fatherMobile">Mobile Number *</label>
              <input type="number" name="fatherMobile" id="fatherMobile" min="1000000000" max="9999999999" class="form-control" placeholder="Mobile Number" required autocomplete>
            </div>

            <!--   Father Email address      -->
            <div class="col-8">
              <label for="fatherEmail">Email Address</label>
              <input type="email" name="fatherEmail" id="fatherEmail" class="form-control" placeholder="Email address" autocomplete>
            </div>
          </div>
          <!--    /.Father Details   -->
          <br/>
          <!--    Mother Details   -->
          <div class="p-2 bg-dark text-white">Mother Details</div>

          <!--   Mother Name      -->
          <div class="row">
            <div class="col-md-4">
              <label for="motherFirstName">First Name *</label>
              <input type="text" name="motherFirstName" id="motherFirstName" class="form-control" placeholder="First Name" required autocomplete>
            </div>
            <div class="col-md-4">
              <label for="motherMiddleName">Middle Name</label>
              <input type="text" name="motherMiddleName" id="motherMiddleName" class="form-control" placeholder="Middle Name" autocomplete>
            </div>
            <div class="col-md-4">
              <label for="studentLastName">Last Name *</label>
              <input type="text" name="motherLastName" id="motherLastName" class="form-control" placeholder="Last Name" required>
            </div>

            <!--  Mother Mobile Number      -->
            <div class="col-md-4">
              <label for="motherMobile">Mobile number</label>
              <input type="number" name="motherMobile" id="motherMobile" class="form-control" min="1000000000" max="9999999999" placeholder="Mobile Number" autocomplete>
            </div>

            <!--   Mother Email Address      -->
            <div class="col-8">
                  <label for="motherEmail">Email address</label>
                  <input type="email" name="motherEmail" id="motherEmail" class="form-control" placeholder="Email address" autocomplete>
            </div>
          </div>
          <!--    /.Mother Details   -->
          <br/>
          <!--    Jee Details   -->
          <div class="p-2 bg-dark text-white">JEE Details</div>
          <div class="row">

            <!--   Jee Roll Number      -->
            <div class="col-6">
              <label for="jeeRollNumber">Roll Number</label>
              <input type="number" name="jeeRollNumber" id="jeeRollNumber" class="form-control" placeholder="Roll Number" autocomplete>
            </div>

            <!--   Jee All India Rank  -->
            <div class="col-6">
              <label for="jeeRank">Rank</label>
              <input type="number" name="jeeRank" id="jeeRank" class="form-control" placeholder="Rank" autocomplete>
            </div>
          </div>
          <!--    /.Jee Details   -->
          <br/>
          <!--    Acadmic Details  -->
          <div class="p-2 bg-dark text-white">Acadmic Details</div>
          <div class="row">

            <!--   Exam Appeared  -->
            <!--   For Intermediate  -->
            <div class="col-3">
              <label for="examIntermediate">Exam Appeared</label>
              <input type="text" name="examIntermediate" id="examIntermediate" class="form-control" value="Intermediate" readonly>
            </div>

            <!--   Board  -->
            <div class="col-2">
              <label for="interBoard">Board</label>
              <input type="text" name="interBoard" id="interBoard" class="form-control" placeholder="Board" autocomplete>
            </div>

            <!--   School/college Name -->
            <div class="col-2">
              <label for="interInstitute">School/college</label>
              <input type="text" name="interInstitute" id="interInstitute" class="form-control" placeholder="School/college" autocomplete>
            </div>

            <!--   Year -->
            <div class="col-2">
              <label for="interYear">Year</label>
              <input type="number" name="interYear" id="interYear" min="1000" max="9999" value="2017" step="1" class="form-control" autocomplete>
            </div>

            <!--   Percentage -->
            <div class="col-3">
              <label for="interPercentage">Percentage</label>
              <input type="number" name="interPercentage" id="interPercentage" min="30" max="100" class="form-control" placeholder="Percentage" required autocomplete>
            </div>
            <!--   /.For Intermediate  -->
            <!--   For Matriculation  -->
            <div class="col-3">
              <input type="text" name="examMatriculation" id="examMatriculation" class="form-control" value="Matriculation" readonly>
            </div>

            <!--   Board  -->
            <div class="col-2">
              <input type="text" name="matricBoard" id="matricBoard" class="form-control" placeholder="Board" autocomplete>
            </div>

            <!--   School/college Name -->
            <div class="col-2">
              <input type="text" name="matricInstitute" id="matricInstitute" class="form-control" placeholder="school/college" autocomplete>
            </div>

            <!--   Year -->
            <div class="col-2">
              <input type="text" name="matricYear" id="matricYear" class="form-control"  min="1000" max="9999" value="2015" step="1" autocomplete>
            </div>

            <!--   Percentage -->
            <div class="col-3">
              <input type="text" name="matricPercentage" id="matricPercentage" min="30" max="100" class="form-control" placeholder="Percentage" required autocomplete>
            </div>
          </div>
          <!--   /.For Matriculation  -->
          <br/>
          <!--   Address -->
          <div class="p-2 bg-dark text-white">Address</div>
          <div>
            <div class="row">

                <!--   Country -->
                <div class="col-3">
                  <div id="country">
                    <label>Country</label><br>
                    <select class="form-control" name="country">
                      <option value="india" selected>India</option>
                  </select>
                  </div>
              </div>

                <!--   State -->
                <div class="col-3">
                  <div id="stateOption">
                    <label>State</label><br>
                    <select class="form-control" name="state" id="state-control" onchange="getDistrict()">
                        <option value="0">Select State</option>
                    </select>
                  </div>
              </div>

              <!--   District in Odisha -->
              <div class="col-3">
                <div id="stateOption">
                  <label>District</label><br>
                  <select class="district-control form-control" id="district-control" name="district">
                    <option value="0">Select District</option>
                  </select>
                </div>
              </div>

              <!--   Pin code -->
              <div class="col-3">
                <label for="pinCode">Pin Code</label>
                <input type="text" name="pinCode" id="pinCode" class="form-control" placeholder="Pin Code" autocomplete>
              </div>
            </div>
            <div class="row">

              <!--   Street -->
              <div class="col-sm-3">
                <label for="street">Street</label>
                <input type="text" name="street" id="street" class="form-control" placeholder="street" autocomplete>
              </div>

              <!--   House no. -->
              <div class="col-sm-3">
                <label for="houseNumber">House No.</label>
                <input type="text" name="houseNumber" id="houseNumber" class="form-control" placeholder="House No." autocomplete>
              </div>

              <!--   Street -->
              <div class="col-sm-6">
                <!-- google add sense  -->
              </div>
            </div>
          </div>
          <!--   /.Address -->
          <br/>
          <!--   Official Details -->
          <div style="display: none;">
            <div class="row">
              <div class="col-3">
                <input type="text" name="session_id" id="session_id" value="<?php echo $_SESSION['session_id'] ?>" readonly>
              </div>
              <div class="col-3">
                <input type="text" name="session_username" id="session_username" value="<?php echo $_SESSION['session_username'] ?>" readonly>
              </div>
              <div class="col-3">
                 <input type="text" name="session_name" id="session_name" value="<?php echo $_SESSION['session_name'] ?>" readonly>
              </div>
              <div class="col-3">
                <input type="text" name="session_access" id="session_access" value="<?php echo $_SESSION['session_access'] ?>" readonly>
              </div>
            </div>
          </div>
          <!--   subumit button -->
          <div class="row">
            <div class="col-md-6">
              <label>Terms And Conditions</label>
              <div class="termsAndConditions">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
              </div>
            </div>
            <div class="col-md-3">
              <p>Recaptch</p>
            </div>
            <div class="col-md-3"  align="center"><br><br>
              <button class="btn btn-primary btn-lg" type="submit" name="submit" value="submit">Submit</button>
            </div>
          </div>
        </form>
        <!--    /.form end     -->
      </div>
    </section>
    <?php
      //including footer
      include 'includes/footer.php';
    ?>
  </body>
</html>
