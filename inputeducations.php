<?php
include_once "koneksi.php";
?>

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
                
                <li class="nav-item active"><a class="nav-link" href="tampileducations.php">Educations<span class="sr-only">(current)</span></a></li>

                <li class="nav-item"><a class="nav-link" href="tampilcontact.php">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <br><br><br><br><br>

  <?php   
    $stat = 2;  
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $tk = $_POST['tk'];
        $isitk = $_POST['isitk'];
        $sd = $_POST['sd'];
        $isisd = $_POST['isisd'];
        $smp = $_POST['smp'];
        $isismp = $_POST['isismp'];
        $smk = $_POST['smk'];
        $isismk = $_POST['isismk'];
        $kuliah = $_POST['kuliah'];
        $isikuliah = $_POST['isikuliah'];
        //buat koneksi
         $strSQL = "UPDATE skills SET
         tk='$tk',
         isitk='$isitk',
         sd='$sd',
         isisd='$isisd',
         smp='$smp',
         isismp='$isismp',
         smk='$smk',
         isismk='$isismk',
         kuliah='$kuliah',
         isikuliah='$isikuliah'
         WHERE id='$id'";
        // echo $strSQL;
       //die;
         $runSQL = mysqli_query($conn,$strSQL);        
         if ($runSQL) {
             $stat = 1; //sukses
         }  
         else {
             $stat = 0; //tidak sukses;
         }      
         header("refresh:3; url=educations.php"); 
    }        
    else if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $strSQL = "SELECT * FROM educations WHERE id ='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0) {
            while ($row = mysqli_fetch_assoc($runStrSQL)) {
                $tk = $row['tk'];
                $isitk = $row['isitk'];
                $sd = $row['sd']; 
                $isisd = $row['isisd'];
                $smp = $row['smp'];
                $isismp = $row['isismp'];
                $smk = $row['smk']; 
                $isismk = $row['isismk'];
                $kuliah = $row['kuliah'];
                $isikuliah = $row['isikuliah'];
            }
        }
        else {            
            $stat = 3;
        }
    }  
    else {       
        $tk = "";
        $isitk = "";
        $sd = "";
        $isisd = "";
        $smp = "";
        $isismp = "";
        $smk = "";
        $isismk = "";
        $kuliah = "";
        $isikuliah = "";
    }  
    $disableForm = isset($_GET['id']) ? "enabled": "disabled";
    ?>
    <div class="container">
        <h2>Educations Edit</h2>   
        <br>
        <?php 
        include "modaleducations.php";
           if ($stat == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data input succeeded. This page will redirect to Home.
            </div>
        <?php 
            }
            else if ($stat == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data input didn't succeed.
            </div>
        <?php 
            }
            else if ($stat == 3) {        
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data is not available in the database. This page will redirect to Home.
            </div>
        <?php 
            header("refresh:3; url=educations.php");
            die;
            }
        ?>

        <form id="myform" method="post" action="inputeducations.php">
            <div class="form-group" hidden>
                <label>Code</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" <?php echo $disableForm ?> readonly 
               >
            </div>

            <div class="form-group">
                <label>Kindergarten</label>
                <input id="tk" class="form-control" type="text" name="tk" value="<?php echo $tk ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Kindergarten Content</label>
                <input id="isitk" class="form-control" type="text" name="isitk" value="<?php echo $isitk ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Elementary School</label>
                <input id="sd" class="form-control" type="text" name="sd" value="<?php echo $sd ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Elementary School Content</label>
                <input id="isisd" class="form-control" type="text" name="isisd" value="<?php echo $isisd ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Junior High School</label>
                <input id="smp" class="form-control" type="text" name="smp" value="<?php echo $smp ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>Junior High School Content</label>
                <input id="isismp" class="form-control" type="text" name="isismp" value="<?php echo $isismp ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>High School</label>
                <input id="smk" class="form-control" type="text" name="smk" value="<?php echo $smk ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>High School Content</label>
                <input id="isismk" class="form-control" type="text" name="isismk" value="<?php echo $isismk ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>College</label>
                <input id="kuliah" class="form-control" type="text" name="kuliah" value="<?php echo $kuliah ?>" <?php echo $disableForm ?>>
            </div>

            <div class="form-group">
                <label>College Content</label>
                <input id="isikuliah" class="form-control" type="text" name="isikuliah" value="<?php echo $isikuliah ?>" <?php echo $disableForm ?>>
            </div>
               
            <input class="btn btn-primary" type="button" id="tombol" value="Simpan" <?php echo $disableForm ?>>   
        </form>
        
    </div>
   
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const tk = $('#tk').val();
            const isitk = $('#isitk').val();
            const sd = $('#sd').val();
            const isisd = $('#isisd').val();
            const smp = $('#smp').val();
            const isismp = $('#isismp').val();
            const smk = $('#smk').val();
            const isismk = $('#isismk').val();
            const kuliah = $('#kuliah').val();
            const isikuliah = $('#isikuliah').val();
           
            $('#idd').text(id);
            $('#tkk').text(tk);
            $('#isitkk').text(isitk);
            $('#sdd').text(sd);
            $('#isisdd').text(isisd);
            $('#smpp').text(smp);
            $('#isismpp').text(isismp);
            $('#smkk').text(smk);
            $('#isismkk').text(isismk);
            $('#kuliahh').text(kuliah);
            $('#isikuliahh').text(isikuliah);

            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>

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