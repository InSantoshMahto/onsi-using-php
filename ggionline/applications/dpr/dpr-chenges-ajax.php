<?php
	extract($_REQUEST);
	// connecting database
	include 'includes/constants.php';
	include 'includes/connections.php';
	if (isset($action) && (!empty($action)) && $action == "goNow") {
		//for state
		if ($afs == "no") {
			echo '<label for="rejection">Reason for Rejection</label>
                    <input type="text" class="form-control" id="rejection" name="rejection" placeholder="Reason for Rejection">';
		}
		else {
			echo '<label for="seminarDate">Date</label>
                  <input type="text" class="form-control" name="seminarDate" id="datepicker" placeholder="DD-MM-YYYY OR refresh The Page  for datepicker control ">';
		}
	}
?>
