<?php
include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}
?>


<!DOCTYPE html>
<html lang= "en" dir ="ltr">
 <head>
    <meta charset="UTF-8">
     <title> hiru </title>
       <link rel="stylesheet" href="css/jobseeker_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <!-- Top menu bar -->

 <ul>
    <li><a href="Reg_home.php">Home</a></li>
    <li><a href="Job_seeker.php">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="#Add link">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <div class="dropdown" style="float:right;">
    <button class="dropbtn"><?php echo $_SESSION['user_name'] ?></button>
    <div class="dropdown-content">
    <a href="job_seeker_dashbord.php">Dashboard</a>
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



     <!-- Side navigation -->
     <div class="sidenav">
        <a href="job_seeker_dashbord.php">Dashboard</a>
        <a href="Personal_Data.php">Personal Data</a>
        <a href="educational data.php">Educational Data</a>
        <a href="Profisional Data.php">professional Data</a>
    </div>

    <!--bottom bar-->

  <div class="topnav">
    <a href="#home">User Agreement</a>
    <a href="#news">Brand Policy</a>
    <a href="#contact">Copyright policy</a>
    <a href="#contact">Privacy policy</a>
  </div>



     <div class="container">
        <div class="title"> User Details </div>
        <form action="#">
            <div class="user-details">


          

                <img src="img/ppppp.jpg" width="200px" height="150px" onclick="onClick(this)" alt="Concrete meets bricks">

                <div class="name"> User Name</div>

                <div class="input-box">
                    <span class="details">Frist Name :</span>
                    <input type="text" placeholder="Enter your Frist name" required>
                </div>
                <div class="input-box">
                    <span class="details">Last Name :</span>
                    <input type="text" placeholder="Enter your Last name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email :</span>
                    <input type="text" placeholder="Enter your Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone number :</span>
                    <input type="text" placeholder="Enter your Phone number" required>
                </div>
                <div class="input-box">
                    <span class="details">Password :</span>
                    <input type="password" placeholder="Enter your Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your Address" required>
                </div>
                <div class="button">
                    <input type="submit" value="Edit Profile">
                </div>

                <div class="button">
                    <input type="submit" value="Submit"  >
                </div>

               
               <fieldset>
                <div class="listing">
                  <ul>
                     <li>Frist access to</li>
                          <h6>sunday 23 Octomber 2022, 4.51PM(201 days 20 hours)</h6>
                     <li>Last access to</li>
                          <h6>saturday,13 May 2023 1.35 PM(4 secs)</h6>
                  </ul>

                    </div>
                 </fieldset>



             </div>
            </form>
        </div>



