<?php /*  including constants   */ require_once 'includes/constants.php'; ?>
<?php /*  including admin access   */ require_once 'includes/admin-access.php'; ?>
<?php /*  including connections   */ require 'includes/connections.php'; ?>
<!doctype html>
<html lang="en-IN">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"><!-- charset -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- for responsivenes -->

        <?php /* required common head section code for admin directry */ require_once 'includes/header-link.php'; ?>

        <!-- title of the page -->
        <title>Zone | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
    </head>
    <body>
        <header>

            <?php /*  including main-nav bar   */ require_once 'includes/main-nav.php'; ?>

            <?php /*  including model profile   */ require_once 'includes/model-profile.php'; ?>

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
        <section class="mb-5">
            <main role="main">
                <div class="container-fluid"><br>

                    <?php include 'includes/admin-starter.php'; ?>

                </div>
                <!-- start Now -->
            </main>
        </section><!-- ./main section for this page -->

        <!-- support message -->
        <section class="container-fluid">
          <div class="alert alert-info text-center" role="alert">
              <p>If have any technical issue, feel free to contact us <a href="mailto:infoggionline@gmail.com?subject=feedback">InfoGgiOnline@Gamil.Com</a> </p>
          </div>
        </section>
        <footer>

            <?php /*  including footer-company   */ include_once 'includes/footer-company.php';?>

            <?php /*  including footer-developer   */ include_once 'includes/footer-developer.php';?>

            <?php /*  including footer-scripts   */ include_once 'includes/footer.php'; ?>

          </footer>
    </body>
</html>
