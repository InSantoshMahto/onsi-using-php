<?php include 'includes/constants.php'; ?>
<?php include 'includes/admin-access.php'; ?>
<?php include 'includes/connections.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo DOMAIN; ?>resources/images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- custom style -->
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">

    <!-- title of the page -->
    <title>Student | <?php echo ucfirst($_SESSION['session_access']); ?> | Gandhi Group Of Institution</title>
</head>

  <body>

    <!-- header -->
    <header>
      <?php include 'includes/main-nav.php'; ?>
    </header>

    <!-- section -->
    <section>

      <div class="without-container-with-starter"></div>
      <div class="container-fluid">
        <div style=" width: 1335px; height: 450px; overflow: auto;">
        <h2 class="bg-info text-white text-center">Students Form Details</h2>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Aadhar</th>
                <th scope="col">User Name</th>
                <th scope="col">Zone</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Mobile</th>
                <th scope="col">Student Email</th>
                <th scope="col">Dob</th>
                <th scope="col">Gender</th>
                <th scope="col">Father Name</th>
                <th scope="col">Father Mobile</th>
                <th scope="col">Father Email</th>
                <th scope="col">Mother Name</th>
                <th scope="col">Mother Mobile</th>
                <th scope="col">Mother Email</th>
                <th scope="col">Jee Roll no.</th>
                <th scope="col">Jee Rank</th>
                <th scope="col">12th Board</th>
                <th scope="col">12th Institute</th>
                <th scope="col">12th Year</th>
                <th scope="col">12th percentage</th>
                <th scope="col">10th Board</th>
                <th scope="col">10th institute</th>
                <th scope="col">10th Year</th>
                <th scope="col">10th Percentage</th>
                <th scope="col">H. No.</th>
                <th scope="col">Street</th>
                <th scope="col">District</th>
                <th scope="col">State</th>
                <th scope="col">COuntry</th>
                <th scope="col">Institute Location</th>
                <th scope="col">Sub Institute</th>
                <th scope="col">Course</th>
                <th scope="col">Reference Number</th>
                <th scope="col">Applied Date</th>
              </tr>
            </thead>
            <tbody>
          <?php
            $select = "SELECT * FROM students";
            $result = mysqli_query($conn_ggi,$select);
            $serialNumber = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              // php loop start
              ?>
              <tr>
                <th scope="row"><?php echo $serialNumber; ?></th>
                <td><?php echo $row['studentUid']; ?></td>
                <td><?php echo strtoupper($row['userName']); ?></td>
                <td><?php echo ucfirst($row['zone']); ?></td>
                <td><?php echo ucfirst($row['studentFirstName'])." ".ucfirst($row['studentMiddleName'])." ".ucfirst($row['studentLastName']); ?></td>
                <td><?php echo $row['studentMobile']; ?></td>
                <td><?php echo $row['studentEmail']; ?></td>
                <td><?php echo $row['studentDob']; ?></td>
                <td><?php echo ucfirst($row['studentGender']); ?></td>
                <td><?php echo ucfirst($row['fatherFirstName'])." ".ucfirst($row['fatherMiddleName'])." ".ucfirst($row['fatherLastName']); ?></td>
                <td><?php echo $row['fatherMobile']; ?></td>
                <td><?php echo $row['fatherEmail']; ?></td>
                <td><?php echo ucfirst($row['motherFirstName'])." ".ucfirst($row['motherMiddleName'])." ".ucfirst($row['motherLastName']); ?></td>
                <td><?php echo $row['motherMobile']; ?></td>
                <td><?php echo $row['motherEmail']; ?></td>
                <td><?php echo $row['jeeRollNumber']; ?></td>
                <td><?php echo $row['jeeRank']; ?></td>
                <td><?php echo ucwords($row['interBoard']); ?></td>
                <td><?php echo ucwords($row['interInstitute']); ?></td>
                <td><?php echo $row['interYear']; ?></td>
                <td><?php echo $row['interPercentage']; ?></td>
                <td><?php echo ucwords($row['matricBoard']); ?></td>
                <td><?php echo ucwords($row['matricInstitute']); ?></td>
                <td><?php echo $row['matricYear']; ?></td>
                <td><?php echo $row['matricPercentage']; ?></td>
                <td><?php echo $row['houseNumber']; ?></td>
                <td><?php echo ucwords($row['street']); ?></td>
                <td><?php echo ucfirst($row['district']); ?></td>
                <td><?php echo ucfirst($row['state']); ?></td>
                <td><?php echo ucfirst($row['country']); ?></td>
                <td><?php echo strtoupper($row['instituteLocation']); ?></td>
                <td><?php echo strtoupper($row['subInstitute']); ?></td>
                <td><?php echo strtoupper($row['course']); ?></td>
                <td><?php echo strtoupper($row['referenceNumber']); ?></td>
                <td><?php echo $row['appliedDate']; ?></td>
              </tr>
              <?php
              $serialNumber = $serialNumber + 1;
              // php loop stop
            }
          ?>
            </tbody>
          </table>
        </div>
    </section>
    <!--  /.section   -->

    <?php
      //including footer
      include 'includes/footer.php';
    ?>

  </body>
</html>
