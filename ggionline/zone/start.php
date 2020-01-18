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
        <title>Start | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
    </head>
    <body>
        <header>

            <?php /*  including main-nav bar   */ require_once 'includes/main-nav.php'; ?>
            <?php /*  including main-nav bar   */ require_once 'includes/model-profile.php'; ?>

        </header>
        <section><br /><br />
            <main role="main">
                <!--
                 start Now
                -->
            </main>
        </section>
        <footer>

            <?php /*  including footer-company   */ include_once 'includes/footer-company.php';?>

            <?php /*  including footer-developer   */ include_once 'includes/footer-developer.php';?>

            <?php /*  including footer-scripts   */ include_once 'includes/footer.php'; ?>

        </footer>
    </body>
</html>
