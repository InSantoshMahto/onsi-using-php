<?php 
	include 'includes/constants.php';
	include 'includes/admin-access.php';
	include 'includes/connections.php';
	header('Content-Type: application/xls');
	header('Content-Disposition: attachment; filename=download.xls');

//export.php  
if (true) {
	$output = getdprParents();
	echo $output;
}
?>
<?php
	function getdprParents() {
	    $selectTableData = "SELECT * FROM dprParents";
	    include 'includes/connections.php';
	    // echo $selectTableData;
	    $resultTableData = mysqli_query($conn_ggi,$selectTableData);
	    $numTabledata = mysqli_num_rows($resultTableData);
	    $serialNumber = 1;
	    ?>
	    <div class="tebleData" id="tableData">
	        <table class="table table-striped" id="tableDprParents">
	          	<thead>
	            	<tr>
	              		<th scope="col">No.</th>
	              		<th scope="col">Parents Name</th>
	              		<th scope="col">Mobile Mobile</th>
	            	</tr>
	          	</thead>
	          	<tbody>
	          	<?php
	          	if ($numTabledata > 0) {
	            	while ($row = mysqli_fetch_assoc($resultTableData)) {
		              	// php loop start
		              	?>
		              	<tr>
			                <td scope="row"><?php echo $serialNumber; ?></td>
			                <td><?php echo $row['parentsName']; ?></td>
			                <td><?php echo ucfirst($row['parentsMobile']); ?></td>
		              	</tr>  
		              	<?php
		              	$serialNumber = $serialNumber + 1;
		              	// php loop stop
		            }
		        }
		        else {
		            ?>
		            <tr>
	              		<td colspan="3" class = "bg-warning text-center"><i>No Records Found</i></td>
	            	</tr>
	            	<?php
	          	}
	          	?>
		        </tbody>
		        <tfoot>
		            <tr>
		            	<td colspan="3" class = "bg-info text-center"><b>Daily Progress Reports ( parents )</b></td>
		            </tr>
		        </tfoot>
	        </table>
	    </div>
	    <?php
	}
?>