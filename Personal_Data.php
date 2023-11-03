<?php

include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:Login.php');
}

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $nicNumber = $_POST['nicNumber'];

    $sql = "insert in to 'personald'(firstName, lastName, email, phoneNumber, address, nicNumber)
      values('$firstName', '$firstName' ,'$email', '$phoneNumber' , '$address', '$nicNumber')";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        die(mysqli_error($connection));
    }
}
?>

<!DOCTYPE html>
<html lang= "en" dir ="ltr">
 <head>
    <meta charset="UTF-8">
     <title> hiru </title>
       <link rel="stylesheet" href="css/jobseeker_style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <!-- Top menu bar -->
     <ul>
     <li><a href="Reg_home.php">Home</a></li>
    <li><a href="Job_seeker.php">Jobs</a></li>
    <li><a href="#Add link">About</a></li>
    <li><a href="#Add link">Contact</a></li>
    <li><a href="#Add link">Help</a></li>
    <div class="dropdown" style="float:right;">
    <button class="dropbtn"><?php echo $_SESSION['user_name'] ?></button>
    <div class="dropdown-content">
    <a href="#">Dashboard</a>
    <a href="#">Setting</a>
    <a onclick="checker()" href="logout.php" class="btn">logout</a>

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




     <!-- Side navigation -->
     <div class="sidenav">
     <a href="job_seeker_dashbord.php">Dashboard</a>
        <a href="Personal_Data.php">Personal Data</a>
        <a href="educational data.php">Educational Data</a>
        <a href="Profisional Data.php">professional Data</a>
    </div>

    <!--bottom bar-->

  <div class="topnav">
    <a href="#home">User Agreement</a>
    <a href="#news">Brand Policy</a>
    <a href="#contact">Copyright policy</a>
    <a href="#contact">Privacy policy</a>
  </div>



     <div class="container">
        <div class="title"> Personal Details </div>
        <form method="post">
            <div class="user-details">

                <img src="img/ppppp.jpg " width="200px" height="150px" onclick="onClick(this)" alt="Concrete meets bricks">

                <div class="name"> User Name</div>

                <div class="input-box">
                    <span class="details">First Name :</span>
                    <input type="text" placeholder="Enter your Frist name" required  name="firstName">
                </div>
                <div class="input-box">
                    <span class="details">Last Name :</span>
                    <input type="text" placeholder="Enter your Last name" required  name="lastName">
                </div>
                <div class="input-box">
                    <span class="details">Email :</span>
                    <input type="text" placeholder="Enter your Email" required  name="email">
                </div>
                <div class="input-box">
                    <span class="details">Phone number :</span>
                    <input type="text" placeholder="Enter your Phone number" required  name="phoneNumber">
                </div>
                <div class="input-box">
                    <span class="details">Address :</span>
                    <input type="text" placeholder="Enter your Address" required  name="address">
                </div>
                <div class="input-box">
                    <span class="details">NIC Number :</span>
                    <input type="text" placeholder="Enter your NIC Number" required  name="nicNumber">
                </div>

                <div class="gender">
                    <label for="gender">gender :</label>
                    <select id ="gender">
                       <option value ="subGrade">Male</option>
                       <option value ="subGrade">Female</option>

                    </select>
                  </div>

             </div>
            </form>
        </div>


</body>
</html>



