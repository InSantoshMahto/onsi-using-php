<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#"><img src="<?php echo DOMAIN; ?>resources/images/logo.png" alt="<?php echo ucfirst($_SESSION['session_access']); ?>"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo DOMAIN; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="<?php echo DOMAIN; ?>applications/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Applications</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="<?php echo DOMAIN; ?>applications/new-students.php">New Student</a>
          <!--
            <a class="dropdown-item" href="<?php echo DOMAIN; ?>applications/dpReports.php">DP Reports</a>
          -->
          <a class="dropdown-item" href="<?php echo DOMAIN; ?>applications/dpReportsNext.php">DPR Pro</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#" data-toggle="modal" data-target="#profileModel">Profile</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="includes/logout.php"><span class="fa fa-sign-out text-white"></span></a>
      </li>
    </ul>
  </div>
</nav>
