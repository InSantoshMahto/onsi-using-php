<?php
    extract($_REQUEST);
    if( ! ( isset($viewType) ) ) {
        $sqlDprOne = "SELECT recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails FROM dpr_one";
    }
    else if ($viewType == 'zone') {
        ?>
        <script type='text/javascript' language='javascript'>
            alert('Print Zone Details');
        </script>
        <?php
        $sqlDprOne = "SELECT recOfActivity, institutes, promoters, parents, proStudents, presentations, noOfPromoters, parFeedback, preAndInsDetails FROM dpr_one WHERE ";
    }
    else {
        ?>
        <script type='text/javascript' language='javascript'>
            alert('Somthing Went Wrong');
        </script>
        <?php
    }
?>
<table class='table table-bordered text-center'>
    <thead>
        <tr class='bg-success'>
            <th scope='col' rowspan='2'>#</th>
            <th scope='col' rowspan='2'>Record of Activity</th>
            <th scope='col' colspan='4'>Intial Approaches </th>
            <th scope='col' colspan='4'>Approaches Materialized</th>
        </tr>
        <tr>
            <th scope='col' class='bg-info'>Colleges/Inst./Tuitions</th>
            <th scope='col' class='bg-info'>Promoters(Teachers/Consultants)</th>
            <th scope='col' class='bg-info'>Parents(Ex/Present)</th>
            <th scope='col' class='bg-info'>Prospective Students</th>
            <th scope='col' class='bg-warning'>For Presentations</th>
            <th scope='col' class='bg-warning'>No of Promoters met and their details</th>
            <th scope='col' class='bg-warning'>Parents met and their feedback</th>
            <th scope='col' class='bg-warning'>Presentation made and the instituion detail</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if (isset($sqlDprOne)) {
                $resDprOne = mysqli_query($conn_ggi,$sqlDprOne);
                if ( mysqli_num_rows($resDprOne) < 1 ) {
                    $noDataFoundDprOne = "
                        <tr>
                            <td colspan = '10' class='bg-warning text-danger display-4'><b>Oops</b>!!!!!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO Record Found<td>
                        </tr>
                    ";
                    echo $noDataFoundDprOne;
                }
                else {
                    $i=1;
                    while ($rowDprOne = mysqli_fetch_assoc($resDprOne)) {
                        $recordsDprOne = "
                            <tr>
                                <th scope='row' class='bg-light text-dark'>$i</th>
                                <td class='bg-light text-dark'>".$rowDprOne['recOfActivity']."</td>
                                <td class='bg-info'>".$rowDprOne['institutes']."</td>
                                <td class='bg-info'>".$rowDprOne['promoters']."</td>
                                <td class='bg-info'>".$rowDprOne['parents']."</td>
                                <td class='bg-info'>".$rowDprOne['proStudents']."</td>
                                <td class='bg-warning'>".$rowDprOne['presentations']."</td>
                                <td class='bg-warning'>".$rowDprOne['noOfPromoters']."</td>
                                <td class='bg-warning'>".$rowDprOne['parFeedback']."</td>
                                <td class='bg-warning'>".$rowDprOne['preAndInsDetails']."</td>
                            </tr>
                        ";
                        $i++;
                        echo $recordsDprOne;
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
