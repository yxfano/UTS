<?php
include_once "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.PNG">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PORTOFOLIO FANO</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>PORTOFOLIO <em>FANO</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Portofolio</a></li> 

                <li class="nav-item"><a class="nav-link" href="skills.php">Skills</a></li>

                <li class="nav-item"><a class="nav-link" href="achievements.php">Achievements</a></li>
                
                <li class="nav-item active"><a class="nav-link" href="educations.php">Educations<span class="sr-only">(current)</span></a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <?php
    //buat sql
    $strSQL = "SELECT * FROM educations";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0) {
      echo "<tr><td colspan='4'>Data Tidak Terdapat Dalam Database</td></tr>";    
    }
    else {
      while($row = mysqli_fetch_assoc($runStrSQL)) {
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Educations</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <h2><?php echo $row['tk']; ?></h2><br><br>
              <p style="text-align: justify;"><?php echo $row['isitk']; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/tk-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/sd-570x350.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h2><?php echo $row['sd']; ?></h2><br><br>
              <p style="text-align: justify;"><?php echo $row['isisd']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <h2><?php echo $row['smp']; ?></h2><br><br>
              <p style="text-align: justify;"><?php echo $row['isismp']; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/smp-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/smk-570x350.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h2><?php echo $row['smk']; ?></h2><br><br>
              <p style="text-align: justify;"><?php echo $row['isismk']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

     <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <h2><?php echo $row['kuliah']; ?></h2><br><br>
              <p style="text-align: justify;"><?php echo $row['isikuliah']; ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/upj-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    }
    }
    ?>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Rizky Maulana Yorifano Inzhagi</a></p>
              <p><a href="admin.php">Admin Login</a></p>
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
  </body>

</html>
