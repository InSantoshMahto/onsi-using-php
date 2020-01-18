<?php include 'includes/constants.php'; ?>
<?php include 'includes/admin-access.php'; ?>
<?php include 'includes/connections.php'; ?>
<?php

/* ------------------------------------------------------------------------------------------
  *******************************    DPR(INSTITUTE)    ******************************
--------------------------------------------------------------------------------------------------*/
  // search for DPR(Institute)
  // checking the conditions for DPR(Institute)
  if (isset($search) && (!empty($search)) && $search == "institute") {
    // echo "if search button was click";
    if (isset($dateSearch) && (empty($dateSearch))) {
      // echo "if dateSearch was empty";
      $date = date("d-m-Y");
      $afs = $afsSearch;
    }
    else {
      // echo "if dateSearch was Not empty";
      $date = $dateSearch;
      $afs = $afsSearch;
    }
  }
  else {
     //echo "if search button was not click";
    $date = date("d-m-Y");
    $afs = "all";
  }

/*  -----------  Today  DPR Status For (INSTITUTE)     -------------------- */
  //insToday details
    $insTodayDate = date("d-m-Y");
    $insTodaySubmited = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT dprId FROM dprInstitute WHERE appliedDate = '$insTodayDate'"));
    //echo "$insTodaySubmited<br>";
    $insinsTodayAgree = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT dprId FROM dprInstitute WHERE afs = 'yes' AND appliedDate = '$insTodayDate'"));
    if ($insTodaySubmited != 0) {
      $insTodayAgree = round((( $insinsTodayAgree / $insTodaySubmited )* 100));
    }
    else {
      $insTodayAgree = 0;
    }
    //echo "$insTodayAgree<br>";
    $insTodayDisagree = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT dprId FROM dprInstitute WHERE afs = 'no' AND appliedDate = '$insTodayDate'"));
    if ($insTodaySubmited != 0) {
      $insTodayDisagree = round((( $insTodayDisagree / $insTodaySubmited )* 100));
    }
    else {
      $insTodayDisagree = 0;
    }
    //echo "$insTodayDisagree<br>";

/*  -----------  Total  DPR Status For (INSTITUTE)     -------------------- */
  // insTotal details
    $insTotalSubmited = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT dprId FROM dprInstitute"));
    //echo "$insTotalSubmited<br>";
    $insTotalAgree = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT dprId FROM dprInstitute WHERE afs = 'yes'"));
    if ($insTotalSubmited != 0) {
      $insTotalAgree = round((( $insTotalAgree / $insTotalSubmited )* 100));
    }
    else {
      $insTotalAgree = 0;
    }
    //echo "$insTotalAgree<br>";
    $insTotalDisagree = mysqli_num_rows(mysqli_query($conn_ggi,"SELECT dprId FROM dprInstitute WHERE afs = 'no'"));
    if ($insTotalDisagree != 0) {
      $insTotalDisagree = round((( $insTotalDisagree / $insTotalSubmited )* 100));
    }
    else {
      $insTotalDisagree = 0;
    }
    //echo "$insTotalDisagree";

