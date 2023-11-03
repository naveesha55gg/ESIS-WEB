<?php require 'config.php';
session_start();
?>
<!-- menu bar -->
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/customer_support.css" >
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

$select = "SELECT c.CName, s.Message, s.CcsID FROM company_customer_support s, company c where s.CID=c.CID ";

$result_set = $connection->query($select);

if ($result_set->num_rows>0) {

    while ($row = $result_set->fetch_assoc()) {
        ?>
			<div class="scrollist">
        <div class="text_styles">

          <h2><?php echo $row["CName"]; ?></h2>
          <p><?php echo $row["Message"]; ?></p>

          <div>


          </div class="button">
            <form class="button" method="POST" action="company_support_reply.php">
            <input type="hidden" name="company_name" value='<?php echo $row["CName"]; ?>' >
            <input type="hidden" name="message" value='<?php echo $row["Message"]; ?>' >
            <input type="hidden" name="COOID" value="value='<?php echo $row["CcsID"]; ?>" >
            <input type="submit" value="Reply" name="Reply" >
            </form>

            <form class="button" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <input type="hidden" name="COID" value='<?php echo $row["CcsID"]; ?>' >
            <input type="submit" value="Delete" name="delete" onclick="edits()" >
            </form>
          </div>  
      </div>
      <?php
  }

}
else{
  echo "no result";
}
?>

<?php
  
  if(isset($_POST["delete"])){

    $ID= $_POST["COID"];

    $del = " DELETE FROM company_customer_support WHERE CcsID = $ID";

  
    if(!($connection->query($del))){
      echo $connection->error();

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


<?php $connection->close(); ?>