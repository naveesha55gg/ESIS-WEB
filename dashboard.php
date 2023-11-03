<?php require_once 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}
if (!isset($_SESSION['user_ID'])) {
    header('location:login_form.php');
}

?>
<?php
$select = " SELECT R.FName,R.LName,R.Address,R.Email,P.Phone FROM Recruiter R, Recruiter_Contact P WHERE R.UserID = {$_SESSION['user_ID']}";

$run = $connection->query($select);

$row = $run->fetch_assoc();
?>

<!-- menu bar -->
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/logo.css">
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

      <div class="profile-icon-text">
        <img src="image/profile.jpeg" alt="Avatar" class="profileicon" />
        <h1 style="margin-left:15px;"><?php echo $row["FName"] . " " . $row["LName"]; ?></h1>
      </div>

<br>

      <div class="personal_details_border">
        <h2>User details</h2>

        <hr class="new">

        <br>

        <h3 >Name: <?php echo $row["FName"] . " " . $row["LName"]; ?>  </h3>
        <h3 >Email: <?php echo $row["Email"]; ?></h3>
        <h3 >Contact Number: <?php echo $row["Phone"]; ?></h3>
        <h3 >Address: <?php echo $row["Address"]; ?></h3>

        <form name="editpersonal" method="POST" action="edit-personal-data.php">
          <input name="edit" type="submit" value="Edit" class="edit_butt" onclick="edits()">
        </form>

      </div>

      <script>
        function edits() {
          var result = confirm('Are you sure?');
          if (result === false) {
            event.preventDefault();
          }
        }
      </script>

   </div>
  </body>
</html>
<?php $connection->close()?>