/*  -----------  DPR Details For ( INSTITUTE )     -------------------- */
  // function defination for getdprInstitute()
  function getdprInstitute($date,$afs) {
    if ($afs != "all") {
      $selectTableData = "SELECT * FROM dprInstitute  WHERE appliedDate = '$date' AND afs = '$afs'";
    }
    else {
      $selectTableData = "SELECT * FROM dprInstitute  WHERE appliedDate = '$date'";
    }
    include 'includes/connections.php';
    // echo $selectTableData;
    $resultTableData = mysqli_query($conn_ggi,$selectTableData);
    $numTabledata = mysqli_num_rows($resultTableData);
    $serialNumber = 1;
    ?>
    <div class="tebleData" id="tableData">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Institute Name</th>
                <th scope="col">Person Name</th>
                <th scope="col">Person Mobile</th>
                <th scope="col">Person Email</th>
                <?php
                  switch ($afs) {
                    case 'yes':
                    ?>
                <th scope="col">Seminar Date</th>
                    <?php
                      break;
                    case 'no':
                    ?>
                <th scope="col">Resson For Rejection</th>
                    <?php
                      break;

                    default:
                    ?>
                <th scope="col">Agree For Seminar</th>
                <th scope="col">Seminar Date</th>
                <th scope="col">Resson For Rejection</th>
                    <?php
                      break;
                  }
                ?>
                <th scope="col">Special Reporst</th>
                <th scope="col">Zone Officer</th>
              </tr>
            </thead>
            <tbody>
          <?php
          if ($numTabledata > 0) {
            while ($row = mysqli_fetch_assoc($resultTableData)) {
              // php loop start
              // for zone officer name
              $accountId = $row['id'];
              $selectZone = "SELECT * FROM account WHERE id = $accountId";
              $zoneResults = mysqli_query($conn_ggi,$selectZone);
              $rowZone = mysqli_fetch_assoc($zoneResults)
              ?>
              <tr>
                <td scope="row"><?php echo $serialNumber; ?></td>
                <td><?php echo $row['instituteName']; ?></td>
                <td><?php echo strtoupper($row['personName']); ?></td>
                <td><?php echo ucfirst($row['personMobile']); ?></td>
                <td><?php echo $row['personEmail']; ?></td>
                <?php
                  switch ($afs) {
                    case 'yes':
                    ?>
                <td><?php echo $row['seminarDate']; ?></td>
                    <?php
                      break;

                    case 'no':
                    ?>
                <td><?php echo ucfirst($row['rfr']); ?></td>
                    <?php
                      break;

                    default:
                    ?>
                <td><?php echo $row['afs']; ?></td>
                <td><?php echo $row['seminarDate']; ?></td>
                <td><?php echo ucfirst($row['rfr']); ?></td>
                    <?php
                      break;
                  }
                ?>
                <td><?php echo $row['reports']; ?></td>
                <td><?php echo ucfirst($rowZone['firstName'])." ".ucfirst($rowZone['middleName'])." ".ucfirst($rowZone['lastName']); ?></td>
              </tr>
              <?php
              $serialNumber = $serialNumber + 1;
              // php loop stop
            }
          }
          else {
            ?>
            <tr>
              <td colspan = "<?php if ($afs == "all") echo 10; else echo 8; ?>" class = "bg-warning text-center"><i>No Records Found</i></td>
            </tr>
            <?php
          }
          ?>
            </tbody>
            <tfoot>
              <tr>
                <td colspan = "<?php if ($afs == "all") echo 10; else echo 8; ?>" class = "bg-info text-center"><b>Daily Progress Reports ( Institute )</b></td>
              </tr>
            </tfoot>
          </table>
        </div>
        <?php
  }

/*  -----------  DPR Details For ( PARENTS )     -------------------- */
  // function defination for getdprParents()
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
<!doctype html>
<html lang="en-IN">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gandhi Group Of Institution Official">
    <meta name="author" content="dpr ggionline.net">
    <link rel="icon" href="<?php echo DOMAIN; ?>resources/images/favicon.png">

    <!-- title of the page -->
    <title>DPR | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- date picker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <style type="text/css">
      *{
        padding: 0px;
        margin: 0px;
      }
      .card {
        width: 100%;
        max-height: 500px;
        overflow: auto;
      }
    </style>
  </head>

  <body>

    <!-- header -->
    <header>
      <?php include 'includes/main-nav.php'; ?>
    </header>

<!-- section -->
    <section>
      <div class="text-center" id="globleHeading">
        <h1>Gandhi Group Of Institution</h1>
      </div>

<!--  main   -->
      <main>

<!-- *****************************************    DPR (INSTITUTE)    **************************************     -->

        <h2 class="bg-secondary text-center text-white">Daily Progress Reports ( Institute )</h2>
        <div class="container-fluid">

<!-- search options(INSTITUTE) -->
          <p class="text-right">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseInstitute" aria-expanded="false" aria-controls="collapseInstitute">
              More
            </button>
          </p>
          <div class="collapse" id="collapseInstitute">
            <div class="card card-body">

<!--   search form(INSTITUTE) -->
              <form method="POST">
                <div class="row">
                  <div class="col-sm">
                    <div class="form-group">
                      <label>Date</label>&nbsp;&nbsp;<span data-toggle="tooltip" data-placement="top" title="Default date is <?php echo(date("d-m-Y")) ?>" class="fa fa-info">
                          </span>
                      <input type="text" class="form-control" id="dateSearch" name="dateSearch" placeholder="DD-MM-YYYY">
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label>Agree For Seminar</label>
                      <select class="custom-select" id="afsSearch" name="afsSearch">
                        <option  value="all" selected>All</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label>Get Your Custom Results</label><br>
                      <button type="submit" name="search" value="institute" class="btn btn-primary form-control">
                        Search Now
                      </button>
                    </div>
                  </div>
                </div>
              </form><!--    /search form (INStitute)   -->
            </div>
          </div><!--    /search options(Institute) -->

<!-- First row for (INSTITUTE)   -->
        <div class="row">

<!--        first column (INSTITUTE) for Status    -->
          <div class="col-md-4">
            <div class="card">

