<?php

include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if (isset($_POST["update"])) {

  $Password = $_POST["Password"];

  $queryy = "UPDATE recruiter SET Password='$Password' WHERE UserID= {$_SESSION['user_ID']}";

  $RUNS = $connection->query($queryy);

  if (isset($RUNS)) {
      header('location:Login.php');

  } else {
    $connection->error;
}

  $connection->close();

}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>Job Selling Website</title>


<!-- custom css file link  -->

  <link rel="stylesheet" href="Job_seeker.css">


</head>

<body>

<!--top bar-->

  <ul>
    <li><a href="Reg_Home.php">Home</a></li>
    <li><a href="Job_seeker.php">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="Reg_Contact.php">Contact</a></li>
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



<!--main Content-->


  <div class="main">

 

    <div class="scrollist">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " >
      <br>
      <h1>Update Password</h1>
      <br>
      <h3>New Password : <input type="Text" name="Password" required placeholder="New Password"></h3>
      <br>
      <input type="submit" name="update" value="Update" class="button">

    </div>

  </div>
<br>
<!--bottom bar-->

  <div class="footer">
    <a href="#link">User Agreement</a>
    <a href="#link">Brand Policy</a>
    <a href="#link">Copyright policy</a>
    <a href="#link">Privacy policy</a>
  </div>




</body>

</html>