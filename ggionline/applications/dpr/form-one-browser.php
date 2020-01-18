
<div class="card my-1" style="background-color: #f2f2f2;">
    <div class="card-header text-center bg-primary"><h3>DPR - 1</h3></div><!-- card-header -->
    <div class="card-body">

        <h5 class="card-title">Hints</h5>
        <p class="card-text text-danger">Do NOT use any special character.</p>
        <!--    for dpr-one    -->
        <form class="dpr-form-one" action="" method="post" novalidate>
          <div class="p-2 mb-2 bg-secondary text-white"><b>Official Details</b></div>

            <div class="form-row mb-3">

                <div class="col-md-3 my-1">
                    <label for="date-of-dpr-one">Date of DPR</label>
                    <input type="text" class="form-control" id="dprOneDate" name="dprOneDate" value="<?php echo date("d-m-Y"); ?>" readonly>
                </div><!--  col-md-3 my-1   -->

                <div class="col-md-3 my-1">
                    <label for="zoneName-dprOne">Zone Name</label>
                    <input type="text" class="form-control" id="dprOneZoneName" name="dprOneZoneName" value="<?php echo $_SESSION['session_access']; ?>" readonly>
                </div><!--  col-md-3 my-1   -->

                <div class="col-md-3 my-1">
                    <label for="submittedBy-dprOne">Submitted By</label>
                    <input type="text" class="form-control" id="dprOneSubmittedBy" name="dprOneSubmittedBy" value="<?php echo $_SESSION['session_name']; ?>" readonly>
                </div><!--  col-md-3 my-1   -->

                <div class="col-md-3 my-1">
                    <label for="submissionDate-dprOne">Submission Date</label>
                    <input type="text" class="form-control" id="dprOneSubmissionDate" name="dprOneSubmissionDate" value="<?php echo date("d-m-Y"); ?>" readonly>
                </div><!--  col-md-3 my-1   -->

            </div><!-- form-row    -->

            <!-- main form start i.e, repeatation start -->
            <?php
                for ($i=1; $i <= 5; $i++) {
            ?>

            <div class="my-3 px-1 py-2 bg-secondary text-white">

                <div class="form-row">

                    <div class="col-md-1 mb-1">

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="dprOne<?php echo $i;?>" name="dprOne<?php echo $i;?>" checked>
                            <label class="custom-control-label" for="dprOne<?php echo $i;?>"><?php echo $i;?></label>
                        </div>

                    </div><!--  col-md-2 mb-1   -->

                </div><!-- form-row    -->

                <div class="px-2">

                    <!--      Record of Activity -->

                    <div>
                        <div class="form-row">

                            <div class="col-md-3 mb-1 pt-2">

                                <input type="text" class="form-control" id="recOfActivity<?php echo $i;?>" name="recOfActivity<?php echo $i;?>" placeholder="Record of Activity" <?php if ($i == 1) echo "required"; ?>>

                                <?php if ($i == 1) echo '<div class="invalid-feedback bg-white">You Must Have Enter Atleast one DPR.</div>'; ?>

                            </div><!--  col-md-3 mb-1   -->

                        </div><!--   form-row -->

                    </div><!--      /Record of Activity -->

                    <!--   Intial Approaches -->

                    <div>

                        <span><b>Initial Approaches</b></span>
                        <div class="form-row">

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="insName<?php echo $i;?>" name="insName<?php echo $i;?>" placeholder="Colleges/Inst./ Tuitions">

                            </div><!--  /col-md-3 my-1   -->

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="proName<?php echo $i;?>" name="proName<?php echo $i;?>" placeholder="Promoters (Teachers/Consultants)">

                            </div><!--  /col-md-3 my-1   -->

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="parName<?php echo $i;?>" name="parName<?php echo $i;?>" placeholder="Parents (Ex/Present)">

                            </div><!--  /col-md-3 my-1   -->

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="proStuName<?php echo $i;?>" name="proStuName<?php echo $i;?>" placeholder="Prospective Students">

                            </div><!--  /col-md-3 my-1   -->

                        </div><!-- /form-row    -->

                    </div><!--   /Intial Approaches -->

                    <!--   Approaches Materialized  -->

                    <div>
                        <span><b>Approaches Materialized</b></span>
                        <div class="form-row">

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="dprOnePresentations<?php echo $i;?>" name="dprOnePresentations<?php echo $i;?>" placeholder="For Presentations">

                            </div><!--  col-md-3 my-1   -->

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="dprOneNoOfPromoters<?php echo $i;?>" name="dprOneNoOfPromoters<?php echo $i;?>" placeholder="No. of Promoters met and their details">

                            </div><!--  col-md-3 my-1   -->

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="dprOneParFeedback<?php echo $i;?>" name="dprOneParFeedback<?php echo $i;?>" placeholder="Parents met and their feedback">

                            </div><!--  col-md-3 my-1   -->

                            <div class="col-md-3 my-1">

                                <input type="text" class="form-control" id="dprOnePreAndInsDetails<?php echo $i;?>" name="dprOnePreAndInsDetails<?php echo $i;?>" placeholder="Presentation made and the instituion detail">

                            </div><!--  col-md-3 my-1   -->

                        </div><!-- form-row    -->

                    </div><!--   /Approaches Materialized  -->

                </div><!--   px-2   -->

            </div><!--  my-3 pl-1 py-2 bg-secondary text-white   -->

            <?php
                }
            ?>
            <!-- main form end i.e, repeatation stop-->

            <div class="form-group">

                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="" id="dprOneConfirm" required>
                    <label class="form-check-label" for="dprOneConfirm">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>

                </div><!--    form-check   -->

            </div><!--   form-group   -->

            <div class="text-center">

                <button class="btn btn-lg btn-success" type="submit" name="submit" value="dprOne">Submit Now</button>

            </div><!-- text-center -->

        </form><!-- /for dpr-one -->

    </div><!-- card-body -->

</div><!-- card -->

<!--   JavaScript for validations of dpr-form-one  -->
<script>
    (function() {
        'use strict';
         window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('dpr-form-one');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script><!--   /JavaScript for validations of dpr-form-one  -->

<?php /*including form-one-pro.php file for inserting the dprOne form data into database*/ require 'form-one-server.php' ?>
