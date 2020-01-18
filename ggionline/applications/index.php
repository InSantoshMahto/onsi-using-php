<?php /*  including constants   */ require_once 'includes/constants.php'; ?>
<?php /*  including footer-company   */ require_once 'includes/applications-access.php'; ?>
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

        <title>Home | Applications | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
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
            <section class="pt-3">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">GgiOnline.Net</h1>
                        <p class="display-4 text-primary">GIET, Gunupur An Autonomous Institution</p>
                        <p class="lead text-right"><?php echo ucfirst($_SESSION['session_access']); ?> portal </p>
                    </div>
                </div>
            </section><!-- ./welcome message -->

            <!-- main section for this page -->
            <section class="container-fluid mb-5 py-4 block-color">
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

            <!-- support message -->
            <section class="container-fluid mb-5 py-4 block-color">
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
