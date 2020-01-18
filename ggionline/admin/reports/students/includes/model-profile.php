<?php
$id = $_SESSION['session_id'];
$profileRow = mysqli_fetch_assoc(mysqli_query($conn_ggi,"SELECT userName, firstName, middleName, lastName, mobile, email, lastLogIn,access FROM account WHERE id = $id"));
?>
<!-- Modal -->
<div class="modal fade" id="profileModel" tabindex="-1" role="dialog" aria-labelledby="profileModel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModelLongTitle">Profile</h5>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This feature under testing. If you face any problem then mail at infoggionline@gmail.com </span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <img src="https://www.ggionline.net/resources/images/user.png" class="rounded" alt="User">
        </div><!-- text-center for ### image-center ### --><br /><br />
        <div class="row">
          <div class="col">
            <span><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo ucfirst($profileRow['firstName'])." ".ucfirst($profileRow['middleName'])." ".ucfirst($profileRow['lastName']); ?></span>
          </div><!-- col  -->
          <div class="col">
            <span>Last LogIn : <?php echo date("Y-m-d");?></span>
          </div><!-- col -->
          <div class="col">
            <span><?php echo ucfirst($profileRow['access']); ?> : Ggionline.net</span>
          </div><!-- col  -->
        </div><!--- row --><br /><br />
        <div class="profileModelAjax">
          <?php include 'update-model.php'; ?>
        </div><!-- profileModelAjax -->
      </div><!-- model-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">More</button>
      </div><!-- model Footer -->
    </div>
  </div>
</div>
