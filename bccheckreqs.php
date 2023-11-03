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
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
$result = mysqli_query($connection, "SELECT * FROM background_cheker");
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    ?>
                            <tr id="<?php echo $row["BcID"]; ?>">
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row["FName"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["LName"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["Email"]; ?>
                                </td>
                                <td>
                                    <button class="edit"><a class="edit" href="backChecker.php?id=<?php echo $row["BcID"]; ?>">Accept</a></button>
                                    <button class="delete"><a onclick="return checkDelete()" class="delete" href="delete.php?deleteid=<?php echo $row["BcID"]; ?>">Delete</a></button>
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
include '../common/bottombar/bottomBar.html';
?>


</html>