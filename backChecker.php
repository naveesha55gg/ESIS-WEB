<?php
include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

include 'topBar.html';
include 'sideBar.html';

?>

<html>

<head>
  <link rel="stylesheet" href="css/info.css">
  <link rel="stylesheet" href="css/topbar.css">
  <link rel="stylesheet" href="css/bottom.css">
  <link rel="stylesheet" href="css/sidebar.css">

</head>

<body>
  <?php

$result = mysqli_query($connection, "SELECT * FROM background_cheker where BcID ='" . $_GET["id"] . "'");

while ($row = mysqli_fetch_array($result)) {
    ?>;

    <div class="bgform">
      <form action="delete.php" method="post">
        <div>
          <label for="id">ID</label>
          <input type="text" id="id" name="id" value="<?php echo $row["BcID"]; ?>" placeholder="enter job Title" />
        </div>
        <div>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" value="<?php echo $row["FName"]; ?>" placeholder="enter job Title" />
        </div>
        <div>
          <label for="Email">Email</label>
          <input type="text" id="email" name="email" value="<?php echo $row["Email"]; ?>" placeholder="enter job Title" />
        </div>
        <div>
          <label for="job_title">Job Title</label>
          <input type="text" id="job_title" name="job_title" placeholder="enter job Title" />
        </div>
        <div>
          <label for="work_experience">Work Experience</label>
          <textarea id="work_experience" name="work_experience"></textarea>
        </div>
        <div>
          <label for="education_information">Education Information</label>
          <textarea id="education_information" name="education_information"></textarea>
        </div>
        <div>
          <label for="other">Others</label>
          <textarea id="other" name="other"></textarea>
        </div>
        <button type="submit" name="save">Submit</button>
      </form>
    </div>
  </body>
  <?php
}
include 'bottomBar.html';

?>

</html>