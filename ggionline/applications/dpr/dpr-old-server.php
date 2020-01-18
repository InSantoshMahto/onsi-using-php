<?php
  require 'includes/constants.php';
  require 'includes/connections.php';
  include 'includes/applications-access.php';

  // globale variable

  $appliedDate = date("d-m-Y");
  $accountId = $_SESSION['session_id'];

  // confurming submit button clicked OR not
  if (!((isset($submit)) && (!empty($submit)))) {
    header("Location: ".DOMAIN."applications/dpReports.php");
  }
  elseif ( $submit == "dprInstitute" ) {
    // confurming submit button clicked for DPR (Institute).

    //formating input data

    // applied for
    $instituteName = format($instituteName);
    $personName = format($personName);
    $personMobile = format($personMobile);
    $personEmail = format($personEmail);
    $afs = format($afs);// agree for seminar
    $seminarDate = format($seminarDate);
    $rfr = format($rejection);// reason for rejection
    $reports = format($reports);
    //echo $instituteName."<br>".$personName."<br>".$personMobile."<br>".$personEmail."<br>".$afs."<br>".$seminarDate."<br>".$rfr."<br>".$reports."<br>".$appliedDate."<br>";// applied for output

    // preparing insert query
    $insertDprInstitute = "INSERT INTO dprInstitute(id, instituteName, personName, personMobile, personEmail, afs, seminarDate, rfr, reports, appliedDate)
    values($accountId, '$instituteName', '$personName', '$personMobile', '$personEmail', '$afs', '$seminarDate', '$rfr', '$reports', '$appliedDate');";
    //echo "</br>".$insertDprInstitute."</br>";//query output
    $chkDprInstitute = mysqli_query($conn_ggi,$insertDprInstitute);
    if ($chkDprInstitute) {
      header("location: ".DOMAIN."applications/dpReports.php?info=Hello ! ".ucfirst($_SESSION['session_name'])." Your DPR( Institute ) is successfully submited &type=success");
    }
    else {
      header("location: ".DOMAIN."applications/dpReports.php?info=Something Went wrong !!!<br> please try Again&type=danger");
    }
  }
  elseif ($submit == "dprParents") {
    // confurming submit button clicked for DPR (Parents).

    //formating input data
    $parentsName = format($parentsName);
    $parentsMobile = format($parentsMobile);
    //echo "<br />".$parentsName."<br />".$parentsMobile."<br />";

    // preparing insert query
    $insertDprParents = "INSERT INTO dprParents(id, parentsName, parentsMobile, appliedDate)
    values($accountId, '$parentsName', '$parentsMobile', '$appliedDate');";
    //echo "</br>".$insertDprParents."</br>";//query output
    $chkDprParents = mysqli_query($conn_ggi,$insertDprParents);
    if ($chkDprParents) {
      header("location: ".DOMAIN."applications/dpr-old.php?info=Hello ! ".ucfirst($_SESSION['session_name'])." Your DPR( Parents ) is successfully submited &type=success");
    }
    else {
      header("location: ".DOMAIN."applications/dpr-old.php?info=Something Went wrong !!!<br> It may be mobile number already exist.<br> please try Again&type=danger");
    }
  }


  /*   -------------------------------------
                  function
       -------------------------------------     */

  // format string
  function format( $received ) {
  	return (trim(strtolower(strip_tags($received))));
  }
?>
