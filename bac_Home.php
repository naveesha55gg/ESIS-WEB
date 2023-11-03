<?php

include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Selling Website</title>


  <link rel="stylesheet" href="Reg_Home.css">
</head>
<body>

  <header>
    <!--top bar-->

    <ul>
    <li><a href="bac_Home.php">Home</a></li>
    <li><a href="bac_job.php">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="bac_Contact.php">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <div class="dropdown" style="float:right;">
      <button class="dropbtn"><?php echo $_SESSION['user_name'] ?></button>
      <div class="dropdown-content">
        <a href="bccheckreqs.php">Dashboard</a>
        <a href="Update.php">Setting</a>
        <a onclick="checker()" href="logout.php" class="btn">logout</a>

      </div>
    </div>


  </ul>

  <script>
  function checker() {
    var result = confirm('Do you want to Log out?');
    if (result === false) {
      event.preventDefault();
    }
  }
  </script>



    <div class="hero"> 
    </div>
  </header>

  <div class="heder">
    <br>
    <h2>Find Your Dream Job</h2>
    <p>Search and apply for thousands of job opportunities</p>
    <a href="bac_job.php" class="btn">Get Started</a>
  </div>

  <section class="featured-jobs">
    <div class="container">
    <br>
      <h1><u>How it works</u></h1>
      <br>
      <div class="job-listing">
        <div class="job-item">
          <h3><u>Create Account</u></h3>
          <p>Create your account and search your Jobs</p>
        </div>

        <div class="job-item">
          <h3><u>Apply Jobs</u></h3>
          <p>Fill your personal ,professional and Educational data and Apply your Job </p>
        </div>

        <div class="job-item">
          <h3><u>Achieve your Dream</u></h3>
          <p>Achieve and success your life</p>
        </div>
      </div>
    </div>
  </section>

  <!--bottom bar-->

  <div class="footer">
    <a href="#link">User Agreement</a>
    <a href="#link">Brand Policy</a>
    <a href="#link">Copyright policy</a>
    <a href="#link">Privacy policy</a>
  </div>
</body>
</html>
