
<?php require_once 'config.php';
session_start();
?>
<!-- menu bar -->
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/new_job_vecancy.css" >
  </head>
  <body>
  <nav>
      <ul class="topnav">

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
    </nav>

    <!-- Side navigation -->

    <nav>
      <div class="sidenav">
      <a href="dashboard.php">Dashboard</a>
        <a href="new job vacency.php">job vecancy request</a>
        <a href="job_seeker_customer_Support.php">Job Seeker Customer support</a >
        <a href="Company_customer Support.php">Company Customer support</a >
        <a href="shedule interview.php">Cordinate interviews</a>
        <a href="company accounts.php">Company Accounts</a>
        <a href="job seeker accounts.php">Jobseeker Accounts</a>
        <a href="#link Add">Background Check</a>
      </div>
    </nav>

    <!--bottom bar-->
    <nav>
      <div class="botnav">
        <a href="#home">User Agreement</a>
        <a href="#news">Brand Policy</a>
        <a href="#contact">Copyright policy</a>
        <a href="#contact">Privacy policy</a>
      </div>
    </nav>

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

		    <h2><?php echo $row["Jobtitle"] ?></h2>
        <h3>Description: <?php echo $row["Discription"] ?></h3>
        <h3>Requirements: <?php echo $row["Requirements"] ?></h3>

        <button class="button">Aprove</button>
        <button class="button" onclick="edits()"><a href='delete-job.php?deleteID=.$row["JobPID"].'>Delete</a></button>
			</div>
		<?php
}

}
?>

    </div>

    <script>
        function edits() {
          var result = confirm('Are you sure?');
          if (result === false) {
            event.preventDefault();
          }
        }
      </script>

  </body>
</html>


<?php mysqli_close($connection);?>