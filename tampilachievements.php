<!DOCTYPE html>
<html lang="en">
<head>
  <title>PORTOFOLIO FANO</title>
  <link rel="stylesheet" href="mycss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="icon" href="assets/images/favicon.PNG">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="admin.php"><h2>PORTOFOLIO FANO <em>ADMIN</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="tampilindex.php">Portofolio</a></li> 

                <li class="nav-item"><a class="nav-link" href="tampilskills.php">Skills</a></li>

                <li class="nav-item active"><a class="nav-link" href="tampilachievements.php">Achievements<span class="sr-only">(current)</span></a></li>
                
                <li class="nav-item"><a class="nav-link" href="tampileducations.php">Educations</a></li>

                <li class="nav-item"><a class="nav-link" href="tampilcontact.php">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <br><br><br><br><br>

    <?php
      include_once ("koneksi.php");
    ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>Achievements</h1>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
        <table id="listtable" class="table table-striped">
          <thead>
            <tr>
              <th>Code </th>
              <th>Achievements 1 </th>
              <th>Achievements 2 </th>
              <th>Achievements 3 </th>
            </tr>
          </thead>
          <body>
    
    <?php
    //buat sql
    $strSQL = "SELECT * FROM achievements";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>

            <tr>
              <td><?php echo $row["id"] ?></td>
              <td><?php echo $row["achievements1"] ?></td>
              <td><?php echo $row["achievements2"] ?></td>
              <td><?php echo $row["achievements3"] ?></td>
                <a href="inputachievements.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Edit</a>
              </td>
            </tr>

    <?php 
      }
    }
    ?>
          </body>
        </table>
        </div>
      </div>
    </div>
  
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Rizky Maulana Yorifano Inzhagi</a></p>
              <p><a href="index.php">Back to Home</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
</body>
</html>