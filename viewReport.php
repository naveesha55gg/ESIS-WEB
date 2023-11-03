<?php

include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

include 'topBar.html';
include 'sideBar.html';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Data</title>
    <link rel="stylesheet" href="css/back_requests.css">
    <link rel="stylesheet" href="css/topbar.css">
  <link rel="stylesheet" href="css/bottom.css">
  <link rel="stylesheet" href="css/sidebar.css">
    <script language="JavaScript" type="text/javascript">
        function checkDelete(){
            return confirm('Are you want to delete?');
        }
</script>
</head>

<body>
    <div class="container">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">

            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Job title</th>
                        <th>Work experience</th>
                        <th>Education information</th>
                        <th>Others</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
$result = mysqli_query($connection, "SELECT * FROM report");
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    ?>
                            <tr id="<?php echo $row["id"]; ?>">
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row["name"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["email"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["jobtitle"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["workexperience"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["eduinformation"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["others"]; ?>
                                </td>

                                <td>
                                    <button class="edit"><a class="edit" href="updatereport.php?id=<?php echo $row["id"]; ?>">Update</a></button>
                                    <button class="delete"><a onclick="return checkDelete()" class="delete" href="deletereport.php?deleteid=<?php echo $row["id"]; ?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php
$i++;
}
?>
                </tbody>
            </table>


        </div>
    </div>

</body>
<?php
include 'bottomBar.html';
?>


</html>