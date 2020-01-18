<?php
  extract($_REQUEST);
  session_start();
  // checking session existance and access level
  if (!((isset($_SESSION['session_status'])) && (!empty($_SESSION['session_status'])) && ($_SESSION['session_status'] == "active") && (isset($_SESSION['session_access'])) && (!empty($_SESSION['session_access'])))) {
    header("Location: <?php echo DOMAIN; ?>");
  }

  // confurming submit button clicked OR not
  if (!((isset($submit)) && (!empty($submit)) && ($submit == "submit"))){
    header("Location: <?php echo DOMAIN; ?>");
  }
  // connecting and selecting database
  require 'includes/constants.php';
  require 'includes/connections.php';

  //formating input data

  // applied for
  $instituteLocation = format($instituteLocation);
  $subInstitute = format($subInstitute);
  $course = format($course);
  $session = getSession($course);
  $appliedDate = date("d-m-Y");
  //echo $instituteLocation."<br>".$subInstitute."<br>".$course."<br>".$appliedDate."<br>";// applied for output

  // Account Details
  $accountFirstName = $session_name;
  $accountAccess = $session_access;
  $accountId = $session_id;
  $seclectAccount = "SELECT uid,hash FROM account WHERE id = '$accountId' AND access = '$accountAccess' AND firstName = '$accountFirstName'";
  //echo "$seclectAccount";
  $resultAccount = mysqli_query($conn_ggi,$seclectAccount);
  $rowAccount = mysqli_fetch_assoc($resultAccount);
  $accountUid = $rowAccount['uid'];
  $accountHash = $rowAccount['hash'];
  //echo $accountId."<br>".$accountFirstName."<br>".$accountAccess."<br>".$accountUid."<br>".$accountHash."<br>"; // account output

  // Students details
  $studentUid = format($studentUid);
  $userName = "null";
  $studentFirstName = format($studentFirstName);
  $studentMiddleName = format($studentMiddleName);
  $studentLastName = format($studentLastName);
  $studentMobile = format($studentMobile);
  $studentEmail = format($studentEmail);
  $studentDob = format($studentDob);
  $studentGender = format($studentGender);
  //echo $studentUid."<br>".$studentFirstName."<br>".$studentMiddleName."<br>".$studentLastName."<br>".$studentMobile."<br>".$studentEmail."<br>".$studentDob."<br>"; // student output

  // Father details
  $fatherFirstName = format($fatherFirstName);
  $fatherMiddleName = format($fatherMiddleName);
  $fatherLastName = format($fatherLastName);
  $fatherMobile = format($fatherMobile);
  $fatherEmail = format($fatherEmail);
  //echo $fatherFirstName."<br>".$fatherMiddleName."<br>".$fatherLastName."<br>".$fatherMobile."<br>".$fatherEmail."<br>";//father output

  // Mother details
  $motherFirstName = format($motherFirstName);
  $motherMiddleName = format($motherMiddleName);
  $motherLastName = format($motherLastName);
  $motherMobile = format($motherMobile);
  $motherEmail = format($motherEmail);
  //echo $motherFirstName."<br>".$motherMiddleName."<br>".$motherLastName."<br>".$motherMobile."<br>".$motherEmail."<br>";//mother output

  // Jee Details
  $jeeRollNumber = format($jeeRollNumber);
  $jeeRank = format($jeeRank);
  //echo $jeeRollNumber."<br>".$jeeRank."<br>";//jee output

  // Accedmic Details
  $interBoard = format($interBoard);
  $interInstitute = format($interInstitute);
  $interYear = format($interYear);
  $interPercentage = format($interPercentage);
  $matricBoard = format($matricBoard);
  $matricInstitute = format($matricInstitute);
  $matricYear = format($matricYear);
  $matricPercentage = format($matricPercentage);
  //echo $interBoard."<br>".$interInstitute."<br>".$interYear."<br>".$interPercentage."<br>".$matricBoard."<br>".$matricInstitute."<br>".$matricYear."<br>".$matricPercentage."<br>";//Accadmic output

  // Address Deatils
  $country = format($country);
  $state = format($state);
  $district = format($district);
  $pinCode = format($pinCode);
  $street = format($street);
  $houseNumber = format($houseNumber);
  $zone = getZone($country,$state,$district);
  //echo $country."<br>".$state."<br>".$district."<br>".$pinCode."<br>".$street."<br>".$houseNumber."<br>";// address output

  // preparing insert query
  $insertMainData = "INSERT INTO students (id, uid, hash, studentUid, studentFirstName, studentMiddleName, studentLastName, studentMobile, studentEmail, studentDob, studentGender, fatherFirstName, fatherMiddleName, fatherLastName, fatherMobile, fatherEmail, motherFirstName, motherMiddleName, motherLastName, motherMobile, motherEmail, jeeRollNumber, jeeRank, interBoard, interInstitute, interYear, interPercentage, matricBoard, matricInstitute, matricYear, matricPercentage, country, state, district, zone, pinCode, street, houseNumber, instituteLocation, subInstitute, course, session, appliedDate) values('$accountId','$accountUid', '$accountHash', '$studentUid', '$studentFirstName', '$studentMiddleName', '$studentLastName', '$studentMobile', '$studentEmail', '$studentDob', '$studentGender', '$fatherFirstName', '$fatherMiddleName', '$fatherLastName', '$fatherMobile', '$fatherEmail', '$motherFirstName', '$motherMiddleName', '$motherLastName', '$motherMobile', '$motherEmail', '$jeeRollNumber', '$jeeRank', '$interBoard', '$interInstitute', '$interYear', '$interPercentage', '$matricBoard', '$matricInstitute', '$matricYear', '$matricPercentage', '$country', '$state', '$district', '$zone', '$pinCode', '$street', '$houseNumber', '$instituteLocation', '$subInstitute', '$course', '$session', '$appliedDate')";
  //echo $insertMainData."</br>";//query output
  $chkMainData = mysqli_query($conn_ggi,$insertMainData);
  if ($chkMainData) {
    $last_studentId = mysqli_insert_id($conn_ggi);
    $first_instituteLocation = $instituteLocation[0];
    $first_subInstitute = $subInstitute[0];
    $first_course = $course[0];

    // for user name
    $userName = getUserName($last_studentId,$appliedDate,$conn_ggi,$first_instituteLocation,$first_subInstitute,$first_course);

    // for refernce number
    $referenceNumber = getReferenceNumber($last_studentId,$conn_ggi,$first_instituteLocation,$first_subInstitute,$first_course);
    // redirecting to newStudents.php file
    header("location: newStudents.php?info=Hello ! ".ucfirst($studentFirstName)." congratulations your user name is ".strtoupper($userName)." And reference number is ".strtoupper($referenceNumber)."&type=success");
  }
  else {
  	header("location: newStudents.php?info=Something Went wrong !!!<br> please try Again&type=danger");
  }

  /*   -------------------------------------
                  function
       -------------------------------------     */

  // format string
  function format( $received ) {
  	return (trim(strtolower(strip_tags($received))));
  }

  //get session for applied course
  function getSession($course) {
    if ($course = "b-tech") {
      $start = date("Y");
      $end = date("Y")+4;
      $session = $start."-".$end;
      return $session;
    }
  }
  // ger zone
  function getZone($country,$state,$district) {
    if ($country != "india") {
      return "foreign";
    }
    elseif ($state != "odisha") {
      return $state;
    }
    else {
      switch ($district) {
        case 'bhubaneswar':
          return "khordha";
          break;

        default:
          return "other";
          break;
      }
    }
  }
  // get user name
  function getUserName($last_studentId,$appliedDate,$conn_ggi,$first_instituteLocation,$first_subInstitute,$first_course) {
    echo $selectUserName = "SELECT studentId FROM students WHERE appliedDate = '$appliedDate'";
    $userNameResult = mysqli_query($conn_ggi,$selectUserName);
    $userNameLastDigit = mysqli_num_rows($userNameResult);
    $date = date("d");
    $month = date("m");
    $year = date("y");
    $userName = $first_instituteLocation.$first_subInstitute.$first_course.$date.$month.$year.$userNameLastDigit;
    echo $updateUserName = "UPDATE students set userName = '$userName' WHERE studentId = '$last_studentId'";
    if (mysqli_query($conn_ggi,$updateUserName)) {
      return $userName;
    }
  }

  // get refereance Number
  function getReferenceNumber($last_studentId,$conn_ggi,$first_instituteLocation,$first_subInstitute,$first_course) {
    $fullYear = date("Y");
    $referenceNumber = $first_instituteLocation.$first_subInstitute.$first_course.$fullYear.$last_studentId;
    $updateReferenceNumber = "UPDATE students set referenceNumber = '$referenceNumber' WHERE studentId = '$last_studentId'";
    if (mysqli_query($conn_ggi,$updateReferenceNumber)) {
      return $referenceNumber;
    }
  }
?>
