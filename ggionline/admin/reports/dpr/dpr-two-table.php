<?php
    extract($_REQUEST);
    if( ! ( isset($viewType) ) ) {
        $sqlDprTwo = "SELECT perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks FROM dpr_two";
    }
    else if ($viewType == 'zone') {
        ?>
        <script type='text/javascript' language='javascript'>
            alert('Print Zone Details');
        </script>
        <?php
        $sqlDprTwo = "SELECT perDetails, noOfCalMade, noOfStudents, noOfPromoters, dirApproach, thrPromoters, ddCollected, docCollected, remarks FROM dpr_two";
    }
    else {
        ?>
        <script type='text/javascript' language='javascript'>
            alert('Somthing Went Wrong');
        </script>
        <?php
    }
?>
<table class='table table-hover text-center'>
    <thead class='>
        <tr class='bg-success'>
            <th scope='col' rowspan='2'>#</th>
            <th scope='col' colspan='2'>Service Visits/Calls </th>
            <th scope='col' colspan='2'>Prospect Approach </th>
            <th scope='col' colspan='2'>Prospect Closed </th>
            <th scope='col' colspan='2'>Total No of Admission</th>
            <th scope='col' rowspan='2'>Remarks</th>
        </tr>
        <tr>
            <th scope='col' class='bg-info'>Details of the person </th>
            <th scope='col' class='bg-info'>No of calls made for service and outcome</th>
            <th scope='col' class='bg-warning'>No of Students</th>
            <th scope='col' class='bg-warning'>No of Promoters</th>
            <th scope='col' class='bg-info'>Through Direct Approach </th>
            <th scope='col' class='bg-info'>Through Promoters </th>
            <th scope='col' class='bg-warning'>DD's Collected </th>
            <th scope='col' class='bg-warning'>Documents Collected</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if (isset($sqlDprTwo)) {
            $resDprTwo = mysqli_query($conn_ggi,$sqlDprTwo);
            if ( mysqli_num_rows($resDprTwo) < 1 ) {
                $noDataFoundDprTwo = "
                    <tr>
                        <td colspan = '10' class='bg-warning text-danger display-4'><b>Oops</b>!!!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO Record Found<td>
                    </tr>
                ";
                echo $noDataFoundDprTwo;
            }
            else {
                $i=1;
                while ($rowDprTwo = mysqli_fetch_assoc($resDprTwo)) {
                    $recordsDprTwo = "
                        <tr>
                            <th scope='row' class='bg-light text-dark'>$i</th>
                            <td class='bg-info text-dark'>".$rowDprTwo['perDetails']."</td>
                            <td class='bg-info'>".$rowDprTwo['noOfCalMade']."</td>
                            <td class='bg-warning'>".$rowDprTwo['noOfStudents']."</td>
                            <td class='bg-warning'>".$rowDprTwo['noOfPromoters']."</td>
                            <td class='bg-info'>".$rowDprTwo['dirApproach']."</td>
                            <td class='bg-info'>".$rowDprTwo['thrPromoters']."</td>
                            <td class='bg-warning'>".$rowDprTwo['ddCollected']."</td>
                            <td class='bg-warning'>".$rowDprTwo['docCollected']."</td>
                            <td class='bg-light'>".$rowDprTwo['remarks']."</td>
                        </tr>
                    ";
                    $i++;
                    echo $recordsDprTwo;
                }
            }
        }
    ?>
    </tbody>
    <tfoot>
        <tr>
            <td class='bg-dark text-center text-white' colspan='10'>Ggionline.Net</td>
        </tr>
    </tfoot>
</table>
