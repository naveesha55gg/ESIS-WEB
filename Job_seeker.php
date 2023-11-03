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

    <?php

$query = "SELECT * FROM Job_post";

$result_set = mysqli_query($connection, $query);

if (mysqli_num_rows($result_set) > 0) {

    while ($row = mysqli_fetch_array($result_set)) {

        ?>

    <div class="scrollist">
      <br>
      <h1><?php echo $row["Jobtitle"] ?></h1>
      <br>
      <h3>Description: <?php echo $row["Discription"] ?></h3>
      <br>
      <h4>Requirements: <?php echo $row["Requirements"] ?></h4>
      <br>
      <button class="button"><a href='#'>Apply Job</a></button>

    </div>
    <?php
}

}
?>

  </div>

<!--bottom bar-->

  <div class="footer">
    <a href="#link">User Agreement</a>
    <a href="#link">Brand Policy</a>
    <a href="#link">Copyright policy</a>
    <a href="#link">Privacy policy</a>
  </div>




</body>

</html>