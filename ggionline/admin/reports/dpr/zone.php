<style type="text/css">
	div ul li ul {
		display: none;
	}
	div ul li:hover ul {
		display: block;
	}
</style>
<div>
    <ul type="none" class="mt-1 mx-0 p-0">
    	<?php
    	$resZone = mysqli_query($conn_ggi,"SELECT zonNamId, upper( code ) AS code FROM zone_name ORDER BY CODE ASC;");
    	while($rowZone = mysqli_fetch_assoc($resZone)) {
            $resMarketing = mysqli_query($conn_ggi,"SELECT  firstName, middleName, lastName FROM account INNER JOIN zone_account ON account.id = zone_account.id WHERE zone_account.zonNamId = $rowZone[zonNamId] AND zone_account.zoneAccess ='marketing' ORDER BY account.firstName ASC;");
            echo "
                    <li>
    		            <button type='button' class='btn btn-info mt-1'>".$rowZone['code']." <span class='badge badge-light'>4</span></button>
                        <ul type='none' class='m-0 p-0'>";
            while ($rowMarketing = mysqli_fetch_assoc($resMarketing)) {
                echo "
                            <li>
                                <button type='button' class='btn btn-outline-success mt-1'>".$rowMarketing['firstName']."&nbsp;".$rowMarketing['middleName']."&nbsp;".$rowMarketing['lastName']."</button>
                            </li>";
            }



    	    echo "
                        </ul>
                    </li>";
    	}
    	?>
    </ul>
</div>
