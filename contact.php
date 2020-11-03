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
                
                <li class="nav-item"><a class="nav-link" href="educations.php">Educations</a></li>

                <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Me<span class="sr-only">(current)</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <?php 
    $status = 2;
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php"; 
        $namalengkap = $_POST['namalengkap'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //buat koneksi
        $strsql = "INSERT INTO contact (namalengkap, email, subject, message) 
        VALUES ('$namalengkap','$email','$subject', '$message')";
        
        $runSQL = mysqli_query($conn,$strsql);        
        if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        } 
    }            
    ?>

    <?php 
        if ($status == 1) {
    ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Message Sent.
    </div>
    <?php 
        }
        else if ($status == 0){
    ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Message not Sent.
    </div>
    <?php 
        }
    
    ?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Get Closer to Me</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>My Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1573.590887824952!2d106.74159142686094!3d-6.368325153833548!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28b87c28d5e6e034!2sSerua%20Indah%20Residence!5e0!3m2!1sid!2sid!4v1604164614450!5m2!1sid!2sid" width="700" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Hi!</h4>
              <p>Do you have any question about me or my web portfolio? Just let me know by leaving your message below.</p>
              <ul class="social-icons">
                <li><a href="http://www.facebook.com/yorifano/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://www.twitter.com/yorifano/"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://www.instagram.com/fanooooooooooooooooooo/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send me a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="namalengkap" type="text" class="form-control" id="namalengkap" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button name="tombolSubmit" type="submit" id="form-submit" class="filled-button" value="Simpan">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="assets/images/team_01.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;"></h5>
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
