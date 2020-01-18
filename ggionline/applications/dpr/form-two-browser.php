
<div class="card my-1" style="background-color: #f2f2f2;">
    <div class="card-header text-center bg-primary"><h3>DPR - 2</h3></div><!-- card-header -->
    <div class="card-body container">

        <h5 class="card-title">Hints</h5>
        <p class="card-text text-danger">Do NOT use any special character.</p>
        <p class="card-text text-danger">Do NOT use more then 2 digits Number.</p>
        <!--    for dpr-two    -->
        <form class="dpr-form-one" action="" method="post" novalidate>
          <div class="p-2 mb-2 bg-secondary text-white"><b>Official Details</b></div>

            <div class="form-row mb-3">

                <div class="col-md-3 my-1">
                    <label for="date-of-dpr-two">Date of DPR</label>
                    <input type="text" class="form-control" id="dprTwoDate" name="dprTwoDate" value="<?php echo date("d-m-Y"); ?>" readonly>
                </div><!--  col-md-3 my-1   -->

                <div class="col-md-3 my-1">
                    <label for="zoneName-dprTwo">Zone Name</label>
                    <input type="text" class="form-control" id="dprTwoZoneName" name="dprTwoZoneName" value="<?php echo $_SESSION['session_access']; ?>" readonly>
                </div><!--  col-md-3 my-1   -->

                <div class="col-md-3 my-1">
                    <label for="submitedBy-dprTwo">Submitted By</label>
                    <input type="text" class="form-control" id="dprTwoSubmitedBy" name="dprTwoSubmitedBy" value="<?php echo $_SESSION['session_name']; ?>" readonly>
                </div><!--  col-md-3 my-1   -->

                <div class="col-md-3 my-1">
                    <label for="submitionDate-dprTwo">Submission Date</label>
                    <input type="text" class="form-control" id="dprTwoSubmitionDate" name="dprTwoSubmitionDate" value="<?php echo date("d-m-Y"); ?>" readonly>
                </div><!--  col-md-3 my-1   -->

            </div><!-- form-row    -->

            <!-- main form start i.e, repeatation start -->
            <?php
                for ($i=1; $i <= 5; $i++) {
            ?>

            <div class="my-1 px-1 py-2 bg-secondary text-white">

                <div class="form-row">

                    <div class="col-md-1 mb-1">

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="dprTwo<?php echo $i;?>" name="dprTwo<?php echo $i;?>" checked>
                            <label class="custom-control-label" for="dprTwo<?php echo $i;?>"><?php echo $i;?></label>
                        </div>

                    </div><!--  col-md-1 mb-1   -->

                </div><!-- form-row    -->

                <div class="px-5">

                    <!--   Service Visits/Calls -->
                    <div>
                        <span><b>Service Visits/Calls</b></span>
                        <div class="form-row">

                            <div class="col-md-6 my-1">

                                <input type="text" class="form-control" id="perDetails<?php echo $i;?>" name="perDetails<?php echo $i;?>" placeholder="Details of the person" <?php if ($i == 1) echo "required"; ?>>

                                <?php if ($i == 1) echo '<div class="invalid-feedback bg-white">You Must Have Enter Atleast one DPR.</div>'; ?>

                            </div><!--  /col-md-6 my-1   -->

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="noOfCalMade<?php echo $i;?>" name="noOfCalMade<?php echo $i;?>" placeholder="No. of calls made for service and outcome">

                            </div><!--  /col-md-6 my-1   -->

                        </div><!-- /form-row    -->

                    </div><!--   /Service Visits/Calls -->

                    <!--   Prospect Approach  -->
                    <div>
                        <span><b>Prospect Approach</b></span>
                        <div class="form-row">

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="noOfStudents<?php echo $i;?>" name="noOfStudents<?php echo $i;?>" placeholder="No. of Students">

                            </div><!--  col-md-6 my-1   -->

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="noOfPromoters<?php echo $i;?>" name="noOfPromoters<?php echo $i;?>" placeholder="No. of Promoters">

                            </div><!--  col-md-6 my-1   -->

                        </div><!-- form-row    -->

                    </div><!--   /Prospect Approach  -->


                    <!--   Prospect Closed -->
                    <div>
                        <span><b>Prospect Closed</b></span>
                        <div class="form-row">

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="thrDirApproach<?php echo $i;?>" name="dirApproach<?php echo $i;?>" placeholder="Through Direct Approach">

                            </div><!--  /col-md-6 my-1   -->

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="thrPromoters<?php echo $i;?>" name="thrPromoters<?php echo $i;?>" placeholder="Through Promoters">

                            </div><!--  /col-md-6 my-1   -->

                        </div><!-- /form-row    -->

                    </div><!--   /Prospect Closed -->

                    <!--   Total No of Admission  -->
                    <div>
                        <span><b>Total No. of Admission</b></span>
                        <div class="form-row">

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="ddCollected<?php echo $i;?>" name="ddCollected<?php echo $i;?>" placeholder="DD's Collected">

                            </div><!--  col-md-6 my-1   -->

                            <div class="col-md-6 my-1">

                                <input type="number" class="form-control" id="docCollected<?php echo $i;?>" name="docCollected<?php echo $i;?>" placeholder="Documents Collected">

                            </div><!--  col-md-6 my-1   -->

                        </div><!-- form-row    -->

                    </div><!--   /Total No. of Admission  -->

                    <!--   Remarks -->
                    <div>
                        <span><b>Remarks</b></span>
                        <div class="form-row">

                            <div class="col-md-12 my-1">

                                <input type="text" class="form-control" id="remarks<?php echo $i;?>" name="remarks<?php echo $i;?>" placeholder="Note :- Remarks  should NOT be more than 100 words ">

                            </div><!--  col-md-12 my-1   -->

                        </div><!-- form-row    -->

                    </div><!--   /Total No of Admission  -->

                </div><!--   pl-2   -->

            </div><!--  my-3 pl-1 py-2 bg-secondary text-white   -->

            <?php
                }
            ?>
            <!-- main form end i.e, repeatation stop-->

            <div class="form-group">

                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="" id="dprTwoConfirm" required>
                    <label class="form-check-label" for="dprTwoConfirm">Agree to terms and conditions</label>
                    <div class="invalid-feedback">You must agree before submitting.</div>

                </div><!--    form-check   -->

            </div><!--   form-group   -->

            <div class="text-center">

                <button class="btn btn-lg btn-success" type="submit" name="submit" value="dprTwo">Submit Now</button>

            </div><!-- text-center -->

        </form><!-- /for dpr-two -->

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

<?php /*including form-two-pro.php file for inserting the dprOne form data into database*/ require 'form-two-server.php' ?>
