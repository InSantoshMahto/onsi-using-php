<?php
  include 'includes/constants.php';
  include 'includes/admin-access.php';
  include 'includes/connections.php';

  // start page controllar
  /* ------------------------------------------------
           here we are checking  user are first time time in the page
           i.e here we are not using ajax.
           this condition for first tome visitor Not for ajax
  ------------------------------------------------------------  */

  if (!(isset($ajaxWithMe) && (!empty($ajaxWithMe)))) {
    // starter code start from here
 ?>
<!doctype html>
<html lang="en-IN">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo DOMAIN; ?>resources/images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- date picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- custom style for Globle InterFace-->
    <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN; ?>resources/css/style.css">

    <!-- custom style for Admin InterFace-->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <!-- title of the page -->
    <title>Setting | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
    <style>
      *{
        padding: 0px;
        margin: 0px;
      }
      .rowColumn {
        height: 400px;
        overflow: auto;
        padding: 0px;
      }
      .leftColumnPadding {
        padding: 0px 20px 0px 0px;

      }
      .centerColumnPadding {
        /*     */
      }
      .rightColumnPadding{
        padding: 0px 0px 0px 20px;

      }
    </style>
  </head>
  <body onload="bodyLoad()">

    <!-- header -->
    <header>
      <?php include 'includes/main-nav.php'; ?>
    </header>

    <!-- section -->
    <section>
      <div class="text-center" id="globleHeading">
          <h1>Gandhi Group Of Institution</h1>
      </div>
      <main role="main">

<!--   Zone manager    -->
        <br><h3 class="customHeader text-center alert bg-info">Zone manager</h3>
        <div class="container-fluid"><!-- container-fluid -->

<!--   first Row -->
          <div class="row">

<!--   first column -->
            <div class="col-md-8 rowColumn">
              <div class="customBlock" id="zoneManagerTable">

<!--   zone data table -->
<?php zoneManagerTable(); ?>
<!--   /zone data table -->

              </div>
            </div>
<!--   /first column -->

<!--         ************************************    -->

<!--   second column -->
            <div class="col-md-4 rowColumn">
              <div class="rightColumnPadding">
                <div class="customBlock">
                  <i class="fa fa-circle-o-notch fa-spin text-primary" style="font-size:150px;"></i>
                  <i class="fa fa-circle-o-notch fa-spin text-warning" style="font-size:150px;"></i>
                  <i class="fa fa-circle-o-notch fa-spin text-primary" style="font-size:150px;"></i>
                  <i class="fa fa-circle-o-notch fa-spin text-success" style="font-size:150px;"></i>
                </div>
              </div>
            </div>
<!--   /second column -->

          </div>
<!--   /first Row -->

        </div> <!-- /container-fluid -->
<!--    /zone manager   -->

<!--  ======================================
  **********************************************************************************
                                             ======================================= -->

<!-- marketing Manager -->
        <br><h3 class="customHeader text-center alert bg-info">Marketing manager</h3>
        <div class="container-fluid"><!-- container-fluid -->

<!--   Second Row -->
          <div class="row">

<!--   first column -->
            <div class="col-md-4 rowColumn">
                <div class="customBlock">
                  <i class="fa fa-circle-o-notch fa-spin text-primary" style="font-size:150px;"></i>
                  <i class="fa fa-circle-o-notch fa-spin text-success" style="font-size:150px;"></i>
                  <i class="fa fa-circle-o-notch fa-spin text-primary" style="font-size:150px;"></i>
                  <i class="fa fa-circle-o-notch fa-spin text-primary" style="font-size:150px;"></i>
                </div>
            </div>
<!--   /first column -->

<!--         ************************************    -->

<!--   second column -->
            <div class="col-md-8 rowColumn">
              <div class="rightColumnPadding">
                <div class="customBlock" id="marketingManagerTable">

<!--   form to get marketing officer in a selected zone-->
                  <form class="was-validated" style="display: none;">
                    <div class="form-row align-items-center">
                      <div class="col-auto">
                        <div class="form-group">
                          <select class="form-control" required>
                            <option value="">Select a zone for more  specified  and customize details</option>
                            <?php getZone(); ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-auto form-group">
                        <button type="submit" class="btn btn-primary" value="getZoneDetails">Get Zone Officer</button>
                      </div>
                    </div>
                  </form><!--   /form to get marketing officer in a selected zone-->

<!--   Marketing data table -->
<?php marketingManagerTable(); ?>
<!--   /Marketing data table -->

              </div>
            </div><!--   /second column -->
          </div><!--   /Second Row -->
        </div> <!-- /container-fluid -->
<!--   /marketing manager  -->

<!--  =======================================

  *********************************************************************************************

                                               ============================================= -->
<!--  add new Area  -->

        <br><h3 class="customHeader text-center alert bg-info">Add New</h3>
        <div class="jumbotron"><!-- jumbotron -->

<!--   Add  New Control   -->

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Status</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Zone Officer</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Marketing Officer</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">

  <!-- status Area -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <blockquote style="display:none">Now our zone(Admin) And zone(Marketing) both are working.<br /> so, please Add a zone (admin/marketing) officer.<br /> currently Only Activate And deativate Option are working. very soon we will provide user Profile-view/edit/permanent Delete options.<br />Thanks.</blockquote>
    <pre class="text-danger">Plz do not add any new user in this system. it may be not work proper way. plz wait for next update on this setting page.<br> Thanks</pre>
  </div><!--   /status Area -->

  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

    <!--zone Officer Area -->
<!-- form for add a new marketing officer in a specified zone -->

<form id="needs-validation-zone" method="post" novalidate>
  <!-- name -->
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstNameZone">First name *</label>
      <input type="text" class="form-control" id="firstNameZone" name="firstName" placeholder="First name" required>
      <div class="invalid-feedback">
        Please provide a valid First name.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="middleNameZone">Middle name</label>
      <input type="text" class="form-control" id="middleNameZone" name="middleName" placeholder="Middle name">
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastNameZone">Last name</label>
      <input type="text" class="form-control" id="lastNameZone" name="lastName" placeholder="Last name">
    </div>
  </div><!--   /name  -->

  <!-- contact information ie, mobile and email -->
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstNameZone">Mobile *</label>
      <input type="text" class="form-control" id="mobileZone" name="mobile" placeholder="Mobile" required>
      <div class="invalid-feedback">
        Please provide a valid Mobile.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="emailZone">Email *</label>
      <input type="text" class="form-control" id="emailZone" name="email" placeholder="Email" required>
      <div class="invalid-feedback">
        Please provide a valid Email.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="zoneNameZone">Zone Name</label>
<!-- form to get zone details for adding a new Zone officer -->
      <select class="form-control" id="zoneNameZone" name="zoneName" required>
        <option value="" selected>Select Zone</option>
        <?php getZone(); ?>
      </select>
      <div class="invalid-feedback">
        Please Select a zone.
      </div><!--   /form to get zone details for adding a new Zone officer -->
    </div>
  </div><!--  /contact information ie, mobile and email -->

  <!--   gender dob and uid  -->
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="genderZone">Gender *</label><br>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="genderMaleZone" name="gender" value="male" required>
        <label class="custom-control-label" for="genderMaleZone">Male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="genderFemaleZone" name="gender" value="female" required>
        <label class="custom-control-label" for="genderFemaleZone">Female</label>
        <div class="invalid-feedback">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please select a gender</div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="dateSearchZone">DOB *</label>
      <input type="text" class="form-control" name="dob" id="dateSearchZone" required>
      <div class="invalid-feedback">
        Please pick a valid date of birth from datepicker control.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="uidZone">UID *</label>
      <input type="text" class="form-control" id="uidZone" name="uid" placeholder="Aadhaar" required>
      <div class="invalid-feedback">
        Please provide a valid Aadhar.
      </div>
    </div>
  </div><!--   /gender dob and uid  -->

  <!-- address -->
  <div class="form-row"><!-- first address row -->
    <div class="col-md-4 mb-3">
      <label for="countryZone">Country *</label><br>
      <select class="form-control" name="country" id="countryZone">
        <option value="india" selected>India</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="state-control-zone">State *</label><br>
      <select class="form-control" name="state" id="state-control-zone" onchange="getDistrictZone()" required>
      </select>
      <div class="invalid-feedback">
        Please provide a valid State.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="district-control-zone">District *</label><br>
      <select class="form-control" id="district-control-zone" name="district" required>
      </select>
      <div class="invalid-feedback">
        Please provide a valid District.
      </div>
    </div>
  </div><!--  /first address row -->
  <div class="form-row"><!-- second address row -->
    <div class="col-md-3 mb-3">
      <label for="postOfficeZone">Post Office *</label>
      <input type="text" class="form-control" id="postOfficeZone" name="postOffice" placeholder="Post Office" required>
      <div class="invalid-feedback">
        Please provide a valid post office.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pinCodeZone">Pin Code *</label>
      <input type="text" class="form-control" id="pinCodeZone" name="pinCode" placeholder="Pin Code" required>
      <div class="invalid-feedback">
        Please provide a valid pin code.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="streetZone">Street</label>
      <input type="text" class="form-control" id="streetZone" name="street" placeholder="Street">
    </div>
    <div class="col-md-3 mb-3">
      <label for="houseNumberZone">House No.</label>
      <input type="text" class="form-control" id="houseNumberZone" name="houseNumber" placeholder="House Number">
    </div><!-- /second address row -->
  </div><!-- /address -->
  <button class="btn btn-primary" name="addNow" value="zone" type="submit">Add Now Zone User</button>
</form>

<script>
//JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation-zone');
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

<!--   /form for add a new Zone officer in a specified zone -->


  </div><!--  /zone Officer Area -->
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


<!-- form for add a new marketing officer in a specified zone -->

<form id="needs-validation-marketing" method="post" novalidate>
  <!-- name -->
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstNameMarketing">First name *</label>
      <input type="text" class="form-control" id="firstNameMarketing" name="firstName" placeholder="First name" required>
      <div class="invalid-feedback">
        Please provide a valid First name.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="middleNameMarketing">Middle name</label>
      <input type="text" class="form-control" id="middleNameMarketing" name="middleName" placeholder="Middle name">
    </div>
    <div class="col-md-4 mb-3">
      <label for="lastNameMarketing">Last name</label>
      <input type="text" class="form-control" id="lastNameMarketing" name="lastName" placeholder="Last name">
    </div>
  </div><!--   /name  -->

  <!-- contact information ie, mobile and email -->
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="firstNameMarketing">Mobile *</label>
      <input type="text" class="form-control" id="mobileMarketing" name="mobile" placeholder="Mobile" required>
      <div class="invalid-feedback">
        Please provide a valid Mobile.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="emailMarketing">Email *</label>
      <input type="text" class="form-control" id="emailMarketing" name="email" placeholder="Email" required>
      <div class="invalid-feedback">
        Please provide a valid Email.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="zoneNameMarketing">Zone Name</label>
<!-- form to get zone details for adding a new marketing officer -->
      <select class="form-control" id="zonMarAdder" name="zoneName" required>
        <option value="" selected>Select Zone</option>
        <?php getZone(); ?>
      </select>
      <div class="invalid-feedback">
        Please Select a zone.
      </div><!--   /form to get zone details for adding a new marketing officer -->
    </div>
  </div><!--  /contact information ie, mobile and email -->

  <!--   gender dob and uid  -->
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="Gendermarketing">Gender *</label><br>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="genderMaleMarketing" name="gender" value="male" required>
        <label class="custom-control-label" for="genderMaleMarketing">Male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="genderFemaleMarketing" name="gender" value="female" required>
        <label class="custom-control-label" for="genderFemaleMarketing">Female</label>
        <div class="invalid-feedback">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please select a gender</div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="dateSearchMarketing">DOB *</label>
      <input type="text" class="form-control" name="dob" id="dateSearchMarketing" required>
      <div class="invalid-feedback">
        Please pick a valid date of birth from datepicker control.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="uidMarketing">UID *</label>
      <input type="text" class="form-control" id="uidMarketing" name="uid" placeholder="Aadhaar" required>
      <div class="invalid-feedback">
        Please provide a valid Aadhar.
      </div>
    </div>
  </div><!--   /gender dob and uid  -->

  <!-- address -->
  <div class="form-row"><!-- first address row -->
    <div class="col-md-4 mb-3">
      <label for="countryMarketing">Country *</label><br>
      <select class="form-control" name="country" id="countryMarketing">
        <option value="india" selected>India</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="state-control-marketing">State *</label><br>
      <select class="form-control" name="state" id="state-control-marketing" onchange="getDistrictMarketing()" required>
      </select>
      <div class="invalid-feedback">
        Please provide a valid State.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="district-control-marketing">District *</label><br>
      <select class="form-control" id="district-control-marketing" name="district" required>
      </select>
      <div class="invalid-feedback">
        Please provide a valid District.
      </div>
    </div>
  </div><!--  /first address row -->
  <div class="form-row"><!-- second address row -->
    <div class="col-md-3 mb-3">
      <label for="postOfficeMarketing">Post Office *</label>
      <input type="text" class="form-control" id="postOfficeMarketing" name="postOffice" placeholder="Post Office" required>
      <div class="invalid-feedback">
        Please provide a valid post office.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="pinCodeMarketing">Pin Code *</label>
      <input type="text" class="form-control" id="pinCodeMarketing" name="pinCode" placeholder="Pin Code" required>
      <div class="invalid-feedback">
        Please provide a valid pin code.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="streetMarketing">Street</label>
      <input type="text" class="form-control" id="streetMarketing" name="street" placeholder="Street">
    </div>
    <div class="col-md-3 mb-3">
      <label for="houseNumberMarketing">House No.</label>
      <input type="text" class="form-control" id="houseNumberMarketing" name="houseNumber" placeholder="House Number">
    </div><!-- /second address row -->
  </div><!-- /address -->
  <button class="btn btn-primary" name="addNow" value="marketing" type="submit">Add Now Marketing User</button>
</form>

<script>
//JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation-marketing');
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
<!--   /form for add a new marketing officer in a specified zone -->

  </div>

</div>
        </div>
<!--  /add new   -->

      </main>
    </section>
    <footer><br /><br /><br />
      <div class="customBlock fixed-bottom">
        <div class="text-center bg-primary" style="font-family: tahoma; font-size: 20px;"><i class="fa fa-cog fa-spin" style="font-size:20px; color: red;"> </i>  TEAM <i class="fa fa-refresh fa-spin" style="font-size:20px; color: white;"></i> ONSI <i class="fa fa-cog fa-spin" style="font-size:20px; color: red;"></i>
        </div>
      </div>
      <?php include 'includes/footer.php'; ?>
    </footer><!--  /footer   -->
  </body>
</html>

<?php
    // starter code stop here
  }
