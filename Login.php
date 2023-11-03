<?php

include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($connection, $_POST['Name']);
    $email = mysqli_real_escape_string($connection, $_POST['Email']);
    $pass = mysqli_real_escape_string($connection, $_POST['Password']);
    $cpass = mysqli_real_escape_string($connection, $_POST['cPassword']);
    $user_type = $_POST['user_Type'];

    $select = " SELECT * FROM account WHERE Email = '$email' && Password = '$pass' ";

    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_Type'] == 'job_Seeker') {

            $_SESSION['user_name'] = $row['Name'];
            $_SESSION['user_ID'] = $row['UserID'];
            header('location:Reg_Home.php');

        }if ($row['user_Type'] == 'company') {

            $_SESSION['user_name'] = $row['Name'];
            $_SESSION['user_ID'] = $row['UserID'];
            header('location:Company_Dashbord.php');

        }if ($row['user_Type'] == 'staff') {

            $_SESSION['user_name'] = $row['Name'];
            $_SESSION['user_ID'] = $row['UserID'];
            header('location:dashboard.php');

        }if ($row['user_Type'] == 'Background_Cheker') {

            $_SESSION['user_name'] = $row['Name'];
            $_SESSION['user_ID'] = $row['UserID'];
            header('location:bccheckreqs.php');

        }

    } else {
        $error[] = 'incorrect email or password!';
    }

}
;
?>


<!DOCTYPE html>
<html>

<head>

<title>Job Selling Website</title>
<!-- custom css file link  -->

  <link rel="stylesheet" href="style(main).css">

  <style>

  </style>
</head>

<body>

<!--top bar-->

  <ul>
    <li><a href="Home.php">Home</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="Contact.php">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <li style="float:right"><a class="active" href="Login.php">Login</a></li>
    </div>
    </div>

  </ul>

<!--main Form-->

  <div class="form-container">

    <form action="" method="post">
      <h3>login now</h3>
      <?php
if (isset($error)) {
    foreach ($error as $error) {
        echo '<span class="error-msg">' . $error . '</span>';
    }
    ;
}
;
?>
      <input type="Email" name="Email" required placeholder="Enter your email">
      <input type="Password" name="Password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
    </form>

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