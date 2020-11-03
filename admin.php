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

                <li class="nav-item"><a class="nav-link" href="tampilachievements.php">Achievements</a></li>
                
                <li class="nav-item"><a class="nav-link" href="tampileducations.php">Educations</a></li>

                <li class="nav-item"><a class="nav-link" href="tampilcontact.php">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <br><br>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Admin Home</h2>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <div class="down-content">
                <a href="tampilindex.php"><h4>Portofolio</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="down-content">
                <a href="tampilskills.php"><h4>Skills</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="down-content">
                <a href="tampilachievements.php"><h4>Achievements</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="down-content">
                <a href="tampileducations.php"><h4>Educations</h4></a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="down-content">
                <a href="tampilcontact.php"><h4>Contact</h4></a>
              </div>
            </div>
          </div>
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