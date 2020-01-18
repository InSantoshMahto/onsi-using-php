<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#"><?php echo ucfirst($_SESSION['session_access']); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="payments.php">Payments</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="reports.php">Reports</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="">Help</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a href="includes/logout.php"><span class="fa fa-sign-out text-white"></span></a>
          </li>
        </ul>
      </div>
    </nav>
