<?php
	include 'constants.php';
	// deleting cookie
	setcookie ( "username", "", time() - (86400 * 1), "/" ); // 86400 = 1 day
	setcookie ( "password", "", time() - (86400 * 1), "/" );
	// Start the session
	session_start();
	// remove all session variables
	session_unset();
	// destroy the session
	session_destroy();
	//redirecting to log in page
	header("Location: ".DOMAIN);
	die();
?>
