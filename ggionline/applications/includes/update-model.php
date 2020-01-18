
<form class="needs-validation-profile-model-update" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" value="<?php echo $profileRow['userName']; ?>" aria-describedby="inputGroupPrepend" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Mobile</label>
      <input type="number" class="form-control" id="validationCustom01" placeholder="Ex: 767713508855" value="<?php echo $profileRow['mobile']; ?>" required disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please Provides Valid Mobile.
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Email</label>
      <input type="email" class="form-control" id="validationCustom02" placeholder="Ex: test@gamil.com" value="<?php echo $profileRow['email']; ?>" required disabled>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="invalid-feedback">
        Please Provides Valid Email.
      </div>
    </div>
  </div>
 <!--  <button class="btn btn-primary" type="submit">Submit form</button> -->
</form>
