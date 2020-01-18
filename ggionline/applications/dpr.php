<?php /*  including constants   */ require_once 'includes/constants.php'; ?>
<?php /*  including footer-company   */ require_once 'includes/applications-access.php'; ?>
<?php /*  including footer-company   */ require 'includes/connections.php'; ?>
<!doctype html>
<html lang="en-IN">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="DPR, zone, applications, ggionline.net,">
        <meta name="title" content="Daily Progress Reports">
        <meta name="description" content="DPR is Daily Progress Reports of Gandhi Gandhi Of Institutions for Marketing">
        <meta name="author" content="Gandhi Group Of Institutions">
        <meta http-equiv="refresh" content="1200">
        <?php require_once 'includes/header-link.php'; ?>

        <title>DPR | Applications | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
    </head>
    <body>
        <header>

            <?php /*  including main-nav bar   */ require_once 'includes/main-nav.php'; ?>
            <?php /*  including main-nav bar   */ require_once 'includes/model-profile.php'; ?>

        </header>
        <section><br /><br />
            <h1 class="bg-warning text-center p-3 mb-1">GIET (Autonomous), Gunupur, Daily Progress Report</h1>
            <article>

                <?php /* including top view*/ include 'dpr/top-view-browser.php'; ?>

            </article>
            <main role="main">
                <div class="container-fluid">

                            <?php /* including form one  */ include 'dpr/form-one-browser.php'; ?>
                            <?php /* including top view*/ include 'dpr/middle-view-browser.php'; ?>
                            <?php /* including form two  */ include 'dpr/form-two-browser.php'; ?>

                </div><!-- container-fluid -->
            </main>
            <aside>
                <?php /* including advertisement*/ include 'dpr/advertisement-browser.php'; ?>
            </aside>
        </section>
        <footer>

            <?php /*  including footer-company   */ include_once 'includes/footer-company.php';?>

            <?php /*  including footer-developer   */ include_once 'includes/footer-developer.php';?>

            <?php /*  including footer-scripts   */ include_once 'includes/footer.php'; ?>

        </footer>
    </body>
</html>