<!--           DPR(INSTITUTE) Status            -->
              <h5 class="card-header alert-info text-center">DPR Status</h5>
              <div class="card-body">
                <p class="card-text">Today DPR Submited</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo $insTodaySubmited; ?></div>
                </div><br>
                <p class="card-text">Today Agree For seminar</p>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $insTodayAgree; ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><?php echo $insTodayAgree; ?>%</div>
                </div><br>
                <p class="card-text">Today Disagree For seminar</p>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $insTodayDisagree; ?>%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"><?php echo $insTodayDisagree; ?>%</div>
                </div><br>
                <p class="card-text">Total DPR Submited</p>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo $insTotalSubmited; ?></div>
                </div><br>
                <p class="card-text">Total Agree For seminar</p>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $insTotalAgree; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $insTotalAgree; ?>%</div>
                </div><br>
                <p class="card-text">Total Disagree for seminar</p>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo $insTotalDisagree; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo $insTotalDisagree; ?>%</div>
                </div>
              </div><!-- /card- body    ###with###  /DPR(INSTITUTE) Status    -->
            </div><!--   /card -->
            </div><!--  /col-md-4  ###with###  /first column (INSTITUTE) for Status    -->

<!-- Second column (INSTITUTE) for Status    -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-center alert-info">
                  <b>DPR Details</b>
                </div><!-- card header -->
                <div class="card-body">
                    <?php getdprInstitute($date,$afs); ?>
                </div><!--  card body -->
              </div><!-- card -->
            </div><!--  col-md-8  ###with###   Second column for (INSTITUTE)   -->
          </div><!-- First row for (INSTITUTE)   -->
        </div><!--   /container-fluid -->

<!-- *****************************************    /DPR (INSTITUTE)    **************************************     -->


<!--           GGIONLINE.NET         GGIONLINE.NET         GGIONLINE.NET         GGIONLINE.NET                   -->


<!-- *****************************************    DPR (Parents)    **************************************     -->

        <h2 class="bg-info text-center text-white my-2">Daily Progress Reports ( Parents )</h2>
        <div class="container-fluid">

<!-- search options(Parents) -->
          <p class="text-right">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseParents" aria-expanded="false" aria-controls="collapseParents">
              More
            </button>
          </p>
          <div class="collapse" id="collapseParents">
            <div class="card card-body">

<!--   search form(Parents) -->
              <form method="POST">

<!--    custom search for DPR( Parents )   --><blockquote>Coming Soon</blockquote>

              </form><!--    /search form (Parents)   -->
            </div>
          </div><!--    /search options(Parents) -->

<!-- First row for (Parents)   -->
        <div class="row">

<!--        first column (Parents) for Status    -->
          <div class="col-md-4">
            <div class="card">

<!--           DPR(Parents) Status            -->
              <h5 class="card-header alert-info text-center">DPR Status</h5>
              <div class="card-body">
                <p class="card-text">Today DPR Submited</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><?php echo mysqli_num_rows(mysqli_query($conn_ggi,"SELECT id FROM dprParents WHERE appliedDate = '".date("d-m-Y")."'")); ?></div>
                </div><br>
                <p class="card-text">Total DPR Submited</p>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><?php echo mysqli_num_rows(mysqli_query($conn_ggi,"SELECT id FROM dprParents")); ?></div>
                </div><br><br>
                <button class="btn btn-success" onclick='window.location="export.php"'>Export In Excel</button>
              </div><!-- /card- body    ###with###  /DPR(Parents) Status    -->
            </div><!--   /card -->
            </div><!--  /col-md-4  ###with###  /first column (Parents) for Status    -->

<!-- Second column (Parents) for Status    -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-center alert-info">
                  <b>DPR Details</b>
                </div><!-- card header -->
                <div class="card-body" id="dprparents">

                    <?php getdprParents(); ?>

                </div><!--  card body -->
              </div><!-- card -->
            </div><!--  col-md-8  ###with###   Second column for (Parents)   -->
          </div><!-- First row for (Parents)   -->
        </div><!--   /container-fluid -->

<!-- *****************************************    /DPR (Parents)    **************************************     -->

      </main><!--  /main   -->
    </section><!-- /section -->

<!--  footer   -->
    <footer><br /><br /><br />
      <div class="customBlock fixed-bottom">
        <div class="text-center bg-primary" style="font-family: tahoma; font-size: 20px;"><i class="fa fa-cog fa-spin" style="font-size:20px; color: red;"> </i>  TEAM <i class="fa fa-refresh fa-spin" style="font-size:20px; color: white;"></i> ONSI <i class="fa fa-cog fa-spin" style="font-size:20px; color: red;"></i>
        </div>
      </div>
      <?php include 'includes/footer.php'; ?>
    </footer><!--  /footer   -->

  </body>
</html>
