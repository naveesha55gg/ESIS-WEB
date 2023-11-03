<?php

include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if (isset($_POST['submit'])) {
    $interviewid = $_POST['interviewid'];
    $interviewdate = $_POST['interviewdate'];
    $Time = $_POST['Time'];
    $venue = $_POST['venue'];

    $sql = "insert into Interview(interviewid,interviewdate,Time,venue)values('$interviewid','$interviewdate','$Time','$venue')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        //echo"Data inserted successfully";//
        header('location:displaysheduleinterview.php');
    } else {
        die(mysqli_error($connection));

    }
}
?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>shedule Interview</title>

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/dashbord.css">
	  <style>
	 /* ----menu bar---------*/


ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  text-align: center;
}

li {

  display: inline-block;
}

li a {

  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:#04AA6D;
}

.active {
  background-color: #04AA6D;
}


.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.ul.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #3e8e41;}



/* ------Side navigation---------- */



.sidenav {
  height: 85.5%;
  width: 229px;
  position: fixed;
  z-index: 1;
  top: 45px;
  left: 0;
  background-color: #333;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px;
  font-size: 28px;
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* ---- bottom bar --- */

body {
  margin: 0;
  padding-bottom: 50px;
  box-sizing: border-box;


}

.topnav {
  position: fixed;
  bottom: 0;
  width: 100%;
  overflow: hidden;
  background-color: rgba(242, 242, 242, 0.5);
  text-align: right;


}

.topnav a {

  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
  display: inline-block;

}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
}

/*.....company details form....*/

body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("");

  /* Control the height of the image */
  min-height: 450px;
  width:100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: center;
  right: 0;
  margin: 40px;
  max-width: 500px;
  padding: 70px;
  background-color: white;
  color:black;
}


/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

 </head>
 <body >

<!--top menu -->
 <ul>
 <li><a href="Cm_Home.php">Home</a></li>
    <li><a href="com_job.php">Jobs</a></li>
  <li><a href="#Add link">About</a></li>
  <li><a href="Com_Contact.php">Contact</a></li>
  <li><a href="#Add link">Help</a></li>
  <div class="dropdown" style="float:right;">
  <button class="dropbtn"><?php echo $_SESSION['user_name'] ?></button>
  <div class="dropdown-content">
 <a href="dashbord.html">Dashboard</a>
  <a href="Update.php">Setting</a>
  <a onclick="checker()" href="logout.php" class="btn">logout</a>

  </div>


</ul>


</div>
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

  <a href="Company_Dashbord.php">Dashbord</a>
  <a href="company details.php">Company Details</a>
  <a href="CreateJobPost.php">Create Jobpost</a>
  <a href="sheduleInterview.php">Schedule Interviews</a>
   <!----<a href="#link Add">Published Jobpost</a>----->
  <a href="company_support.php">Support</a>

	</div>

	<!--bottom bar-->

	<div class="topnav">

  <a href="#home">User Agreement</a>
  <a href="#news">Brand Policy</a>
  <a href="#contact">Copyright policy</a>
  <a href="#contact">Privacy policy</a>

	</div>
	<center>

	<div class="bg-img">
	<form action="shedule interview.php" method="POST" class="container">
	<h1>Interview Details</h1>

    <label for="interviewid"><h3>interview id:</h3></label>
    <input type="text" id="interviewid" name="interviewid"><br><br>

    <label for="interviewdate"><h3>interview date:</h3></label>
    <input type="text" id="interviewdate" name="interviewdate" ><br>

    <label for="Time"><h3>Time:</h3></label>
    <input type="text" id="Time" name="Time"><br>

    <label for="venue"><h3>venue:</h3></label>
    <input type="text" id="venue" name="venue" ><br>



   <br>

    <button type="submit" class="btn"name="submit">save</button>
    </form>

	</div>
	</center>
 </body>

 </html>