<?php
  extract($_REQUEST);
  session_start();
  // checking access level
  if (!((isset($_SESSION['session_status'])) && (!empty($_SESSION['session_status'])) && ($_SESSION['session_status'] == "active") && (isset($_SESSION['session_access'])) && (!empty($_SESSION['session_access'])) && ($_SESSION['session_access'] == "payment"))) {
    header("Location: ".DOMAIN);
  }
?>
