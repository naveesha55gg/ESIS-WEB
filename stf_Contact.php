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


  <link rel="stylesheet" href="Contact.css">
</head>
<body>

  <header>
    <!--top bar-->

    <ul>
    <li><a href="stf_Home.php">Home</a></li>
    <li><a href="stf_Job.php">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="stf_Contact.php">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <div class="dropdown" style="float:right;">
      <button class="dropbtn"><?php echo $_SESSION['user_name'] ?></button>
      <div class="dropdown-content">
        <a href="dashboard.php">Dashboard</a>
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
    <h2>Contact US</h2>
    <p>If you have any problem this page contact us</p>
    <br>
  </div>

  <section class="featured-jobs">
    <div class="container">
    <br>
      <h1><u>Contact Methods</u></h1>
      <br>
      <div class="job-listing">
        <div class="job-item">
          <h3><u>Phone</u></h3>
          <p>Tel : +94472345123 <br> Fax : +94478965432</p>
        </div>

        <div class="job-item">
          <h3><u>Emails</u></h3>
          <p>joblk@contact.com <br> 24hcoustom@saport.com</p>
        </div>

        <div class="job-item">
          <h3><u>Social Media</u></h3>
          <p>Facebook : facebook/jobfind.com <br> LinkdIn : LinkdIn/jobfind.com</p>
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
