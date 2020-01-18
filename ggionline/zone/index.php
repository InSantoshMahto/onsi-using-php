<?php /*  including constants   */ require_once 'includes/constants.php'; ?>
<?php /*  including footer-company   */ require_once 'includes/zone-access.php'; ?>
<?php /*  including footer-company   */ require 'includes/connections.php'; ?>
<!doctype html>
<html lang="en-IN">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php require_once 'includes/header-link.php'; ?>

    <!-- title of the page -->
    <title>Home | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
    <style type="text/css">
      .block-color {
        background-color: #f7f7f7;
      }
    </style>
  </head>
  <body>

    <header>

      <?php /*  including main-nav bar   */ require_once 'includes/main-nav.php'; ?>
      <?php /*  including main-nav bar   */ require_once 'includes/model-profile.php'; ?>

    </header>

      <!-- welcome message -->
      <section class="pt-3 mb-2">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">GgiOnline.Net</h1>
            <p class="display-4 text-primary">GIET, Gunupur An Autonomous Institution</p>
            <p class="lead text-right"><?php echo ucfirst($_SESSION['session_access']); ?> portal </p>
          </div>
        </div>
      </section><!-- ./welcome message -->

      <!-- main section for this page -->
      <section class="container-fluid mb-2 py-3 block-color">
        <h4 class="bg-primary text-white text-center mb-2 py-3">Apply in GGI</h4>

        <div class="row text-center">

          <div class="col-sm-3 my-2">
              <div class="card border-primary">
                <h3 class="card-header bg-primary text-white">Applications</h3>
                <div class="card-body">
                <h4 class="card-title text-primary text-white">New Student</h4>
                <p class="card-text">Apply new student applications for B.tech.</p>
                <a href="<?php echo DOMAIN; ?>applications/new-students.php" class="btn btn-primary">Apply Now</a>
              </div>
              </div>
            </div>
          <div class="col-sm-3 my-2">
              <div class="card border-danger">
                <h3 class="card-header bg-danger text-white">Coming Soon</h3>
                <div class="card-body">
                  <h4 class="card-title text-danger">Coming Soon</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-danger">Know More</a>
                </div>
              </div>
            </div>
          <div class="col-sm-3 my-2">
              <div class="card border-warning">
                <h3 class="card-header bg-warning text-white">Coming Soon</h3>
                <div class="card-body">
                  <h4 class="card-title text-warning">Coming Soon</h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-warning">Know More</a>
                </div>
              </div>
            </div>
          <div class="col-sm-3 my-2">
              <div class="card border-success">
                <h3 class="card-header bg-success text-white">Reports</h3>
                <div class="card-body">
                  <h4 class="card-title text-success">DPR</h4>
                  <p class="card-text">Subimt New Daily Progress Reports.<br>All Details About This day</p>
                  <a href="<?php echo DOMAIN; ?>applications/dpr.php" class="btn btn-success">Subimt Now</a>
                </div>
              </div>
            </div>

        </div><!-- ./ row text-center -->

      </section><!-- ./container-fluid --><!-- ./main section for this page -->

      <!-- Zone overView -->
      <section class="container-fluid mb-2 py-3 block-color">
        <h4 class="bg-primary text-white text-center mb-2 py-3">Zone Overview</h4>
        <table class="table table-hover table-responsive-lg">
          <thead>
            <tr class="bg-info text-white">
              <th scope="col">SEAT</th>
              <?php

                /* code for zone details */
                $zonNamId = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT zonNamId FROM zone_account WHERE id = $_SESSION[session_id]" ) );
                $zonNamId = $zonNamId['zonNamId']; /* zone name id for zone overview table */
                //echo $zonNamId;

                /* code for branch code  */
                $branch = mysqli_query($conn_ggi,"SELECT upper(code) AS code, insBraId FROM institute_branch ORDER BY code;");
                $i = 0;
                $braId = array();
                while ( $rowBranch = mysqli_fetch_assoc($branch) ) {

                  //loop started
                  $braId[$i] = $rowBranch['insBraId'];
                  echo "<th scope='col'>$rowBranch[code]</th>";
                  $i++;
                }
              ?>
              <th scope="col">TOTAL</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-secondary">
              <th scope="row">Total</th>
              <?php
                for ($i=0; $i < 10 ; $i++) {
                  $totSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT totSeat FROM seat_details WHERE zonNamId = $zonNamId AND insBraId = ".$braId[$i].";" ) );
                  echo "<td>$totSeat[totSeat]</td>";
                }
              ?>
              <?php
                $totSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT SUM( totSeat ) AS totSeat FROM seat_details WHERE zonNamId = $zonNamId;" ) );
                $totSeat = $totSeat['totSeat'];
                echo "<td>$totSeat</td>";
              ?>
            </tr>
            <tr class="table-info">
              <th scope="row">Available</th>
              <?php
                for ($i=0; $i < 10 ; $i++) {
                  $avaSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT avaSeat FROM seat_details WHERE zonNamId = $zonNamId AND insBraId = ".$braId[$i].";" ) );
                  echo "<td>$avaSeat[avaSeat]</td>";
                }
              ?>
              <?php
                $avaSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT SUM( avaSeat ) AS avaSeat FROM seat_details WHERE zonNamId = $zonNamId;" ) );
                $avaSeat = $avaSeat['avaSeat'];
                echo "<td>$avaSeat</td>";
              ?>
            </tr>
            <tr class="table-danger">
              <th scope="row">Pending</th>
              <?php
                for ($i=0; $i < 10 ; $i++) {
                  $penSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT penSeat FROM seat_details WHERE zonNamId = $zonNamId AND insBraId = ".$braId[$i].";" ) );
                  echo "<td>$penSeat[penSeat]</td>";
                }
              ?>
              <?php
                $penSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT SUM( penSeat ) AS penSeat FROM seat_details WHERE zonNamId = 7;" ) );
                echo "<td>$penSeat[penSeat]</td>";
              ?>
            </tr>
            <tr class="table-success">
              <th scope="row">Confirm</th>
              <?php
                for ($i=0; $i < 10 ; $i++) {
                  $conSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT conSeat FROM seat_details WHERE zonNamId = 7 AND insBraId = ".$braId[$i].";" ) );
                  echo "<td>$conSeat[conSeat]</td>";
                }
              ?>
              <?php
                $conSeat = mysqli_fetch_assoc( mysqli_query( $conn_ggi, "SELECT SUM( conSeat ) AS conSeat FROM seat_details WHERE zonNamId = 7;" ) );
                $conSeat = $conSeat['conSeat'];
                echo "<td>$conSeat</td>";
              ?>
            </tr>
          </tbody>
          <tfoot>
            <tr class="bg-secondary text-center text-white h5">
              <td colspan="12">DB by onsi.in</td>
            </tr>
          </tfoot>
        </table>
      </section><!-- ./zone overView -->

      <!-- Quik view -->
      <section class="container-fluid mb-2 py-3 block-color">
        <h4 class="bg-primary text-white text-center mb-2 py-3">Quick View</h4>

        <div class="progress mt-2" style="height: 45px;">
          <div class="progress-bar bg-warning" style="width: <?php echo $avaSeat;?>%" role="progressbar" aria-valuenow="<?php echo $avaSeat;?>" aria-valuemin="0" aria-valuemax="100">Available Seat <?php echo $avaSeat;?> % </div>
          <div class="progress-bar bg-success" style="<?php echo $conSeat;?>%" role="progressbar" aria-valuenow="<?php echo $conSeat;?>" aria-valuemin="0" aria-valuemax="100">Confirm Seat <?php echo $conSeat;?>%</div>
        </div>

        <!-- successfull registerd -->
        <div class="progress mt-2" style="height: 45px;">
          <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="<?php echo $conSeat;?>%" role="progressbar" aria-valuenow="<?php echo $conSeat;?>" aria-valuemin="0" aria-valuemax="100">Confirm Seat <?php echo $conSeat;?> % </div>
        </div>

      </section><!-- Quik view -->

      <!-- support message -->
      <section class="container-fluid mb-2 py-3 block-color">
        <div class="alert alert-info text-center" role="alert">
          <p>If you have any technical issue, feel free to contact us <a href="mailto:infoggionline@gmail.com?subject=feedback">InfoGgiOnline@Gmail.Com</a> </p>
        </div>
      </section><!-- ./support message -->

      <footer>

        <?php /*  including footer-company   */ include_once 'includes/footer-company.php';?>

        <?php /*  including footer-developer   */ include_once 'includes/footer-developer.php';?>

        <?php /*  including footer-scripts   */ include_once 'includes/footer.php'; ?>

    </footer>
  </body>
</html>
