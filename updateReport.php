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
$result = mysqli_query($conn, "SELECT * FROM report where id =" . $_GET["id"]);

while ($row = mysqli_fetch_array($result)) {
    ?>

        <div class="bgform">
            <form action="deletereport.php" method="post">
                <div>
                    <label for="id">ID</label>
                    <input type="text" id="id" name="id" value="<?php echo $row["id"]; ?>" />
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>" />
                </div>
                <div>
                    <label for="Email">Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $row["email"]; ?>" />
                </div>
                <div>
                    <label for="job_title">Job Title</label>
                    <input type="text" id="job_title" name="job_title" value="<?php echo $row["jobtitle"]; ?>" />
                </div>

                <div>
                    <label for="work_experience">Work Experience</label>
                    <textarea id="work_experience" name="work_experience"  ><?php echo $row["workexperience"]; ?></textarea>
                </div>
                <div>
                    <label for="education_information">Education Information</label>
                    <textarea id="education-information" name="education_information" ><?php echo $row["eduinformation"]; ?></textarea>
                </div>
                <div>
                    <label for="other">Others</label>
                    <textarea id="other" name="other" ><?php echo $row["others"]; ?></textarea>
                </div>
                <button type="submit" name="update">UPDATE</button>
            </form>
        </div>
    </body>
    <?php
}
include 'bottomBar.html';
?>

</html>