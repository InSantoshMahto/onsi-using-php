<?php /*  including constants   */ require_once 'includes/constants.php'; ?>
<?php /*  including footer-company   */ require_once 'includes/admin-access.php'; ?>
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
        <title>DPR Pro | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
        <style type="text/css">
            .data {
                width: 100%;
                max-height: 700px;
                overflow: auto;
            }
            .dprData {
                width: 100%;
                max-height: 650px;
                overflow: auto;
            }
        </style>
    </head>
    <body>
        <header>

            <?php /*  including main-nav bar   */ require_once 'includes/main-nav.php'; ?>
            <?php /*  including main-nav bar   */ require_once 'includes/model-profile.php'; ?>

        </header>
        <section><br /><br />
            <main role="main">
                <div class="container-fluid mt-1">
                    <div class="row">
                        <div class="col-md-1 pl-1 pr-0 py-0 data">
                            <?php /* including zone and marketing officer  */ include_once 'zone.php';?>
                        </div>
                        <div class="col-md-11 text-justify m-0 p-1 data">
                            <div class="p-2 bg-info text-light text-center">
                                GIET (AUTONOMOUS), GUNUPUR, DPR FORMAT FOR ADMISSION STAFF
                            </div>
                            <div class="data" id="dprOneData">
                                <?php /* including table dprOne*/ require_once 'dpr-one-table.php'; ?>
                            </div>
                            <div class="dprData mt-1" id="dprTwoData">
                                <?php /* including table dprTwo*/ require_once 'dpr-two-table.php'; ?>
                            </div>
                            <div>
                                <table class="table table-hover bg-primary text-light" width="100%">
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Name Of Employee :- Evan Rajak</td>
                                            <td class="text-right">Data Of DPR :- <?php echo date("d-m-Y");?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                          <?php /* including table dprOne*/ require_once 'profile.php'; ?>
                          <!--
                            <?php /* including table dprTwo*/ require_once 'filter-and-sorting.php'; ?>
                          -->
                    </div>
                </div><!-- container-fluid -->
            </main>
        </section>
        <footer>

            <?php /*  including footer-company   */ include_once 'includes/footer-company.php';?>

            <?php /*  including footer-developer   */ include_once 'includes/footer-developer.php';?>

            <?php /*  including footer-scripts   */ include_once 'includes/footer.php'; ?>

        </footer>
    </body>
</html>
