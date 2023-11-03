<?php
require 'config.php';
session_start();

if (isset($_POST['edit'])) {
    ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/edit-personal.css ">
    </head>

    <body>

    <div class="formm">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " >

        <h1 style="margin-left:90px">Edit Profile Details</h1>

            <table>
                <tr>
                    <td>First name</td>
                    <td><input type="text" name="firstname"></td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td><input type="text" name="Lname"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Contact number</td>
                    <td><input type="tel" name="phone"></td>
                </tr>
            </table>

            <input type="submit" name="update" value="Update" class="button">

        </form>


    </div>

    </body>
</html>




<?php
}
?>

<?php

if (isset($_POST["update"])) {

    $firstname = $_POST["firstname"];
    $Lname = $_POST["Lname"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $queryy = "UPDATE recruiter SET FName='$firstname', LName='$Lname',  Email='$email', Address= '$address' WHERE UserID= {$_SESSION['user_ID']}";
    $RUNS = $connection->query($queryy);

    if (isset($RUNS)) {
        header('location:dashboard.php');

    } else {
        $connection->error;
    }

    $connection->close();

}

?>