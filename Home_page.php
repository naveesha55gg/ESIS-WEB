<?php

include 'config.php';

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
    <li><a href="Home_page.php">Home</a></li>
    <li><a href="#add link">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="#Add link">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <li style="float:right"><a class="active" href="Login.php">Login</a></li>

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



if (isset($_GET['jobid'])){

    $jobid = $_GET['jobid'];
    $qu="DELETE FROM job_post WHERE JobPID = '.$jobid.' " ;

    $delete = mysqli_query($connection, $qu);


}


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