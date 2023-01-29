<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MNNIT Student Panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block"> Student Register</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

  </header><!-- End Header -->


  <main id="main" class="main">

    

    

  </main><!-- End #main -->
  <!-- ======= Sidebar ======= -->
  

<main id="main" class="main">
<div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Register </h5>

<form method="POST" action="function.php" enctype="multipart/form-data">
                <div class="row mb-3">
              
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText"name="name" required>
                  </div>
                </div>
                <div class="row mb-3">
              
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Parents Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText"name="pname" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email"required>
                  </div>
                </div>
                
                <label for="type">Program &emsp; &emsp; &emsp;   &nbsp</label>
                    <select id="" name="program">
                             <option value="">Select Options</option>
                             <option value="BTech">BTech</option>
                             <option value="MTech">MTech</option>
                 

                    </select>


                    <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <!-- <input type="contact" class="form-control" id="inputContact" name="contact"required> -->
                  </div>
                </div>



                <label for="type">Department &emsp; &emsp;   </label>
                    <select id="" name="depart">
                             <option value="">Select Options</option>
                             <option value="CSE">Computer Science</option>
                             <option value="IT">Information Technology</option>
                             <option value="ECE">Electronics</option>
                             <option value="EE">Electrical</option>
                             <option value="MECH">Mechanical</option>
                             <option value="CHEMICAL">Chemical</option>
                             <option value="CIVIL">Civil</option>
                             <option value="PRODUCTION">Production</option>
                             <option value="Bio-Tech">Bio-Technology</option>
                 

                    </select>


                    <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <!-- <input type="contact" class="form-control" id="inputContact" name="contact"required> -->
                  </div>
                </div>



                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
                  <div class="col-sm-10">
                    <input type="contact" class="form-control" id="inputContact" name="contact"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name='dob' id="inputDob" required>
                  </div>
                </div>

                <label for="type">Gender &emsp; &emsp; &emsp;  &nbsp  &nbsp</label>
                    <select id="" name="gender">
                             <option value="">Select Options</option>
                             <option value="M">Male</option>
                             <option value="F">Female</option>
                             <option value="O">Others</option>
                 

                    </select>


                    <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <!-- <input type="contact" class="form-control" id="inputContact" name="contact"required> -->
                  </div>
                </div>

               

                
                
                 

               


                <!-- <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword"name="pass" required>
                  </div>
                </div> -->
                <!-- <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Active
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                       Offline
                      </label>
                    </div>
                   
                  </div>
                </fieldset> -->
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add student" name="addstu">Register</button>
                  
                  <button type="reset" class="btn btn-secondary">Reset</button>

                </div>
                
</form>

              
              </div>
              </div>
              </div>
          </main>
<?php include ('footer.php');?>