/* --- /first time visitor access end   ---  */


/* ----------------------------------------------------------------------------------

       ***********************
                                Zone Manager
                                              *********************

   ----------------------------------------------------------------------------------*/


/* --------------- Zone Manager  with ajax--------------------------*/
// for deactivate the zone user
  if (isset($deactive) && (!empty($deactive))) {
    if ($type == "zone") {
      if (mysqli_query($conn_ggi,"UPDATE account SET status = '0' WHERE id = $deactive")) {
        zoneManagerTable();
      }
    }
    else if ($type == "marketing") {
      if (mysqli_query($conn_ggi,"UPDATE account SET status = '0' WHERE id = $deactive")) {
        marketingManagerTable();
      }
    }
  }

// for deactivate the zone user
  if (isset($active) && (!empty($active))) {
    if ($type == "zone") {
      if (mysqli_query($conn_ggi,"UPDATE account SET status = '1' WHERE id = $active")) {
        zoneManagerTable();
      }
    }
    else if ($type == "marketing") {
      if (mysqli_query($conn_ggi,"UPDATE account SET status = '1' WHERE id = $active")) {
        marketingManagerTable();
      }
    }
  }


/* ---------------------- Marketing Manager   ----------------------*/

// add New Zone or Marketing User
if (isset($addNow) && (!empty($addNow))) {

  //basic deatils
  $firstName = format($firstName);
  $middleName = format($middleName);
  $lastName = format($lastName);
  $mobile = format($mobile);
  $email = format($email);
  $zoneName = format($zoneName);
  $gender = format($gender);
  $dob = format($dob);
  $uid = format($uid);
  //echo $firstName."<br>".$middleName."<br>".$lastName."<br>".$mobile."<br>".$zoneName."<br>".$gender."<br>".$dob."<br>".$uid."<br>";// basic output

  // security Deatils
  $userName = $email;
  $password = $mobile;
  //echo "$userName<br />$password<br />";

  // Address Deatils
  $houseNumber = format($houseNumber);
  $street = format($street);
  $postOffice = format($postOffice);
  $pinCode = format($pinCode);
  $district = format($district);
  $state = format($state);
  $country = format($country);
  //echo $country."<br>".$state."<br>".$district."<br>".$postOffice."<br>".$pinCode."<br>".$street."<br>".$houseNumber."<br>";// address output

  // others
  $access = "zone";
  $id = null;
  $random = rand(); // random number
  $ranUid = $random.$uid; // random number with the combinastion of uid
  $hash = md5($ranUid);

  if ($addNow == "marketing") {
    $zoneAccess = "marketing";// it's for zone user as a marketing
    $insAccount = "INSERT INTO account (userName, firstName, middleName, lastName, gender, dob, mobile, email, uid, hash, password, access, houseNumber, street, postOffice, pinCode, district, state, country) VALUES('$userName', '$firstName', '$middleName', '$lastName', '$gender', '$dob', '$mobile', '$email', '$uid', '$hash', '$password', '$access', '$houseNumber', '$street', '$postOffice', '$pinCode', 'district', '$state', '$country');";//insert into  Account for zone(marketing) user
    if ( mysqli_query($conn_ggi,$insAccount) ) {
       $id = mysqli_insert_id($conn_ggi);
       //echo "<be />".$id;
       $inszone_account = "INSERT INTO zone_account (id, zoneName, zoneAccess) VALUES('$id', '$zoneName', '$zoneAccess');";//insert into zone_account for zone(Marketing)
       if ( mysqli_query($conn_ggi,$inszone_account) ) {
        //echo "ok";
        ?>
        <script>
          alert("<?php echo 'Hello! '.ucfirst($_SESSION['session_name']).' You have successfully created Marketing Account for the user '.ucfirst($firstName).' in '. strtoupper($zoneName) ?>");
          confirm("<?php echo 'Your default user name And Password is \nUser Name = '. $email.'\nPassword = '.$password; ?>");
          window.location = "<?php echo DOMAIN; ?>admin/setting.php";
        </script>
        <?php
       }
       else {
        ?>
        <script>
          alert("SomeThing Went Wrong in zone Area");
          window.location = "<?php echo DOMAIN; ?>admin/setting.php";
        </script>
        <?php
       }
     }
     else {
        ?>
        <script>
          alert("SomeThing Went Wrong in Account Area");
          window.location = "<?php echo DOMAIN; ?>admin/setting.php";
        </script>
        <?php
     }
  }
  else if ($addNow == "zone") {
    $zoneAccess = "admin";// it's for zone user as a admin
    $type = "1";// it's for zone user or zone admin account
    $chkAdmin = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT id FROM zone_account WHERE zoneName = '$zoneName'"));
    if ($chkAdmin != 0) {
      ?>
      <script>
        alert("Admin Already Exist");
        window.location = "<?php echo DOMAIN; ?>admin/setting.php";
      </script>
      <?php
    }
    else {
      $insAccount = "INSERT INTO account (userName, firstName, middleName, lastName, gender, dob, mobile, email, uid, hash, password, type, access, houseNumber, street, postOffice, pinCode, district, state, country) VALUES('$userName', '$firstName', '$middleName', '$lastName', '$gender', '$dob', '$mobile', '$email', '$uid', '$hash', '$password','$type', '$access', '$houseNumber', '$street', '$postOffice', '$pinCode', 'district', '$state', '$country');";//insert into Account for zone(Admin)
      if ( mysqli_query($conn_ggi,$insAccount) ) {
        $id = mysqli_insert_id($conn_ggi);
         //echo "<be />".$id;
        $inszone_account = "INSERT INTO zone_account (id, zoneName, zoneAccess) VALUES('$id', '$zoneName', '$zoneAccess');";//insert into zone_account (Admin)
        if ( mysqli_query($conn_ggi,$inszone_account) ) {
          //echo "ok";
          ?>
          <script>
            alert("<?php echo 'Hello! '.ucfirst($_SESSION['session_name']).' You have successfully created Zone Admin Account for the user '.ucfirst($firstName).' in '. strtoupper($zoneName) ?>");
            confirm("<?php echo 'Your default user name And Password is \nUser Name = '. $email.'\nPassword = '.$password; ?>");
            window.location = "<?php echo DOMAIN; ?>admin/setting.php";
          </script>
          <?php
        }
        else {
          ?>
          <script>
            alert("SomeThing Went Wrong in zone Area");
            window.location = "<?php echo DOMAIN; ?>admin/setting.php";
          </script>
          <?php
        }
      }
      else {
        ?>
        <script>
          alert("SomeThing Went Wrong in Account Area");
          window.location = "<?php echo DOMAIN; ?>admin/setting.php";
        </script>
        <?php
      }
    }
  }
}

