<?php
	extract($_REQUEST);
	// connecting database
	include 'includes/constants.php';
	include 'includes/connections.php';
	if (isset($action) && (!empty($action)) && $action == "goNow") {
		//for state
		if ($get == "state" && $country == "india") {
			$selectState = "SELECT DISTINCT city_state FROM cities ORDER BY city_state";
			$stateResult = mysqli_query($conn_ggi,$selectState);
			echo '
                    <label>State</label><br>
                    <select class="form-control" name="'.$get.'" id="'.$get.'">
                        <option value="0">Select '.$get.'</option>';
			while ($stateRow = mysqli_fetch_assoc($stateResult)) {
				if ($stateRow['city_state'] == "Odisha") {
					echo '
                        <option value="'.$stateRow['city_state'].'" selected>'.$stateRow['city_state'].'</option>';
				}
				echo '
                        <option value="'.$stateRow['city_state'].'">'.$stateRow['city_state'].'</option>';
			}
			echo '
                    </select>';
		}
		//for district
		if ($get == "district") {
			$selectDistrict = "SELECT DISTINCT city_name FROM cities WHERE city_state='$state' ORDER BY city_name";
			$districtResult = mysqli_query($conn_ggi,$selectDistrict);
			echo '
                    <label>State</label><br>
                    <select class="form-control" name="'.$get.'" id="'.$get.'">
                        <option value="0">Select '.$get.'</option>';
			while ($districtRow = mysqli_fetch_assoc($districtResult)) {
				echo '
                        <option value="'.$districtRow['city_name'].'">'.$districtRow['city_name'].'</option>';
			}
			echo '
                    </select>';
		}
	}
	else {
		echo '
					<label>State</label><br>
                    <select class="custom-select form-control" name="'.$get.'" id="'.$get.'">
                        <option value="0">something went wrong</option>
                    </select>';
	}
?>