/* ----------------------------------------------------------------

      ***********************
                                function area
                                                  ********************
---------------------------------------------------------------*/


/* -----------------------------------------------------------------------
                                      function for zone mangager
    ---------------------------------------------------------------------*/

  // table data  function for zone manager
  function ZoneManagerTable() {
    include 'includes/connections.php';
    $selZonManTable = "SELECT account.id, account.firstName, account.middleName, account.lastName, account.status, zone_account.zonNamId FROM account INNER JOIN zone_account ON account.id = zone_account.id WHERE account.access = 'zone' AND account.disabled = '0' AND account.type = '1'";
    //echo $selZonManTable."<br>";
    $resZonManTable = mysqli_query($conn_ggi,$selZonManTable);
    //echo mysqli_num_rows($resZonManTable);
    //complete table header with table body start
    ?>
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Zone</th>
                      <th scope="col">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
    <?php
    if ( mysqli_num_rows($resZonManTable) > 0) {
      $serNumber= 1;
      while ($rowZonManTable = mysqli_fetch_assoc($resZonManTable)) {

        // for name
        $name = $rowZonManTable['firstName']." ". $rowZonManTable['middleName']." ".$rowZonManTable['lastName'];

        // for zone name
        $zonName = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT UPPER( code ) AS code FROM zone_name WHERE zonNamId = $rowZonManTable[zonNamId]" ) );

        // table row
        ?>
                    <tr>
                      <th scope="row"><?php echo $serNumber; ?></th>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $zonName['code']; ?></td>
                      <?php
                        if ($rowZonManTable['status'] == '1') {
                          ?>
                      <td>Active&nbsp;&nbsp;</td>
                      <td>
                        <button class="btn btn-outline-warning" onclick="deactive('<?php echo $rowZonManTable['id']; ?>','zone');" type="button">Deactive</button>
                          <?php
                        }
                        else {
                          ?>
                      <td>Deactive</td>
                      <td>
                        <button class="btn btn-outline-success" onclick="active('<?php echo $rowZonManTable['id']; ?>','zone');" type="button">Active&nbsp;&nbsp;</button>
                          <?php
                        }
                      ?>
                        <button class="btn btn-outline-light" type="button">Profile</button>
               <!--         <button class="btn btn-outline-info" onclick="window.open('www.yourdomain.com','_blank');" type="button">Edit</button>
                        <button class="btn btn-outline-danger" onclick="window.open('www.yourdomain.com','_blank');" type="button">Delete</button>  -->
                      </td>
                    </tr>
        <?php
        $serNumber = $serNumber + 1;
      }
      // table body end with complete table footer
      ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th scope="col" colspan="5" class="text-center bg-info">Zone Manager Details</th>
                    </tr>
                  </tfoot>
                </table>
      <?php
    }
  }/* ------   /function for zone mangager  ----------*/

  // table data  function for Marketing manager
  function marketingManagerTable() {
    include 'includes/connections.php';
    $selZonManTable = "SELECT account.id, account.firstName, account.middleName, account.lastName, account.status, zone_account.zonNamId FROM account INNER JOIN zone_account ON account.id = zone_account.id WHERE account.access = 'zone' AND account.disabled = '0' AND account.type = '0'";
    //echo $selZonManTable."<br>";
    $resZonManTable = mysqli_query($conn_ggi,$selZonManTable);
    //echo mysqli_num_rows($resZonManTable);
    //complete table header with table body start
    ?>
                <table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Name</th>
                      <th scope="col">Zone</th>
                      <th scope="col">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
    <?php
    if ( mysqli_num_rows($resZonManTable) > 0) {
      $serNumber= 1;
      while ($rowZonManTable = mysqli_fetch_assoc($resZonManTable)) {

        // for zone name
        $zonName = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT UPPER( code ) AS code FROM zone_name WHERE zonNamId = $rowZonManTable[zonNamId]" ) );

        // for name
        $name = $rowZonManTable['firstName']." ". $rowZonManTable['middleName']." ".$rowZonManTable['lastName'];
        // table row
        ?>
                    <tr>
                      <th scope="row"><?php echo $serNumber; ?></th>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $zonName['code']; ?></td>
                      <?php
                        if ($rowZonManTable['status'] == '1') {
                          ?>
                      <td>Active&nbsp;&nbsp;</td>
                      <td>
                        <button class="btn btn-outline-warning" onclick="deactive('<?php echo $rowZonManTable['id']; ?>','marketing');" type="button">Deactive</button>
                          <?php
                        }
                        else {
                          ?>
                      <td>Deactive</td>
                      <td>
                        <button class="btn btn-outline-success" onclick="active('<?php echo $rowZonManTable['id']; ?>','marketing');" type="button">Active&nbsp;&nbsp;</button>
                          <?php
                        }
                      ?>
                        <button class="btn btn-outline-light" type="button">Profile</button>
               <!--         <button class="btn btn-outline-info" onclick="window.open('www.yourdomain.com','_blank');" type="button">Edit</button>
                        <button class="btn btn-outline-danger" onclick="window.open('www.yourdomain.com','_blank');" type="button">Delete</button>  -->
                      </td>
                    </tr>
        <?php
        $serNumber = $serNumber + 1;
      }
      // table body end with complete table footer
      ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th scope="col" colspan="5" class="text-center bg-info">Zone Manager Details</th>
                    </tr>
                  </tfoot>
                </table>
      <?php
    }
  }/* ------   /function for Marketing mangager  ----------*/


/* ------   function to get zone  ----------*/
  function getZone() {
    include 'includes/connections.php';
    $resZone = mysqli_query($conn_ggi,"SELECT DISTINCT zoneName FROM zone ORDER BY zoneName DESC");
    while ( $rowZone = mysqli_fetch_assoc($resZone) ) {
      echo '<option value="'.strtolower($rowZone["zoneName"]).'">'.strtoupper($rowZone['zoneName']).'</option>';
    }
  }/* ------   /function to get zone  ---------- */

 /*  ------------  format string  --------------------*/
  function format( $received ) {
    return (trim(strtolower(strip_tags($received))));
  }
?>
